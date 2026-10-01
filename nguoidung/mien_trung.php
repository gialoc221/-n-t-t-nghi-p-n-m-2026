<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Khám phá Miền Trung - VIETNAM TRAVEL</title>
  
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
    <div class="w-full h-[350px] sm:h-[450px] rounded-3xl bg-cover bg-center relative overflow-hidden shadow-lg mb-8" style="background-image: url('https://images.unsplash.com/photo-1559592413-7cec4d0cae2b?auto=format&fit=crop&w=1200&q=80');">
      <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent flex items-end p-8 sm:p-12">
        <div>
          <span class="px-3 py-1.5 bg-amber-500 text-white text-[11px] font-bold rounded-full mb-3 inline-flex items-center gap-1.5 uppercase tracking-wider">
            <i class="fa-solid fa-compass"></i> Khám phá 3 miền
          </span>
          <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-3">🏮 Khám phá Miền Trung</h1>
          <p class="text-slate-200 text-sm font-medium max-w-2xl leading-relaxed">
            Con đường di sản thế giới rực rỡ sắc màu, những bãi biển cát trắng nắng vàng, cố đô Huế trầm mặc và vương quốc hang động kỳ bí bậc nhất hành tinh.
          </p>
        </div>
      </div>
    </div>

    <!-- NỘI DUNG BÀI VIẾT -->
    <div class="bg-white rounded-3xl p-6 sm:p-12 shadow-sm border border-slate-100">
      <div class="max-w-none text-slate-600 space-y-8 leading-loose text-justify">
        
        <!-- MỞ ĐẦU -->
        <p class="text-[15px] font-medium text-slate-800 bg-amber-50/60 p-5 rounded-2xl border-l-4 border-amber-500">
          Miền Trung là dải đất hẹp hình đòn gánh gánh hai đầu đất nước, tựa lưng vào dãy Trường Sơn hùng vĩ và mở rộng vòng tay đón sóng gió Biển Đông. Nơi đây hội tụ mật độ di sản văn hóa thế giới dày đặc nhất cả nước, kết hợp cùng những bãi biển trong xanh như ngọc bích và con người miền Trung kiên cường, nồng hậu, chân chất.
        </p>
        
        <!-- MỤC 1: CON ĐƯỜNG DI SẢN -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🏛️</span> 1. Con đường Di sản Thế giới miền Trung</h2>
          <p class="mb-3">Hành trình di sản trải dài từ Quảng Bình qua Huế, Đà Nẵng, Quảng Nam là điểm đến say lòng du khách quốc tế:</p>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-4">
            <div class="p-4 bg-slate-50 rounded-xl border border-slate-100">
              <h4 class="font-bold text-slate-800 text-sm mb-1.5 flex items-center gap-2 text-amber-700">
                <i class="fa-solid fa-archway"></i> Cố đô Huế - Vẻ đẹp cung đình trầm mặc
              </h4>
              <p class="text-xs text-slate-600 leading-relaxed">
                Di tích Cố đô Huế với hệ thống thành quách, cung điện Đại Nội, các lăng tẩm uy nghiêm (Khải Định, Tự Đức, Minh Mạng), chùa Thiên Mụ soi bóng bên dòng sông Hương thơ mộng, cùng trải nghiệm nghe Nhã nhạc Cung đình trên thuyền rồng khi hoàng hôn buông xuống.
              </p>
            </div>

            <div class="p-4 bg-slate-50 rounded-xl border border-slate-100">
              <h4 class="font-bold text-slate-800 text-sm mb-1.5 flex items-center gap-2 text-rose-600">
                <i class="fa-solid fa-fan"></i> Phố cổ Hội An & Thánh địa Mỹ Sơn
              </h4>
              <p class="text-xs text-slate-600 leading-relaxed">
                Hội An như một bức tranh sống động của thế kỷ 17 với những con phố rực rỡ lồng đèn lung linh bên sông Hoài, Chùa Cầu cổ kính và những ngôi nhà cổ tường vàng hoa giấy. Cách đó không xa là Thánh địa Mỹ Sơn với những cụm tháp Chăm Pa huyền bí ẩn mình giữa thung lũng.
              </p>
            </div>
          </div>
        </div>

        <!-- MỤC 2: ĐÀ NẴNG -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🌉</span> 2. Thành phố đáng sống Đà Nẵng</h2>
          <p class="mb-3">Đà Nẵng – biểu tượng năng động, văn minh và hiện đại của miền Trung:</p>
          <ul class="list-disc pl-6 space-y-2">
            <li><strong>Cầu Vàng (Bà Nà Hills):</strong> Đôi bàn tay khổng lồ nâng đỡ dải lụa vàng giữa mây trời, kỳ quan du lịch thu hút hàng triệu du khách quốc tế.</li>
            <li><strong>Bãi biển Mỹ Khê:</strong> Bãi biển quyến rũ hàng đầu hành tinh với bờ cát trắng mịn thoai thoải, nước biển ấm áp quanh năm.</li>
            <li><strong>Cầu Rồng & Sông Hàn:</strong> Cầu Rồng phun lửa, phun nước vào dịp cuối tuần, tạo nên cảnh tượng náo nhiệt rực rỡ về đêm.</li>
            <li><strong>Bán đảo Sơn Trà & Ngũ Hành Sơn:</strong> Điểm ngắm toàn cảnh thành phố, chiêm bái chùa Linh Ứng với tượng Phật Bà Quan Âm cao 67m hướng ra biển cả.</li>
          </ul>
        </div>

        <!-- ẢNH MINH HỌA -->
        <div class="rounded-2xl overflow-hidden h-64 bg-cover bg-center my-8 shadow-sm" style="background-image: url('https://images.unsplash.com/photo-1544644181-1484b3fdfc62?auto=format&fit=crop&w=1000&q=80');"></div>

        <!-- MỤC 3: QUẢNG BÌNH VÀ DUYÊN HẢI -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🏞️</span> 3. Vương quốc hang động & Biển xanh Nam Trung Bộ</h2>
          <p class="mb-3">Miền Trung sở hữu thiên nhiên kỳ thú từ lòng đất cho đến những vịnh biển ngập tràn ánh nắng:</p>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 mb-4">
            <div class="p-3.5 bg-amber-50/70 rounded-xl border border-amber-100">
              <h4 class="font-bold text-slate-800 text-xs mb-1 flex items-center gap-1.5 text-amber-800">
                <i class="fa-solid fa-dungeon"></i> Sơn Đoòng & Phong Nha
              </h4>
              <p class="text-[11px] text-slate-500">Hang Sơn Đoòng tự nhiên lớn nhất thế giới chứa cả cánh rừng nguyên sinh và sông ngầm; động Thiên Đường với thạch nhũ tráng lệ triệu năm.</p>
            </div>
            <div class="p-3.5 bg-amber-50/70 rounded-xl border border-amber-100">
              <h4 class="font-bold text-slate-800 text-xs mb-1 flex items-center gap-1.5 text-amber-800">
                <i class="fa-solid fa-umbrella-beach"></i> Nha Trang (Khánh Hòa)
              </h4>
              <p class="text-[11px] text-slate-500">Vịnh biển đẹp bậc nhất hành tinh với khu vui chơi VinWonders Hòn Tre, lặn biển ngắm rạn san hô Hòn Mun và tắm bùn khoáng nóng thư giãn.</p>
            </div>
            <div class="p-3.5 bg-amber-50/70 rounded-xl border border-amber-100">
              <h4 class="font-bold text-slate-800 text-xs mb-1 flex items-center gap-1.5 text-amber-800">
                <i class="fa-solid fa-water"></i> Quy Nhơn (Bình Định)
              </h4>
              <p class="text-[11px] text-slate-500">Kỳ Co - Eo Gió hoang sơ tuyệt mỹ, Ghềnh Ráng Tiên Sa viếng mộ thi sĩ Hàn Mặc Tử và thưởng thức hải sản tươi ngon giá bình dân.</p>
            </div>
            <div class="p-3.5 bg-amber-50/70 rounded-xl border border-amber-100">
              <h4 class="font-bold text-slate-800 text-xs mb-1 flex items-center gap-1.5 text-amber-800">
                <i class="fa-solid fa-shapes"></i> Phú Yên - Xứ sở hoa vàng
              </h4>
              <p class="text-[11px] text-slate-500">Gành Đá Đĩa kỳ quan địa chất độc nhất vô nhị từ dung nham núi lửa xếp chồng như tổ ong, ngọn hải đăng Đại Lãnh đón bình minh sớm nhất.</p>
            </div>
            <div class="p-3.5 bg-amber-50/70 rounded-xl border border-amber-100">
              <h4 class="font-bold text-slate-800 text-xs mb-1 flex items-center gap-1.5 text-amber-800">
                <i class="fa-solid fa-sun"></i> Mũi Né - Phan Thiết
              </h4>
              <p class="text-[11px] text-slate-500">Tiểu sa mạc Đồi Cát Bay rực rỡ, hồ sen Bàu Trắng nguyên sơ và môn thể thao lướt ván diều thu hút hàng triệu du khách quốc tế.</p>
            </div>
            <div class="p-3.5 bg-amber-50/70 rounded-xl border border-amber-100">
              <h4 class="font-bold text-slate-800 text-xs mb-1 flex items-center gap-1.5 text-amber-800">
                <i class="fa-solid fa-tree"></i> Tây Nguyên Đại Ngàn
              </h4>
              <p class="text-[11px] text-slate-500">Đà Lạt thành phố sương mù ngàn hoa, Buôn Ma Thuột thủ phủ cà phê, Biển Hồ T'Nưng Gia Lai và tiếng cồng chiêng ngân vang núi rừng.</p>
            </div>
          </div>
        </div>

        <!-- MỤC 4 & 5 -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div>
            <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🌶️</span> 4. Ẩm thực miền Trung - Đậm đà, cay nồng</h2>
            <p>Món ăn miền Trung gây thương nhớ bởi hương vị đậm đà không lẫn vào đâu được:</p>
            <ul class="list-disc pl-5 mt-2 space-y-1.5 text-xs text-slate-600">
              <li><strong>Bún bò Huế:</strong> Nước dùng ngọt xương đậm vị ruốc sả, cay tê đầu lưỡi.</li>
              <li><strong>Mì Quảng & Cao Lầu:</strong> Sợi mì dai mềm, nước nhưn sánh ngọt, ăn kèm bánh tráng nướng và rổ rau sống tươi non.</li>
              <li><strong>Bánh bèo, bánh nậm, bánh bột lọc:</strong> Món ăn chơi tinh tế của người dân xứ Huế.</li>
              <li><strong>Cơm gà Tam Kỳ, bánh xèo tôm nhảy:</strong> Món ngon giòn rụm của người Quảng Nam, Bình Định.</li>
            </ul>
          </div>
          <div>
            <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">☀️</span> 5. Thời điểm du lịch lý tưởng</h2>
            <p>Kinh nghiệm chọn thời điểm khám phá miền Trung đẹp nhất:</p>
            <ul class="list-disc pl-5 mt-2 space-y-1.5 text-xs text-slate-600">
              <li><strong>Tháng 2 - Tháng 8:</strong> Mùa khô, trời nắng đẹp, biển êm, nước biển trong vắt. Thời điểm vàng để tắm biển và khám phá các đảo Cù Lao Chàm, Lý Sơn, Phú Quý.</li>
              <li><strong>Tháng 9 - Tháng 11:</strong> Mùa mưa miền Trung, nên theo dõi kỹ dự báo thời tiết trước các chuyến du lịch biển đảo hoặc thám hiểm hang động.</li>
              <li><strong>Tháng 12 - Tháng 1:</strong> Tiết trời se lạnh dịu dàng, rất thích hợp du xuân ngắm hoa và thăm Cố đô Huế, phố cổ Hội An.</li>
            </ul>
          </div>
        </div>

        <!-- MỤC 6, 7 -->
        <hr class="border-slate-100 my-8">
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🚆</span> 6. Trải nghiệm "chữa lành" không thể bỏ lỡ</h2>
          <p>Đi chuyến tàu hỏa nối Huế - Đà Nẵng "Kết nối di sản miền Trung" uốn lượn qua đèo Hải Vân ngắm vịnh Lăng Cô từ trên cao; ngồi thuyền thả đèn hoa đăng cầu an trên sông Hoài Hội An; lặn ngắm san hô tại hòn Mun Nha Trang; hay thức dậy lúc 4h30 sáng tại Mũi Điện Phú Yên để đón những tia nắng bình minh đầu tiên trên dải đất liền Việt Nam.</p>
        </div>

        <!-- MỤC TỔNG KẾT -->
        <div class="bg-amber-50/40 rounded-3xl p-6 md:p-8 my-8 border border-amber-100">
          <h2 class="text-2xl font-bold text-slate-900 mb-6 text-center">⭐ Điểm nhấn không thể bỏ qua tại Miền Trung</h2>
          <div class="grid grid-cols-2 md:grid-cols-4 gap-3 text-center">
            <div class="bg-white p-3.5 rounded-xl shadow-sm border border-amber-100">
              <i class="fa-solid fa-place-of-worship text-amber-600 text-xl mb-1.5 block"></i>
              <h5 class="font-bold text-xs text-slate-800">Cố đô Huế</h5>
              <p class="text-[10px] text-slate-500">Đại Nội & Lăng tẩm</p>
            </div>
            <div class="bg-white p-3.5 rounded-xl shadow-sm border border-amber-100">
              <i class="fa-solid fa-bridge text-amber-600 text-xl mb-1.5 block"></i>
              <h5 class="font-bold text-xs text-slate-800">TP Đà Nẵng</h5>
              <p class="text-[10px] text-slate-500">Cầu Vàng & Cầu Rồng</p>
            </div>
            <div class="bg-white p-3.5 rounded-xl shadow-sm border border-amber-100">
              <i class="fa-solid fa-lightbulb text-amber-600 text-xl mb-1.5 block"></i>
              <h5 class="font-bold text-xs text-slate-800">Phố cổ Hội An</h5>
              <p class="text-[10px] text-slate-500">Đèn lồng lung linh</p>
            </div>
            <div class="bg-white p-3.5 rounded-xl shadow-sm border border-amber-100">
              <i class="fa-solid fa-mountain-sun text-amber-600 text-xl mb-1.5 block"></i>
              <h5 class="font-bold text-xs text-slate-800">Sơn Đoòng</h5>
              <p class="text-[10px] text-slate-500">Đệ nhất hang động</p>
            </div>
          </div>
        </div>

        <div class="text-center mt-12 mb-4">
          <h3 class="text-2xl font-extrabold text-slate-900 mb-3">🌊 Miền Trung – Khúc ruột kiên cường, đong đầy nghĩa tình</h3>
          <p class="text-slate-600 max-w-2xl mx-auto italic">"Dải đất miền Trung dẫu trải qua bao nhọc nhằn nắng gió nhưng vẫn giữ trọn nụ cười hồn hậu của người dân, những di sản văn hóa trường tồn cùng thời gian và vẻ đẹp biển xanh ngút ngàn làm say đắm bước chân người lữ khách."</p>
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

