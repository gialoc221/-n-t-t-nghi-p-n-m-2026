<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Khám phá Miền Nam - VIETNAM TRAVEL</title>
  
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
    <div class="w-full h-[350px] sm:h-[450px] rounded-3xl bg-cover bg-center relative overflow-hidden shadow-lg mb-8" style="background-image: url('https://images.unsplash.com/photo-1583417319070-4a69db38a482?auto=format&fit=crop&w=1200&q=80');">
      <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent flex items-end p-8 sm:p-12">
        <div>
          <span class="px-3 py-1.5 bg-sky-600 text-white text-[11px] font-bold rounded-full mb-3 inline-flex items-center gap-1.5 uppercase tracking-wider">
            <i class="fa-solid fa-sun"></i> Khám phá 3 miền
          </span>
          <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-3">🌴 Khám phá Miền Nam</h1>
          <p class="text-slate-200 text-sm font-medium max-w-2xl leading-relaxed">
            Nhịp sống sầm uất năng động của Sài Gòn hoa lệ, nét bình dị trù phú của sông nước miệt vườn miền Tây và thiên đường biển đảo ngọc Phú Quốc.
          </p>
        </div>
      </div>
    </div>

    <!-- NỘI DUNG BÀI VIẾT -->
    <div class="bg-white rounded-3xl p-6 sm:p-12 shadow-sm border border-slate-100">
      <div class="max-w-none text-slate-600 space-y-8 leading-loose text-justify">
        
        <!-- MỞ ĐẦU -->
        <p class="text-[15px] font-medium text-slate-800 bg-sky-50/60 p-5 rounded-2xl border-l-4 border-sky-600">
          Miền Nam Việt Nam – vùng đất của nắng ấm quanh năm, được thiên nhiên ưu đãi bởi hai dòng sông Tiền và sông Hậu bồi đắp phù sa màu mỡ. Miền Nam cuốn hút du khách bởi sự kết hợp hài hòa giữa nhịp sống đô thị hiện đại bậc nhất và vẻ đẹp mộc mạc, yên ả của miền quê sông nước, cùng tính cách con người Nam Bộ hào sảng, phóng khoáng và trọng nghĩa tình.
        </p>
        
        <!-- MỤC 1: SÀI GÒN - TP.HCM -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🏙️</span> 1. TP. Hồ Chí Minh - Siêu đô thị hiện đại và tràn đầy sức sống</h2>
          <p class="mb-3">Thành phố mang tên Bác là đầu tàu kinh tế, văn hóa và là "thành phố không ngủ" rực rỡ sắc màu:</p>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-4">
            <div class="p-4 bg-slate-50 rounded-xl border border-slate-100">
              <h4 class="font-bold text-slate-800 text-sm mb-1.5 flex items-center gap-2 text-sky-700">
                <i class="fa-solid fa-city"></i> Dấu ấn kiến trúc giao thoa
              </h4>
              <ul class="list-disc pl-5 space-y-1 text-xs text-slate-600">
                <li><strong>Nhà thờ Đức Bà & Bưu điện Trung tâm:</strong> Tuyệt tác kiến trúc Gothic - Phục hưng giữa lòng Sài Gòn.</li>
                <li><strong>Dinh Độc Lập & Bảo tàng Chứng tích Chiến tranh:</strong> Nơi ghi dấu những trang sử hào hùng của dân tộc.</li>
                <li><strong>Chợ Bến Thành:</strong> Biểu tượng giao thương lâu đời với tháp đồng hồ bốn mặt trứ danh.</li>
                <li><strong>Landmark 81:</strong> Tòa nhà cao nhất Việt Nam, biểu tượng cho khát vọng vươn tầm thế giới.</li>
              </ul>
            </div>

            <div class="p-4 bg-slate-50 rounded-xl border border-slate-100">
              <h4 class="font-bold text-slate-800 text-sm mb-1.5 flex items-center gap-2 text-rose-600">
                <i class="fa-solid fa-champagne-glasses"></i> Sức sống về đêm & Ẩm thực đường phố
              </h4>
              <p class="text-xs text-slate-600 leading-relaxed">
                Khi màn đêm buông xuống, phố đi bộ Nguyễn Huệ rộn ràng tiếng nhạc, phố Tây Bùi Viện náo nhiệt với du khách khắp thế giới. Hãy thử một dĩa Cơm tấm sườn bì chả góc đường, nhâm nhi ly Cà phê sữa đá vỉa hè để cảm nhận trọn vẹn "chất Sài Gòn".
              </p>
            </div>
          </div>
        </div>

        <!-- MỤC 2: MIỀN TÂY SÔNG NƯỚC -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🛶</span> 2. Đồng bằng sông Cửu Long - Miệt vườn sông nước trù phú</h2>
          <p class="mb-3">Khám phá miền Tây là hành trình hòa mình vào thiên nhiên phóng khoáng:</p>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 mb-4">
            <div class="p-3.5 bg-sky-50/70 rounded-xl border border-sky-100">
              <h4 class="font-bold text-slate-800 text-xs mb-1 flex items-center gap-1.5 text-sky-800">
                <i class="fa-solid fa-ship"></i> Chợ nổi Cái Răng (Cần Thơ)
              </h4>
              <p class="text-[11px] text-slate-500">Trải nghiệm mua bán nông sản trên ghe xuồng tấp nập từ tờ mờ sáng, thưởng thức tô bún riêu hay ly cà phê lắc lư trên mặt sông Hậu.</p>
            </div>
            <div class="p-3.5 bg-sky-50/70 rounded-xl border border-sky-100">
              <h4 class="font-bold text-slate-800 text-xs mb-1 flex items-center gap-1.5 text-sky-800">
                <i class="fa-solid fa-tree"></i> Xứ dừa Bến Tre
              </h4>
              <p class="text-[11px] text-slate-500">Chèo xuồng ba lá len lỏi dưới bóng râm rạch dừa nước, thăm làng nghề kẹo dừa thủ công và thưởng thức trái cây chín mọng tại vườn.</p>
            </div>
            <div class="p-3.5 bg-sky-50/70 rounded-xl border border-sky-100">
              <h4 class="font-bold text-slate-800 text-xs mb-1 flex items-center gap-1.5 text-sky-800">
                <i class="fa-solid fa-leaf"></i> Rừng tràm Trà Sư (An Giang)
              </h4>
              <p class="text-[11px] text-slate-500">Ngồi tắc ráng lướt đi giữa thảm bèo cám xanh mướt trải dài vô tận, chiêm ngưỡng hàng vạn cánh chim trời bay rợp bóng hoàng hôn.</p>
            </div>
            <div class="p-3.5 bg-sky-50/70 rounded-xl border border-sky-100">
              <h4 class="font-bold text-slate-800 text-xs mb-1 flex items-center gap-1.5 text-sky-800">
                <i class="fa-solid fa-dove"></i> Vườn chim Tràm Chim (Đồng Tháp)
              </h4>
              <p class="text-[11px] text-slate-500">Vùng đất ngập nước nguyên sơ của loài Sếu đầu đỏ quý hiếm, kết hợp tham quan Làng hoa Sa Đéc trăm năm rực rỡ sắc màu mỗi độ xuân về.</p>
            </div>
            <div class="p-3.5 bg-sky-50/70 rounded-xl border border-sky-100">
              <h4 class="font-bold text-slate-800 text-xs mb-1 flex items-center gap-1.5 text-sky-800">
                <i class="fa-solid fa-place-of-worship"></i> Miếu Bà Chúa Xứ Châu Đốc
              </h4>
              <p class="text-[11px] text-slate-500">Trung tâm hành hương tâm linh lớn nhất phương Nam dưới chân núi Sam huyền bí, gắn liền với văn hóa đa dạng Kinh - Hoa - Chăm - Khmer.</p>
            </div>
            <div class="p-3.5 bg-sky-50/70 rounded-xl border border-sky-100">
              <h4 class="font-bold text-slate-800 text-xs mb-1 flex items-center gap-1.5 text-sky-800">
                <i class="fa-solid fa-music"></i> Nghệ thuật Đờn ca tài tử
              </h4>
              <p class="text-[11px] text-slate-500">Di sản văn hóa phi vật thể nhân loại, những câu ca vọng cổ ngọt ngào ngân nga trong vườn cây trái làm say lòng người.</p>
            </div>
          </div>
        </div>

        <!-- ẢNH MINH HỌA -->
        <div class="rounded-2xl overflow-hidden h-64 bg-cover bg-center my-8 shadow-sm" style="background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1000&q=80');"></div>

        <!-- MỤC 3: PHÚ QUỐC VÀ CÔN ĐẢO -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🌊</span> 3. Phú Quốc & Côn Đảo - Thiên đường biển đảo phương Nam</h2>
          <p class="mb-3">Hai viên ngọc quý giữa biển trời Tây Nam và Đông Nam Bộ:</p>
          <ul class="list-disc pl-6 space-y-2">
            <li><strong>Đảo Ngọc Phú Quốc (Kiên Giang):</strong> Hòn đảo lớn nhất Việt Nam sở hữu những bãi biển đẹp nhất hành tinh như Bãi Sao, Bãi Khem. Du khách có thể trải nghiệm cáp treo Hòn Thơm vượt biển dài nhất thế giới, khám phá Grand World "thành phố không ngủ", ngắm hoàng hôn rực lửa tại Sunset Sanato.</li>
            <li><strong>Quần đảo Côn Đảo (Bà Rịa - Vũng Tàu):</strong> Nơi lưu giữ trang sử bi tráng của dân tộc với Nhà tù Côn Đảo và nghĩa trang Hàng Dương linh thiêng, đồng thời là thiên đường sinh thái hoang sơ với bãi đầm Trầu và bãi cát nơi rùa biển đẻ trứng.</li>
          </ul>
        </div>

        <!-- MỤC 4 & 5 -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div>
            <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🏔️</span> 4. Vùng đất Đông Nam Bộ nhiều bất ngờ</h2>
            <p>Khám phá vùng đất sôi động và giàu tiềm năng:</p>
            <ul class="list-disc pl-5 mt-2 space-y-1.5 text-xs text-slate-600">
              <li><strong>Núi Bà Đen (Tây Ninh):</strong> "Nóc nhà Nam Bộ" cao 986m với hệ thống cáp treo hiện đại, tượng Phật Bà Tây Bổ Đà Sơn bằng đồng cao kỷ lục châu Á trên đỉnh núi.</li>
              <li><strong>Thành phố biển Vũng Tàu:</strong> Điểm nghỉ ngơi cuối tuần lý tưởng với Bãi Sau, Bãi Trước, Tượng Chúa Kito Vua và hải sản tươi sống.</li>
              <li><strong>Rừng ngập mặn Cần Giờ:</strong> Khu dự trữ sinh quyển thế giới với đảo khỉ, chiến khu Rừng Sác.</li>
            </ul>
          </div>
          <div>
            <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">☀️</span> 5. Hai mùa mưa nắng đặc trưng</h2>
            <p>Khí hậu miền Nam nắng ấm dễ chịu quanh năm:</p>
            <ul class="list-disc pl-5 mt-2 space-y-1.5 text-xs text-slate-600">
              <li><strong>Mùa khô (Tháng 12 - Tháng 4):</strong> Thời tiết nắng ráo, trong xanh, lý tưởng nhất để du lịch biển đảo Phú Quốc, Côn Đảo hoặc vi vu nội thành TP.HCM.</li>
              <li><strong>Mùa nước nổi (Tháng 9 - Tháng 11):</strong> Thời điểm sông nước miền Tây đẹp nhất, bông điên điển nở vàng, cá linh non về tràn đồng, chèo xuồng ngắm rừng tràm Trà Sư tuyệt đẹp.</li>
            </ul>
          </div>
        </div>

        <!-- MỤC 6, 7 -->
        <hr class="border-slate-100 my-8">
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🍲</span> 6. Hương vị ẩm thực dân dã, hào sảng</h2>
          <p>Món ăn Nam Bộ ghi dấu ấn bởi vị ngọt thanh từ nước dừa, vị béo của cốt dừa và rổ rau đồng phong phú: Lẩu mắm miền Tây thơm lừng, cá lóc nướng trui cuốn bánh tráng, bánh xèo Nam Bộ giòn rụm ngập rau rừng, hủ tiếu Nam Vang, bánh tét lá cẩm, chè bà ba ngọt bùi...</p>
        </div>

        <!-- MỤC TỔNG KẾT -->
        <div class="bg-sky-50/40 rounded-3xl p-6 md:p-8 my-8 border border-sky-100">
          <h2 class="text-2xl font-bold text-slate-900 mb-6 text-center">⭐ Điểm nhấn không thể bỏ qua tại Miền Nam</h2>
          <div class="grid grid-cols-2 md:grid-cols-4 gap-3 text-center">
            <div class="bg-white p-3.5 rounded-xl shadow-sm border border-sky-100">
              <i class="fa-solid fa-city text-sky-600 text-xl mb-1.5 block"></i>
              <h5 class="font-bold text-xs text-slate-800">TP. Hồ Chí Minh</h5>
              <p class="text-[10px] text-slate-500">Đô thị hiện đại bậc nhất</p>
            </div>
            <div class="bg-white p-3.5 rounded-xl shadow-sm border border-sky-100">
              <i class="fa-solid fa-ship text-sky-600 text-xl mb-1.5 block"></i>
              <h5 class="font-bold text-xs text-slate-800">Chợ nổi Cái Răng</h5>
              <p class="text-[10px] text-slate-500">Văn hóa sông nước Cần Thơ</p>
            </div>
            <div class="bg-white p-3.5 rounded-xl shadow-sm border border-sky-100">
              <i class="fa-solid fa-umbrella-beach text-sky-600 text-xl mb-1.5 block"></i>
              <h5 class="font-bold text-xs text-slate-800">Đảo Ngọc Phú Quốc</h5>
              <p class="text-[10px] text-slate-500">Resort & Hoàng hôn</p>
            </div>
            <div class="bg-white p-3.5 rounded-xl shadow-sm border border-sky-100">
              <i class="fa-solid fa-mountain text-sky-600 text-xl mb-1.5 block"></i>
              <h5 class="font-bold text-xs text-slate-800">Núi Bà Đen</h5>
              <p class="text-[10px] text-slate-500">Nóc nhà Nam Bộ Tây Ninh</p>
            </div>
          </div>
        </div>

        <div class="text-center mt-12 mb-4">
          <h3 class="text-2xl font-extrabold text-slate-900 mb-3">🌅 Miền Nam – Đất phương Nam trù phú, rộng mở ân tình</h3>
          <p class="text-slate-600 max-w-2xl mx-auto italic">"Về với phương Nam là về với dòng sông chở nặng phù sa, về với tình người chân phương mộc mạc và nhịp sống trẻ trung, sôi động mở ra tương lai rạng ngời."</p>
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

