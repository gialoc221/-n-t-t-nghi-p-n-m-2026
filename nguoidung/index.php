<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VIETNAM TRAVEL - Khám phá vẻ đẹp Việt Nam</title>
  
  <!-- Tailwind CSS & Font Awesome -->
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@1,600;1,700&display=swap" rel="stylesheet">
  
  <!-- Leaflet CSS & JS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

  <!-- Three.js CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

  <style>
    body { font-family: 'Plus_Jakarta_Sans', sans-serif; scroll-behavior: smooth; }
    .font-script { font-family: 'Playfair Display', serif; }
    .card-zoom { transition: transform 0.25s ease, box-shadow 0.25s ease; cursor: pointer; }
    .card-zoom:hover { transform: translateY(-3px); box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.08); }
    
    /* Custom Scrollbar */
    ::-webkit-scrollbar { width: 6px; }
    ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 999px; }
    
    /* Leaflet Map Styles */
    .leaflet-control-zoom, .leaflet-control-layers { 
      border: 1px solid #e2e8f0 !important; 
      border-radius: 8px !important; 
      overflow: hidden; 
      box-shadow: 0 2px 6px rgba(0,0,0,0.08) !important; 
    }
    .leaflet-control-zoom a { background-color: #ffffff !important; color: #475569 !important; font-size: 13px !important; width: 24px !important; height: 24px !important; line-height: 24px !important; }
    .island-badge { background: rgba(255, 255, 255, 0.95); border: 1px solid #cbd5e1; padding: 3px 6px; border-radius: 6px; font-size: 10px; font-weight: 700; color: #0f172a; box-shadow: 0 2px 5px rgba(0,0,0,0.12); display: flex; align-items: center; gap: 4px; white-space: nowrap; }
  </style>
</head>
<body class="bg-[#f3f4f6] text-slate-800 antialiased text-[13px]">

  <!-- HEADER -->
  <header class="bg-white border-b border-slate-200/80 sticky top-0 z-50">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 h-14 flex items-center justify-between">
      <div class="flex items-center gap-3">
        <div class="w-9 h-9 rounded-full bg-gradient-to-tr from-amber-500 via-rose-500 to-sky-500 flex items-center justify-center text-white shadow-sm">
          <i class="fa-solid fa-umbrella-beach text-base"></i>
        </div>
        <div class="leading-tight">
          <span class="font-extrabold text-[15px] tracking-wide text-slate-900 block">VIETNAM TRAVEL</span>
          <span class="text-[9px] text-slate-500 block uppercase tracking-wider">Khám phá Việt Nam</span>
        </div>
      </div>

      <nav class="hidden lg:flex items-center gap-6 text-[13px] font-semibold text-slate-700">
        <a href="#" class="text-blue-600">Trang chủ</a>
        <a href="#" class="hover:text-blue-600 flex items-center gap-1">Khám phá <i class="fa-solid fa-chevron-down text-[10px]"></i></a>
        <a href="#map-box" class="hover:text-blue-600">Bản đồ</a>
        <a href="#cuisine-box" class="hover:text-blue-600">Ẩm thực</a>
        <a href="#" class="hover:text-blue-600">Cẩm nang</a>
        <a href="#ai-box" class="text-rose-500 hover:text-rose-600 flex items-center gap-1 font-bold">
          <i class="fa-solid fa-wand-magic-sparkles text-xs"></i> AI Du lịch <span class="bg-rose-500 text-white text-[9px] px-1.5 py-0.2 rounded-full ml-0.5">Mới</span>
        </a>
      </nav>

      <div class="flex items-center gap-3">
        <div class="relative hidden sm:block">
          <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
          <input type="text" placeholder="Tìm kiếm địa điểm..." class="pl-8 pr-3 py-1.5 bg-slate-100 rounded-full text-xs w-48 focus:w-60 focus:bg-white outline-none transition-all">
        </div>
        <button id="auth-btn" class="bg-[#1e40af] hover:bg-blue-800 text-white font-medium text-xs px-4 py-1.5 rounded-full flex items-center gap-1.5 shadow-sm transition">
          <i class="fa-regular fa-user"></i> <span>Đăng nhập</span>
        </button>
      </div>
    </div>
  </header>

  <main class="max-w-[1400px] mx-auto px-4 sm:px-6 py-5 space-y-6">

    <!-- ROW 1: HERO (THREE.JS) | BẢN ĐỒ THẬT LEAFLET | BIỂN ĐẢO -->
    <section class="grid grid-cols-1 lg:grid-cols-12 gap-5">
      <!-- HERO BANNER -->
      <div class="lg:col-span-6 relative rounded-2xl overflow-hidden bg-slate-900 min-h-[380px] flex flex-col justify-between p-6 sm:p-7 text-white shadow-sm cursor-pointer">
        <canvas id="three-hero-canvas" class="absolute inset-0 w-full h-full pointer-events-none opacity-50 z-0"></canvas>
        <div class="absolute inset-0 bg-cover bg-center mix-blend-overlay opacity-80 z-0" style="background-image: url('https://images.unsplash.com/photo-1528127269322-539801943592?auto=format&fit=crop&w=1200&q=80');"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-black/30 z-0"></div>

        <div class="relative z-10">
          <span class="font-script italic text-2xl text-amber-200 block drop-shadow">Khám phá vẻ đẹp</span>
          <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight mt-0.5 drop-shadow-md">VIỆT NAM</h1>
          <p class="text-xs text-slate-200 mt-2 font-light tracking-wide">"Một Việt Nam - Hàng nghìn hành trình đáng nhớ"</p>
        </div>

        <div class="relative z-10 space-y-4">
          <div class="flex flex-wrap gap-2 text-[11px]">
            <a href="thien_nhien.php" class="bg-black/30 hover:bg-black/50 backdrop-blur-md px-2.5 py-1 rounded-full border border-white/10 flex items-center gap-1.5 transition"><i class="fa-solid fa-tree text-emerald-400"></i> Thiên nhiên</a>
            <a href="van_hoa.php" class="bg-black/30 hover:bg-black/50 backdrop-blur-md px-2.5 py-1 rounded-full border border-white/10 flex items-center gap-1.5 transition"><i class="fa-solid fa-landmark text-amber-400"></i> Văn hóa</a>
            <a href="am_thuc.php" class="bg-black/30 hover:bg-black/50 backdrop-blur-md px-2.5 py-1 rounded-full border border-white/10 flex items-center gap-1.5 transition"><i class="fa-solid fa-bowl-rice text-orange-400"></i> Ẩm thực</a>
            <span class="bg-black/30 backdrop-blur-md px-2.5 py-1 rounded-full border border-white/10 flex items-center gap-1.5"><i class="fa-solid fa-person-walking text-sky-400"></i> Con người</span>
          </div>

          <div class="flex items-center gap-3 pt-1">
            <button class="bg-[#f59e0b] hover:bg-amber-600 text-white font-bold px-5 py-2 rounded-full text-xs shadow-md transition flex items-center gap-1.5">
              <i class="fa-solid fa-compass"></i> Khám phá ngay
            </button>
            <button class="bg-white/20 hover:bg-white/30 backdrop-blur-md border border-white/30 text-white font-semibold px-4 py-2 rounded-full text-xs transition flex items-center gap-1.5">
              <i class="fa-solid fa-play text-[10px]"></i> Xem video
            </button>
          </div>
        </div>
      </div>

      <!-- BẢN ĐỒ VIỆT NAM THẬT -->
      <div id="map-box" class="lg:col-span-3 bg-white rounded-2xl p-4 shadow-sm border border-slate-100 flex flex-col justify-between">
        <div>
          <div class="flex items-center justify-between">
            <h2 class="font-bold text-slate-900 text-sm">Khám phá Việt Nam</h2>
            <span class="text-[10px] bg-emerald-50 text-emerald-600 font-bold px-2 py-0.5 rounded-full flex items-center gap-1">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-ping"></span> Live Map
            </span>
          </div>
          <p class="text-[11px] text-slate-400 mt-0.5">Kéo thả để xem (Giới hạn tại Việt Nam)</p>
          <div class="mt-2 relative">
            <input type="text" placeholder="Bạn muốn đi đâu?" class="w-full pl-3 pr-8 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs outline-none focus:border-blue-500">
            <i class="fa-solid fa-magnifying-glass absolute right-2.5 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
          </div>
        </div>

        <div class="relative rounded-xl overflow-hidden my-2 border border-slate-200 h-[190px] shadow-inner">
          <div id="vietnam-real-map" class="w-full h-full z-10 cursor-pointer"></div>
        </div>

        <button onclick="resetMapView()" class="w-full py-1.5 bg-slate-50 hover:bg-slate-100 border border-slate-200 text-slate-700 rounded-lg text-xs font-semibold flex items-center justify-center gap-1.5 transition">
          <i class="fa-solid fa-location-crosshairs text-blue-600"></i> Thu phóng toàn cảnh
        </button>
      </div>

      <!-- BIỂN ĐẢO -->
      <div class="lg:col-span-3 bg-white rounded-2xl p-4 shadow-sm border border-slate-100 flex flex-col justify-between">
        <div>
          <h2 class="font-bold text-slate-900 text-sm">Biển đảo Việt Nam</h2>
          <p class="text-[11px] text-slate-400 mt-0.5">Hoàng Sa và Trường Sa - Phần máu thịt thiêng liêng</p>
        </div>

        <div class="space-y-3 my-2">
          <!-- Hoàng Sa -->
          <div onclick="focusHoangSa()" class="p-2.5 rounded-xl bg-slate-50 border border-slate-200/70 card-zoom">
            <div class="h-20 rounded-lg bg-cover bg-center mb-2 relative" style="background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=400&q=80');">
              <span class="absolute top-1.5 left-1.5 bg-blue-600/90 text-white text-[9px] px-2 py-0.5 rounded font-bold">Hoàng Sa</span>
            </div>
            <h3 class="text-xs font-bold text-slate-800">Quần đảo Hoàng Sa</h3>
            <p class="text-[10px] text-slate-500 mt-0.5 line-clamp-2">Thuộc chủ quyền Việt Nam, huyện đảo Hoàng Sa, TP. Đà Nẵng.</p>
            <span class="text-[11px] text-blue-600 font-semibold mt-1.5 inline-flex items-center gap-1">Định vị <i class="fa-solid fa-arrow-right text-[9px]"></i></span>
          </div>

          <!-- Trường Sa -->
          <div onclick="focusTruongSa()" class="p-2.5 rounded-xl bg-slate-50 border border-slate-200/70 card-zoom">
            <div class="h-20 rounded-lg bg-cover bg-center mb-2 relative" style="background-image: url('https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=400&q=80');">
              <span class="absolute top-1.5 left-1.5 bg-emerald-600/90 text-white text-[9px] px-2 py-0.5 rounded font-bold">Trường Sa</span>
            </div>
            <h3 class="text-xs font-bold text-slate-800">Quần đảo Trường Sa</h3>
            <p class="text-[10px] text-slate-500 mt-0.5 line-clamp-2">Nằm ở phía Nam Biển Đông, huyện Trường Sa, Khánh Hòa.</p>
            <span class="text-[11px] text-blue-600 font-semibold mt-1.5 inline-flex items-center gap-1">Định vị <i class="fa-solid fa-arrow-right text-[9px]"></i></span>
          </div>
        </div>
      </div>
    </section>

    <!-- ROW 2: VIỆT NAM CÓ GÌ? | KHÁM PHÁ 3 MIỀN | ĐẶC SẢN 3 MIỀN -->
    <section class="grid grid-cols-1 lg:grid-cols-12 gap-5">
      <!-- VIỆT NAM CÓ GÌ? -->
      <div class="lg:col-span-4 bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex flex-col justify-between">
        <div>
          <h2 class="text-sm font-bold text-slate-900">Việt Nam có gì?</h2>
          <p class="text-[11px] text-slate-500 mt-0.5">Việt Nam là đất nước có cảnh quan thiên nhiên đa dạng, văn hóa lâu đời.</p>
        </div>
        <div class="grid grid-cols-2 gap-3 mt-4">
          <!-- ĐÃ CẬP NHẬT: Ô Thiên nhiên là Link chuyển trang -->
          <a href="thien_nhien.php" class="block p-3 bg-emerald-50/60 hover:bg-emerald-100/60 rounded-xl text-center border border-emerald-100/60 transition card-zoom">
            <div class="w-8 h-8 mx-auto rounded-lg bg-emerald-500 text-white flex items-center justify-center mb-1.5"><i class="fa-solid fa-mountain-sun"></i></div>
            <h4 class="text-xs font-bold text-slate-800">Thiên nhiên</h4>
            <p class="text-[10px] text-slate-400 mt-0.5">Núi rừng, ruộng bậc thang</p>
          </a>
          <!-- ĐÃ CẬP NHẬT: Ô Văn hóa là Link chuyển trang -->
          <a href="van_hoa.php" class="block p-3 bg-amber-50/60 hover:bg-amber-100/60 rounded-xl text-center border border-amber-100/60 transition card-zoom">
            <div class="w-8 h-8 mx-auto rounded-lg bg-amber-500 text-white flex items-center justify-center mb-1.5"><i class="fa-solid fa-landmark-dome"></i></div>
            <h4 class="text-xs font-bold text-slate-800">Văn hóa</h4>
            <p class="text-[10px] text-slate-400 mt-0.5">Di sản ngàn năm</p>
          </a>
          <!-- ĐÃ CẬP NHẬT: Ô Ẩm thực là Link chuyển trang -->
          <a href="am_thuc.php" class="block p-3 bg-orange-50/60 hover:bg-orange-100/60 rounded-xl text-center border border-orange-100/60 transition card-zoom">
            <div class="w-8 h-8 mx-auto rounded-lg bg-orange-500 text-white flex items-center justify-center mb-1.5"><i class="fa-solid fa-utensils"></i></div>
            <h4 class="text-xs font-bold text-slate-800">Ẩm thực</h4>
            <p class="text-[10px] text-slate-400 mt-0.5">Hương vị 3 miền</p>
          </a>
          <!-- ĐÃ CẬP NHẬT: Ô Biển đảo là Link chuyển trang -->
          <a href="bien_dao.php" class="block p-3 bg-sky-50/60 hover:bg-sky-100/60 rounded-xl text-center border border-sky-100/60 transition card-zoom">
            <div class="w-8 h-8 mx-auto rounded-lg bg-sky-500 text-white flex items-center justify-center mb-1.5"><i class="fa-solid fa-water"></i></div>
            <h4 class="text-xs font-bold text-slate-800">Biển đảo</h4>
            <p class="text-[10px] text-slate-400 mt-0.5">Hơn 3000 hòn đảo</p>
          </a>
        </div>
      </div>

      <!-- KHÁM PHÁ 3 MIỀN -->
      <div class="lg:col-span-4 bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex flex-col justify-between">
        <div>
          <h2 class="text-sm font-bold text-slate-900">Khám phá 3 miền</h2>
          <p class="text-[11px] text-slate-400 mt-0.5">Mỗi miền một nét đẹp riêng, trải nghiệm khó quên.</p>
        </div>
        <div class="grid grid-cols-3 gap-2.5 mt-3">
          <a href="mien_bac.php" class="border border-slate-100 rounded-xl overflow-hidden card-zoom bg-slate-50 flex flex-col justify-between hover:shadow-md transition">
            <div class="h-20 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1528127269322-539801943592?auto=format&fit=crop&w=300&q=80');"></div>
            <div class="p-2 text-center flex-1 flex flex-col justify-between">
              <div>
                <h4 class="font-bold text-[11px] text-slate-800">Miền Bắc</h4>
                <p class="text-[9px] text-slate-500 line-clamp-1">Hà Nội • Hạ Long</p>
              </div>
              <span class="mt-2 w-full py-1 bg-emerald-600 hover:bg-emerald-700 text-white rounded text-[10px] font-semibold block text-center">Khám phá →</span>
            </div>
          </a>
          <a href="mien_trung.php" class="border border-slate-100 rounded-xl overflow-hidden card-zoom bg-slate-50 flex flex-col justify-between hover:shadow-md transition">
            <div class="h-20 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1559592413-7cec4d0cae2b?auto=format&fit=crop&w=300&q=80');"></div>
            <div class="p-2 text-center flex-1 flex flex-col justify-between">
              <div>
                <h4 class="font-bold text-[11px] text-slate-800">Miền Trung</h4>
                <p class="text-[9px] text-slate-500 line-clamp-1">Đà Nẵng • Hội An</p>
              </div>
              <span class="mt-2 w-full py-1 bg-amber-500 hover:bg-amber-600 text-white rounded text-[10px] font-semibold block text-center">Khám phá →</span>
            </div>
          </a>
          <a href="mien_nam.php" class="border border-slate-100 rounded-xl overflow-hidden card-zoom bg-slate-50 flex flex-col justify-between hover:shadow-md transition">
            <div class="h-20 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1583417319070-4a69db38a482?auto=format&fit=crop&w=300&q=80');"></div>
            <div class="p-2 text-center flex-1 flex flex-col justify-between">
              <div>
                <h4 class="font-bold text-[11px] text-slate-800">Miền Nam</h4>
                <p class="text-[9px] text-slate-500 line-clamp-1">TP HCM • Phú Quốc</p>
              </div>
              <span class="mt-2 w-full py-1 bg-sky-600 hover:bg-sky-700 text-white rounded text-[10px] font-semibold block text-center">Khám phá →</span>
            </div>
          </a>
        </div>
      </div>

      <!-- ĐẶC SẢN -->
      <div id="cuisine-box" class="lg:col-span-4 bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex flex-col justify-between">
        <div>
          <h2 class="text-sm font-bold text-slate-900">Đặc sản 3 miền</h2>
          <p class="text-[11px] text-slate-400 mt-0.5">Tinh hoa ẩm thực Việt - Hương vị khó quên</p>
        </div>
        <div class="grid grid-cols-3 gap-2.5 mt-3">
          <!-- ĐẶC SẢN MIỀN BẮC -->
          <a href="dac_san_mien_bac.php" class="border border-slate-100 rounded-xl overflow-hidden card-zoom bg-slate-50 flex flex-col justify-between hover:shadow-md transition">
            <div class="h-20 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1582878826629-29b7ad1cdc43?auto=format&fit=crop&w=300&q=80');"></div>
            <div class="p-2 text-center flex-1 flex flex-col justify-between">
              <div>
                <h4 class="font-bold text-[11px] text-slate-800">Miền Bắc</h4>
                <p class="text-[9px] text-slate-500 line-clamp-2">Phở (Hà Nội) • Chả mực (Quảng Ninh) • Bánh đa cua (Hải Phòng)</p>
              </div>
              <span class="mt-2 w-full py-1 bg-emerald-600 hover:bg-emerald-700 text-white rounded text-[10px] font-semibold block text-center transition">Xem đặc sản →</span>
            </div>
          </a>
          <!-- ĐẶC SẢN MIỀN TRUNG -->
          <a href="dac_san_mien_trung.php" class="border border-slate-100 rounded-xl overflow-hidden card-zoom bg-slate-50 flex flex-col justify-between hover:shadow-md transition">
            <div class="h-20 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1503764654157-724d271926fb?auto=format&fit=crop&w=300&q=80');"></div>
            <div class="p-2 text-center flex-1 flex flex-col justify-between">
              <div>
                <h4 class="font-bold text-[11px] text-slate-800">Miền Trung</h4>
                <p class="text-[9px] text-slate-500 line-clamp-2">Bún bò (Huế) • Mì Quảng (Đà Nẵng) • Cao lầu (Quảng Nam)</p>
              </div>
              <span class="mt-2 w-full py-1 bg-amber-500 hover:bg-amber-600 text-white rounded text-[10px] font-semibold block text-center transition">Xem đặc sản →</span>
            </div>
          </a>
          <!-- ĐẶC SẢN MIỀN NAM -->
          <a href="dac_san_mien_nam.php" class="border border-slate-100 rounded-xl overflow-hidden card-zoom bg-slate-50 flex flex-col justify-between hover:shadow-md transition">
            <div class="h-20 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1555126634-323283e090fa?auto=format&fit=crop&w=300&q=80');"></div>
            <div class="p-2 text-center flex-1 flex flex-col justify-between">
              <div>
                <h4 class="font-bold text-[11px] text-slate-800">Miền Nam</h4>
                <p class="text-[9px] text-slate-500 line-clamp-2">Cơm tấm (Sài Gòn) • Hủ tiếu (Tiền Giang) • Kẹo dừa (Bến Tre)</p>
              </div>
              <span class="mt-2 w-full py-1 bg-sky-600 hover:bg-sky-700 text-white rounded text-[10px] font-semibold block text-center transition">Xem đặc sản →</span>
            </div>
          </a>
        </div>
      </div>
    </section>

    <!-- ROW 3: ĐIỂM ĐẾN NỔI BẬT | KHÁM PHÁ THEO SỞ THÍCH | AI DU LỊCH & CẨM NANG -->
    <section class="grid grid-cols-1 lg:grid-cols-12 gap-5">
      <!-- ĐIỂM ĐẾN NỔI BẬT -->
      <div class="lg:col-span-4 bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex flex-col justify-between">
        <div>
          <div class="flex items-center justify-between">
            <div>
              <h2 class="text-sm font-bold text-slate-900">Điểm đến nổi bật</h2>
              <p class="text-[10px] text-slate-400">Những địa danh không thể bỏ lỡ</p>
            </div>
            <a href="diem_den_noi_bat.php" class="text-[10px] text-blue-600 font-semibold hover:underline">Xem tất cả →</a>
          </div>
          <div class="flex gap-1.5 my-3 text-[10px] font-medium" id="home-dest-tabs">
            <button type="button" onclick="filterHomeDest('all', this)" class="dest-btn active px-2.5 py-1 bg-emerald-600 text-white rounded-full transition">Tất cả</button>
            <button type="button" onclick="filterHomeDest('bac', this)" class="dest-btn px-2.5 py-1 bg-slate-100 text-slate-600 rounded-full hover:bg-slate-200 transition">Miền Bắc</button>
            <button type="button" onclick="filterHomeDest('trung', this)" class="dest-btn px-2.5 py-1 bg-slate-100 text-slate-600 rounded-full hover:bg-slate-200 transition">Miền Trung</button>
            <button type="button" onclick="filterHomeDest('nam', this)" class="dest-btn px-2.5 py-1 bg-slate-100 text-slate-600 rounded-full hover:bg-slate-200 transition">Miền Nam</button>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-2.5" id="home-dest-grid">
          <!-- Item 1: Vịnh Hạ Long -->
          <a href="diem_den_noi_bat.php" data-region="bac" class="home-dest-item p-2 border border-slate-100 rounded-xl bg-slate-50 card-zoom block hover:shadow-md transition">
            <div class="h-16 rounded-lg bg-cover bg-center mb-1.5" style="background-image: url('https://images.unsplash.com/photo-1528127269322-539801943592?auto=format&fit=crop&w=300&q=80');"></div>
            <div class="flex items-center justify-between">
              <h4 class="font-bold text-[11px] text-slate-800 truncate">Vịnh Hạ Long</h4>
              <span class="text-[8px] bg-red-100 text-red-700 font-extrabold px-1 rounded">Quảng Ninh</span>
            </div>
            <p class="text-[9px] text-slate-400 mt-0.5"><i class="fa-solid fa-star text-amber-500"></i> 4.9 • Kỳ quan</p>
          </a>
          <!-- Item 2: Hội An -->
          <a href="diem_den_noi_bat.php" data-region="trung" class="home-dest-item p-2 border border-slate-100 rounded-xl bg-slate-50 card-zoom block hover:shadow-md transition">
            <div class="h-16 rounded-lg bg-cover bg-center mb-1.5" style="background-image: url('https://images.unsplash.com/photo-1559592413-7cec4d0cae2b?auto=format&fit=crop&w=300&q=80');"></div>
            <div class="flex items-center justify-between">
              <h4 class="font-bold text-[11px] text-slate-800 truncate">Phố cổ Hội An</h4>
              <span class="text-[8px] bg-amber-100 text-amber-800 font-extrabold px-1 rounded">Quảng Nam</span>
            </div>
            <p class="text-[9px] text-slate-400 mt-0.5"><i class="fa-solid fa-star text-amber-500"></i> 4.9 • Di sản</p>
          </a>
          <!-- Item 3: Phú Quốc -->
          <a href="diem_den_noi_bat.php" data-region="nam" class="home-dest-item p-2 border border-slate-100 rounded-xl bg-slate-50 card-zoom block hover:shadow-md transition">
            <div class="h-16 rounded-lg bg-cover bg-center mb-1.5" style="background-image: url('https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=300&q=80');"></div>
            <div class="flex items-center justify-between">
              <h4 class="font-bold text-[11px] text-slate-800 truncate">Đảo Phú Quốc</h4>
              <span class="text-[8px] bg-sky-100 text-sky-800 font-extrabold px-1 rounded">Kiên Giang</span>
            </div>
            <p class="text-[9px] text-slate-400 mt-0.5"><i class="fa-solid fa-star text-amber-500"></i> 4.9 • Đảo Ngọc</p>
          </a>
          <!-- Item 4: Sa Pa -->
          <a href="diem_den_noi_bat.php" data-region="bac" class="home-dest-item p-2 border border-slate-100 rounded-xl bg-slate-50 card-zoom block hover:shadow-md transition">
            <div class="h-16 rounded-lg bg-cover bg-center mb-1.5" style="background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=300&q=80');"></div>
            <div class="flex items-center justify-between">
              <h4 class="font-bold text-[11px] text-slate-800 truncate">Sa Pa Fansipan</h4>
              <span class="text-[8px] bg-emerald-100 text-emerald-800 font-extrabold px-1 rounded">Lào Cai</span>
            </div>
            <p class="text-[9px] text-slate-400 mt-0.5"><i class="fa-solid fa-star text-amber-500"></i> 4.8 • Săn mây</p>
          </a>
          <!-- Extra 5: Cầu Vàng Bà Nà (trung) -->
          <a href="diem_den_noi_bat.php" data-region="trung" class="home-dest-item hidden p-2 border border-slate-100 rounded-xl bg-slate-50 card-zoom block hover:shadow-md transition">
            <div class="h-16 rounded-lg bg-cover bg-center mb-1.5" style="background-image: url('https://images.unsplash.com/photo-1559592413-7cec4d0cae2b?auto=format&fit=crop&w=300&q=80');"></div>
            <div class="flex items-center justify-between">
              <h4 class="font-bold text-[11px] text-slate-800 truncate">Cầu Vàng Bà Nà</h4>
              <span class="text-[8px] bg-amber-100 text-amber-800 font-extrabold px-1 rounded">Đà Nẵng</span>
            </div>
            <p class="text-[9px] text-slate-400 mt-0.5"><i class="fa-solid fa-star text-amber-500"></i> 4.9 • Kỳ quan</p>
          </a>
          <!-- Extra 6: Cố đô Huế (trung) -->
          <a href="diem_den_noi_bat.php" data-region="trung" class="home-dest-item hidden p-2 border border-slate-100 rounded-xl bg-slate-50 card-zoom block hover:shadow-md transition">
            <div class="h-16 rounded-lg bg-cover bg-center mb-1.5" style="background-image: url('https://images.unsplash.com/photo-1583417319070-4a69db38a482?auto=format&fit=crop&w=300&q=80');"></div>
            <div class="flex items-center justify-between">
              <h4 class="font-bold text-[11px] text-slate-800 truncate">Cố đô Huế</h4>
              <span class="text-[8px] bg-amber-100 text-amber-800 font-extrabold px-1 rounded">Huế</span>
            </div>
            <p class="text-[9px] text-slate-400 mt-0.5"><i class="fa-solid fa-star text-amber-500"></i> 4.8 • Đại Nội</p>
          </a>
          <!-- Extra 7: Tràng An (bac) -->
          <a href="diem_den_noi_bat.php" data-region="bac" class="home-dest-item hidden p-2 border border-slate-100 rounded-xl bg-slate-50 card-zoom block hover:shadow-md transition">
            <div class="h-16 rounded-lg bg-cover bg-center mb-1.5" style="background-image: url('https://images.unsplash.com/photo-1570789210967-2cac24afeb00?auto=format&fit=crop&w=300&q=80');"></div>
            <div class="flex items-center justify-between">
              <h4 class="font-bold text-[11px] text-slate-800 truncate">Tràng An</h4>
              <span class="text-[8px] bg-emerald-100 text-emerald-800 font-extrabold px-1 rounded">Ninh Bình</span>
            </div>
            <p class="text-[9px] text-slate-400 mt-0.5"><i class="fa-solid fa-star text-amber-500"></i> 4.9 • Non nước</p>
          </a>
          <!-- Extra 8: Côn Đảo (nam) -->
          <a href="diem_den_noi_bat.php" data-region="nam" class="home-dest-item hidden p-2 border border-slate-100 rounded-xl bg-slate-50 card-zoom block hover:shadow-md transition">
            <div class="h-16 rounded-lg bg-cover bg-center mb-1.5" style="background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=300&q=80');"></div>
            <div class="flex items-center justify-between">
              <h4 class="font-bold text-[11px] text-slate-800 truncate">Côn Đảo</h4>
              <span class="text-[8px] bg-sky-100 text-sky-800 font-extrabold px-1 rounded">Vũng Tàu</span>
            </div>
            <p class="text-[9px] text-slate-400 mt-0.5"><i class="fa-solid fa-star text-amber-500"></i> 4.9 • Tâm linh</p>
          </a>
          <!-- Extra 9: Chợ nổi Cái Răng (nam) -->
          <a href="diem_den_noi_bat.php" data-region="nam" class="home-dest-item hidden p-2 border border-slate-100 rounded-xl bg-slate-50 card-zoom block hover:shadow-md transition">
            <div class="h-16 rounded-lg bg-cover bg-center mb-1.5" style="background-image: url('https://images.unsplash.com/photo-1606787366850-de6330128bfc?auto=format&fit=crop&w=300&q=80');"></div>
            <div class="flex items-center justify-between">
              <h4 class="font-bold text-[11px] text-slate-800 truncate">Chợ Cái Răng</h4>
              <span class="text-[8px] bg-sky-100 text-sky-800 font-extrabold px-1 rounded">Cần Thơ</span>
            </div>
            <p class="text-[9px] text-slate-400 mt-0.5"><i class="fa-solid fa-star text-amber-500"></i> 4.7 • Sông nước</p>
          </a>
        </div>
      </div>

      <!-- KHÁM PHÁ THEO SỞ THÍCH -->
      <div class="lg:col-span-3 bg-white p-5 rounded-2xl border border-slate-100 shadow-sm flex flex-col justify-between">
        <div>
          <h2 class="text-sm font-bold text-slate-900">Khám phá theo sở thích</h2>
          <p class="text-[10px] text-slate-400 mt-0.5">Bạn muốn chuyến đi như thế nào?</p>
        </div>
        <div class="grid grid-cols-4 gap-2 my-2 text-center">
          <a href="bien_dao.php" class="block p-2 rounded-xl bg-sky-50 hover:bg-sky-100 transition cursor-pointer card-zoom">
            <i class="fa-solid fa-water text-sky-500 text-sm mb-1 block"></i><span class="text-[9px] font-medium text-slate-700">Biển</span>
          </a>
          <a href="thien_nhien.php" class="block p-2 rounded-xl bg-emerald-50 hover:bg-emerald-100 transition cursor-pointer card-zoom">
            <i class="fa-solid fa-mountain text-emerald-500 text-sm mb-1 block"></i><span class="text-[9px] font-medium text-slate-700">Núi</span>
          </a>
          <a href="van_hoa.php" class="block p-2 rounded-xl bg-amber-50 hover:bg-amber-100 transition cursor-pointer card-zoom">
            <i class="fa-solid fa-landmark text-amber-500 text-sm mb-1 block"></i><span class="text-[9px] font-medium text-slate-700">Văn hóa</span>
          </a>
          <a href="am_thuc.php" class="block p-2 rounded-xl bg-orange-50 hover:bg-orange-100 transition cursor-pointer card-zoom">
            <i class="fa-solid fa-bowl-rice text-orange-500 text-sm mb-1 block"></i><span class="text-[9px] font-medium text-slate-700">Ẩm thực</span>
          </a>
          <a href="gia_dinh.php" class="block p-2 rounded-xl bg-rose-50 hover:bg-rose-100 transition cursor-pointer card-zoom">
            <i class="fa-solid fa-people-roof text-rose-500 text-sm mb-1 block"></i><span class="text-[9px] font-medium text-slate-700">Gia đình</span>
          </a>
          <a href="cap_doi.php" class="block p-2 rounded-xl bg-pink-50 hover:bg-pink-100 transition cursor-pointer card-zoom">
            <i class="fa-solid fa-heart text-pink-500 text-sm mb-1 block"></i><span class="text-[9px] font-medium text-slate-700">Cặp đôi</span>
          </a>
          <a href="check_in.php" class="block p-2 rounded-xl bg-purple-50 hover:bg-purple-100 transition cursor-pointer card-zoom">
            <i class="fa-solid fa-camera text-purple-500 text-sm mb-1 block"></i><span class="text-[9px] font-medium text-slate-700">Check-in</span>
          </a>
          <a href="tiet_kiem.php" class="block p-2 rounded-xl bg-teal-50 hover:bg-teal-100 transition cursor-pointer card-zoom">
            <i class="fa-solid fa-wallet text-teal-500 text-sm mb-1 block"></i><span class="text-[9px] font-medium text-slate-700">Tiết kiệm</span>
          </a>
        </div>
        <a href="kham_pha_so_thich.php" class="w-full py-1.5 bg-slate-50 hover:bg-slate-100 text-slate-600 border border-slate-200 rounded-lg text-xs font-semibold transition cursor-pointer block text-center">
          Xem tất cả gợi ý →
        </a>
      </div>

      <!-- AI DU LỊCH & CẨM NANG -->
      <div id="ai-box" class="lg:col-span-5 grid grid-cols-1 sm:grid-cols-2 gap-4">
        <!-- AI Card -->
        <div class="bg-gradient-to-br from-indigo-900 via-slate-900 to-indigo-950 text-white p-4 rounded-2xl flex flex-col justify-between shadow-sm cursor-pointer card-zoom">
          <div>
            <div class="flex items-center gap-2 mb-2">
              <div class="w-7 h-7 rounded-lg bg-indigo-500/20 text-indigo-400 flex items-center justify-center text-xs">
                <i class="fa-solid fa-robot"></i>
              </div>
              <div>
                <h3 class="font-bold text-xs">AI Du lịch Việt Nam</h3>
                <p class="text-[9px] text-indigo-200">Lên kế hoạch cùng AI</p>
              </div>
            </div>
            <div class="space-y-2 my-2">
              <input type="text" id="ai-quick-dest" placeholder="Bạn muốn đi đâu?" class="w-full px-3 py-1.5 bg-white/10 border border-white/20 rounded-lg text-[11px] placeholder-slate-400 text-white outline-none">
              <input type="text" id="ai-quick-days" placeholder="Đi trong bao nhiêu ngày?" class="w-full px-3 py-1.5 bg-white/10 border border-white/20 rounded-lg text-[11px] placeholder-slate-400 text-white outline-none">
            </div>
          </div>
          <button type="button" onclick="openAiChatWithPlan()" class="w-full py-1.5 bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white font-bold rounded-lg text-xs shadow-md transition flex items-center justify-center gap-1.5">
            <i class="fa-solid fa-wand-magic-sparkles text-[10px]"></i> Tạo lịch trình
          </button>
        </div>

        <!-- Cẩm Nang -->
        <div class="bg-white p-4 rounded-2xl border border-slate-100 shadow-sm flex flex-col justify-between">
          <div>
            <h3 class="font-bold text-xs text-slate-900">Cẩm nang du lịch</h3>
            <p class="text-[10px] text-slate-400">Kinh nghiệm cho chuyến đi</p>
            <div class="space-y-2 mt-2">
              <div class="flex gap-2 items-center cursor-pointer group">
                <div class="w-10 h-10 rounded-md bg-cover bg-center shrink-0" style="background-image: url('https://images.unsplash.com/photo-1559592413-7cec4d0cae2b?auto=format&fit=crop&w=150&q=80');"></div>
                <div>
                  <h4 class="text-[10px] font-bold text-slate-800 group-hover:text-blue-600 line-clamp-1">Kinh nghiệm Đà Nẵng 3 triệu</h4>
                  <span class="text-[8px] text-slate-400">3 phút đọc</span>
                </div>
              </div>
              <div class="flex gap-2 items-center cursor-pointer group">
                <div class="w-10 h-10 rounded-md bg-cover bg-center shrink-0" style="background-image: url('https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=150&q=80');"></div>
                <div>
                  <h4 class="text-[10px] font-bold text-slate-800 group-hover:text-blue-600 line-clamp-1">Kinh nghiệm đi Phú Quốc</h4>
                  <span class="text-[8px] text-slate-400">4 phút đọc</span>
                </div>
              </div>
            </div>
          </div>
          <a href="#" class="text-right text-[10px] font-semibold text-blue-600 hover:underline mt-2">Đọc thêm →</a>
        </div>
      </div>
    </section>

  </main>

  <!-- FOOTER BANNER & LINKS -->
  <footer class="bg-slate-950 text-slate-400 text-xs py-10 border-t border-slate-900 mt-10">
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 grid grid-cols-1 md:grid-cols-4 gap-8">
      <div>
        <div class="flex items-center gap-2 mb-3 text-white font-bold text-sm">
          <i class="fa-solid fa-umbrella-beach text-amber-500"></i> VIETNAM TRAVEL
        </div>
        <p class="text-[11px] text-slate-500 leading-relaxed">Cổng thông tin du lịch hàng đầu Việt Nam. Tôn vinh vẻ đẹp đất nước, con người và gìn giữ chủ quyền biển đảo thiêng liêng.</p>
      </div>
      <div>
        <h4 class="text-white font-semibold mb-2.5 text-xs">Khám phá</h4>
        <ul class="space-y-1 text-[11px]">
          <li><a href="#" class="hover:text-white transition">Miền Bắc</a></li>
          <li><a href="#" class="hover:text-white transition">Miền Trung</a></li>
          <li><a href="#" class="hover:text-white transition">Miền Nam</a></li>
          <li><a href="#" class="hover:text-white transition">Hoàng Sa & Trường Sa</a></li>
        </ul>
      </div>
      <div>
        <h4 class="text-white font-semibold mb-2.5 text-xs">Hỗ trợ & Liên hệ</h4>
        <ul class="space-y-1 text-[11px]">
          <li><i class="fa-solid fa-envelope mr-1.5 text-slate-500"></i> loctruong.111103@gmail.com</li>
          <li><i class="fa-solid fa-phone mr-1.5 text-slate-500"></i> 0394284916</li>
          <li><i class="fa-solid fa-location-dot mr-1.5 text-slate-500"></i> 151 Bùi Tá Hán, Khuê Mỹ, Ngũ Hành Sơn, Đà Nẵng</li>
        </ul>
      </div>
      <div>
        <h4 class="text-white font-semibold mb-2.5 text-xs">Theo dõi chúng tôi</h4>
        <div class="flex gap-2.5 text-slate-400">
          <a href="#" class="w-7 h-7 rounded-full bg-slate-900 border border-slate-800 flex items-center justify-center hover:text-white transition cursor-pointer"><i class="fa-brands fa-facebook-f text-xs"></i></a>
          <a href="#" class="w-7 h-7 rounded-full bg-slate-900 border border-slate-800 flex items-center justify-center hover:text-white transition cursor-pointer"><i class="fa-brands fa-tiktok text-xs"></i></a>
          <a href="#" class="w-7 h-7 rounded-full bg-slate-900 border border-slate-800 flex items-center justify-center hover:text-white transition cursor-pointer"><i class="fa-brands fa-youtube text-xs"></i></a>
        </div>
      </div>
    </div>
    <div class="text-center pt-8 mt-8 border-t border-slate-900 text-[11px] text-slate-600">
      © 2026 Vietnam Travel. All rights reserved.
    </div>
  </footer>

  <!-- ========================================== -->
  <!-- SCRIPT 1: LOGIC YÊU CẦU ĐĂNG NHẬP & BỘ LỌC ĐIỂM ĐẾN -->
  <!-- ========================================== -->
  <script>
    function filterHomeDest(region, btnElement) {
      const buttons = document.querySelectorAll('#home-dest-tabs .dest-btn');
      buttons.forEach(btn => {
        btn.classList.remove('bg-emerald-600', 'text-white');
        btn.classList.add('bg-slate-100', 'text-slate-600');
      });
      btnElement.classList.add('bg-emerald-600', 'text-white');
      btnElement.classList.remove('bg-slate-100', 'text-slate-600');

      const items = document.querySelectorAll('#home-dest-grid .home-dest-item');
      if (region === 'all') {
        items.forEach((item, idx) => {
          if (idx < 4) item.classList.remove('hidden');
          else item.classList.add('hidden');
        });
      } else {
        items.forEach(item => {
          if (item.getAttribute('data-region') === region) {
            item.classList.remove('hidden');
          } else {
            item.classList.add('hidden');
          }
        });
      }
    }

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

    function openAiChatWithPlan() {
      const dest = document.getElementById('ai-quick-dest')?.value.trim();
      const days = document.getElementById('ai-quick-days')?.value.trim();
      if (typeof toggleAndroidChat === 'function') {
        toggleAndroidChat(true);
        if (dest || days) {
          let question = 'Lên kế hoạch du lịch';
          if (dest) question += ' ' + dest;
          if (days) question += ' trong ' + days;
          question += ' giúp mình nhé!';
          setTimeout(() => {
            if (typeof sendQuickPrompt === 'function') {
              sendQuickPrompt(question);
            }
          }, 350);
        }
      }
    }

    document.addEventListener('click', function(e) {
      const isLoggedIn = localStorage.getItem('isLoggedIn') === 'true';

      // Cho phép bấm xem các trang bài viết khám phá & nút lọc & bong bóng chat AI
      if (e.target.closest('#ai-chat-bubble-container, #android-chat-head, #android-chat-window, a[href*="thien_nhien.php"], a[href*="van_hoa.php"], a[href*="am_thuc.php"], a[href*="bien_dao.php"], a[href*="mien_bac.php"], a[href*="mien_trung.php"], a[href*="mien_nam.php"], a[href*="dac_san_mien_bac.php"], a[href*="dac_san_mien_trung.php"], a[href*="dac_san_mien_nam.php"], a[href*="diem_den_noi_bat.php"], a[href*="kham_pha_so_thich.php"], a[href*="gia_dinh.php"], a[href*="cap_doi.php"], a[href*="check_in.php"], a[href*="tiet_kiem.php"], button[onclick*="filterHomeDest"], button[onclick*="openAiChatWithPlan"]')) {
        return;
      }

      const clickableElement = e.target.closest('a, button, input, .cursor-pointer, .card-zoom, .leaflet-container');

      if (clickableElement && !isLoggedIn) {
        if(clickableElement.id === 'auth-btn') {
          window.location.href = 'auth.php'; // Đã sửa
          return;
        }
        e.preventDefault();
        e.stopPropagation();
        window.location.href = 'auth.php'; // Đã sửa
      }
    }, true); 
  </script>

  <!-- ========================================== -->
  <!-- SCRIPT 2: BẢN ĐỒ GOOGLE MAPS (QUA LEAFLET) VÀ THREE.JS -->
  <!-- ========================================== -->
  <script>
    let map;

    document.addEventListener('DOMContentLoaded', () => {
      initRealLeafletMap();
      initThreeHeroBanner();
    });

    function initRealLeafletMap() {
      // 1. Giới hạn khung nhìn bản đồ chỉ ở Việt Nam
      const vietnamBounds = [
        [7.0, 102.0], 
        [24.0, 115.0] 
      ];

      // 2. Định nghĩa layer Google Maps
      const googleSatellite = L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', { maxZoom: 20 });
      const googleRoadmap = L.tileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', { maxZoom: 20 });

      // 3. Khởi tạo bản đồ
      map = L.map('vietnam-real-map', {
        zoomControl: true,
        attributionControl: false,
        maxBounds: vietnamBounds,
        maxBoundsViscosity: 1.0,  
        minZoom: 5,               
        layers: [googleRoadmap]   
      }).setView([15.8, 108.5], 5);

      // 4. Thêm nút chuyển đổi Vệ Tinh / Đường phố
      const baseMaps = {
        "🗺️ Bản đồ Đường phố": googleRoadmap,
        "🌍 Bản đồ Vệ tinh": googleSatellite
      };
      L.control.layers(baseMaps, null, { position: 'bottomleft' }).addTo(map);

      // 5. Thêm Marker Hoàng Sa & Trường Sa
      const islandIcon = (name) => L.divIcon({
        className: 'custom-island-marker',
        html: `<div class="island-badge"><span style="color:#ef4444;">★</span> ${name}</div>`,
        iconSize: [110, 24],
        iconAnchor: [55, 12]
      });
      L.marker([16.5, 112.0], { icon: islandIcon('Q.Đ Hoàng Sa') }).addTo(map);
      L.marker([10.0, 114.5], { icon: islandIcon('Q.Đ Trường Sa') }).addTo(map);
    }

    function resetMapView() { if (map) map.setView([15.8, 108.5], 5); }
    function focusHoangSa() { if (map) map.flyTo([16.5, 112.0], 7); }
    function focusTruongSa() { if (map) map.flyTo([10.0, 114.5], 7); }

    function initThreeHeroBanner() {
      const canvas = document.getElementById('three-hero-canvas');
      if (!canvas) return;

      const parent = canvas.parentElement;
      let width = parent.clientWidth;
      let height = parent.clientHeight;

      const scene = new THREE.Scene();
      const camera = new THREE.PerspectiveCamera(50, width / height, 0.1, 1000);
      camera.position.set(0, 18, 30);
      camera.lookAt(0, 0, 0);

      const renderer = new THREE.WebGLRenderer({ canvas: canvas, alpha: true, antialias: true });
      renderer.setSize(width, height);
      renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

      const numX = 55, numZ = 28;
      const count = numX * numZ;
      const geometry = new THREE.BufferGeometry();
      const positions = new Float32Array(count * 3);

      let p = 0;
      for (let ix = 0; ix < numX; ix++) {
        for (let iz = 0; iz < numZ; iz++) {
          positions[p] = (ix - numX / 2) * 1.5;
          positions[p + 1] = 0;
          positions[p + 2] = (iz - numZ / 2) * 1.5;
          p += 3;
        }
      }
      geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));

      const material = new THREE.PointsMaterial({
        color: 0x38bdf8,
        size: 0.35,
        transparent: true,
        opacity: 0.7,
        blending: THREE.AdditiveBlending
      });

      const waveParticles = new THREE.Points(geometry, material);
      scene.add(waveParticles);

      let step = 0;
      function animate() {
        requestAnimationFrame(animate);
        step += 0.04;
        const pos = geometry.attributes.position.array;
        let index = 0;
        for (let ix = 0; ix < numX; ix++) {
          for (let iz = 0; iz < numZ; iz++) {
            pos[index + 1] = (Math.sin((ix + step) * 0.35) * 1.2) + (Math.sin((iz + step) * 0.5) * 1.0);
            index += 3;
          }
        }
        geometry.attributes.position.needsUpdate = true;
        renderer.render(scene, camera);
      }
      animate();

      window.addEventListener('resize', () => {
        width = parent.clientWidth;
        height = parent.clientHeight;
        camera.aspect = width / height;
        camera.updateProjectionMatrix();
        renderer.setSize(width, height);
      });
    }
  </script>

  <!-- BONG BÓNG CHAT AI ANDROID -->
  <?php include 'chat_bubble_ai.php'; ?>
</body>
</html>