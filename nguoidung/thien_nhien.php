<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thiên nhiên Việt Nam - VIETNAM TRAVEL</title>
  
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
      <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/40 to-transparent flex items-end p-8 sm:p-12">
        <div>
          <span class="px-3 py-1.5 bg-emerald-500 text-white text-[11px] font-bold rounded-full mb-3 inline-flex items-center gap-1.5 uppercase tracking-wider">
            <i class="fa-solid fa-leaf"></i> Khám phá
          </span>
          <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-3">🌿 Thiên nhiên Việt Nam</h1>
          <p class="text-slate-200 text-sm font-medium max-w-2xl leading-relaxed">
            Việt Nam là một quốc gia nằm ở khu vực Đông Nam Á, có địa hình kéo dài từ Bắc vào Nam với sự đa dạng về núi non, rừng nguyên sinh, đồng bằng, sông ngòi, biển đảo, hang động và cao nguyên.
          </p>
        </div>
      </div>
    </div>

    <!-- NỘI DUNG BÀI VIẾT -->
    <div class="bg-white rounded-3xl p-6 sm:p-12 shadow-sm border border-slate-100">
      <div class="max-w-none text-slate-600 space-y-8 leading-loose text-justify">
        
        <!-- MỞ ĐẦU -->
        <p class="text-[15px] font-medium text-slate-800 bg-slate-50 p-5 rounded-2xl border-l-4 border-emerald-500">
          Sự đa dạng về địa hình và khí hậu đã tạo nên một bức tranh thiên nhiên phong phú, mỗi vùng miền lại mang một vẻ đẹp riêng. Thiên nhiên Việt Nam không chỉ có giá trị về cảnh quan mà còn gắn liền với đời sống, văn hóa và lịch sử của con người. Nhiều vùng thiên nhiên đã trở thành những điểm đến du lịch nổi tiếng, thu hút du khách trong nước và quốc tế.
        </p>
        
        <!-- MỤC 1 -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">⛰️</span> 1. Núi non và vùng cao phía Bắc</h2>
          <p class="mb-3">Miền núi phía Bắc là một trong những khu vực có cảnh quan thiên nhiên đặc sắc nhất Việt Nam. Nơi đây có nhiều dãy núi cao, thung lũng, cao nguyên đá, dòng sông và những cánh đồng ruộng bậc thang.</p>
          <ul class="list-disc pl-6 space-y-2 mb-4">
            <li><strong>Sa Pa</strong> nổi tiếng với dãy Hoàng Liên Sơn và đỉnh Fansipan – nóc nhà Đông Dương. Vào những thời điểm thích hợp, du khách có thể bắt gặp biển mây bao phủ các thung lũng và sườn núi.</li>
            <li><strong>Hà Giang</strong> lại gây ấn tượng bởi những núi đá tai mèo, những con đèo quanh co và các thung lũng nằm giữa núi. Cung đường đèo Mã Pí Lèng cùng sông Nho Quế tạo nên một trong những khung cảnh đặc biệt của vùng Đông Bắc.</li>
          </ul>
          <p>Bên cạnh cảnh quan, vùng núi phía Bắc còn có hệ thống ruộng bậc thang rộng lớn. Những thửa ruộng trải dọc theo sườn núi tạo nên cảnh sắc thay đổi theo mùa.</p>
        </div>

        <!-- MỤC 2 -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🌊</span> 2. Biển và đảo Việt Nam</h2>
          <p class="mb-3">Việt Nam có đường bờ biển dài với nhiều bãi biển, vịnh và quần đảo. Biển Việt Nam có nhiều dạng địa hình khác nhau như bãi cát dài, vách đá ven biển, đảo và các vịnh kín.</p>
          <ul class="list-disc pl-6 space-y-2">
            <li><strong>Vịnh Hạ Long</strong> nổi bật với hàng nghìn đảo và đảo đá vôi có hình dạng đa dạng. Cảnh quan nơi đây là sự kết hợp giữa mặt nước biển và những khối núi đá nhô lên giữa vịnh.</li>
            <li><strong>Miền Trung</strong> có nhiều bãi biển nổi tiếng như Mỹ Khê, Non Nước, Lăng Cô, Nha Trang. Nước biển, bãi cát và cảnh quan ven biển tạo điều kiện thuận lợi cho các hoạt động nghỉ dưỡng và du lịch.</li>
            <li>Ở phía Nam, <strong>Phú Quốc và Côn Đảo</strong> nổi bật với cảnh quan biển đảo, rừng và hệ sinh thái ven biển.</li>
          </ul>
        </div>

        <!-- ẢNH ĐAN XEN -->
        <div class="rounded-2xl overflow-hidden h-64 bg-cover bg-center my-8" style="background-image: url('https://images.unsplash.com/photo-1559592413-7cec4d0cae2b?auto=format&fit=crop&w=1000&q=80');"></div>

        <!-- MỤC 3 -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🌳</span> 3. Rừng và đa dạng sinh học</h2>
          <p class="mb-3">Rừng là một phần quan trọng của thiên nhiên Việt Nam. Nhiều khu rừng được bảo vệ trong hệ thống vườn quốc gia và khu bảo tồn thiên nhiên. Một số địa điểm tiêu biểu gồm:</p>
          <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mb-4">
            <div class="bg-emerald-50 text-emerald-700 font-semibold px-4 py-2 rounded-lg border border-emerald-100 text-center">VQG Cúc Phương</div>
            <div class="bg-emerald-50 text-emerald-700 font-semibold px-4 py-2 rounded-lg border border-emerald-100 text-center">VQG Ba Bể</div>
            <div class="bg-emerald-50 text-emerald-700 font-semibold px-4 py-2 rounded-lg border border-emerald-100 text-center">VQG Bạch Mã</div>
            <div class="bg-emerald-50 text-emerald-700 font-semibold px-4 py-2 rounded-lg border border-emerald-100 text-center">VQG Cát Tiên</div>
            <div class="bg-emerald-50 text-emerald-700 font-semibold px-4 py-2 rounded-lg border border-emerald-100 text-center col-span-2 md:col-span-1">VQG Phong Nha – Kẻ Bàng</div>
          </div>
          <p>Các khu rừng là môi trường sống của nhiều loài động vật, thực vật và góp phần bảo vệ nguồn nước, đất đai cũng như cân bằng hệ sinh thái. Du lịch sinh thái tại các khu vực này thường kết hợp tham quan rừng, khám phá hệ động thực vật, trekking và tìm hiểu về công tác bảo tồn thiên nhiên.</p>
        </div>

        <!-- MỤC 4 & 5 -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div>
            <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🏞️</span> 4. Hang động và núi đá vôi</h2>
            <p>Một trong những nét đặc biệt của thiên nhiên Việt Nam là hệ thống núi đá vôi và hang động. Khu vực Phong Nha – Kẻ Bàng (Quảng Bình) có hệ thống núi đá vôi rất phong phú với Sơn Đoòng, Hang Én và động Phong Nha.</p>
            <p class="mt-2">Những hang động này hình thành qua hàng triệu năm với khối thạch nhũ, sông ngầm độc đáo. Ngoài ra, Ninh Bình cũng nổi tiếng với núi đá vôi kết hợp sông nước.</p>
          </div>
          <div>
            <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🌾</span> 5. Đồng bằng và sông ngòi</h2>
            <p>Hai vùng lớn là đồng bằng sông Hồng và ĐB sông Cửu Long. Trong đó, ĐB sông Cửu Long nổi bật với hệ thống sông rạch dày đặc. Du khách có thể trải nghiệm:</p>
            <ul class="list-disc pl-6 mt-2 space-y-1">
              <li>Đi thuyền trên sông & tham quan vườn cây ăn trái.</li>
              <li>Khám phá làng quê miền Tây.</li>
              <li>Tham quan các khu chợ nổi rực rỡ sắc màu.</li>
            </ul>
          </div>
        </div>

        <!-- MỤC 6, 7, 8 -->
        <hr class="border-slate-100 my-8">
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🌄</span> 6. Cao nguyên và thiên nhiên Tây Nguyên</h2>
          <p>Tây Nguyên có địa hình cao nguyên với những khu rừng, thác nước, hồ tự nhiên và vùng đất bazan rộng lớn. Đà Lạt nổi tiếng với khí hậu mát mẻ. Tại Gia Lai, Biển Hồ T'Nưng và núi lửa Chư Đăng Ya tạo nên cảnh quan đặc trưng. Đắk Lắk có nhiều thác nước hùng vĩ. Nơi đây còn gắn liền với văn hóa bản địa độc đáo của nhiều đồng bào dân tộc.</p>
        </div>

        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2 mt-6"><span class="text-2xl">🌴</span> 7. Thiên nhiên miền Trung</h2>
          <p>Miền Trung có địa hình đặc biệt khi núi, đồng bằng và biển nằm khá gần nhau. Đà Nẵng nổi bật với biển, bán đảo Sơn Trà và núi Ngũ Hành Sơn. Hội An có vùng biển Cửa Đại và Cù Lao Chàm. Khu vực Huế có hệ thống sông, đầm phá, núi và biển. Vườn quốc gia Bạch Mã là một trong những hệ sinh thái rừng quan trọng nhất.</p>
        </div>

        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2 mt-6"><span class="text-2xl">🌅</span> 8. Thiên nhiên Nam Bộ</h2>
          <p>Nam Bộ có đặc trưng là vùng đồng bằng rộng lớn, hệ thống sông ngòi, rừng ngập mặn và biển đảo. Cần Giờ là khu vực tiêu biểu cho hệ sinh thái rừng ngập mặn. Xa hơn về phía Nam là những vùng biển đảo tuyệt đẹp như Phú Quốc, Côn Đảo, Nam Du.</p>
        </div>

        <!-- MỤC 9: GIÁ TRỊ THIÊN NHIÊN -->
        <div class="bg-slate-50 rounded-3xl p-6 md:p-8 my-8 border border-slate-100">
          <h2 class="text-2xl font-bold text-slate-900 mb-6 text-center">🌱 9. Giá trị của thiên nhiên Việt Nam</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-5 rounded-2xl shadow-sm">
              <h4 class="font-bold text-slate-800 text-base mb-2"><span class="text-xl">🌍</span> Giá trị sinh thái</h4>
              <p class="text-sm">Rừng, biển, sông, hồ và các vùng đất ngập nước tạo thành hệ sinh thái đa dạng, là nơi sinh sống của nhiều loài động thực vật.</p>
            </div>
            <div class="bg-white p-5 rounded-2xl shadow-sm">
              <h4 class="font-bold text-slate-800 text-base mb-2"><span class="text-xl">🌾</span> Giá trị kinh tế</h4>
              <p class="text-sm">Thiên nhiên cung cấp nguồn tài nguyên phục vụ nông nghiệp, thủy sản, lâm nghiệp và nhiều hoạt động kinh tế bền vững khác.</p>
            </div>
            <div class="bg-white p-5 rounded-2xl shadow-sm">
              <h4 class="font-bold text-slate-800 text-base mb-2"><span class="text-xl">❤️</span> Giá trị văn hóa</h4>
              <p class="text-sm">Nhiều cộng đồng dân cư Việt Nam có đời sống, phong tục và lễ hội gắn liền với sông nước, núi rừng và biển đảo.</p>
            </div>
            <div class="bg-white p-5 rounded-2xl shadow-sm">
              <h4 class="font-bold text-slate-800 text-base mb-2"><span class="text-xl">🧳</span> Giá trị du lịch</h4>
              <p class="text-sm mb-2">Cảnh quan tự nhiên tạo điều kiện phát triển nhiều loại hình:</p>
              <div class="flex flex-wrap gap-1.5">
                <span class="text-[10px] bg-slate-100 px-2 py-1 rounded">Nghỉ dưỡng</span>
                <span class="text-[10px] bg-slate-100 px-2 py-1 rounded">Sinh thái</span>
                <span class="text-[10px] bg-slate-100 px-2 py-1 rounded">Khám phá</span>
                <span class="text-[10px] bg-slate-100 px-2 py-1 rounded">Trekking</span>
                <span class="text-[10px] bg-slate-100 px-2 py-1 rounded">Biển đảo</span>
              </div>
            </div>
          </div>
        </div>

        <!-- MỤC 10 & KẾT LUẬN -->
        <div class="border-l-4 border-rose-500 pl-5">
          <h2 class="text-xl font-bold text-slate-900 mb-2 flex items-center gap-2"><span class="text-2xl">♻️</span> 10. Bảo vệ thiên nhiên Việt Nam</h2>
          <p>Bên cạnh vẻ đẹp và giá trị to lớn, thiên nhiên Việt Nam cũng cần được bảo vệ trước ô nhiễm môi trường, rác thải, suy giảm rừng và biến đổi khí hậu. Phát triển du lịch cần đi đôi với bảo vệ môi trường. Mỗi du khách có thể góp phần bằng cách: <strong>không xả rác, hạn chế sử dụng nhựa dùng một lần, tôn trọng động vật hoang dã và tuân thủ quy định tại các khu bảo tồn.</strong></p>
        </div>

        <div class="text-center mt-12 mb-4">
          <h3 class="text-2xl font-extrabold text-slate-900 mb-3">🌏 Việt Nam – vẻ đẹp từ núi rừng đến biển đảo</h3>
          <p class="text-slate-600 max-w-2xl mx-auto italic">"Từ những dãy núi cao ở Tây Bắc, cao nguyên đá Hà Giang, hệ thống hang động Quảng Bình cho đến biển đảo miền Nam, thiên nhiên Việt Nam tạo nên một bức tranh đa dạng và giàu bản sắc. Đây chính là nền tảng để phát triển du lịch bền vững và là tài sản cần được gìn giữ cho thế hệ mai sau."</p>
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
      const clickableElement = e.target.closest('a:not([href="index.php"]), button, input, .cursor-pointer');

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