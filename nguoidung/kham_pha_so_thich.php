<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Khám phá theo sở thích - VIETNAM TRAVEL</title>
  
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@1,600;1,700&display=swap" rel="stylesheet">
  
  <style>
    body { font-family: 'Plus Jakarta Sans', sans-serif; scroll-behavior: smooth; }
    .font-script { font-family: 'Playfair Display', serif; }
    .interest-card { transition: all 0.25s ease-in-out; }
    .interest-card:hover { transform: translateY(-3px); }
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

  <main class="max-w-[1100px] mx-auto px-4 sm:px-6 py-8">
    
    <!-- BREADCRUMB / QUAY LẠI -->
    <div class="flex items-center justify-between mb-6">
      <a href="index.php" class="inline-flex items-center gap-2 text-slate-500 hover:text-blue-600 font-semibold transition text-[13px]">
        <i class="fa-solid fa-arrow-left"></i> Quay lại trang chủ
      </a>
      <div class="text-xs text-slate-400">
        Trang chủ / <span class="text-slate-700 font-bold">Khám phá theo sở thích</span>
      </div>
    </div>

    <!-- HERO BANNER -->
    <div class="w-full h-[320px] sm:h-[400px] rounded-3xl bg-cover bg-center relative overflow-hidden shadow-lg mb-8" style="background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1400&q=80');">
      <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/50 to-transparent flex items-end p-6 sm:p-12">
        <div class="max-w-3xl">
          <span class="px-3 py-1 bg-rose-500 text-white text-[11px] font-bold rounded-full mb-3 inline-flex items-center gap-1.5 uppercase tracking-wider">
            <i class="fa-solid fa-heart"></i> Phong cách du lịch
          </span>
          <h1 class="text-3xl sm:text-5xl font-extrabold text-white mb-3">✨ Du Lịch Theo Sở Thích Của Bạn</h1>
          <p class="text-slate-200 text-xs sm:text-sm font-medium leading-relaxed">
            Dù bạn tìm kiếm kỳ nghỉ ngọt ngào bên người thương, chuyến nghỉ dưỡng gia đình nhiều thế hệ, những khung hình check-in triệu view hay hành trình phượt khám phá tối ưu chi phí.
          </p>
        </div>
      </div>
    </div>

    <!-- THANH ĐIỀU HƯỚNG 8 SỞ THÍCH NHANH -->
    <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-100 mb-10">
      <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-3">Chọn phong cách bạn yêu thích:</h3>
      <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-3 text-center">
        <!-- 1. Biển -->
        <a href="bien_dao.php" class="interest-card p-3 rounded-2xl bg-sky-50 hover:bg-sky-100 border border-sky-100 block transition">
          <div class="w-10 h-10 mx-auto rounded-xl bg-sky-500 text-white flex items-center justify-center text-base mb-1.5 shadow-sm">
            <i class="fa-solid fa-water"></i>
          </div>
          <span class="text-xs font-bold text-slate-800 block">Biển đảo</span>
          <span class="text-[10px] text-sky-600 block mt-0.5">Xem bài viết →</span>
        </a>

        <!-- 2. Núi -->
        <a href="thien_nhien.php" class="interest-card p-3 rounded-2xl bg-emerald-50 hover:bg-emerald-100 border border-emerald-100 block transition">
          <div class="w-10 h-10 mx-auto rounded-xl bg-emerald-600 text-white flex items-center justify-center text-base mb-1.5 shadow-sm">
            <i class="fa-solid fa-mountain"></i>
          </div>
          <span class="text-xs font-bold text-slate-800 block">Núi rừng</span>
          <span class="text-[10px] text-emerald-600 block mt-0.5">Xem bài viết →</span>
        </a>

        <!-- 3. Văn hóa -->
        <a href="van_hoa.php" class="interest-card p-3 rounded-2xl bg-amber-50 hover:bg-amber-100 border border-amber-100 block transition">
          <div class="w-10 h-10 mx-auto rounded-xl bg-amber-500 text-white flex items-center justify-center text-base mb-1.5 shadow-sm">
            <i class="fa-solid fa-landmark"></i>
          </div>
          <span class="text-xs font-bold text-slate-800 block">Văn hóa</span>
          <span class="text-[10px] text-amber-600 block mt-0.5">Xem bài viết →</span>
        </a>

        <!-- 4. Ẩm thực -->
        <a href="am_thuc.php" class="interest-card p-3 rounded-2xl bg-orange-50 hover:bg-orange-100 border border-orange-100 block transition">
          <div class="w-10 h-10 mx-auto rounded-xl bg-orange-500 text-white flex items-center justify-center text-base mb-1.5 shadow-sm">
            <i class="fa-solid fa-bowl-rice"></i>
          </div>
          <span class="text-xs font-bold text-slate-800 block">Ẩm thực</span>
          <span class="text-[10px] text-orange-600 block mt-0.5">Xem bài viết →</span>
        </a>

        <!-- 5. Gia đình -->
        <a href="#gia-dinh" onclick="switchThemeTab('gia-dinh')" class="theme-nav-btn interest-card p-3 rounded-2xl bg-rose-50 hover:bg-rose-100 border border-rose-200 block transition">
          <div class="w-10 h-10 mx-auto rounded-xl bg-rose-500 text-white flex items-center justify-center text-base mb-1.5 shadow-sm">
            <i class="fa-solid fa-people-roof"></i>
          </div>
          <span class="text-xs font-bold text-slate-800 block">Gia đình</span>
          <span class="text-[10px] text-rose-600 block mt-0.5">Khám phá ↓</span>
        </a>

        <!-- 6. Cặp đôi -->
        <a href="#cap-doi" onclick="switchThemeTab('cap-doi')" class="theme-nav-btn interest-card p-3 rounded-2xl bg-pink-50 hover:bg-pink-100 border border-pink-200 block transition">
          <div class="w-10 h-10 mx-auto rounded-xl bg-pink-500 text-white flex items-center justify-center text-base mb-1.5 shadow-sm">
            <i class="fa-solid fa-heart"></i>
          </div>
          <span class="text-xs font-bold text-slate-800 block">Cặp đôi</span>
          <span class="text-[10px] text-pink-600 block mt-0.5">Khám phá ↓</span>
        </a>

        <!-- 7. Check-in -->
        <a href="#check-in" onclick="switchThemeTab('check-in')" class="theme-nav-btn interest-card p-3 rounded-2xl bg-purple-50 hover:bg-purple-100 border border-purple-200 block transition">
          <div class="w-10 h-10 mx-auto rounded-xl bg-purple-500 text-white flex items-center justify-center text-base mb-1.5 shadow-sm">
            <i class="fa-solid fa-camera"></i>
          </div>
          <span class="text-xs font-bold text-slate-800 block">Check-in</span>
          <span class="text-[10px] text-purple-600 block mt-0.5">Khám phá ↓</span>
        </a>

        <!-- 8. Tiết kiệm -->
        <a href="#tiet-kiem" onclick="switchThemeTab('tiet-kiem')" class="theme-nav-btn interest-card p-3 rounded-2xl bg-teal-50 hover:bg-teal-100 border border-teal-200 block transition">
          <div class="w-10 h-10 mx-auto rounded-xl bg-teal-500 text-white flex items-center justify-center text-base mb-1.5 shadow-sm">
            <i class="fa-solid fa-wallet"></i>
          </div>
          <span class="text-xs font-bold text-slate-800 block">Tiết kiệm</span>
          <span class="text-[10px] text-teal-600 block mt-0.5">Khám phá ↓</span>
        </a>
      </div>
    </div>

    <!-- ======================================================== -->
    <!-- PHẦN 1: DU LỊCH GIA ĐÌNH -->
    <!-- ======================================================== -->
    <section id="gia-dinh" class="theme-section scroll-mt-20 mb-12">
      <div class="bg-white rounded-3xl p-6 sm:p-10 border border-rose-100 shadow-sm">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-12 h-12 rounded-2xl bg-rose-500 text-white flex items-center justify-center text-xl shadow-md">
            <i class="fa-solid fa-people-roof"></i>
          </div>
          <div class="flex-1 flex flex-wrap items-center justify-between gap-3">
            <div>
              <span class="text-[11px] font-extrabold text-rose-600 uppercase tracking-wider">Phong cách 01</span>
              <h2 class="text-2xl font-extrabold text-slate-900">Du Lịch Gia Đình – Trọn Vẹn Niềm Vui & Tiện Nghi</h2>
            </div>
            <a href="gia_dinh.php" class="px-4 py-2 bg-rose-600 hover:bg-rose-700 text-white rounded-xl text-xs font-bold transition shadow-sm flex items-center gap-1.5">
              Xem cẩm nang chi tiết <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </div>

        <p class="text-slate-600 leading-relaxed mb-6">
          Chuyến đi gắn kết các thế hệ từ ông bà, cha mẹ đến các bạn nhỏ. Tiêu chí hàng đầu là <strong class="text-slate-800">an toàn, di chuyển thuận tiện, khu nghỉ dưỡng đầy đủ tiện ích và đa dạng hoạt động</strong> để mọi thành viên đều có những phút giây thư thái.
        </p>

        <!-- TOP ĐIỂM ĐẾN GIA ĐÌNH -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-8">
          <!-- 1. Phú Quốc -->
          <div class="bg-rose-50/50 p-4 rounded-2xl border border-rose-100 flex flex-col justify-between">
            <div>
              <div class="h-36 rounded-xl bg-cover bg-center mb-3" style="background-image: url('https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=400&q=80');"></div>
              <span class="text-[10px] bg-rose-200 text-rose-800 font-bold px-2 py-0.5 rounded-full uppercase">Kiên Giang</span>
              <h4 class="font-bold text-slate-900 text-base mt-1.5 mb-1">Vinpearl & Safari Phú Quốc</h4>
              <p class="text-xs text-slate-600 leading-relaxed">
                Vườn thú mở bán hoang dã đầu tiên tại Việt Nam, các bé thỏa thích ngắm nhìn hươu cao cổ, hổ Bengal; công viên nước và thủy cung khổng lồ Grand World rực rỡ sắc màu.
              </p>
            </div>
            <div class="mt-3 pt-3 border-t border-rose-100/80 text-[11px] text-rose-700 font-semibold">
              <i class="fa-solid fa-circle-check mr-1"></i> Phù hợp mọi lứa tuổi trẻ nhỏ
            </div>
          </div>

          <!-- 2. Đà Nẵng - Hội An -->
          <div class="bg-rose-50/50 p-4 rounded-2xl border border-rose-100 flex flex-col justify-between">
            <div>
              <div class="h-36 rounded-xl bg-cover bg-center mb-3" style="background-image: url('https://images.unsplash.com/photo-1559592413-7cec4d0cae2b?auto=format&fit=crop&w=400&q=80');"></div>
              <span class="text-[10px] bg-rose-200 text-rose-800 font-bold px-2 py-0.5 rounded-full uppercase">Đà Nẵng & Quảng Nam</span>
              <h4 class="font-bold text-slate-900 text-base mt-1.5 mb-1">Đà Nẵng - Phố Cổ Hội An</h4>
              <p class="text-xs text-slate-600 leading-relaxed">
                Hệ thống resort ven biển bãi cát thoai thoải, đường phố an toàn, ít khói bụi. Cả gia đình có thể tản bộ phố cổ Hội An, đi thuyền thả hoa đăng và xem show thực cảnh Ký ức Hội An.
              </p>
            </div>
            <div class="mt-3 pt-3 border-t border-rose-100/80 text-[11px] text-rose-700 font-semibold">
              <i class="fa-solid fa-circle-check mr-1"></i> Resort 4-5 sao tiện nghi
            </div>
          </div>

          <!-- 3. Hạ Long -->
          <div class="bg-rose-50/50 p-4 rounded-2xl border border-rose-100 flex flex-col justify-between">
            <div>
              <div class="h-36 rounded-xl bg-cover bg-center mb-3" style="background-image: url('https://images.unsplash.com/photo-1528127269322-539801943592?auto=format&fit=crop&w=400&q=80');"></div>
              <span class="text-[10px] bg-rose-200 text-rose-800 font-bold px-2 py-0.5 rounded-full uppercase">Quảng Ninh</span>
              <h4 class="font-bold text-slate-900 text-base mt-1.5 mb-1">Du Thuyền Vịnh Hạ Long</h4>
              <p class="text-xs text-slate-600 leading-relaxed">
                Kỳ nghỉ trên du thuyền 5 sao lướt êm qua vịnh di sản. Ông bà ngắm bình minh trên boong tàu, cha mẹ thưởng thức buffet hải sản cao cấp, các bé trải nghiệm câu mực đêm thú vị.
              </p>
            </div>
            <div class="mt-3 pt-3 border-t border-rose-100/80 text-[11px] text-rose-700 font-semibold">
              <i class="fa-solid fa-circle-check mr-1"></i> Nghỉ dưỡng thư giãn tuyệt đối
            </div>
          </div>
        </div>

        <!-- CẨM NANG GIA ĐÌNH -->
        <div class="p-4 bg-slate-50 rounded-2xl border border-slate-200/80">
          <h4 class="font-bold text-xs uppercase tracking-wider text-slate-700 mb-2 flex items-center gap-1.5">
            <i class="fa-solid fa-lightbulb text-amber-500"></i> Lời khuyên vàng cho chuyến đi gia đình
          </h4>
          <ul class="text-xs text-slate-600 space-y-1.5 list-disc list-inside">
            <li><strong>Lịch trình thong thả:</strong> Tối đa 2-3 điểm tham quan mỗi ngày, dành khoảng nghỉ buổi trưa cho người lớn tuổi và trẻ nhỏ.</li>
            <li><strong>Chọn phòng gia đình hoặc Villa liền kề:</strong> Giúp gia đình gắn kết và có không gian sinh hoạt chung ấm cúng.</li>
            <li><strong>Chuẩn bị thuốc dự phòng:</strong> Thuốc hạ sốt, men tiêu hóa, kem chống muỗi và băng gạc sơ cứu cơ bản.</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- ======================================================== -->
    <!-- PHẦN 2: DU LỊCH CẶP ĐÔI -->
    <!-- ======================================================== -->
    <section id="cap-doi" class="theme-section scroll-mt-20 mb-12">
      <div class="bg-white rounded-3xl p-6 sm:p-10 border border-pink-100 shadow-sm">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-12 h-12 rounded-2xl bg-pink-500 text-white flex items-center justify-center text-xl shadow-md">
            <i class="fa-solid fa-heart"></i>
          </div>
          <div class="flex-1 flex flex-wrap items-center justify-between gap-3">
            <div>
              <span class="text-[11px] font-extrabold text-pink-600 uppercase tracking-wider">Phong cách 02</span>
              <h2 class="text-2xl font-extrabold text-slate-900">Du Lịch Cặp Đôi & Tuần Trăng Mật Lãng Mạn</h2>
            </div>
            <a href="cap_doi.php" class="px-4 py-2 bg-pink-600 hover:bg-pink-700 text-white rounded-xl text-xs font-bold transition shadow-sm flex items-center gap-1.5">
              Xem cẩm nang chi tiết <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </div>

        <p class="text-slate-600 leading-relaxed mb-6">
          Những vùng đất sinh ra để dành cho những lời hẹn ước. Nơi hai bạn cùng nhau đón bình minh trên đồi thông mờ sương, thưởng thức bữa tối nến thơm bên tiếng sóng vỗ và lưu giữ những kỷ niệm tình yêu vĩnh cửu.
        </p>

        <!-- TOP ĐIỂM ĐẾN CẶP ĐÔI -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-8">
          <!-- 1. Đà Lạt -->
          <div class="bg-pink-50/50 p-4 rounded-2xl border border-pink-100 flex flex-col justify-between">
            <div>
              <div class="h-36 rounded-xl bg-cover bg-center mb-3" style="background-image: url('https://images.unsplash.com/photo-1544644181-1484b3fdfc62?auto=format&fit=crop&w=400&q=80');"></div>
              <span class="text-[10px] bg-pink-200 text-pink-800 font-bold px-2 py-0.5 rounded-full uppercase">Lâm Đồng</span>
              <h4 class="font-bold text-slate-900 text-base mt-1.5 mb-1">Đà Lạt – Xứ Sở Ngàn Hoa</h4>
              <p class="text-xs text-slate-600 leading-relaxed">
                Cùng nắm tay dạo bước bên hồ Tuyền Lâm phẳng lặng, ghé các quán cà phê ngắm đồi thông hoàng hôn, sưởi ấm bên lò sưởi và thưởng thức ly sữa đậu nành nóng hổi trong tiết trời se lạnh.
              </p>
            </div>
            <div class="mt-3 pt-3 border-t border-pink-100/80 text-[11px] text-pink-700 font-semibold">
              <i class="fa-solid fa-champagne-glasses mr-1"></i> Không khí ngọt ngào, thơ mộng
            </div>
          </div>

          <!-- 2. Sa Pa -->
          <div class="bg-pink-50/50 p-4 rounded-2xl border border-pink-100 flex flex-col justify-between">
            <div>
              <div class="h-36 rounded-xl bg-cover bg-center mb-3" style="background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=400&q=80');"></div>
              <span class="text-[10px] bg-pink-200 text-pink-800 font-bold px-2 py-0.5 rounded-full uppercase">Lào Cai</span>
              <h4 class="font-bold text-slate-900 text-base mt-1.5 mb-1">Sa Pa – Săn Mây Mường Hoa</h4>
              <p class="text-xs text-slate-600 leading-relaxed">
                Nghỉ dưỡng tại các resort view thung lũng Mường Hoa ngoạn mục, cùng nhau đón biển mây buổi sớm qua ban công phòng ngủ, thưởng thức lẩu cá hồi nóng hổi và dạo chợ tình Sa Pa cuối tuần.
              </p>
            </div>
            <div class="mt-3 pt-3 border-t border-pink-100/80 text-[11px] text-pink-700 font-semibold">
              <i class="fa-solid fa-champagne-glasses mr-1"></i> Biển mây kỳ vĩ, riêng tư
            </div>
          </div>

          <!-- 3. Phú Quốc Hoàng Hôn -->
          <div class="bg-pink-50/50 p-4 rounded-2xl border border-pink-100 flex flex-col justify-between">
            <div>
              <div class="h-36 rounded-xl bg-cover bg-center mb-3" style="background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=400&q=80');"></div>
              <span class="text-[10px] bg-pink-200 text-pink-800 font-bold px-2 py-0.5 rounded-full uppercase">Kiên Giang</span>
              <h4 class="font-bold text-slate-900 text-base mt-1.5 mb-1">Bữa Tối Hoàng Hôn Bãi Dài</h4>
              <p class="text-xs text-slate-600 leading-relaxed">
                Ngắm hoàng hôn ngũ sắc rực lửa trên biển Phú Quốc. Thưởng thức bữa tối dưới ánh nến và hoa hồng ngay trên bờ cát trắng mịn bên ly rượu vang sóng sánh.
              </p>
            </div>
            <div class="mt-3 pt-3 border-t border-pink-100/80 text-[11px] text-pink-700 font-semibold">
              <i class="fa-solid fa-champagne-glasses mr-1"></i> Trăng mật biển đảo đỉnh cao
            </div>
          </div>
        </div>

        <!-- TRẢI NGHIỆM GỢI Ý CẶP ĐÔI -->
        <div class="p-4 bg-pink-50/60 rounded-2xl border border-pink-200/80">
          <h4 class="font-bold text-xs uppercase tracking-wider text-pink-800 mb-2 flex items-center gap-1.5">
            <i class="fa-solid fa-wand-magic-sparkles text-pink-500"></i> Trải nghiệm không thể bỏ lỡ của cặp đôi
          </h4>
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 text-xs text-slate-700">
            <div class="p-2.5 bg-white rounded-xl shadow-xs">
              <strong class="text-pink-600 block mb-0.5">🕯️ Thả hoa đăng Hội An</strong>
              Ước nguyện tình yêu bền chặt trên dòng sông Hoài ngập tràn ánh đèn hoa.
            </div>
            <div class="p-2.5 bg-white rounded-xl shadow-xs">
              <strong class="text-pink-600 block mb-0.5">🏕️ Glamping giữa rừng</strong>
              Cắm trại sang chảnh ngắm bầu trời sao đêm và nướng BBQ bên lều trại.
            </div>
            <div class="p-2.5 bg-white rounded-xl shadow-xs">
              <strong class="text-pink-600 block mb-0.5">📸 Chụp ảnh kỷ niệm đôi</strong>
              Lưu giữ những khung hình thanh xuân tuyệt đẹp với nhiếp ảnh gia địa phương.
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======================================================== -->
    <!-- PHẦN 3: DU LỊCH CHECK-IN SỐNG ẢO -->
    <!-- ======================================================== -->
    <section id="check-in" class="theme-section scroll-mt-20 mb-12">
      <div class="bg-white rounded-3xl p-6 sm:p-10 border border-purple-100 shadow-sm">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-12 h-12 rounded-2xl bg-purple-600 text-white flex items-center justify-center text-xl shadow-md">
            <i class="fa-solid fa-camera"></i>
          </div>
          <div class="flex-1 flex flex-wrap items-center justify-between gap-3">
            <div>
              <span class="text-[11px] font-extrabold text-purple-600 uppercase tracking-wider">Phong cách 03</span>
              <h2 class="text-2xl font-extrabold text-slate-900">Du Lịch Check-in – Tọa Độ Triệu View Sống Ảo</h2>
            </div>
            <a href="check_in.php" class="px-4 py-2 bg-purple-600 hover:bg-purple-700 text-white rounded-xl text-xs font-bold transition shadow-sm flex items-center gap-1.5">
              Xem cẩm nang chi tiết <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </div>

        <p class="text-slate-600 leading-relaxed mb-6">
          Dành riêng cho các tín đồ đam mê nhiếp ảnh và muốn bắt trọn những khung hình "gây sốt" mạng xã hội. Việt Nam sở hữu những kỳ quan nhân tạo và kiệt tác thiên nhiên siêu thực mà bất kỳ góc chụp nào cũng hóa thành tác phẩm nghệ thuật.
        </p>

        <!-- TOP ĐIỂM CHECK-IN -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-8">
          <!-- 1. Cầu Vàng Bà Nà -->
          <div class="bg-purple-50/50 p-4 rounded-2xl border border-purple-100 flex flex-col justify-between">
            <div>
              <div class="h-36 rounded-xl bg-cover bg-center mb-3" style="background-image: url('https://images.unsplash.com/photo-1559592413-7cec4d0cae2b?auto=format&fit=crop&w=400&q=80');"></div>
              <span class="text-[10px] bg-purple-200 text-purple-800 font-bold px-2 py-0.5 rounded-full uppercase">Đà Nẵng</span>
              <h4 class="font-bold text-slate-900 text-base mt-1.5 mb-1">Cầu Vàng Bà Nà Hills</h4>
              <p class="text-xs text-slate-600 leading-relaxed">
                Đôi bàn tay rêu phong khổng lồ nâng đỡ dải lụa vàng óng vắt ngang lưng chừng trời mây. Điểm check-in nổi tiếng toàn cầu từng lọt top 100 kỳ quan tuyệt vời nhất của tạp chí TIME.
              </p>
            </div>
            <div class="mt-3 pt-3 border-t border-purple-100/80 text-[11px] text-purple-700 font-semibold">
              <i class="fa-solid fa-camera-retro mr-1"></i> Góc máy biểu tượng quốc tế
            </div>
          </div>

          <!-- 2. Sông Nho Quế -->
          <div class="bg-purple-50/50 p-4 rounded-2xl border border-purple-100 flex flex-col justify-between">
            <div>
              <div class="h-36 rounded-xl bg-cover bg-center mb-3" style="background-image: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80');"></div>
              <span class="text-[10px] bg-purple-200 text-purple-800 font-bold px-2 py-0.5 rounded-full uppercase">Hà Giang</span>
              <h4 class="font-bold text-slate-900 text-base mt-1.5 mb-1">Hẻm Tu Sản & Sông Nho Quế</h4>
              <p class="text-xs text-slate-600 leading-relaxed">
                Chiếc thuyền máy rẽ sóng giữa dòng sông xanh như ngọc bích, hai bên là vách núi đá vôi dựng đứng cao hàng trăm mét của hẻm vực sâu nhất Đông Nam Á.
              </p>
            </div>
            <div class="mt-3 pt-3 border-t border-purple-100/80 text-[11px] text-purple-700 font-semibold">
              <i class="fa-solid fa-camera-retro mr-1"></i> Bức tranh thiên nhiên siêu thực
            </div>
          </div>

          <!-- 3. Rừng Tràm Trà Sư -->
          <div class="bg-purple-50/50 p-4 rounded-2xl border border-purple-100 flex flex-col justify-between">
            <div>
              <div class="h-36 rounded-xl bg-cover bg-center mb-3" style="background-image: url('https://images.unsplash.com/photo-1606787366850-de6330128bfc?auto=format&fit=crop&w=400&q=80');"></div>
              <span class="text-[10px] bg-purple-200 text-purple-800 font-bold px-2 py-0.5 rounded-full uppercase">An Giang</span>
              <h4 class="font-bold text-slate-900 text-base mt-1.5 mb-1">Rừng Tràm Trà Sư Mùa Nước Nổi</h4>
              <p class="text-xs text-slate-600 leading-relaxed">
                Ngồi trên chiếc xuồng ba lá lướt qua thảm bèo cám xanh ngắt trải dài vô tận. Cây cầu tre vạn bước xuyên rừng tràm là background sống ảo đậm chất miền Tây Nam Bộ.
              </p>
            </div>
            <div class="mt-3 pt-3 border-t border-purple-100/80 text-[11px] text-purple-700 font-semibold">
              <i class="fa-solid fa-camera-retro mr-1"></i> Sắc xanh bát ngát miền Tây
            </div>
          </div>
        </div>

        <!-- MẸO CHỤP ẢNH ĐẸP -->
        <div class="p-4 bg-purple-50/60 rounded-2xl border border-purple-200/80">
          <h4 class="font-bold text-xs uppercase tracking-wider text-purple-800 mb-2 flex items-center gap-1.5">
            <i class="fa-solid fa-film text-purple-600"></i> Bí kíp chụp ảnh sống ảo triệu like
          </h4>
          <ul class="text-xs text-slate-600 space-y-1.5 list-disc list-inside">
            <li><strong>Khung giờ vàng (Golden Hour):</strong> 5h30 - 7h00 sáng khi nắng sớm dịu nhẹ và 16h30 - 18h00 chiều khi hoàng hôn buông xuống.</li>
            <li><strong>Màu sắc trang phục tương phản:</strong> Tone màu đỏ, cam, vàng hoặc trắng tinh khôi luôn làm bạn nổi bật giữa nền núi xanh hoặc biển biếc.</li>
            <li><strong>Góc máy rộng & Flycam:</strong> Giúp bắt trọn sự hùng vĩ bao la của thiên nhiên non nước Việt Nam.</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- ======================================================== -->
    <!-- PHẦN 4: DU LỊCH TIẾT KIỆM & PHƯỢT -->
    <!-- ======================================================== -->
    <section id="tiet-kiem" class="theme-section scroll-mt-20 mb-12">
      <div class="bg-white rounded-3xl p-6 sm:p-10 border border-teal-100 shadow-sm">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-12 h-12 rounded-2xl bg-teal-600 text-white flex items-center justify-center text-xl shadow-md">
            <i class="fa-solid fa-wallet"></i>
          </div>
          <div class="flex-1 flex flex-wrap items-center justify-between gap-3">
            <div>
              <span class="text-[11px] font-extrabold text-teal-600 uppercase tracking-wider">Phong cách 04</span>
              <h2 class="text-2xl font-extrabold text-slate-900">Du Lịch Tiết Kiệm – Phượt Balo Trải Nghiệm Bản Địa</h2>
            </div>
            <a href="tiet_kiem.php" class="px-4 py-2 bg-teal-600 hover:bg-teal-700 text-white rounded-xl text-xs font-bold transition shadow-sm flex items-center gap-1.5">
              Xem cẩm nang chi tiết <i class="fa-solid fa-arrow-right text-[10px]"></i>
            </a>
          </div>
        </div>

        <p class="text-slate-600 leading-relaxed mb-6">
          Du lịch không nhất thiết phải tốn kém! Với chiếc balo trên vai cùng lòng đam mê khám phá, bạn hoàn toàn có thể chu du khắp dải đất hình chữ S với chi phí cực kỳ tối ưu mà vẫn trọn vẹn văn hóa bản địa.
        </p>

        <!-- CUNG ĐƯỜNG TIẾT KIỆM GỢI Ý -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-8">
          <!-- 1. Tà Xùa -->
          <div class="bg-teal-50/50 p-4 rounded-2xl border border-teal-100 flex flex-col justify-between">
            <div>
              <div class="h-36 rounded-xl bg-cover bg-center mb-3" style="background-image: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80');"></div>
              <span class="text-[10px] bg-teal-200 text-teal-800 font-bold px-2 py-0.5 rounded-full uppercase">Sơn La</span>
              <h4 class="font-bold text-slate-900 text-base mt-1.5 mb-1">Phượt Tà Xùa Săn Mây 2N1Đ</h4>
              <p class="text-xs text-slate-600 leading-relaxed">
                Di chuyển bằng xe máy hoặc xe khách từ Hà Nội. Chinh phục Sống lưng khủng long Háng Đồng, ngắm biển mây cuồn cuộn bên quán cafe Mị Ơi, ở homestay nhà gỗ ấm cúng.
              </p>
            </div>
            <div class="mt-3 pt-3 border-t border-teal-100/80 flex items-center justify-between text-[11px]">
              <span class="text-slate-500">Chi phí ước tính:</span>
              <span class="font-extrabold text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded-md">~800k - 1.2Tr / người</span>
            </div>
          </div>

          <!-- 2. Foodtour Hải Phòng -->
          <div class="bg-teal-50/50 p-4 rounded-2xl border border-teal-100 flex flex-col justify-between">
            <div>
              <div class="h-36 rounded-xl bg-cover bg-center mb-3" style="background-image: url('https://images.unsplash.com/photo-1582878826629-29b7ad1cdc43?auto=format&fit=crop&w=400&q=80');"></div>
              <span class="text-[10px] bg-teal-200 text-teal-800 font-bold px-2 py-0.5 rounded-full uppercase">Hải Phòng</span>
              <h4 class="font-bold text-slate-900 text-base mt-1.5 mb-1">Foodtour Tàu Hỏa Hải Phòng</h4>
              <p class="text-xs text-slate-600 leading-relaxed">
                Vé tàu hỏa khứ hồi giá học sinh sinh viên. Thuê xe máy dạo quanh phố hoa phượng đỏ thưởng thức bánh đa cua, bánh mì cay, trà cúc, cafe cốt dừa với giá chỉ vài chục ngàn.
              </p>
            </div>
            <div class="mt-3 pt-3 border-t border-teal-100/80 flex items-center justify-between text-[11px]">
              <span class="text-slate-500">Chi phí ước tính:</span>
              <span class="font-extrabold text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded-md">~500k - 800k / người</span>
            </div>
          </div>

          <!-- 3. Huế - Đà Nẵng -->
          <div class="bg-teal-50/50 p-4 rounded-2xl border border-teal-100 flex flex-col justify-between">
            <div>
              <div class="h-36 rounded-xl bg-cover bg-center mb-3" style="background-image: url('https://images.unsplash.com/photo-1583417319070-4a69db38a482?auto=format&fit=crop&w=400&q=80');"></div>
              <span class="text-[10px] bg-teal-200 text-teal-800 font-bold px-2 py-0.5 rounded-full uppercase">Huế - Đà Nẵng</span>
              <h4 class="font-bold text-slate-900 text-base mt-1.5 mb-1">Tàu Hỏa Di Sản Huế - Đà Nẵng 3N2Đ</h4>
              <p class="text-xs text-slate-600 leading-relaxed">
                Trải nghiệm chuyến tàu ngắm đèo Hải Vân hùng vĩ. Ăn các món đặc sản bình dân như bún bò Huế, bánh bèo chén, mì Quảng, tắm biển Mỹ Khê miễn phí.
              </p>
            </div>
            <div class="mt-3 pt-3 border-t border-teal-100/80 flex items-center justify-between text-[11px]">
              <span class="text-slate-500">Chi phí ước tính:</span>
              <span class="font-extrabold text-emerald-700 bg-emerald-100 px-2 py-0.5 rounded-md">~1.8Tr - 2.5Tr / người</span>
            </div>
          </div>
        </div>

        <!-- 5 BÍ QUYẾT TIẾT KIỆM -->
        <div class="p-5 bg-teal-50/60 rounded-2xl border border-teal-200/80">
          <h4 class="font-bold text-xs uppercase tracking-wider text-teal-800 mb-3 flex items-center gap-1.5">
            <i class="fa-solid fa-piggy-bank text-teal-600"></i> 4 Nguyên tắc vàng đi du lịch tiết kiệm
          </h4>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs text-slate-700">
            <div class="p-3 bg-white rounded-xl border border-teal-100">
              <strong class="text-teal-700 block mb-1">1. Đặt vé trước & Đi trái mùa</strong>
              Săn vé tàu/xe trước 3-4 tuần hoặc đi vào các ngày giữa tuần để tránh phụ thu cuối tuần và mùa cao điểm.
            </div>
            <div class="p-3 bg-white rounded-xl border border-teal-100">
              <strong class="text-teal-700 block mb-1">2. Chọn Hostel / Homestay cộng đồng</strong>
              Vừa tiết kiệm ngân sách vừa được chủ nhà người địa phương hướng dẫn quán ăn ngon rẻ, ít bị chặt chém.
            </div>
            <div class="p-3 bg-white rounded-xl border border-teal-100">
              <strong class="text-teal-700 block mb-1">3. Khám phá chợ truyền thống</strong>
              Chợ đêm, chợ dân sinh là nơi bạn thưởng thức ẩm thực chuẩn vị bản xứ với mức giá rẻ hơn 40-50% so với nhà hàng.
            </div>
            <div class="p-3 bg-white rounded-xl border border-teal-100">
              <strong class="text-teal-700 block mb-1">4. Đi theo nhóm 4 - 6 người</strong>
              Chia sẻ tiền thuê xe máy/xe ô tô tự lái và phòng khách sạn giúp giảm chi phí xuống mức thấp nhất.
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- BANNER KẾT NỐI -->
    <div class="bg-gradient-to-r from-blue-900 via-indigo-900 to-slate-900 text-white rounded-3xl p-8 sm:p-12 relative overflow-hidden shadow-md">
      <div class="relative z-10 max-w-2xl">
        <span class="text-amber-400 text-xs font-bold uppercase tracking-wider mb-2 block">Cùng bắt đầu hành trình của bạn</span>
        <h2 class="text-2xl sm:text-3xl font-extrabold mb-3">Bạn đã tìm thấy phong cách của riêng mình?</h2>
        <p class="text-slate-300 text-xs sm:text-sm leading-relaxed mb-6">
          Xem thêm các điểm đến nổi bật hoặc quay về trang chủ để tra cứu bản đồ du lịch tương tác 63 tỉnh thành.
        </p>
        <div class="flex flex-wrap gap-3">
          <a href="diem_den_noi_bat.php" class="px-5 py-2.5 bg-emerald-500 hover:bg-emerald-600 text-white rounded-xl text-xs font-bold transition flex items-center gap-2">
            <i class="fa-solid fa-map-location-dot"></i> Điểm đến nổi bật
          </a>
          <a href="index.php" class="px-5 py-2.5 bg-white/10 hover:bg-white/20 text-white rounded-xl text-xs font-semibold backdrop-blur-sm border border-white/20 transition">
            Về trang chủ
          </a>
        </div>
      </div>
    </div>

  </main>

  <!-- FOOTER -->
  <footer class="bg-slate-950 text-slate-400 text-xs py-10 border-t border-slate-900 mt-12">
    <div class="max-w-[1100px] mx-auto px-4 sm:px-6 text-center text-[11px] text-slate-600">
      © 2026 Vietnam Travel. All rights reserved.
    </div>
  </footer>

  <!-- JAVASCRIPT: TỰ ĐỘNG CUỘN ĐẾN SỞ THÍCH TỪ QUERY URL -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const urlParams = new URLSearchParams(window.location.search);
      const type = urlParams.get('type');
      if (type) {
        setTimeout(() => {
          const targetSection = document.getElementById(type);
          if (targetSection) {
            targetSection.scrollIntoView({ behavior: 'smooth' });
            targetSection.classList.add('ring-4', 'ring-blue-400/50', 'transition', 'duration-500');
            setTimeout(() => {
              targetSection.classList.remove('ring-4', 'ring-blue-400/50');
            }, 2000);
          }
        }, 150);
      }
    });

    function switchThemeTab(tabId) {
      const target = document.getElementById(tabId);
      if (target) {
        target.scrollIntoView({ behavior: 'smooth' });
      }
    }
  </script>

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
      
      // Cho phép bấm các link điều hướng công khai & bong bóng chat AI
      if (e.target.closest('#ai-chat-bubble-container, #android-chat-head, #android-chat-window, a[href], button[onclick], input')) {
        return;
      }

      const clickableElement = e.target.closest('button, .cursor-pointer');
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

  <!-- BONG BÓNG CHAT AI ANDROID -->
  <?php include 'chat_bubble_ai.php'; ?>
</body>
</html>
