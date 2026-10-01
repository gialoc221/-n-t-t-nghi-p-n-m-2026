<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đặc sản Miền Trung - VIETNAM TRAVEL</title>
  
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@1,600;1,700&display=swap" rel="stylesheet">
  
  <style>
    body { font-family: 'Plus_Jakarta_Sans', sans-serif; scroll-behavior: smooth; }
    .font-script { font-family: 'Playfair Display', serif; }
  </style>
</head>
<body class="bg-[#f3f4f6] text-slate-800 antialiased text-[14px]">

  <!-- HEADER -->
  <header class="bg-white border-b border-slate-200/80 sticky top-0 z-50">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 h-14 flex items-center justify-between">
      <a href="index.php" class="flex items-center gap-3 hover:opacity-80 transition">
        <div class="w-9 h-9 rounded-full bg-gradient-to-tr from-amber-500 via-rose-500 to-sky-500 flex items-center justify-center text-white shadow-sm">
          <i class="fa-solid fa-umbrella-beach text-base"></i>
        </div>
        <div class="leading-tight">
          <span class="font-extrabold text-[15px] tracking-wide text-slate-900 block">VIETNAM TRAVEL</span>
          <span class="text-[9px] text-slate-500 block uppercase tracking-wider">Khám phá Việt Nam</span>
        </div>
      </a>

      <div class="flex items-center gap-3">
        <button id="auth-btn" class="bg-[#1e40af] hover:bg-blue-800 text-white font-medium text-xs px-4 py-1.5 rounded-full flex items-center gap-1.5 shadow-sm transition">
          <i class="fa-regular fa-user"></i> <span>Đăng nhập</span>
        </button>
      </div>
    </div>
  </header>

  <main class="max-w-[1000px] mx-auto px-4 sm:px-6 py-8">
    
    <!-- NÚT QUAY LẠI -->
    <a href="index.php" class="inline-flex items-center gap-2 text-slate-500 hover:text-blue-600 font-semibold mb-6 transition text-[13px]">
      <i class="fa-solid fa-arrow-left"></i> Quay lại trang chủ
    </a>

    <!-- ẢNH BÌA BÀI VIẾT -->
    <div class="w-full h-[350px] sm:h-[450px] rounded-3xl bg-cover bg-center relative overflow-hidden shadow-lg mb-8" style="background-image: url('https://images.unsplash.com/photo-1503764654157-724d271926fb?auto=format&fit=crop&w=1200&q=80');">
      <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent flex items-end p-8 sm:p-12">
        <div>
          <span class="px-3 py-1.5 bg-amber-500 text-white text-[11px] font-bold rounded-full mb-3 inline-flex items-center gap-1.5 uppercase tracking-wider">
            <i class="fa-solid fa-pepper-hot"></i> Đặc sản 3 miền
          </span>
          <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-3">🌶️ Đặc sản Miền Trung</h1>
          <p class="text-slate-200 text-sm font-medium max-w-2xl leading-relaxed">
            Hương vị đậm đà, cay nồng và cầu kỳ. Nơi giao thoa giữa ẩm thực Cung đình Huế quý phái và ẩm thực dân dã miền biển đầy hào sảng.
          </p>
        </div>
      </div>
    </div>

    <!-- NỘI DUNG BÀI VIẾT -->
    <div class="bg-white rounded-3xl p-6 sm:p-12 shadow-sm border border-slate-100">
      <div class="max-w-none text-slate-600 space-y-8 leading-loose text-justify">
        
        <!-- MỞ ĐẦU -->
        <p class="text-[15px] font-medium text-slate-800 bg-amber-50/60 p-5 rounded-2xl border-l-4 border-amber-500">
          Khí hậu khắc nghiệt, nắng gió quanh năm đã tạo nên nét cá tính rất riêng cho ẩm thực miền Trung: đậm đà, cay nồng và sắc sảo. Ớt, tiêu, sả, mắm ruốc là những gia vị không thể thiếu để xua tan cái lạnh giá của mùa mưa bão miền biển. Bên cạnh đó, di sản triều Nguyễn còn để lại cho miền Trung phong cách ẩm thực cung đình tỉ mỉ, cầu kỳ cả về hương vị lẫn cách bày biện nghệ thuật.
        </p>
        
        <!-- MỤC 1: CÁC MÓN NGON TIÊU BIỂU -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🍲</span> 1. Các món ngon nức tiếng miền Trung theo tỉnh thành</h2>
          <p class="mb-4">Những món ăn đậm đà khiến bất kỳ ai một lần thưởng thức cũng nhớ mãi không quên:</p>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col justify-between">
              <div>
                <div class="flex items-center justify-between mb-1.5">
                  <span class="text-[10px] bg-purple-100 text-purple-800 font-extrabold px-2 py-0.5 rounded-full uppercase">Thừa Thiên Huế</span>
                  <span class="text-[10px] text-slate-400">Ẩm thực cố đô</span>
                </div>
                <h4 class="font-bold text-slate-800 text-sm mb-1 text-amber-800 flex items-center gap-2">
                  <i class="fa-solid fa-bowl-food"></i> Bún bò Huế
                </h4>
                <p class="text-xs text-slate-600 leading-relaxed">
                  Sợi bún to tròn mềm mượt, khoanh bắp bò mềm ngậy, chả cua giòn ngọt, giò heo béo bùi. Nước dùng hầm từ xương bò và sả cây, thơm lừng hương mắm ruốc Huế đặc trưng và ớt màu đỏ óng ánh, ăn kèm bắp chuối thái mỏng và rau thơm.
                </p>
              </div>
              <span class="text-[10px] text-amber-700 font-semibold mt-2">Quán gợi ý: Bún bò Mụ Rơi, Bún bò Bà Tuyết, Bún bò Cẩm</span>
            </div>

            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col justify-between">
              <div>
                <div class="flex items-center justify-between mb-1.5">
                  <span class="text-[10px] bg-sky-100 text-sky-800 font-extrabold px-2 py-0.5 rounded-full uppercase">Đà Nẵng & Quảng Nam</span>
                  <span class="text-[10px] text-slate-400">Món ngon xứ Quảng</span>
                </div>
                <h4 class="font-bold text-slate-800 text-sm mb-1 text-amber-800 flex items-center gap-2">
                  <i class="fa-solid fa-utensils"></i> Mì Quảng
                </h4>
                <p class="text-xs text-slate-600 leading-relaxed">
                  Sợi mì vàng óng nghệ hoặc trắng ngần, nhưn tôm thịt, ếch hoặc gà ta kho đậm đà, nước dùng chan chỉ xăm xắp mặt mì. Thêm đậu phộng rang giã dập, bánh tráng mè nướng giòn rụm và đĩa rau sống búp chuối, cải non tạo nên sự bùng nổ vị giác.
                </p>
              </div>
              <span class="text-[10px] text-amber-700 font-semibold mt-2">Quán gợi ý: Mì Quảng Bà Mua (Đà Nẵng), Mì Quảng Bích, Mì Quảng Ếch Bếp Trang</span>
            </div>

            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col justify-between">
              <div>
                <div class="flex items-center justify-between mb-1.5">
                  <span class="text-[10px] bg-amber-100 text-amber-800 font-extrabold px-2 py-0.5 rounded-full uppercase">Quảng Nam (Hội An)</span>
                  <span class="text-[10px] text-slate-400">Phố cổ hoài niệm</span>
                </div>
                <h4 class="font-bold text-slate-800 text-sm mb-1 text-amber-800 flex items-center gap-2">
                  <i class="fa-solid fa-store"></i> Cao lầu Hội An
                </h4>
                <p class="text-xs text-slate-600 leading-relaxed">
                  Món ăn độc nhất vô nhị chỉ có ở phố cổ Hội An! Sợi mì phải ngâm bằng nước tro củi Cù Lao Chàm và nước giếng cổ Bá Lễ, ăn kèm thịt xá xíu thái mỏng ngấm vị ngũ vị hương, da heo chiên giòn tan và rau sống Trà Quế thơm lừng.
                </p>
              </div>
              <span class="text-[10px] text-amber-700 font-semibold mt-2">Quán gợi ý: Cao lầu Thanh, Cao lầu Bà Bé, Cao lầu Trung Bắc</span>
            </div>

            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col justify-between">
              <div>
                <div class="flex items-center justify-between mb-1.5">
                  <span class="text-[10px] bg-purple-100 text-purple-800 font-extrabold px-2 py-0.5 rounded-full uppercase">Thừa Thiên Huế</span>
                  <span class="text-[10px] text-slate-400">Mỹ vị dân dã</span>
                </div>
                <h4 class="font-bold text-slate-800 text-sm mb-1 text-amber-800 flex items-center gap-2">
                  <i class="fa-solid fa-circle-dot"></i> Bánh bèo, bánh nậm, bánh bột lọc Huế
                </h4>
                <p class="text-xs text-slate-600 leading-relaxed">
                  Bánh bèo mỏng tang đựng trong chén nhỏ rắc tôm chấy và tóp mỡ giòn; bánh nậm gói lá chuối thơm ngát hương bột gạo bọc tôm thịt; bánh lọc trong veo thấy rõ con tôm đỏ au bên trong dai giòn sần sật, chấm nước mắm ớt xanh cay xé lưỡi.
                </p>
              </div>
              <span class="text-[10px] text-amber-700 font-semibold mt-2">Quán gợi ý: Quán Hạnh (Huế), Quán Bà Đỏ, Quán Chi</span>
            </div>
          </div>
        </div>

        <!-- MỤC 2: BẢN ĐỒ ĐẶC SẢN THEO TỈNH THÀNH MIỀN TRUNG -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">📍</span> 2. Danh bạ đặc sản theo từng tỉnh thành Miền Trung</h2>
          <p class="mb-3">Khám phá các món ăn đặc trưng phân theo từng tỉnh thành duyên hải và cố đô:</p>
          
          <div class="space-y-3 my-4">
            <div class="p-3.5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
              <div class="flex items-center gap-2.5">
                <span class="w-8 h-8 rounded-lg bg-purple-600 text-white font-bold flex items-center justify-center text-xs shrink-0">HUE</span>
                <div>
                  <h5 class="font-bold text-slate-800 text-xs">Thừa Thiên Huế</h5>
                  <p class="text-[11px] text-slate-500">Bún bò Huế, Cơm hến cồn Hến, Bánh bèo - nậm - lọc, Mè xửng Huế, Trà Cung Đình, Mắm tôm chua, Chè heo quay</p>
                </div>
              </div>
              <span class="text-[10px] text-purple-700 font-semibold whitespace-nowrap bg-purple-50 px-2 py-1 rounded-full border border-purple-100">Cố đô cung đình</span>
            </div>

            <div class="p-3.5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
              <div class="flex items-center gap-2.5">
                <span class="w-8 h-8 rounded-lg bg-sky-600 text-white font-bold flex items-center justify-center text-xs shrink-0">ĐN</span>
                <div>
                  <h5 class="font-bold text-slate-800 text-xs">Đà Nẵng</h5>
                  <p class="text-[11px] text-slate-500">Mì Quảng ếch, Bánh tráng cuốn thịt heo hai đầu da, Chả bò Đà Nẵng, Bún chả cá, Gỏi cá Nam Ô</p>
                </div>
              </div>
              <span class="text-[10px] text-sky-700 font-semibold whitespace-nowrap bg-sky-50 px-2 py-1 rounded-full border border-sky-100">Thành phố đáng sống</span>
            </div>

            <div class="p-3.5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
              <div class="flex items-center gap-2.5">
                <span class="w-8 h-8 rounded-lg bg-amber-600 text-white font-bold flex items-center justify-center text-xs shrink-0">QN</span>
                <div>
                  <h5 class="font-bold text-slate-800 text-xs">Quảng Nam (Hội An)</h5>
                  <p class="text-[11px] text-slate-500">Cao lầu Hội An, Cơm gà Tam Kỳ, Bê thui Cầu Mống, Bánh tổ, Bánh đập hến xào Cẩm Nam</p>
                </div>
              </div>
              <span class="text-[10px] text-amber-700 font-semibold whitespace-nowrap bg-amber-50 px-2 py-1 rounded-full border border-amber-100">Phố cổ hoa vàng</span>
            </div>

            <div class="p-3.5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
              <div class="flex items-center gap-2.5">
                <span class="w-8 h-8 rounded-lg bg-emerald-600 text-white font-bold flex items-center justify-center text-xs shrink-0">BĐ</span>
                <div>
                  <h5 class="font-bold text-slate-800 text-xs">Bình Định (Quy Nhơn)</h5>
                  <p class="text-[11px] text-slate-500">Bánh xèo tôm nhảy, Nem Chợ Huyện, Tré rơm Bình Định, Bún chả cá Quy Nhơn, Rượu Bàu Đá trứ danh</p>
                </div>
              </div>
              <span class="text-[10px] text-emerald-700 font-semibold whitespace-nowrap bg-emerald-50 px-2 py-1 rounded-full border border-emerald-100">Đất võ xứ Nẫu</span>
            </div>

            <div class="p-3.5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
              <div class="flex items-center gap-2.5">
                <span class="w-8 h-8 rounded-lg bg-rose-500 text-white font-bold flex items-center justify-center text-xs shrink-0">PY</span>
                <div>
                  <h5 class="font-bold text-slate-800 text-xs">Phú Yên & Quảng Ngãi</h5>
                  <p class="text-[11px] text-slate-500">Mắt cá ngừ đại dương Phú Yên, Bánh hỏi lòng heo, Bò một nắng muối kiến vàng, Tỏi cô đơn Lý Sơn, Don sông Trà</p>
                </div>
              </div>
              <span class="text-[10px] text-rose-700 font-semibold whitespace-nowrap bg-rose-50 px-2 py-1 rounded-full border border-rose-100">Hoa vàng cỏ xanh</span>
            </div>

            <div class="p-3.5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
              <div class="flex items-center gap-2.5">
                <span class="w-8 h-8 rounded-lg bg-blue-500 text-white font-bold flex items-center justify-center text-xs shrink-0">KH</span>
                <div>
                  <h5 class="font-bold text-slate-800 text-xs">Khánh Hòa (Nha Trang) & Bình Thuận</h5>
                  <p class="text-[11px] text-slate-500">Nem nướng Ninh Hòa, Bún sứa Nha Trang, Yến sào Khánh Hòa, Mực một nắng Phan Thiết, Nước mắm cá cơm</p>
                </div>
              </div>
              <span class="text-[10px] text-blue-700 font-semibold whitespace-nowrap bg-blue-50 px-2 py-1 rounded-full border border-blue-100">Vịnh biển & Đồi cát</span>
            </div>

            <div class="p-3.5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
              <div class="flex items-center gap-2.5">
                <span class="w-8 h-8 rounded-lg bg-teal-600 text-white font-bold flex items-center justify-center text-xs shrink-0">LĐ</span>
                <div>
                  <h5 class="font-bold text-slate-800 text-xs">Lâm Đồng (Đà Lạt - Tây Nguyên)</h5>
                  <p class="text-[11px] text-slate-500">Bánh tráng nướng Đà Lạt, Lẩu gà lá é, Hồng giòn treo gió, Kem bơ, Cà phê Robusta Buôn Ma Thuột</p>
                </div>
              </div>
              <span class="text-[10px] text-teal-700 font-semibold whitespace-nowrap bg-teal-50 px-2 py-1 rounded-full border border-teal-100">Xứ lạnh ngàn hoa</span>
            </div>
          </div>
        </div>

        <!-- ẢNH MINH HỌA -->
        <div class="rounded-2xl overflow-hidden h-64 bg-cover bg-center my-8 shadow-sm" style="background-image: url('https://images.unsplash.com/photo-1555126634-323283e090fa?auto=format&fit=crop&w=1000&q=80');"></div>

        <!-- MỤC 3: ĐẶC SẢN MUA LÀM QUÀ -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🎁</span> 3. Đặc sản miền Trung mua làm quà ý nghĩa (Theo tỉnh thành)</h2>
          <p class="mb-3">Những món quà thấm đượm phong vị biển cả và tinh hoa cố đô:</p>
          <ul class="list-disc pl-6 space-y-2 text-xs text-slate-600">
            <li><strong>Thừa Thiên Huế:</strong> Kẹo mè xửng giòn dẻo, Trà Cung Đình thảo mộc giải nhiệt bồi bổ, Mắm tôm chua Huế ngâm riềng ớt thơm lừng.</li>
            <li><strong>Đà Nẵng & Quảng Nam:</strong> Chả bò Đà Nẵng ngọt đậm đà vị tiêu hột, Bánh khô mè Cẩm Lệ, Mực rim me cay xè thơm phức.</li>
            <li><strong>Quảng Ngãi:</strong> Tỏi cô đơn Lý Sơn chính hiệu - "vàng trắng" đảo ngọc với hàm lượng tinh dầu quý hiếm, Kẹo gương hạt đậu phộng giòn tan.</li>
            <li><strong>Bình Định:</strong> Tré rơm rơm Bình Định ủ men thơm nồng, Bánh ít lá gai dẻo quánh, Rượu Bàu Đá truyền thống danh tiếng.</li>
            <li><strong>Khánh Hòa & Bình Thuận:</strong> Yến sào hòn Nội thượng hạng, Mực một nắng Phan Thiết dầy mình ngọt đậm, Nước mắm cá cơm 40 độ đạm nguyên chất.</li>
          </ul>
        </div>

        <!-- MỤC TỔNG KẾT -->
        <div class="bg-amber-50/40 rounded-3xl p-6 md:p-8 my-8 border border-amber-100">
          <h2 class="text-2xl font-bold text-slate-900 mb-4 text-center">⭐ Nét đẹp văn hóa ẩm thực miền Trung</h2>
          <p class="text-xs text-slate-600 text-center max-w-xl mx-auto mb-6">
            Mỗi món ăn miền Trung là một tác phẩm chứa đựng sự khéo léo, tinh tế của người phụ nữ, chịu thương chịu khó gửi trọn tình yêu vào từng nêm nếm gia vị đậm đà.
          </p>
          <div class="grid grid-cols-2 md:grid-cols-4 gap-3 text-center">
            <div class="bg-white p-3 rounded-xl shadow-sm border border-amber-100">
              <span class="text-2xl block mb-1">🌶️</span>
              <h6 class="font-bold text-xs text-slate-800">Cay nồng</h6>
              <p class="text-[10px] text-slate-500">Vị ớt tiêu sả ấm áp</p>
            </div>
            <div class="bg-white p-3 rounded-xl shadow-sm border border-amber-100">
              <span class="text-2xl block mb-1">👑</span>
              <h6 class="font-bold text-xs text-slate-800">Cung đình</h6>
              <p class="text-[10px] text-slate-500">Mỹ vị vua chúa xưa</p>
            </div>
            <div class="bg-white p-3 rounded-xl shadow-sm border border-amber-100">
              <span class="text-2xl block mb-1">🦐</span>
              <h6 class="font-bold text-xs text-slate-800">Hải sản</h6>
              <p class="text-[10px] text-slate-500">Tươi rói từ biển khơi</p>
            </div>
            <div class="bg-white p-3 rounded-xl shadow-sm border border-amber-100">
              <span class="text-2xl block mb-1">❤️</span>
              <h6 class="font-bold text-xs text-slate-800">Chân tình</h6>
              <p class="text-[10px] text-slate-500">Đậm đà tình đất & người</p>
            </div>
          </div>
        </div>

        <div class="text-center mt-12 mb-4">
          <h3 class="text-2xl font-extrabold text-slate-900 mb-3">🏮 Ẩm thực miền Trung – Dư vị nồng nàn khó quên</h3>
          <p class="text-slate-600 max-w-2xl mx-auto italic">"Một tô bún bò cay xè bên bờ sông Hương, một dĩa mì Quảng rộn ràng sắc màu phố cổ... tất cả làm nên linh hồn miền Trung kiên cường, nồng ấm và quyến rũ khôn nguôi."</p>
        </div>

      </div>
    </div>
  </main>

  <!-- FOOTER -->
  <footer class="bg-slate-950 text-slate-400 text-xs py-10 border-t border-slate-900 mt-10">
    <div class="text-center text-[11px] text-slate-600">
      © 2026 Vietnam Travel. All rights reserved.
    </div>
  </footer>

  <!-- SCRIPT KIỂM TRA ĐĂNG NHẬP -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const isLoggedIn = localStorage.getItem('isLoggedIn') === 'true';
      const authBtn = document.getElementById('auth-btn');
      
      if (isLoggedIn && authBtn) {
        authBtn.innerHTML = '<i class="fa-solid fa-arrow-right-from-bracket"></i> <span>Đăng xuất</span>';
        authBtn.classList.replace('bg-[#1e40af]', 'bg-rose-600');
        authBtn.classList.replace('hover:bg-blue-800', 'hover:bg-rose-700');
        
        authBtn.addEventListener('click', (e) => {
          e.stopPropagation(); 
          if(confirm('Bạn có chắc chắn muốn đăng xuất khỏi hệ thống?')) {
            localStorage.removeItem('isLoggedIn');
            window.location.reload();
          }
        });
      }
    });

    document.addEventListener('click', function(e) {
      const isLoggedIn = localStorage.getItem('isLoggedIn') === 'true';
      const clickableElement = e.target.closest('a:not([href="index.php"]):not([href="thien_nhien.php"]):not([href="van_hoa.php"]):not([href="am_thuc.php"]):not([href="bien_dao.php"]):not([href="mien_bac.php"]):not([href="mien_trung.php"]):not([href="mien_nam.php"]):not([href="dac_san_mien_bac.php"]):not([href="dac_san_mien_trung.php"]):not([href="dac_san_mien_nam.php"]), button, input, .cursor-pointer');

      if (clickableElement && !isLoggedIn) {
        if(clickableElement.id === 'auth-btn') {
          window.location.href = 'auth.php';
          return;
        }
        e.preventDefault();
        e.stopPropagation();
        window.location.href = 'auth.php';
      }
    }, true); 
  </script>
</body>
</html>
