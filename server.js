require('dotenv').config();
const express = require('express');
const cors = require('cors');
const bcrypt = require('bcryptjs');
const jwt = require('jsonwebtoken');
const { GoogleGenAI } = require('@google/genai');
const db = require('./db');

const app = express();
const PORT = process.env.PORT || 5000;
const JWT_SECRET = process.env.JWT_SECRET || 'viettour_secret_key_2026';

// Middleware
app.use(cors());
app.use(express.json());

// Khởi tạo Gemini AI SDK (nếu có key)
const ai = new GoogleGenAI({ apiKey: process.env.GEMINI_API_KEY || 'fake_key' });

// 1. Kiểm tra trạng thái máy chủ
app.get('/', (req, res) => {
  res.send('🚀 Máy chủ VietTour API đang chạy ổn định!');
});

// 2. API Đăng ký tài khoản (An toàn với cả DB có hoặc chưa có cột phone)
app.post('/api/auth/register', async (req, res) => {
  const { full_name, email, password, phone } = req.body;

  if (!full_name || !email || !password) {
    return res.status(400).json({ success: false, message: 'Vui lòng nhập họ tên, email và mật khẩu.' });
  }

  try {
    const [existing] = await db.query('SELECT id FROM users WHERE email = ?', [email]);
    if (existing.length > 0) {
      return res.status(400).json({ success: false, message: 'Email này đã tồn tại trong hệ thống.' });
    }

    const salt = await bcrypt.genSalt(10);
    const hashedPassword = await bcrypt.hash(password, salt);

    // Thử insert có phone, nếu DB chưa có cột phone thì tự động fallback insert không phone
    try {
      await db.query(
        'INSERT INTO users (full_name, email, password, phone, role) VALUES (?, ?, ?, ?, ?)',
        [full_name, email, hashedPassword, phone || null, 'customer']
      );
    } catch (dbErr) {
      if (dbErr.code === 'ER_BAD_FIELD_ERROR') {
        await db.query(
          'INSERT INTO users (full_name, email, password, role) VALUES (?, ?, ?, ?)',
          [full_name, email, hashedPassword, 'customer']
        );
      } else {
        throw dbErr;
      }
    }

    res.status(201).json({ success: true, message: 'Đăng ký tài khoản thành công!' });
  } catch (error) {
    console.error('Lỗi đăng ký:', error);
    res.status(500).json({ success: false, message: 'Lỗi hệ thống khi đăng ký.' });
  }
});

// 3. API Đăng nhập
app.post('/api/auth/login', async (req, res) => {
  const { email, password } = req.body;

  if (!email || !password) {
    return res.status(400).json({ success: false, message: 'Vui lòng nhập đầy đủ email và mật khẩu.' });
  }

  try {
    const [users] = await db.query('SELECT * FROM users WHERE email = ?', [email]);
    if (users.length === 0) {
      return res.status(400).json({ success: false, message: 'Email hoặc mật khẩu không chính xác.' });
    }

    const user = users[0];
    const isMatch = await bcrypt.compare(password, user.password);
    if (!isMatch) {
      return res.status(400).json({ success: false, message: 'Email hoặc mật khẩu không chính xác.' });
    }

    const token = jwt.sign(
      { id: user.id, email: user.email, role: user.role },
      JWT_SECRET,
      { expiresIn: '2d' }
    );

    res.json({
      success: true,
      message: 'Đăng nhập thành công!',
      token,
      user: {
        id: user.id,
        full_name: user.full_name,
        email: user.email,
        role: user.role
      }
    });
  } catch (error) {
    console.error('Lỗi đăng nhập:', error);
    res.status(500).json({ success: false, message: 'Lỗi hệ thống khi đăng nhập.' });
  }
});

// 4. API Lấy danh sách Tours từ MySQL
app.get('/api/tours', async (req, res) => {
  try {
    const query = `
      SELECT 
        t.id, t.title, t.duration_days, t.price, t.itinerary_details,
        d.name AS destination_name, d.city, d.image_url, d.audio_guide_script
      FROM tours t
      LEFT JOIN destinations d ON t.destination_id = d.id
    `;
    const [tours] = await db.query(query);
    res.json({ success: true, data: tours });
  } catch (error) {
    console.error('Lỗi lấy danh sách tour:', error);
    res.status(500).json({ success: false, message: 'Lỗi truy vấn CSDL' });
  }
});

// 5. API Tạo lịch trình với AI (Dự phòng thông minh)
app.post('/api/ai/plan-itinerary', async (req, res) => {
  const { city, days, budget, travel_style } = req.body;

  if (!city || !days) {
    return res.status(400).json({ success: false, message: 'Vui lòng nhập điểm đến và số ngày.' });
  }

  try {
    const prompt = `Bạn là hướng dẫn viên du lịch chuyên nghiệp. Lập kế hoạch du lịch ${days} ngày tại ${city}, ngân sách ${budget}, phong cách ${travel_style}.`;
    const response = await ai.models.generateContent({
      model: 'gemini-2.5-flash',
      contents: prompt,
    });

    return res.json({ success: true, itinerary: response.text });
  } catch (error) {
    console.warn('Google API chưa sẵn sàng, kích hoạt gợi ý lịch trình VietTour...');
  }

  // Khung lịch trình dự phòng tự động
  const fallbackItinerary = `🌟 LỊCH TRÌNH DU LỊCH ${city.toUpperCase()} (${days} NGÀY)
• Phong cách trải nghiệm: ${travel_style || 'Khám phá văn hóa & ẩm thực'}
• Mức ngân sách: ${budget || 'Tiêu chuẩn'}

📅 NGÀY 1: ĐÓN CHUYẾN BAY/XE & CHECK-IN BIỂU TƯỢNG
- Buổi sáng: Đến ${city}, nhận phòng khách sạn, thưởng thức đặc sản điểm tâm sáng.
- Buổi chiều: Tham quan các địa danh trung tâm, danh thắng tiêu biểu tại địa phương.
- Buổi tối: Thưởng thức ẩm thực đường phố tại chợ đêm và ngắm cảnh đêm.

📅 NGÀY 2: TRẢI NGHIỆM VĂN HÓA VÀ THIÊN NHIÊN
- Buổi sáng: Đón bình minh, tham quan các làng nghề truyền thống hoặc di tích lịch sử.
- Buổi chiều: Khám phá cảnh quan thiên nhiên đặc sắc, tham gia các hoạt động ngoài trời.
- Buổi tối: Dùng bữa tối ẩm thực bản địa và thư giãn tại quán cà phê view đẹp.

${days >= 3 ? `📅 TỪ NGÀY 3 TRỞ ĐI: MUA SẮM ĐẶC SẢN & KẾT THÚC HÀNH TRÌNH
- Buổi sáng: Thong thả dạo chợ truyền thống chọn quà lưu niệm và đặc sản địa phương.
- Buổi chiều: Check-out khách sạn, di chuyển ra bến xe/sân bay hoàn thành chuyến đi.` : ''}

💡 Mẹo VietTour: Nên đặt trước vé tham quan và giữ gìn các tư trang quan trọng.`;

  res.json({ success: true, itinerary: fallbackItinerary });
});

// Khởi động server
app.listen(PORT, () => {
  console.log(`📡 Server đang chạy liên tục tại: http://localhost:${PORT}`);
});