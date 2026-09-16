const { GoogleGenAI } = require('@google/genai');

// DÁN TRỰC TIẾP CHUỖI KEY VÀO ĐÂY (thay thế chuỗi AIzaSy...)
const MY_KEY = 'AIzaSyD-AQ...dán_key_của_bạn_vào_đây';

console.log("Độ dài key thực tế:", MY_KEY.length);

const ai = new GoogleGenAI({ apiKey: MY_KEY });

async function check() {
  try {
    const response = await ai.models.generateContent({
      model: 'gemini-2.5-flash',
      contents: 'Xin chào',
    });
    console.log("✅ Thành công! Phản hồi từ AI:", response.text);
  } catch (err) {
    console.error("❌ Vẫn lỗi:", err.message);
  }
}

check();