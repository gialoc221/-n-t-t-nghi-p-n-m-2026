<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Khám phá Miền Bắc - VIETNAM TRAVEL</title>
  
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
    <div class="w-full h-[350px] sm:h-[450px] rounded-3xl bg-cover bg-center relative overflow-hidden shadow-lg mb-8" style="background-image: url('https://images.unsplash.com/photo-1528127269322-539801943592?auto=format&fit=crop&w=1200&q=80');">
      <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent flex items-end p-8 sm:p-12">
        <div>
          <span class="px-3 py-1.5 bg-emerald-600 text-white text-[11px] font-bold rounded-full mb-3 inline-flex items-center gap-1.5 uppercase tracking-wider">
            <i class="fa-solid fa-mountain"></i> Khám phá 3 miền
          </span>
          <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-3">🏯 Khám phá Miền Bắc</h1>
          <p class="text-slate-200 text-sm font-medium max-w-2xl leading-relaxed">
            Nơi cội nguồn lịch sử dân tộc với thủ đô ngàn năm văn hiến, non cao Tây Bắc hùng vĩ, những thửa ruộng bậc thang mùa vàng và kỳ quan thiên nhiên thế giới Vịnh Hạ Long.
          </p>
        </div>
      </div>
    </div>

    <!-- NỘI DUNG BÀI VIẾT -->
    <div class="bg-white rounded-3xl p-6 sm:p-12 shadow-sm border border-slate-100">
      <div class="max-w-none text-slate-600 space-y-8 leading-loose text-justify">
        
        <!-- MỞ ĐẦU -->
        <p class="text-[15px] font-medium text-slate-800 bg-emerald-50/60 p-5 rounded-2xl border-l-4 border-emerald-600">
          Miền Bắc Việt Nam là cái nôi hình thành nền văn minh Đại Việt, nơi lưu giữ những giá trị lịch sử, kiến trúc cổ kính và văn hóa truyền thống sâu đậm nhất. Thiên nhiên miền Bắc vô cùng kỳ vĩ và đa dạng: từ những đỉnh núi mờ sương chạm mây trời, những hẻm vực sâu nhất Đông Nam Á, cho đến vùng châu thổ sông Hồng trù phú và vùng vịnh biển đá vôi ngoạn mục.
        </p>
        
        <!-- MỤC 1: HÀ NỘI -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🏛️</span> 1. Thủ đô Hà Nội - Trái tim ngàn năm văn hiến</h2>
          <p class="mb-3">Hà Nội – Thủ đô nghìn năm tuổi, nơi giao thoa giữa nét rêu phong cổ kính và nhịp sống thanh lịch hiện đại:</p>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-4">
            <div class="p-4 bg-slate-50 rounded-xl border border-slate-100">
              <h4 class="font-bold text-slate-800 text-sm mb-1.5 flex items-center gap-2 text-emerald-700">
                <i class="fa-solid fa-landmark"></i> Di tích lịch sử & Danh thắng
              </h4>
              <ul class="list-disc pl-5 space-y-1 text-xs text-slate-600">
                <li><strong>Hồ Hoàn Kiếm & Đền Ngọc Sơn:</strong> Trái tim linh thiêng gắn liền với truyền thuyết trả gươm thần của vua Lê Lợi.</li>
                <li><strong>Khu phố cổ 36 phố phường:</strong> Những mái ngói thâm nâu, phố Hàng Bạc, Hàng Đào còn giữ nét nghề thủ công xưa.</li>
                <li><strong>Văn Miếu - Quốc Tử Giám:</strong> Trường đại học đầu tiên của Việt Nam, biểu tượng truyền thống hiếu học.</li>
                <li><strong>Hoàng thành Thăng Long & Lăng Bác:</strong> Nơi hội tụ hồn thiêng sông núi và lòng biết ơn của triệu người dân.</li>
              </ul>
            </div>

            <div class="p-4 bg-slate-50 rounded-xl border border-slate-100">
              <h4 class="font-bold text-slate-800 text-sm mb-1.5 flex items-center gap-2 text-amber-600">
                <i class="fa-solid fa-mug-hot"></i> Nét tao nhã người Tràng An
              </h4>
              <p class="text-xs text-slate-600 leading-relaxed">
                Đến Hà Nội là phải thong thả dạo quanh hồ Tây mùa sen nở, nhâm nhi tách cà phê trứng thơm ngậy trong một quán nhỏ cổ kính, thưởng thức bát Phở bò bốc khói hay đĩa Bún chả nướng than hoa thơm lừng góc phố.
              </p>
            </div>
          </div>
        </div>

        <!-- MỤC 2: HẠ LONG & NINH BÌNH -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">⛵</span> 2. Vịnh Hạ Long & Quần thể Tràng An - Kỳ quan thế giới</h2>
          <p class="mb-3">Hai tuyệt tác thiên nhiên được UNESCO vinh danh mà bất kỳ du khách nào cũng phải ngỡ ngàng:</p>
          <ul class="list-disc pl-6 space-y-2">
            <li><strong>Vịnh Hạ Long (Quảng Ninh):</strong> Kỳ quan Thiên nhiên Thế giới với gần 2.000 hòn đảo đá vôi nhấp nhô trên mặt biển ngọc lục bảo. Trải nghiệm ngủ đêm trên du thuyền ngắm hoàng hôn, chèo kayak khám phá hang Sửng Sốt, động Thiên Cung là kỉ niệm vô giá.</li>
            <li><strong>Quần thể danh thắng Tràng An - Tam Cốc (Ninh Bình):</strong> Di sản hỗn hợp Văn hóa & Thiên nhiên thế giới đầu tiên của Đông Nam Á. Ngồi thuyền nan xuôi dòng sông Ngô Đồng uốn lượn giữa những cánh đồng lúa chín và dãy núi đá vôi sừng sững tựa chốn bồng lai tiên cảnh.</li>
          </ul>
        </div>

        <!-- ẢNH MINH HỌA -->
        <div class="rounded-2xl overflow-hidden h-64 bg-cover bg-center my-8 shadow-sm" style="background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1000&q=80');"></div>

        <!-- MỤC 3: TÂY BẮC & ĐÔNG BẮC -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">⛰️</span> 3. Vùng cao Tây Bắc & Đông Bắc - Vẻ đẹp hùng vĩ ngút ngàn</h2>
          <p class="mb-3">Cung đường phượt trong mơ của những tâm hồn xê dịch yêu thích khám phá thiên nhiên hoang sơ:</p>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 mb-4">
            <div class="p-3.5 bg-emerald-50/70 rounded-xl border border-emerald-100">
              <h4 class="font-bold text-slate-800 text-xs mb-1 flex items-center gap-1.5 text-emerald-800">
                <i class="fa-solid fa-cloud"></i> Sa Pa & Fansipan (Lào Cai)
              </h4>
              <p class="text-[11px] text-slate-500">Chinh phục đỉnh Fansipan 3.143m - "Nóc nhà Đông Dương", dạo bước giữa bản Cát Cát thơ mộng và thung lũng Mường Hoa bảng lảng sương mù.</p>
            </div>
            <div class="p-3.5 bg-emerald-50/70 rounded-xl border border-emerald-100">
              <h4 class="font-bold text-slate-800 text-xs mb-1 flex items-center gap-1.5 text-emerald-800">
                <i class="fa-solid fa-road"></i> Cao nguyên đá Hà Giang
              </h4>
              <p class="text-[11px] text-slate-500">Chinh phục đèo Mã Pí Lèng đệ nhất hùng quan, du thuyền trên hẻm vực Tu Sản sông Nho Quế và check-in Cột cờ Lũng Cú thiêng liêng.</p>
            </div>
            <div class="p-3.5 bg-emerald-50/70 rounded-xl border border-emerald-100">
              <h4 class="font-bold text-slate-800 text-xs mb-1 flex items-center gap-1.5 text-emerald-800">
                <i class="fa-solid fa-wheat-awn"></i> Mù Cang Chải (Yên Bái)
              </h4>
              <p class="text-[11px] text-slate-500">Thiên đường ruộng bậc thang đẹp nhất hành tinh tại La Pán Tẩn, Chế Cu Nha với những sóng lúa vàng rực rỡ xếp tầng lên tận mây trời.</p>
            </div>
            <div class="p-3.5 bg-emerald-50/70 rounded-xl border border-emerald-100">
              <h4 class="font-bold text-slate-800 text-xs mb-1 flex items-center gap-1.5 text-emerald-800">
                <i class="fa-solid fa-leaf"></i> Mộc Châu (Sơn La)
              </h4>
              <p class="text-[11px] text-slate-500">Xứ sở của những đồi chè trái tim xanh mướt, thung lũng mận Nà Ka trắng muốt mùa xuân và thác Dải Yếm tung bọt trắng xóa.</p>
            </div>
            <div class="p-3.5 bg-emerald-50/70 rounded-xl border border-emerald-100">
              <h4 class="font-bold text-slate-800 text-xs mb-1 flex items-center gap-1.5 text-emerald-800">
                <i class="fa-solid fa-waterfall"></i> Thác Bản Giốc (Cao Bằng)
              </h4>
              <p class="text-[11px] text-slate-500">Thác nước tự nhiên xuyên quốc gia lớn nhất Đông Nam Á, dòng nước đổ cuồn cuộn trắng xóa giữa núi rừng biên cương tráng lệ.</p>
            </div>
            <div class="p-3.5 bg-emerald-50/70 rounded-xl border border-emerald-100">
              <h4 class="font-bold text-slate-800 text-xs mb-1 flex items-center gap-1.5 text-emerald-800">
                <i class="fa-solid fa-house"></i> Mai Châu (Hòa Bình)
              </h4>
              <p class="text-[11px] text-slate-500">Thung lũng thanh bình rợp bóng nhà sàn của người Thái, nơi du khách cùng nhảy sập, uống rượu cần và nghe điệu xòe nồng thắm.</p>
            </div>
          </div>
        </div>

        <!-- MỤC 4 & 5 -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div>
            <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🎭</span> 4. Văn hóa lễ hội & Chợ phiên vùng cao</h2>
            <p>Miền Bắc phong phú về sắc màu lễ hội truyền thống:</p>
            <ul class="list-disc pl-5 mt-2 space-y-1.5 text-xs text-slate-600">
              <li><strong>Hội Lim (Bắc Ninh):</strong> Nơi câu ca Quan họ ngọt ngào của các liền anh, liền chị trao duyên trên dòng Tiêu Tương.</li>
              <li><strong>Lễ hội Chùa Hương:</strong> Hành trình tâm linh trẩy hội suối Yến cầu an mùa xuân.</li>
              <li><strong>Chợ phiên Bắc Hà, Mèo Vạc:</strong> Không gian rực rỡ váy áo thổ cẩm của người H'Mông, Dao, Tày mua bán ngựa, vải vóc và ăn thắng cố thơm nồng.</li>
            </ul>
          </div>
          <div>
            <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🍂</span> 5. Bốn mùa rõ rệt - Trải nghiệm biến đổi</h2>
            <p>Khí hậu 4 mùa mang đến vẻ đẹp luân chuyển độc nhất:</p>
            <ul class="list-disc pl-5 mt-2 space-y-1.5 text-xs text-slate-600">
              <li><strong>Mùa Xuân (Tháng 1 - 3):</strong> Trăm hoa đua nở, hoa đào Sa Pa, hoa mận Mộc Châu, trẩy hội đầu năm rộn rã.</li>
              <li><strong>Mùa Hè (Tháng 5 - 7):</strong> Mùa nước đổ lóng lánh trên ruộng bậc thang, tắm biển Hạ Long, Cát Bà.</li>
              <li><strong>Mùa Thu (Tháng 9 - 11):</strong> Mùa đẹp nhất năm! Mùa lúa chín vàng Tây Bắc và mùa thu Hà Nội heo may thơm mùi cốm vỉa hè.</li>
              <li><strong>Mùa Đông (Tháng 12 - 1):</strong> Săn mây Tà Xùa, trải nghiệm cái lạnh buốt giá và ngắm tuyết rơi Sa Pa.</li>
            </ul>
          </div>
        </div>

        <!-- MỤC 6, 7, 8 -->
        <hr class="border-slate-100 my-8">
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🍲</span> 6. Tinh hoa ẩm thực đất Bắc</h2>
          <p>Ẩm thực miền Bắc nổi tiếng với sự tinh tế, thanh tao, đậm đà nhưng không gắt. Món ngon không thể bỏ qua gồm: Phở Hà Nội, bún chả, chả cá Lã Vọng, bún ốc nguội, bánh đa cua Hải Phòng, chả mực Hạ Long, cơm lam gà nướng Tây Bắc, thịt trâu gác bếp, lợn mán nướng mắc khén...</p>
        </div>

        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2 mt-6"><span class="text-2xl">🎒</span> 7. Cẩm nang du lịch Miền Bắc</h2>
          <p>Khi du lịch miền núi phía Bắc, du khách nên chuẩn bị giày đi bộ có độ bám tốt, trang phục ấm nếu đi vào mùa đông, và thuốc chống say xe cho các cung đèo quanh co. Hãy luôn tôn trọng phong tục tập quán bản địa của đồng bào dân tộc thiểu số khi vào thăm các bản làng.</p>
        </div>

        <!-- MỤC TỔNG KẾT -->
        <div class="bg-emerald-50/40 rounded-3xl p-6 md:p-8 my-8 border border-emerald-100">
          <h2 class="text-2xl font-bold text-slate-900 mb-6 text-center">⭐ Điểm nhấn không thể bỏ qua tại Miền Bắc</h2>
          <div class="grid grid-cols-2 md:grid-cols-4 gap-3 text-center">
            <div class="bg-white p-3.5 rounded-xl shadow-sm border border-emerald-100">
              <i class="fa-solid fa-monument text-emerald-600 text-xl mb-1.5 block"></i>
              <h5 class="font-bold text-xs text-slate-800">Thủ đô Hà Nội</h5>
              <p class="text-[10px] text-slate-500">Phố cổ 36 phố phường</p>
            </div>
            <div class="bg-white p-3.5 rounded-xl shadow-sm border border-emerald-100">
              <i class="fa-solid fa-water text-emerald-600 text-xl mb-1.5 block"></i>
              <h5 class="font-bold text-xs text-slate-800">Vịnh Hạ Long</h5>
              <p class="text-[10px] text-slate-500">Kỳ quan thiên nhiên</p>
            </div>
            <div class="bg-white p-3.5 rounded-xl shadow-sm border border-emerald-100">
              <i class="fa-solid fa-mountain text-emerald-600 text-xl mb-1.5 block"></i>
              <h5 class="font-bold text-xs text-slate-800">Sa Pa & Fansipan</h5>
              <p class="text-[10px] text-slate-500">Nóc nhà Đông Dương</p>
            </div>
            <div class="bg-white p-3.5 rounded-xl shadow-sm border border-emerald-100">
              <i class="fa-solid fa-map-location-dot text-emerald-600 text-xl mb-1.5 block"></i>
              <h5 class="font-bold text-xs text-slate-800">Hà Giang</h5>
              <p class="text-[10px] text-slate-500">Đèo Mã Pí Lèng</p>
            </div>
          </div>
        </div>

        <div class="text-center mt-12 mb-4">
          <h3 class="text-2xl font-extrabold text-slate-900 mb-3">🏔️ Miền Bắc – Nơi non thiêng tụ khí, rạng rỡ ngàn năm</h3>
          <p class="text-slate-600 max-w-2xl mx-auto italic">"Hành trình khám phá miền Bắc là hành trình tìm về với cội nguồn tổ tiên, lắng nghe nhịp thở nghìn năm của đất Thăng Long và ngỡ ngàng trước vẻ đẹp kỳ vĩ tráng lệ của núi rừng biên cương."</p>
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

