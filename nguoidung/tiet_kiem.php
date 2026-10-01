<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Du lịch Tiết kiệm & Phượt - VIETNAM TRAVEL</title>
  
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
        Khám phá theo sở thích / <span class="text-teal-600 font-bold">Du lịch Tiết kiệm</span>
      </div>
    </div>

    <!-- ẢNH BÌA BÀI VIẾT -->
    <div class="w-full h-[350px] sm:h-[450px] rounded-3xl bg-cover bg-center relative overflow-hidden shadow-lg mb-8" style="background-image: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1200&q=80');">
      <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent flex items-end p-8 sm:p-12">
        <div>
          <span class="px-3 py-1.5 bg-teal-600 text-white text-[11px] font-bold rounded-full mb-3 inline-flex items-center gap-1.5 uppercase tracking-wider">
            <i class="fa-solid fa-wallet"></i> Tối ưu chi phí
          </span>
          <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-3">👛 Du Lịch Tiết Kiệm & Phượt Balo</h1>
          <p class="text-slate-200 text-sm font-medium max-w-2xl leading-relaxed">
            Đi nhiều hơn với chi phí ít hơn. Cẩm nang khám phá Việt Nam trọn vẹn dành cho sinh viên và dân phượt tự túc: từ săn vé rẻ, chọn homestay đến ẩm thực đường phố ngon bổ rẻ.
          </p>
        </div>
      </div>
    </div>

    <!-- NỘI DUNG BÀI VIẾT -->
    <div class="bg-white rounded-3xl p-6 sm:p-12 shadow-sm border border-slate-100">
      <div class="max-w-none text-slate-600 space-y-8 leading-loose text-justify">
        
        <!-- MỞ ĐẦU -->
        <p class="text-[15px] font-medium text-slate-800 bg-teal-50/60 p-5 rounded-2xl border-l-4 border-teal-600">
          Du lịch không phải là đặc quyền của những người có ngân sách dồi dào. Với một kế hoạch thông minh, tinh thần sẵn sàng trải nghiệm và lòng đam mê khám phá vẻ đẹp bình dị của đất nước, bạn hoàn toàn có thể chu du khắp ba miền với chi phí vô cùng hạt dẻ mà vẫn thấm đẫm văn hóa bản địa chân thực nhất.
        </p>

        <!-- MỤC 1: TOP 4 CUNG ĐƯỜNG TIẾT KIỆM -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2">
            <span class="text-2xl">🎒</span> 1. Top 4 cung đường phượt chi phí siêu tối ưu
          </h2>
          <p class="mb-4">Những hành trình đầy ắp trải nghiệm với ngân sách cực kỳ dễ chịu:</p>

          <div class="space-y-6">
            <!-- 1. Tà Xùa -->
            <div class="p-5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col md:flex-row gap-5 items-center">
              <div class="w-full md:w-1/3 h-44 rounded-xl bg-cover bg-center shrink-0" style="background-image: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80');"></div>
              <div class="w-full md:w-2/3">
                <div class="flex items-center justify-between mb-1.5">
                  <span class="text-[10px] bg-teal-100 text-teal-700 font-extrabold px-2 py-0.5 rounded-full uppercase">Sơn La</span>
                  <span class="text-xs font-extrabold text-emerald-700 bg-emerald-100 px-2.5 py-0.5 rounded-full">~800k - 1.2Tr / người</span>
                </div>
                <h3 class="text-base font-bold text-slate-900 mb-1">Phượt Xe Máy Tà Xùa Săn Biển Mây 2N1Đ</h3>
                <p class="text-xs text-slate-600 leading-relaxed mb-2">
                  Xuất phát từ Hà Nội bằng xe máy hoặc xe giường nằm đến Bắc Yên rồi thuê xe máy lên đỉnh. Chinh phục Sống lưng khủng long Háng Đồng, đón biển mây cuồn cuộn bên mỏm cá heo và nghỉ ngơi tại các homestay gỗ view mây với giá chỉ 150k - 250k/đêm.
                </p>
                <div class="text-[11px] text-slate-500 flex items-center gap-3">
                  <span><i class="fa-solid fa-motorcycle text-teal-600"></i> Cung đường đèo tuyệt đẹp</span>
                  <span><i class="fa-solid fa-cloud text-sky-500"></i> Mùa mây: Tháng 10 - Tháng 4</span>
                </div>
              </div>
            </div>

            <!-- 2. Foodtour Hải Phòng -->
            <div class="p-5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col md:flex-row gap-5 items-center">
              <div class="w-full md:w-1/3 h-44 rounded-xl bg-cover bg-center shrink-0" style="background-image: url('https://images.unsplash.com/photo-1582878826629-29b7ad1cdc43?auto=format&fit=crop&w=400&q=80');"></div>
              <div class="w-full md:w-2/3">
                <div class="flex items-center justify-between mb-1.5">
                  <span class="text-[10px] bg-teal-100 text-teal-700 font-extrabold px-2 py-0.5 rounded-full uppercase">Hải Phòng</span>
                  <span class="text-xs font-extrabold text-emerald-700 bg-emerald-100 px-2.5 py-0.5 rounded-full">~500k - 800k / người</span>
                </div>
                <h3 class="text-base font-bold text-slate-900 mb-1">Foodtour Tàu Hỏa Hải Phòng – 24 Giờ Ăn Sập Đất Cảng</h3>
                <p class="text-xs text-slate-600 leading-relaxed mb-2">
                  Vé tàu khứ hồi Hà Nội - Hải Phòng chỉ hơn 150k. Xuống ga Hải Phòng thuê xe máy 100k/ngày để oanh tạc thiên đường ẩm thực đường phố: bánh đa cua bể (35k), pate cột đèn, bánh mì que (3k/chiếc), ốc cay chợ Cố Đạo và cà phê cốt dừa thơm béo.
                </p>
                <div class="text-[11px] text-slate-500 flex items-center gap-3">
                  <span><i class="fa-solid fa-train text-blue-600"></i> Di chuyển bằng tàu hỏa tiện lợi</span>
                  <span><i class="fa-solid fa-bowl-food text-orange-500"></i> Hơn 20 món ngon giá bình dân</span>
                </div>
              </div>
            </div>

            <!-- 3. Tàu Hỏa Di Sản Huế - Đà Nẵng -->
            <div class="p-5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col md:flex-row gap-5 items-center">
              <div class="w-full md:w-1/3 h-44 rounded-xl bg-cover bg-center shrink-0" style="background-image: url('https://images.unsplash.com/photo-1583417319070-4a69db38a482?auto=format&fit=crop&w=400&q=80');"></div>
              <div class="w-full md:w-2/3">
                <div class="flex items-center justify-between mb-1.5">
                  <span class="text-[10px] bg-teal-100 text-teal-700 font-extrabold px-2 py-0.5 rounded-full uppercase">Huế & Đà Nẵng</span>
                  <span class="text-xs font-extrabold text-emerald-700 bg-emerald-100 px-2.5 py-0.5 rounded-full">~1.8Tr - 2.5Tr / người</span>
                </div>
                <h3 class="text-base font-bold text-slate-900 mb-1">Hành Trình Tàu Hỏa Di Sản Miền Trung 3N2Đ</h3>
                <p class="text-xs text-slate-600 leading-relaxed mb-2">
                  Trải nghiệm chuyến đoàn tàu di sản "Kết nối di sản miền Trung" vượt qua đèo Hải Vân ngắm vịnh Lăng Cô xanh ngắt chỉ với 70k/vé. Ăn uống thả ga bánh bèo, bánh lọc, cơm hến Huế chỉ từ 10k - 20k/phần và tắm biển Mỹ Khê miễn phí tại Đà Nẵng.
                </p>
                <div class="text-[11px] text-slate-500 flex items-center gap-3">
                  <span><i class="fa-solid fa-ticket text-rose-500"></i> Vé tàu ngắm cảnh siêu rẻ</span>
                  <span><i class="fa-solid fa-umbrella-beach text-sky-500"></i> Tắm biển công cộng sạch đẹp</span>
                </div>
              </div>
            </div>

            <!-- 4. Miền Tây Sông Nước -->
            <div class="p-5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col md:flex-row gap-5 items-center">
              <div class="w-full md:w-1/3 h-44 rounded-xl bg-cover bg-center shrink-0" style="background-image: url('https://images.unsplash.com/photo-1606787366850-de6330128bfc?auto=format&fit=crop&w=400&q=80');"></div>
              <div class="w-full md:w-2/3">
                <div class="flex items-center justify-between mb-1.5">
                  <span class="text-[10px] bg-teal-100 text-teal-700 font-extrabold px-2 py-0.5 rounded-full uppercase">Cần Thơ & Bến Tre</span>
                  <span class="text-xs font-extrabold text-emerald-700 bg-emerald-100 px-2.5 py-0.5 rounded-full">~1.0Tr - 1.4Tr / người</span>
                </div>
                <h3 class="text-base font-bold text-slate-900 mb-1">Phượt Miệt Vườn Sông Nước Nam Bộ 2N1Đ</h3>
                <p class="text-xs text-slate-600 leading-relaxed mb-2">
                  Từ Sài Gòn đi xe máy hoặc xe khách về Bến Tre - Cần Thơ. Trải nghiệm hái và thưởng thức trái cây chín mọng ngay tại vườn với giá vé chỉ 40k - 60k bao ăn no nê, đi ghe tham quan chợ nổi Cái Răng buổi sớm và ăn tô hủ tiếu nóng 25k trên mạn thuyền.
                </p>
                <div class="text-[11px] text-slate-500 flex items-center gap-3">
                  <span><i class="fa-solid fa-apple-whole text-red-500"></i> Ăn trái cây thỏa thích tại vườn</span>
                  <span><i class="fa-solid fa-sailboat text-blue-500"></i> Trải nghiệm sông nước mộc mạc</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- MỤC 2: 5 NGUYÊN TẮC VÀNG TIẾT KIỆM CHI PHÍ -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2">
            <span class="text-2xl">💡</span> 2. 5 Nguyên tắc vàng giúp bạn đi du lịch tiết kiệm đến 50%
          </h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="p-4 bg-teal-50/40 rounded-2xl border border-teal-100">
              <h4 class="font-bold text-slate-900 text-sm mb-1.5 flex items-center gap-2 text-teal-800">
                <i class="fa-solid fa-calendar-check"></i> 1. Đặt vé tàu/xe trước và đi vào giữa tuần
              </h4>
              <p class="text-xs text-slate-600 leading-relaxed">
                Các chuyến tàu hỏa, xe khách và máy bay khởi hành từ thứ Ba đến thứ Năm thường có giá vé rẻ hơn 30-40% so với cuối tuần, đồng thời các điểm tham quan cũng ít đông đúc hơn.
              </p>
            </div>

            <div class="p-4 bg-teal-50/40 rounded-2xl border border-teal-100">
              <h4 class="font-bold text-slate-900 text-sm mb-1.5 flex items-center gap-2 text-teal-800">
                <i class="fa-solid fa-bed"></i> 2. Chọn giường tầng Dorm Hostel hoặc Homestay
              </h4>
              <p class="text-xs text-slate-600 leading-relaxed">
                Phòng dorm giường tầng sạch sẽ tiện nghi có giá chỉ từ 100k - 180k/đêm. Đây còn là nơi bạn giao lưu với bạn bè quốc tế và được chủ nhà chỉ cho những quán ăn bản xứ không bị chặt chém.
              </p>
            </div>

            <div class="p-4 bg-teal-50/40 rounded-2xl border border-teal-100">
              <h4 class="font-bold text-slate-900 text-sm mb-1.5 flex items-center gap-2 text-teal-800">
                <i class="fa-solid fa-store"></i> 3. Ăn ở chợ truyền thống và quán ăn sinh viên
              </h4>
              <p class="text-xs text-slate-600 leading-relaxed">
                Chợ đêm, chợ dân sinh địa phương luôn là thiên đường ẩm thực chuẩn vị nhất. Một tô bún, đĩa bánh xèo hay ly chè tại chợ luôn có giá rẻ bằng một nửa so với các nhà hàng nằm trên trục đường du lịch chính.
              </p>
            </div>

            <div class="p-4 bg-teal-50/40 rounded-2xl border border-teal-100">
              <h4 class="font-bold text-slate-900 text-sm mb-1.5 flex items-center gap-2 text-teal-800">
                <i class="fa-solid fa-users"></i> 4. Đi theo nhóm 4 - 6 người để "chia bill"
              </h4>
              <p class="text-xs text-slate-600 leading-relaxed">
                Đi theo nhóm chẵn người giúp tối ưu hóa tiền thuê xe máy (2 người/xe), tiền phòng khách sạn và thưởng thức được nhiều món ăn đặc sản hơn khi gọi mâm cơm chung.
              </p>
            </div>
          </div>
        </div>

        <!-- MỤC 3: CÁC SỞ THÍCH KHÁC -->
        <div class="pt-6 border-t border-slate-100">
          <h3 class="text-base font-bold text-slate-900 mb-4">Khám phá các phong cách du lịch khác:</h3>
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 text-center">
            <a href="gia_dinh.php" class="p-3 bg-rose-50 hover:bg-rose-100 rounded-xl transition block border border-rose-100">
              <i class="fa-solid fa-people-roof text-rose-500 text-lg mb-1 block"></i>
              <span class="text-xs font-bold text-slate-800 block">Gia đình</span>
              <span class="text-[10px] text-rose-600">Xem ngay →</span>
            </a>
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
