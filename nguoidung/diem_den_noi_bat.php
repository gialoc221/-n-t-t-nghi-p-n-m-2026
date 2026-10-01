<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Điểm đến nổi bật Việt Nam - VIETNAM TRAVEL</title>
  
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@1,600;1,700&display=swap" rel="stylesheet">
  
  <style>
    body { font-family: 'Plus Jakarta Sans', sans-serif; scroll-behavior: smooth; }
    .font-script { font-family: 'Playfair Display', serif; }
    .card-zoom:hover img { transform: scale(1.05); }
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

  <main class="max-w-[1200px] mx-auto px-4 sm:px-6 py-8">
    
    <!-- BREADCRUMB / QUAY LẠI -->
    <div class="flex items-center justify-between mb-6">
      <a href="index.php" class="inline-flex items-center gap-2 text-slate-500 hover:text-blue-600 font-semibold transition text-[13px]">
        <i class="fa-solid fa-arrow-left"></i> Quay lại trang chủ
      </a>
      <div class="text-xs text-slate-400">
        Trang chủ / <span class="text-slate-700 font-bold">Điểm đến nổi bật</span>
      </div>
    </div>

    <!-- HERO BANNER -->
    <div class="w-full h-[320px] sm:h-[400px] rounded-3xl bg-cover bg-center relative overflow-hidden shadow-lg mb-8" style="background-image: url('https://images.unsplash.com/photo-1528127269322-539801943592?auto=format&fit=crop&w=1400&q=80');">
      <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/50 to-transparent flex items-end p-6 sm:p-12">
        <div class="max-w-3xl">
          <span class="px-3 py-1 bg-emerald-600 text-white text-[11px] font-bold rounded-full mb-3 inline-flex items-center gap-1.5 uppercase tracking-wider">
            <i class="fa-solid fa-compass"></i> Điểm Đến Hàng Đầu
          </span>
          <h1 class="text-3xl sm:text-5xl font-extrabold text-white mb-3">📍 Điểm Đến Nổi Bật Việt Nam</h1>
          <p class="text-slate-200 text-xs sm:text-sm font-medium leading-relaxed">
            Hành trình chiêm ngưỡng những tuyệt tác thiên nhiên thế giới, di sản nghìn năm vàng son và những thiên đường biển đảo rực rỡ từ địa đầu Lũng Cú đến chóp mũi Cà Mau.
          </p>
        </div>
      </div>
    </div>

    <!-- BỘ LỌC VÙNG MIỀN & TÌM KIẾM -->
    <div class="bg-white p-4 sm:p-6 rounded-2xl shadow-sm border border-slate-100 mb-8 flex flex-col md:flex-row items-center justify-between gap-4">
      <!-- TABS VÙNG MIỀN -->
      <div class="flex flex-wrap gap-2 w-full md:w-auto" id="filter-tabs">
        <button onclick="filterDestinations('all', this)" class="filter-tab-btn active px-4 py-2 rounded-xl text-xs font-bold transition bg-emerald-600 text-white shadow-sm">
          Tất cả (12)
        </button>
        <button onclick="filterDestinations('bac', this)" class="filter-tab-btn px-4 py-2 rounded-xl text-xs font-semibold transition bg-slate-100 text-slate-600 hover:bg-slate-200">
          Miền Bắc (4)
        </button>
        <button onclick="filterDestinations('trung', this)" class="filter-tab-btn px-4 py-2 rounded-xl text-xs font-semibold transition bg-slate-100 text-slate-600 hover:bg-slate-200">
          Miền Trung (4)
        </button>
        <button onclick="filterDestinations('nam', this)" class="filter-tab-btn px-4 py-2 rounded-xl text-xs font-semibold transition bg-slate-100 text-slate-600 hover:bg-slate-200">
          Miền Nam (4)
        </button>
      </div>

      <!-- Ô TÌM KIẾM -->
      <div class="w-full md:w-72 relative">
        <i class="fa-solid fa-magnifying-glass absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
        <input type="text" id="search-dest-input" onkeyup="searchDestinations()" placeholder="Tìm điểm đến, tỉnh thành..." class="w-full pl-9 pr-4 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:outline-none focus:border-blue-500 focus:bg-white transition">
      </div>
    </div>

    <!-- DANH SÁCH ĐIỂM ĐẾN -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="destinations-grid">

      <!-- 1. VỊNH HẠ LONG -->
      <div class="dest-card bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition card-zoom" data-region="bac" data-name="vịnh hạ long quảng ninh unesco">
        <div class="relative h-52 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1528127269322-539801943592?auto=format&fit=crop&w=600&q=80" alt="Vịnh Hạ Long" class="w-full h-full object-cover transition duration-300">
          <div class="absolute top-3 left-3 bg-red-600 text-white font-extrabold text-[10px] uppercase px-2.5 py-1 rounded-full shadow-md flex items-center gap-1">
            <i class="fa-solid fa-location-dot"></i> Quảng Ninh
          </div>
          <div class="absolute top-3 right-3 bg-slate-900/80 backdrop-blur-sm text-amber-400 font-bold text-xs px-2.5 py-1 rounded-full shadow-md flex items-center gap-1">
            <i class="fa-solid fa-star text-[10px]"></i> 4.9
          </div>
          <div class="absolute bottom-3 left-3 bg-slate-950/70 text-white text-[10px] font-semibold px-2 py-0.5 rounded-md">
            Kỳ quan thế giới UNESCO
          </div>
        </div>
        <div class="p-5 flex-1 flex flex-col justify-between">
          <div>
            <h3 class="font-bold text-base text-slate-900 mb-1">Vịnh Hạ Long</h3>
            <p class="text-xs text-slate-500 line-clamp-3 leading-relaxed mb-3">
              Quần thể gần 2.000 hòn đảo đá vôi kỳ vĩ nhô lên giữa làn nước xanh màu ngọc bích. Trải nghiệm ngủ đêm trên du thuyền sang trọng, chèo kayak qua hang Luồn và khám phá hang Sửng Sốt huyền thoại.
            </p>
          </div>
          <div>
            <div class="flex items-center justify-between text-[11px] text-slate-500 border-t border-slate-100 pt-3">
              <span><i class="fa-regular fa-calendar-check text-emerald-600 mr-1"></i> Đẹp nhất: T3 - T5, T9 - T11</span>
              <span class="font-bold text-blue-600">Miền Bắc</span>
            </div>
          </div>
        </div>
      </div>

      <!-- 2. SA PA -->
      <div class="dest-card bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition card-zoom" data-region="bac" data-name="sa pa fansipan lào cai ruộng bậc thang săn mây">
        <div class="relative h-52 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=600&q=80" alt="Sa Pa" class="w-full h-full object-cover transition duration-300">
          <div class="absolute top-3 left-3 bg-red-600 text-white font-extrabold text-[10px] uppercase px-2.5 py-1 rounded-full shadow-md flex items-center gap-1">
            <i class="fa-solid fa-location-dot"></i> Lào Cai
          </div>
          <div class="absolute top-3 right-3 bg-slate-900/80 backdrop-blur-sm text-amber-400 font-bold text-xs px-2.5 py-1 rounded-full shadow-md flex items-center gap-1">
            <i class="fa-solid fa-star text-[10px]"></i> 4.8
          </div>
          <div class="absolute bottom-3 left-3 bg-slate-950/70 text-white text-[10px] font-semibold px-2 py-0.5 rounded-md">
            Nóc nhà Đông Dương 3.143m
          </div>
        </div>
        <div class="p-5 flex-1 flex flex-col justify-between">
          <div>
            <h3 class="font-bold text-base text-slate-900 mb-1">Sa Pa & Đỉnh Fansipan</h3>
            <p class="text-xs text-slate-500 line-clamp-3 leading-relaxed mb-3">
              Thị trấn trong sương với biển mây bồng bềnh, những thửa ruộng bậc thang kỳ vĩ tại thung lũng Mường Hoa và trải nghiệm đi cáp treo chinh phục đỉnh Fansipan lộng gió.
            </p>
          </div>
          <div>
            <div class="flex items-center justify-between text-[11px] text-slate-500 border-t border-slate-100 pt-3">
              <span><i class="fa-regular fa-calendar-check text-emerald-600 mr-1"></i> Đẹp nhất: T9 - T11 (Mùa lúa)</span>
              <span class="font-bold text-blue-600">Miền Bắc</span>
            </div>
          </div>
        </div>
      </div>

      <!-- 3. TRÀNG AN -->
      <div class="dest-card bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition card-zoom" data-region="bac" data-name="tràng an tam cốc ninh bình di sản kép unesco thuyền">
        <div class="relative h-52 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1570789210967-2cac24afeb00?auto=format&fit=crop&w=600&q=80" alt="Tràng An Ninh Bình" class="w-full h-full object-cover transition duration-300">
          <div class="absolute top-3 left-3 bg-red-600 text-white font-extrabold text-[10px] uppercase px-2.5 py-1 rounded-full shadow-md flex items-center gap-1">
            <i class="fa-solid fa-location-dot"></i> Ninh Bình
          </div>
          <div class="absolute top-3 right-3 bg-slate-900/80 backdrop-blur-sm text-amber-400 font-bold text-xs px-2.5 py-1 rounded-full shadow-md flex items-center gap-1">
            <i class="fa-solid fa-star text-[10px]"></i> 4.9
          </div>
          <div class="absolute bottom-3 left-3 bg-slate-950/70 text-white text-[10px] font-semibold px-2 py-0.5 rounded-md">
            Di sản hỗn hợp UNESCO
          </div>
        </div>
        <div class="p-5 flex-1 flex flex-col justify-between">
          <div>
            <h3 class="font-bold text-base text-slate-900 mb-1">Quần thể danh thắng Tràng An</h3>
            <p class="text-xs text-slate-500 line-clamp-3 leading-relaxed mb-3">
              "Hạ Long trên cạn" với dòng sông Sào Khê uốn lượn quanh các dãy núi đá vôi sừng sững, hệ thống hang động huyền ảo và các đền đài cổ kính linh thiêng.
            </p>
          </div>
          <div>
            <div class="flex items-center justify-between text-[11px] text-slate-500 border-t border-slate-100 pt-3">
              <span><i class="fa-regular fa-calendar-check text-emerald-600 mr-1"></i> Đẹp nhất: T1 - T3 (Lễ hội, sen)</span>
              <span class="font-bold text-blue-600">Miền Bắc</span>
            </div>
          </div>
        </div>
      </div>

      <!-- 4. HÀ GIANG -->
      <div class="dest-card bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition card-zoom" data-region="bac" data-name="hà giang mã pí lèng sông nho quế đồng văn hoa tam giác mạch">
        <div class="relative h-52 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80" alt="Hà Giang" class="w-full h-full object-cover transition duration-300">
          <div class="absolute top-3 left-3 bg-red-600 text-white font-extrabold text-[10px] uppercase px-2.5 py-1 rounded-full shadow-md flex items-center gap-1">
            <i class="fa-solid fa-location-dot"></i> Hà Giang
          </div>
          <div class="absolute top-3 right-3 bg-slate-900/80 backdrop-blur-sm text-amber-400 font-bold text-xs px-2.5 py-1 rounded-full shadow-md flex items-center gap-1">
            <i class="fa-solid fa-star text-[10px]"></i> 4.9
          </div>
          <div class="absolute bottom-3 left-3 bg-slate-950/70 text-white text-[10px] font-semibold px-2 py-0.5 rounded-md">
            Công viên địa chất toàn cầu
          </div>
        </div>
        <div class="p-5 flex-1 flex flex-col justify-between">
          <div>
            <h3 class="font-bold text-base text-slate-900 mb-1">Hà Giang & Đèo Mã Pí Lèng</h3>
            <p class="text-xs text-slate-500 line-clamp-3 leading-relaxed mb-3">
              Một trong "tứ đại đỉnh đèo" hiểm trở bậc nhất Việt Nam, hẻm vực Tu Sản sâu hun hút nhìn xuống dòng sông Nho Quế màu xanh ngọc bích tuyệt mỹ.
            </p>
          </div>
          <div>
            <div class="flex items-center justify-between text-[11px] text-slate-500 border-t border-slate-100 pt-3">
              <span><i class="fa-regular fa-calendar-check text-emerald-600 mr-1"></i> Đẹp nhất: T10 - T12 (Tam giác mạch)</span>
              <span class="font-bold text-blue-600">Miền Bắc</span>
            </div>
          </div>
        </div>
      </div>

      <!-- 5. HỘI AN -->
      <div class="dest-card bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition card-zoom" data-region="trung" data-name="phố cổ hội an quảng nam chùa cầu đèn lồng hoài cổ unesco">
        <div class="relative h-52 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1559592413-7cec4d0cae2b?auto=format&fit=crop&w=600&q=80" alt="Hội An" class="w-full h-full object-cover transition duration-300">
          <div class="absolute top-3 left-3 bg-amber-600 text-white font-extrabold text-[10px] uppercase px-2.5 py-1 rounded-full shadow-md flex items-center gap-1">
            <i class="fa-solid fa-location-dot"></i> Quảng Nam
          </div>
          <div class="absolute top-3 right-3 bg-slate-900/80 backdrop-blur-sm text-amber-400 font-bold text-xs px-2.5 py-1 rounded-full shadow-md flex items-center gap-1">
            <i class="fa-solid fa-star text-[10px]"></i> 4.9
          </div>
          <div class="absolute bottom-3 left-3 bg-slate-950/70 text-white text-[10px] font-semibold px-2 py-0.5 rounded-md">
            Di sản Văn hóa UNESCO
          </div>
        </div>
        <div class="p-5 flex-1 flex flex-col justify-between">
          <div>
            <h3 class="font-bold text-base text-slate-900 mb-1">Phố cổ Hội An</h3>
            <p class="text-xs text-slate-500 line-clamp-3 leading-relaxed mb-3">
              Những ngôi nhà cổ mái ngói rêu phong sơn tường vàng rực, giàn hoa giấy rủ bóng, Chùa Cầu trăm tuổi và hàng nghìn ánh đèn lồng lung linh soi bóng dòng sông Hoài.
            </p>
          </div>
          <div>
            <div class="flex items-center justify-between text-[11px] text-slate-500 border-t border-slate-100 pt-3">
              <span><i class="fa-regular fa-calendar-check text-emerald-600 mr-1"></i> Đẹp nhất: T2 - T7 (Trời nắng ráo)</span>
              <span class="font-bold text-amber-600">Miền Trung</span>
            </div>
          </div>
        </div>
      </div>

      <!-- 6. HUẾ -->
      <div class="dest-card bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition card-zoom" data-region="trung" data-name="cố đô huế thừa thiên huế đại nội lăng tẩm sông hương unesco">
        <div class="relative h-52 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1583417319070-4a69db38a482?auto=format&fit=crop&w=600&q=80" alt="Cố đô Huế" class="w-full h-full object-cover transition duration-300">
          <div class="absolute top-3 left-3 bg-amber-600 text-white font-extrabold text-[10px] uppercase px-2.5 py-1 rounded-full shadow-md flex items-center gap-1">
            <i class="fa-solid fa-location-dot"></i> Thừa Thiên Huế
          </div>
          <div class="absolute top-3 right-3 bg-slate-900/80 backdrop-blur-sm text-amber-400 font-bold text-xs px-2.5 py-1 rounded-full shadow-md flex items-center gap-1">
            <i class="fa-solid fa-star text-[10px]"></i> 4.8
          </div>
          <div class="absolute bottom-3 left-3 bg-slate-950/70 text-white text-[10px] font-semibold px-2 py-0.5 rounded-md">
            Quần thể di tích Cố đô
          </div>
        </div>
        <div class="p-5 flex-1 flex flex-col justify-between">
          <div>
            <h3 class="font-bold text-base text-slate-900 mb-1">Cố đô Huế & Sông Hương</h3>
            <p class="text-xs text-slate-500 line-clamp-3 leading-relaxed mb-3">
              Kinh thành vàng son triều Nguyễn với Đại Nội trầm mặc, hệ thống lăng tẩm uy nghiêm (Khải Định, Tự Đức) cùng trải nghiệm nghe ca Huế thả hoa đăng trên sông Hương thơ mộng.
            </p>
          </div>
          <div>
            <div class="flex items-center justify-between text-[11px] text-slate-500 border-t border-slate-100 pt-3">
              <span><i class="fa-regular fa-calendar-check text-emerald-600 mr-1"></i> Đẹp nhất: T1 - T4 (Tiết trời dịu mát)</span>
              <span class="font-bold text-amber-600">Miền Trung</span>
            </div>
          </div>
        </div>
      </div>

      <!-- 7. ĐÀ NẴNG -->
      <div class="dest-card bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition card-zoom" data-region="trung" data-name="đà nẵng cầu vàng bà nà hills bán đảo sơn trà biển mỹ khê cầu rồng">
        <div class="relative h-52 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1559592413-7cec4d0cae2b?auto=format&fit=crop&w=600&q=80" alt="Cầu Vàng Bà Nà Hills Đà Nẵng" class="w-full h-full object-cover transition duration-300">
          <div class="absolute top-3 left-3 bg-amber-600 text-white font-extrabold text-[10px] uppercase px-2.5 py-1 rounded-full shadow-md flex items-center gap-1">
            <i class="fa-solid fa-location-dot"></i> TP. Đà Nẵng
          </div>
          <div class="absolute top-3 right-3 bg-slate-900/80 backdrop-blur-sm text-amber-400 font-bold text-xs px-2.5 py-1 rounded-full shadow-md flex items-center gap-1">
            <i class="fa-solid fa-star text-[10px]"></i> 4.9
          </div>
          <div class="absolute bottom-3 left-3 bg-slate-950/70 text-white text-[10px] font-semibold px-2 py-0.5 rounded-md">
            Biểu tượng du lịch hiện đại
          </div>
        </div>
        <div class="p-5 flex-1 flex flex-col justify-between">
          <div>
            <h3 class="font-bold text-base text-slate-900 mb-1">Cầu Vàng & Bà Nà Hills</h3>
            <p class="text-xs text-slate-500 line-clamp-3 leading-relaxed mb-3">
              Tuyệt tác kiến trúc Cầu Vàng được nâng đỡ bởi đôi bàn tay khổng lồ vươn giữa mây trời, cùng biển Mỹ Khê trong xanh và những cây cầu biểu tượng rực sáng về đêm.
            </p>
          </div>
          <div>
            <div class="flex items-center justify-between text-[11px] text-slate-500 border-t border-slate-100 pt-3">
              <span><i class="fa-regular fa-calendar-check text-emerald-600 mr-1"></i> Đẹp nhất: T3 - T8 (Nắng đẹp biển trong)</span>
              <span class="font-bold text-amber-600">Miền Trung</span>
            </div>
          </div>
        </div>
      </div>

      <!-- 8. PHONG NHA KẺ BÀNG -->
      <div class="dest-card bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition card-zoom" data-region="trung" data-name="phong nha kẻ bàng quảng bình sơn đoòng hang động unesco">
        <div class="relative h-52 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1544644181-1484b3fdfc62?auto=format&fit=crop&w=600&q=80" alt="Phong Nha Kẻ Bàng" class="w-full h-full object-cover transition duration-300">
          <div class="absolute top-3 left-3 bg-amber-600 text-white font-extrabold text-[10px] uppercase px-2.5 py-1 rounded-full shadow-md flex items-center gap-1">
            <i class="fa-solid fa-location-dot"></i> Quảng Bình
          </div>
          <div class="absolute top-3 right-3 bg-slate-900/80 backdrop-blur-sm text-amber-400 font-bold text-xs px-2.5 py-1 rounded-full shadow-md flex items-center gap-1">
            <i class="fa-solid fa-star text-[10px]"></i> 4.9
          </div>
          <div class="absolute bottom-3 left-3 bg-slate-950/70 text-white text-[10px] font-semibold px-2 py-0.5 rounded-md">
            Vương quốc hang động thế giới
          </div>
        </div>
        <div class="p-5 flex-1 flex flex-col justify-between">
          <div>
            <h3 class="font-bold text-base text-slate-900 mb-1">Phong Nha - Kẻ Bàng</h3>
            <p class="text-xs text-slate-500 line-clamp-3 leading-relaxed mb-3">
              Di sản thiên nhiên thế giới sở hữu hang Sơn Đoòng lớn nhất hành tinh, động Thiên Đường tráng lệ và sông Chày - hang Tối trải nghiệm zipline đu dây mạo hiểm.
            </p>
          </div>
          <div>
            <div class="flex items-center justify-between text-[11px] text-slate-500 border-t border-slate-100 pt-3">
              <span><i class="fa-regular fa-calendar-check text-emerald-600 mr-1"></i> Đẹp nhất: T4 - T8 (Mùa khô)</span>
              <span class="font-bold text-amber-600">Miền Trung</span>
            </div>
          </div>
        </div>
      </div>

      <!-- 9. PHÚ QUỐC -->
      <div class="dest-card bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition card-zoom" data-region="nam" data-name="đảo ngọc phú quốc kiên giang bãi sao hoàng hôn lặn ngắm san hô biển đảo">
        <div class="relative h-52 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=600&q=80" alt="Phú Quốc" class="w-full h-full object-cover transition duration-300">
          <div class="absolute top-3 left-3 bg-sky-600 text-white font-extrabold text-[10px] uppercase px-2.5 py-1 rounded-full shadow-md flex items-center gap-1">
            <i class="fa-solid fa-location-dot"></i> Kiên Giang
          </div>
          <div class="absolute top-3 right-3 bg-slate-900/80 backdrop-blur-sm text-amber-400 font-bold text-xs px-2.5 py-1 rounded-full shadow-md flex items-center gap-1">
            <i class="fa-solid fa-star text-[10px]"></i> 4.9
          </div>
          <div class="absolute bottom-3 left-3 bg-slate-950/70 text-white text-[10px] font-semibold px-2 py-0.5 rounded-md">
            Đảo Ngọc thiên đường nhiệt đới
          </div>
        </div>
        <div class="p-5 flex-1 flex flex-col justify-between">
          <div>
            <h3 class="font-bold text-base text-slate-900 mb-1">Đảo Ngọc Phú Quốc</h3>
            <p class="text-xs text-slate-500 line-clamp-3 leading-relaxed mb-3">
              Bãi Sao cát trắng mịn như kem, quần đảo An Thới lặn ngắm san hô đầy màu sắc, ngắm hoàng hôn đỏ rực tại Sunset Town và thế giới giải trí VinWonders đỉnh cao.
            </p>
          </div>
          <div>
            <div class="flex items-center justify-between text-[11px] text-slate-500 border-t border-slate-100 pt-3">
              <span><i class="fa-regular fa-calendar-check text-emerald-600 mr-1"></i> Đẹp nhất: T11 - T4 (Sóng êm biển lặng)</span>
              <span class="font-bold text-sky-600">Miền Nam</span>
            </div>
          </div>
        </div>
      </div>

      <!-- 10. CÔN ĐẢO -->
      <div class="dest-card bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition card-zoom" data-region="nam" data-name="côn đảo bà rịa vũng tàu bãi đầm trầu viếng mộ cô sáu rùa biển tâm linh">
        <div class="relative h-52 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=600&q=80" alt="Côn Đảo" class="w-full h-full object-cover transition duration-300">
          <div class="absolute top-3 left-3 bg-sky-600 text-white font-extrabold text-[10px] uppercase px-2.5 py-1 rounded-full shadow-md flex items-center gap-1">
            <i class="fa-solid fa-location-dot"></i> Bà Rịa - Vũng Tàu
          </div>
          <div class="absolute top-3 right-3 bg-slate-900/80 backdrop-blur-sm text-amber-400 font-bold text-xs px-2.5 py-1 rounded-full shadow-md flex items-center gap-1">
            <i class="fa-solid fa-star text-[10px]"></i> 4.9
          </div>
          <div class="absolute bottom-3 left-3 bg-slate-950/70 text-white text-[10px] font-semibold px-2 py-0.5 rounded-md">
            Biển đảo hoang sơ & Tâm linh
          </div>
        </div>
        <div class="p-5 flex-1 flex flex-col justify-between">
          <div>
            <h3 class="font-bold text-base text-slate-900 mb-1">Côn Đảo huyền thoại</h3>
            <p class="text-xs text-slate-500 line-clamp-3 leading-relaxed mb-3">
              Vùng đảo hoang sơ với bãi Đầm Trầu ngắm máy bay hạ cánh sát bãi biển, trải nghiệm xem rùa biển đẻ trứng và viếng nghĩa trang Hàng Dương linh thiêng lúc nửa đêm.
            </p>
          </div>
          <div>
            <div class="flex items-center justify-between text-[11px] text-slate-500 border-t border-slate-100 pt-3">
              <span><i class="fa-regular fa-calendar-check text-emerald-600 mr-1"></i> Đẹp nhất: T3 - T9 (Biển êm, xem rùa đẻ trứng)</span>
              <span class="font-bold text-sky-600">Miền Nam</span>
            </div>
          </div>
        </div>
      </div>

      <!-- 11. CHỢ NỔI CÁI RĂNG -->
      <div class="dest-card bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition card-zoom" data-region="nam" data-name="chợ nổi cái răng cần thơ miền tây sông nước trái cây ghe thuyền">
        <div class="relative h-52 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1606787366850-de6330128bfc?auto=format&fit=crop&w=600&q=80" alt="Chợ nổi Cái Răng Cần Thơ" class="w-full h-full object-cover transition duration-300">
          <div class="absolute top-3 left-3 bg-sky-600 text-white font-extrabold text-[10px] uppercase px-2.5 py-1 rounded-full shadow-md flex items-center gap-1">
            <i class="fa-solid fa-location-dot"></i> Cần Thơ
          </div>
          <div class="absolute top-3 right-3 bg-slate-900/80 backdrop-blur-sm text-amber-400 font-bold text-xs px-2.5 py-1 rounded-full shadow-md flex items-center gap-1">
            <i class="fa-solid fa-star text-[10px]"></i> 4.7
          </div>
          <div class="absolute bottom-3 left-3 bg-slate-950/70 text-white text-[10px] font-semibold px-2 py-0.5 rounded-md">
            Di sản văn hóa phi vật thể
          </div>
        </div>
        <div class="p-5 flex-1 flex flex-col justify-between">
          <div>
            <h3 class="font-bold text-base text-slate-900 mb-1">Chợ nổi Cái Răng</h3>
            <p class="text-xs text-slate-500 line-clamp-3 leading-relaxed mb-3">
              Khám phá nếp sống sông nước Cửu Long độc đáo vào sáng sớm: hàng trăm ghe thuyền tấp nập giao thương nông sản với "cây bẹo" treo trái cây chào hàng, thưởng thức tô hủ tiếu nóng hổi ngay trên mạn thuyền.
            </p>
          </div>
          <div>
            <div class="flex items-center justify-between text-[11px] text-slate-500 border-t border-slate-100 pt-3">
              <span><i class="fa-regular fa-calendar-check text-emerald-600 mr-1"></i> Đẹp nhất: T9 - T11 (Mùa nước nổi)</span>
              <span class="font-bold text-sky-600">Miền Nam</span>
            </div>
          </div>
        </div>
      </div>

      <!-- 12. ĐÀ LẠT -->
      <div class="dest-card bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition card-zoom" data-region="trung" data-name="đà lạt lâm đồng hồ xuân hương thung lũng tình yêu ngàn hoa sương mù tây nguyên">
        <div class="relative h-52 overflow-hidden">
          <img src="https://images.unsplash.com/photo-1544644181-1484b3fdfc62?auto=format&fit=crop&w=600&q=80" alt="Đà Lạt" class="w-full h-full object-cover transition duration-300">
          <div class="absolute top-3 left-3 bg-purple-600 text-white font-extrabold text-[10px] uppercase px-2.5 py-1 rounded-full shadow-md flex items-center gap-1">
            <i class="fa-solid fa-location-dot"></i> Lâm Đồng
          </div>
          <div class="absolute top-3 right-3 bg-slate-900/80 backdrop-blur-sm text-amber-400 font-bold text-xs px-2.5 py-1 rounded-full shadow-md flex items-center gap-1">
            <i class="fa-solid fa-star text-[10px]"></i> 4.8
          </div>
          <div class="absolute bottom-3 left-3 bg-slate-950/70 text-white text-[10px] font-semibold px-2 py-0.5 rounded-md">
            Thành phố ngàn hoa thơ mộng
          </div>
        </div>
        <div class="p-5 flex-1 flex flex-col justify-between">
          <div>
            <h3 class="font-bold text-base text-slate-900 mb-1">Đà Lạt - Thành phố mộng mơ</h3>
            <p class="text-xs text-slate-500 line-clamp-3 leading-relaxed mb-3">
              Khí hậu se lạnh quanh năm, những đồi thông reo trong gió, đồi chè Cầu Đất săn mây và những quán cà phê view núi đồi lãng mạn bậc nhất dành cho những tâm hồn mộng mơ.
            </p>
          </div>
          <div>
            <div class="flex items-center justify-between text-[11px] text-slate-500 border-t border-slate-100 pt-3">
              <span><i class="fa-regular fa-calendar-check text-emerald-600 mr-1"></i> Đẹp nhất: T10 - T3 (Mùa dã quỳ & mai anh đào)</span>
              <span class="font-bold text-purple-600">Tây Nguyên</span>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- KHÔNG TÌM THẤY KẾT QUẢ -->
    <div id="no-result" class="hidden text-center py-16 bg-white rounded-3xl border border-slate-100 shadow-sm my-6">
      <i class="fa-solid fa-map-location-dot text-4xl text-slate-300 mb-3"></i>
      <h3 class="font-bold text-slate-700 text-base">Không tìm thấy điểm đến phù hợp</h3>
      <p class="text-xs text-slate-400 mt-1">Hãy thử tìm với từ khóa khác như "Hạ Long", "Hội An", "Phú Quốc"...</p>
    </div>

    <!-- BANNER KHÁM PHÁ THÊM -->
    <div class="mt-12 bg-gradient-to-r from-blue-900 via-indigo-900 to-slate-900 text-white rounded-3xl p-8 sm:p-12 relative overflow-hidden shadow-md">
      <div class="relative z-10 max-w-2xl">
        <span class="text-amber-400 text-xs font-bold uppercase tracking-wider mb-2 block">Cùng đồng hành trên mọi nẻo đường</span>
        <h2 class="text-2xl sm:text-3xl font-extrabold mb-3">Bạn đã chọn được điểm dừng chân tiếp theo?</h2>
        <p class="text-slate-300 text-xs sm:text-sm leading-relaxed mb-6">
          Khám phá thêm cẩm nang ẩm thực vùng miền hoặc lên kế hoạch theo phong cách yêu thích của riêng bạn.
        </p>
        <div class="flex flex-wrap gap-3">
          <a href="kham_pha_so_thich.php" class="px-5 py-2.5 bg-emerald-500 hover:bg-emerald-600 text-white rounded-xl text-xs font-bold transition flex items-center gap-2">
            <i class="fa-solid fa-heart"></i> Khám phá theo sở thích
          </a>
          <a href="index.php" class="px-5 py-2.5 bg-white/10 hover:bg-white/20 text-white rounded-xl text-xs font-semibold backdrop-blur-sm border border-white/20 transition">
            Về trang chủ
          </a>
        </div>
      </div>
      <div class="absolute right-0 bottom-0 opacity-10 text-[200px] pointer-events-none transform translate-x-12 translate-y-12">
        <i class="fa-solid fa-map"></i>
      </div>
    </div>

  </main>

  <!-- FOOTER -->
  <footer class="bg-slate-950 text-slate-400 text-xs py-10 border-t border-slate-900 mt-12">
    <div class="max-w-[1200px] mx-auto px-4 sm:px-6 text-center text-[11px] text-slate-600">
      © 2026 Vietnam Travel. All rights reserved.
    </div>
  </footer>

  <!-- JAVASCRIPT: LỌC & TÌM KIẾM ĐIỂM ĐẾN -->
  <script>
    function filterDestinations(region, btnElement) {
      // Đổi class active nút bấm
      const buttons = document.querySelectorAll('.filter-tab-btn');
      buttons.forEach(btn => {
        btn.classList.remove('bg-emerald-600', 'text-white', 'shadow-sm');
        btn.classList.add('bg-slate-100', 'text-slate-600');
      });
      btnElement.classList.add('bg-emerald-600', 'text-white', 'shadow-sm');
      btnElement.classList.remove('bg-slate-100', 'text-slate-600');

      // Lọc danh sách thẻ
      const cards = document.querySelectorAll('.dest-card');
      let visibleCount = 0;
      
      cards.forEach(card => {
        const cardRegion = card.getAttribute('data-region');
        if (region === 'all' || cardRegion === region) {
          card.classList.remove('hidden');
          visibleCount++;
        } else {
          card.classList.add('hidden');
        }
      });

      toggleNoResult(visibleCount);
    }

    function searchDestinations() {
      const keyword = document.getElementById('search-dest-input').value.toLowerCase().trim();
      const cards = document.querySelectorAll('.dest-card');
      let visibleCount = 0;

      cards.forEach(card => {
        const nameData = card.getAttribute('data-name');
        if (!keyword || nameData.includes(keyword)) {
          card.classList.remove('hidden');
          visibleCount++;
        } else {
          card.classList.add('hidden');
        }
      });

      toggleNoResult(visibleCount);
    }

    function toggleNoResult(count) {
      const noResultBox = document.getElementById('no-result');
      if (count === 0) {
        noResultBox.classList.remove('hidden');
      } else {
        noResultBox.classList.add('hidden');
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
