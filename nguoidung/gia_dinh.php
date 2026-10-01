<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Du lịch Gia đình - VIETNAM TRAVEL</title>
  
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@1,600;1,700&display=swap" rel="stylesheet">
  
  <style>
    body { font-family: 'Plus Jakarta Sans', sans-serif; scroll-behavior: smooth; }
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
    <div class="flex items-center justify-between mb-6">
      <a href="index.php" class="inline-flex items-center gap-2 text-slate-500 hover:text-blue-600 font-semibold transition text-[13px]">
        <i class="fa-solid fa-arrow-left"></i> Quay lại trang chủ
      </a>
      <div class="text-xs text-slate-400">
        Khám phá theo sở thích / <span class="text-rose-600 font-bold">Du lịch Gia đình</span>
      </div>
    </div>

    <!-- ẢNH BÌA BÀI VIẾT -->
    <div class="w-full h-[350px] sm:h-[450px] rounded-3xl bg-cover bg-center relative overflow-hidden shadow-lg mb-8" style="background-image: url('https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=1200&q=80');">
      <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent flex items-end p-8 sm:p-12">
        <div>
          <span class="px-3 py-1.5 bg-rose-500 text-white text-[11px] font-bold rounded-full mb-3 inline-flex items-center gap-1.5 uppercase tracking-wider">
            <i class="fa-solid fa-people-roof"></i> Phong cách du lịch
          </span>
          <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-3">👨‍👩‍👧‍👦 Du Lịch Gia Đình Việt Nam</h1>
          <p class="text-slate-200 text-sm font-medium max-w-2xl leading-relaxed">
            Hành trình gắn kết yêu thương giữa các thế hệ. Cẩm nang trọn vẹn về điểm đến an toàn, khu nghỉ dưỡng tiện nghi và hoạt động thú vị cho cả ông bà lẫn trẻ nhỏ.
          </p>
        </div>
      </div>
    </div>

    <!-- NỘI DUNG BÀI VIẾT -->
    <div class="bg-white rounded-3xl p-6 sm:p-12 shadow-sm border border-slate-100">
      <div class="max-w-none text-slate-600 space-y-8 leading-loose text-justify">
        
        <!-- MỞ ĐẦU -->
        <p class="text-[15px] font-medium text-slate-800 bg-rose-50/60 p-5 rounded-2xl border-l-4 border-rose-500">
          Du lịch gia đình là cơ hội tuyệt vời để ông bà, cha mẹ và con trẻ cùng gác lại bộn bề cuộc sống, chia sẻ những khoảnh khắc ấm áp và tạo nên những kỷ niệm vô giá. Một chuyến đi gia đình thành công luôn đòi hỏi sự cân bằng tinh tế giữa <strong>sự tiện nghi, an toàn cho người cao tuổi</strong> và <strong>không gian vui chơi khám phá đầy ắp năng lượng cho trẻ nhỏ</strong>.
        </p>

        <!-- MỤC 1: TOP ĐIỂM ĐẾN GIA ĐÌNH -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2">
            <span class="text-2xl">🏖️</span> 1. Top 4 thiên đường du lịch lý tưởng cho cả gia đình
          </h2>
          <p class="mb-4">Những địa danh có hạ tầng giao thông thuận lợi, khí hậu ôn hòa và dịch vụ nghỉ dưỡng cao cấp:</p>

          <div class="space-y-6">
            <!-- Điểm 1: Phú Quốc -->
            <div class="p-5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col md:flex-row gap-5 items-center">
              <div class="w-full md:w-1/3 h-44 rounded-xl bg-cover bg-center shrink-0" style="background-image: url('https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=400&q=80');"></div>
              <div class="w-full md:w-2/3">
                <div class="flex items-center gap-2 mb-1.5">
                  <span class="text-[10px] bg-rose-100 text-rose-700 font-extrabold px-2 py-0.5 rounded-full uppercase">Kiên Giang</span>
                  <span class="text-[11px] text-amber-500 font-bold"><i class="fa-solid fa-star"></i> 4.9/5</span>
                </div>
                <h3 class="text-base font-bold text-slate-900 mb-1">Đảo Ngọc Phú Quốc – Thiên đường giải trí phức hợp</h3>
                <p class="text-xs text-slate-600 leading-relaxed mb-2">
                  Phú Quốc là lựa chọn số một cho gia đình nhờ hệ thống quần thể Vinpearl Safari (vườn thú bán hoang dã nơi trẻ em quan sát thú tự do), công viên chủ đề VinWonders, thành phố không ngủ Grand World và cáp treo vượt biển Hòn Thơm êm ái.
                </p>
                <div class="text-[11px] text-slate-500 flex items-center gap-3">
                  <span><i class="fa-solid fa-bed text-rose-500"></i> Resort bờ biển bãi cát thoai thoải</span>
                  <span><i class="fa-solid fa-plane text-blue-500"></i> Bay thẳng từ HN/HCM</span>
                </div>
              </div>
            </div>

            <!-- Điểm 2: Đà Nẵng - Hội An -->
            <div class="p-5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col md:flex-row gap-5 items-center">
              <div class="w-full md:w-1/3 h-44 rounded-xl bg-cover bg-center shrink-0" style="background-image: url('https://images.unsplash.com/photo-1559592413-7cec4d0cae2b?auto=format&fit=crop&w=400&q=80');"></div>
              <div class="w-full md:w-2/3">
                <div class="flex items-center gap-2 mb-1.5">
                  <span class="text-[10px] bg-rose-100 text-rose-700 font-extrabold px-2 py-0.5 rounded-full uppercase">Đà Nẵng & Quảng Nam</span>
                  <span class="text-[11px] text-amber-500 font-bold"><i class="fa-solid fa-star"></i> 4.9/5</span>
                </div>
                <h3 class="text-base font-bold text-slate-900 mb-1">Đà Nẵng & Phố Cổ Hội An – Thành phố đáng sống và bình yên</h3>
                <p class="text-xs text-slate-600 leading-relaxed mb-2">
                  Đà Nẵng nổi tiếng với bãi biển Mỹ Khê an toàn, sạch đẹp, hệ thống vỉa hè rộng rãi đẩy xe nôi dễ dàng. Chỉ cách 30 phút chạy xe là phố cổ Hội An cổ kính, nơi gia đình cùng thả hoa đăng, thưởng thức ẩm thực truyền thống và xem show Ký ức Hội An.
                </p>
                <div class="text-[11px] text-slate-500 flex items-center gap-3">
                  <span><i class="fa-solid fa-shield-halved text-emerald-500"></i> An ninh du lịch cực tốt</span>
                  <span><i class="fa-solid fa-utensils text-amber-500"></i> Ẩm thực phong phú, dễ ăn</span>
                </div>
              </div>
            </div>

            <!-- Điểm 3: Du thuyền Vịnh Hạ Long -->
            <div class="p-5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col md:flex-row gap-5 items-center">
              <div class="w-full md:w-1/3 h-44 rounded-xl bg-cover bg-center shrink-0" style="background-image: url('https://images.unsplash.com/photo-1528127269322-539801943592?auto=format&fit=crop&w=400&q=80');"></div>
              <div class="w-full md:w-2/3">
                <div class="flex items-center gap-2 mb-1.5">
                  <span class="text-[10px] bg-rose-100 text-rose-700 font-extrabold px-2 py-0.5 rounded-full uppercase">Quảng Ninh</span>
                  <span class="text-[11px] text-amber-500 font-bold"><i class="fa-solid fa-star"></i> 4.8/5</span>
                </div>
                <h3 class="text-base font-bold text-slate-900 mb-1">Du Thuyền Vịnh Hạ Long – Nghỉ dưỡng trọn gói 5 sao</h3>
                <p class="text-xs text-slate-600 leading-relaxed mb-2">
                  Chuyến nghỉ dưỡng 2 ngày 1 đêm trên du thuyền hạng sang giúp gia đình không phải di chuyển khách sạn nhiều lần. Ông bà thư thả ngắm hoàng hôn buông xuống vịnh đá vôi, cha mẹ thư giãn spa và trẻ nhỏ thích thú chèo thuyền kayak qua các hang động kỳ thú.
                </p>
                <div class="text-[11px] text-slate-500 flex items-center gap-3">
                  <span><i class="fa-solid fa-ship text-sky-500"></i> Trọn gói ăn uống & tham quan</span>
                  <span><i class="fa-solid fa-spa text-purple-500"></i> Thư giãn tuyệt đối</span>
                </div>
              </div>
            </div>

            <!-- Điểm 4: Nha Trang -->
            <div class="p-5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col md:flex-row gap-5 items-center">
              <div class="w-full md:w-1/3 h-44 rounded-xl bg-cover bg-center shrink-0" style="background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=400&q=80');"></div>
              <div class="w-full md:w-2/3">
                <div class="flex items-center gap-2 mb-1.5">
                  <span class="text-[10px] bg-rose-100 text-rose-700 font-extrabold px-2 py-0.5 rounded-full uppercase">Khánh Hòa</span>
                  <span class="text-[11px] text-amber-500 font-bold"><i class="fa-solid fa-star"></i> 4.8/5</span>
                </div>
                <h3 class="text-base font-bold text-slate-900 mb-1">Nha Trang – Tắm khoáng nóng & Thủy cung kỳ thú</h3>
                <p class="text-xs text-slate-600 leading-relaxed mb-2">
                  Nha Trang có Viện Hải dương học lưu giữ hàng nghìn mẫu sinh vật biển cho các bé học hỏi, cáp treo VinWonders vượt vịnh biển và suối khoáng nóng I-Resort ngâm bùn trị liệu xương khớp cực kỳ tốt cho ông bà.
                </p>
                <div class="text-[11px] text-slate-500 flex items-center gap-3">
                  <span><i class="fa-solid fa-hot-tub-person text-teal-500"></i> Trị liệu suối khoáng tự nhiên</span>
                  <span><i class="fa-solid fa-fish text-blue-500"></i> Thủy cung phong phú</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- MỤC 2: BÍ QUYẾT LÊN KẾ HOẠCH -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2">
            <span class="text-2xl">📋</span> 2. Cẩm nang chuẩn bị chuyến đi gia đình hoàn hảo
          </h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="p-4 bg-rose-50/40 rounded-2xl border border-rose-100">
              <h4 class="font-bold text-slate-900 text-sm mb-1.5 flex items-center gap-2 text-rose-800">
                <i class="fa-solid fa-clock"></i> 1. Giãn cách lịch trình hợp lý
              </h4>
              <p class="text-xs text-slate-600 leading-relaxed">
                Không nên nhồi nhét quá nhiều điểm đến. Giữ tối đa 2 điểm/ngày, luôn dành khoảng nghỉ trưa tại khách sạn từ 12h - 14h để các thành viên hồi phục thể lực và tránh nắng gắt.
              </p>
            </div>

            <div class="p-4 bg-rose-50/40 rounded-2xl border border-rose-100">
              <h4 class="font-bold text-slate-900 text-sm mb-1.5 flex items-center gap-2 text-rose-800">
                <i class="fa-solid fa-door-open"></i> 2. Ưu tiên phòng thông nhau (Connecting Room) hoặc Villa
              </h4>
              <p class="text-xs text-slate-600 leading-relaxed">
                Chọn Villa 2-3 phòng ngủ có phòng khách chung hoặc 2 phòng ngủ thông cửa giúp bố mẹ dễ dàng trông nom con cái và chăm sóc ông bà mà vẫn đảm bảo sự riêng tư.
              </p>
            </div>

            <div class="p-4 bg-rose-50/40 rounded-2xl border border-rose-100">
              <h4 class="font-bold text-slate-900 text-sm mb-1.5 flex items-center gap-2 text-rose-800">
                <i class="fa-solid fa-kit-medical"></i> 3. Chuẩn bị túi y tế chuyên biệt
              </h4>
              <p class="text-xs text-slate-600 leading-relaxed">
                Mang đủ thuốc hạ sốt, siro ho, men tiêu hóa, kem chống muỗi cho trẻ nhỏ và thuốc huyết áp, tim mạch, dầu gió cho người lớn tuổi kèm nhiệt kế điện tử.
              </p>
            </div>

            <div class="p-4 bg-rose-50/40 rounded-2xl border border-rose-100">
              <h4 class="font-bold text-slate-900 text-sm mb-1.5 flex items-center gap-2 text-rose-800">
                <i class="fa-solid fa-car-side"></i> 4. Thuê xe ô tô riêng có tài xế
              </h4>
              <p class="text-xs text-slate-600 leading-relaxed">
                Đối với gia đình từ 4-7 người, việc thuê xe trọn gói theo ngày giúp chủ động thời gian dừng đỗ, tránh say xe và không phải chờ đợi taxi dưới thời tiết nắng nóng.
              </p>
            </div>
          </div>
        </div>

        <!-- MỤC 3: CÁC SỞ THÍCH KHÁC -->
        <div class="pt-6 border-t border-slate-100">
          <h3 class="text-base font-bold text-slate-900 mb-4">Khám phá các phong cách du lịch khác:</h3>
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 text-center">
            <a href="cap_doi.php" class="p-3 bg-pink-50 hover:bg-pink-100 rounded-xl transition block border border-pink-100">
              <i class="fa-solid fa-heart text-pink-500 text-lg mb-1 block"></i>
              <span class="text-xs font-bold text-slate-800 block">Cặp đôi</span>
              <span class="text-[10px] text-pink-600">Xem ngay →</span>
            </a>
            <a href="check_in.php" class="p-3 bg-purple-50 hover:bg-purple-100 rounded-xl transition block border border-purple-100">
              <i class="fa-solid fa-camera text-purple-500 text-lg mb-1 block"></i>
              <span class="text-xs font-bold text-slate-800 block">Check-in</span>
              <span class="text-[10px] text-purple-600">Xem ngay →</span>
            </a>
            <a href="tiet_kiem.php" class="p-3 bg-teal-50 hover:bg-teal-100 rounded-xl transition block border border-teal-100">
              <i class="fa-solid fa-wallet text-teal-500 text-lg mb-1 block"></i>
              <span class="text-xs font-bold text-slate-800 block">Tiết kiệm</span>
              <span class="text-[10px] text-teal-600">Xem ngay →</span>
            </a>
            <a href="kham_pha_so_thich.php" class="p-3 bg-slate-50 hover:bg-slate-100 rounded-xl transition block border border-slate-200">
              <i class="fa-solid fa-list-check text-slate-600 text-lg mb-1 block"></i>
              <span class="text-xs font-bold text-slate-800 block">Tất cả sở thích</span>
              <span class="text-[10px] text-slate-500">Khám phá →</span>
            </a>
          </div>
        </div>

      </div>
    </div>
  </main>

  <!-- FOOTER -->
  <footer class="bg-slate-950 text-slate-400 text-xs py-10 border-t border-slate-900 mt-12">
    <div class="max-w-[1000px] mx-auto px-4 sm:px-6 text-center text-[11px] text-slate-600">
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
      if (e.target.closest('a[href], button[onclick], input')) {
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
</body>
</html>
