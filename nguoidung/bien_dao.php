<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biển đảo Việt Nam - VIETNAM TRAVEL</title>
  
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
    <div class="w-full h-[350px] sm:h-[450px] rounded-3xl bg-cover bg-center relative overflow-hidden shadow-lg mb-8" style="background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1200&q=80');">
      <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent flex items-end p-8 sm:p-12">
        <div>
          <span class="px-3 py-1.5 bg-sky-500 text-white text-[11px] font-bold rounded-full mb-3 inline-flex items-center gap-1.5 uppercase tracking-wider">
            <i class="fa-solid fa-water"></i> Vùng trời & Biển cả quê hương
          </span>
          <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-3">🌊 Biển đảo Việt Nam</h1>
          <p class="text-slate-200 text-sm font-medium max-w-2xl leading-relaxed">
            Hơn 3.260 km bờ biển, hơn 3.000 hòn đảo lớn nhỏ và hai quần đảo Hoàng Sa - Trường Sa thiêng liêng. Biển đảo là không gian sinh tồn, phên dậu bảo vệ Tổ quốc và kho báu thiên nhiên kỳ vĩ.
          </p>
        </div>
      </div>
    </div>

    <!-- NỘI DUNG BÀI VIẾT -->
    <div class="bg-white rounded-3xl p-6 sm:p-12 shadow-sm border border-slate-100">
      <div class="max-w-none text-slate-600 space-y-8 leading-loose text-justify">
        
        <!-- MỞ ĐẦU -->
        <p class="text-[15px] font-medium text-slate-800 bg-sky-50/60 p-5 rounded-2xl border-l-4 border-sky-500">
          Việt Nam là một quốc gia ven biển với vị trí địa chính trị đặc biệt quan trọng ở khu vực Đông Nam Á và châu Á - Thái Bình Dương. Vùng biển Việt Nam có diện tích trên 1 triệu km² trong Biển Đông, giàu tài nguyên sinh vật, khoáng sản và có tiềm năng to lớn để phát triển du lịch, kinh tế hàng hải bền vững.
        </p>
        
        <!-- MỤC 1: HOÀNG SA & TRƯỜNG SA -->
        <div class="p-6 rounded-2xl bg-gradient-to-br from-blue-900 to-slate-900 text-white shadow-md">
          <div class="flex items-center justify-between mb-3">
            <h2 class="text-xl font-bold flex items-center gap-2 text-amber-300">
              <i class="fa-solid fa-flag"></i> 1. Hoàng Sa và Trường Sa - Phần máu thịt thiêng liêng
            </h2>
            <span class="bg-rose-600 text-white text-[10px] font-extrabold px-2.5 py-0.5 rounded-full uppercase tracking-wider">
              Chủ quyền Việt Nam
            </span>
          </div>
          <p class="text-xs text-slate-200 leading-relaxed mb-3">
            Quần đảo Hoàng Sa (thuộc thành phố Đà Nẵng) và Quần đảo Trường Sa (thuộc tỉnh Khánh Hòa) là hai quần đảo tiền tiêu giữ vị trí chiến lược sống còn đối với an ninh quốc phòng và chủ quyền biển đảo của đất nước.
          </p>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-3 text-xs text-slate-300">
            <div class="p-3 bg-white/10 backdrop-blur rounded-xl border border-white/10">
              <h4 class="font-bold text-white mb-1"><i class="fa-solid fa-landmark text-amber-400"></i> Bằng chứng lịch sử & pháp lý</h4>
              <p>Việt Nam có đầy đủ căn cứ lịch sử và cơ sở pháp lý khẳng định chủ quyền đối với hai quần đảo Hoàng Sa và Trường Sa phù hợp với luật pháp quốc tế qua các triều đại nhà Nguyễn (Hải đội Hoàng Sa) cho đến nay.</p>
            </div>
            <div class="p-3 bg-white/10 backdrop-blur rounded-xl border border-white/10">
              <h4 class="font-bold text-white mb-1"><i class="fa-solid fa-shield-halved text-emerald-400"></i> Vững vàng nơi đầu sóng ngọn gió</h4>
              <p>Các chiến sĩ hải quân kiên trung cùng những ngư dân ngày đêm can trường bám biển, dựng xây những cột mốc chủ quyền sống, thắp sáng ngọn hải đăng giữa muôn trùng sóng gió Biển Đông.</p>
            </div>
          </div>
        </div>

        <!-- MỤC 2: NHỮNG VỊNH BIỂN KỲ QUAN -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🏝️</span> 2. Những vịnh biển đẹp bậc nhất hành tinh</h2>
          <p class="mb-3">Việt Nam được thiên nhiên ban tặng những vịnh biển mang tầm vóc kỳ quan toàn cầu:</p>
          <ul class="list-disc pl-6 space-y-2">
            <li><strong>Vịnh Hạ Long (Quảng Ninh):</strong> Hai lần được UNESCO công nhận là Di sản Thiên nhiên Thế giới với gần 2.000 hòn đảo đá vôi kỳ vĩ nhô lên giữa làn nước xanh màu ngọc bích.</li>
            <li><strong>Vịnh Lan Hạ (Cát Bà - Hải Phòng):</strong> Viên ngọc ẩn mình thanh bình với hàng trăm bãi cát tự nhiên nằm nép dưới chân các núi đá vôi.</li>
            <li><strong>Vịnh Nha Trang (Khánh Hòa):</strong> Thành viên câu lạc bộ các vịnh biển đẹp nhất thế giới, nổi tiếng với dải cát vàng óng ả và các rạn san hô trù phú.</li>
            <li><strong>Vịnh Vĩnh Hy (Ninh Thuận):</strong> Một trong những vịnh biển hoang sơ và nguyên vẹn nhất Việt Nam với làn nước trong vắt nhìn thấu tận đáy.</li>
            <li><strong>Vịnh Lăng Cô (Thừa Thiên Huế):</strong> Nét đẹp thơ mộng nằm dưới chân đèo Hải Vân hùng vĩ.</li>
          </ul>
        </div>

        <!-- ẢNH MINH HỌA -->
        <div class="rounded-2xl overflow-hidden h-64 bg-cover bg-center my-8 shadow-sm" style="background-image: url('https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=1000&q=80');"></div>

        <!-- MỤC 3: CÁC HÒN ĐẢO THIÊN ĐƯỜNG -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🌴</span> 3. Thiên đường các hòn đảo du lịch</h2>
          <p class="mb-3">Hàng ngàn hòn đảo ven bờ và xa bờ tạo nên bức tranh du lịch sinh thái nghỉ dưỡng vô cùng quyến rũ:</p>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 mb-4">
            <div class="p-3.5 bg-sky-50/70 rounded-xl border border-sky-100">
              <h4 class="font-bold text-slate-800 text-xs mb-1 flex items-center gap-1.5 text-sky-700">
                <i class="fa-solid fa-gem"></i> Đảo Ngọc Phú Quốc
              </h4>
              <p class="text-[11px] text-slate-500">Hòn đảo lớn nhất Việt Nam với những bãi tắm nổi tiếng thế giới (Bãi Sao, Bãi Khem), cáp treo vượt biển dài nhất và các khu nghỉ dưỡng 5 sao sang trọng.</p>
            </div>
            <div class="p-3.5 bg-sky-50/70 rounded-xl border border-sky-100">
              <h4 class="font-bold text-slate-800 text-xs mb-1 flex items-center gap-1.5 text-sky-700">
                <i class="fa-solid fa-anchor"></i> Quần đảo Côn Đảo
              </h4>
              <p class="text-[11px] text-slate-500">Vừa là chứng tích lịch sử hào hùng, vừa là thiên đường sinh thái hoang sơ với bãi đẻ của loài rùa biển quý hiếm được bảo tồn nghiêm ngặt.</p>
            </div>
            <div class="p-3.5 bg-sky-50/70 rounded-xl border border-sky-100">
              <h4 class="font-bold text-slate-800 text-xs mb-1 flex items-center gap-1.5 text-sky-700">
                <i class="fa-solid fa-volcano"></i> Đảo Lý Sơn (Quảng Ngãi)
              </h4>
              <p class="text-[11px] text-slate-500">Bảo tàng sống về trầm tích núi lửa hàng triệu năm, Cổng Tò Vò độc đáo và được mệnh danh là vương quốc tỏi trứ danh của cả nước.</p>
            </div>
            <div class="p-3.5 bg-sky-50/70 rounded-xl border border-sky-100">
              <h4 class="font-bold text-slate-800 text-xs mb-1 flex items-center gap-1.5 text-sky-700">
                <i class="fa-solid fa-fish"></i> Cù Lao Chàm (Quảng Nam)
              </h4>
              <p class="text-[11px] text-slate-500">Khu dự trữ sinh quyển thế giới nổi bật với rạn san hô đa sắc màu, phong trào nói không với túi nilon và làn nước mát lành.</p>
            </div>
            <div class="p-3.5 bg-sky-50/70 rounded-xl border border-sky-100">
              <h4 class="font-bold text-slate-800 text-xs mb-1 flex items-center gap-1.5 text-sky-700">
                <i class="fa-solid fa-compass"></i> Đảo Phú Quý (Bình Thuận)
              </h4>
              <p class="text-[11px] text-slate-500">Điểm đến check-in nổi tiếng với vẻ đẹp mộc mạc, vách đá dựng đứng kỳ vĩ và lòng hiếu khách chân chất của người dân đảo.</p>
            </div>
            <div class="p-3.5 bg-sky-50/70 rounded-xl border border-sky-100">
              <h4 class="font-bold text-slate-800 text-xs mb-1 flex items-center gap-1.5 text-sky-700">
                <i class="fa-solid fa-sun"></i> Đảo Cô Tô & Quan Lạn
              </h4>
              <p class="text-[11px] text-slate-500">Những bãi biển cát trắng mịn dài tít tắp, bãi đá Móng Rồng và làn nước biếc xanh nơi miền Đông Bắc Tổ quốc.</p>
            </div>
          </div>
        </div>

        <!-- MỤC 4 & 5 -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div>
            <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🏖️</span> 4. Dải bãi tắm quyến rũ bậc nhất</h2>
            <p>Dọc theo chiều dài đất nước là hàng trăm bãi biển tuyệt đẹp:</p>
            <ul class="list-disc pl-5 mt-2 space-y-1.5 text-xs">
              <li><strong>Bãi biển Mỹ Khê (Đà Nẵng):</strong> Được tạp chí Forbes bình chọn là 1 trong 6 bãi biển quyến rũ nhất hành tinh.</li>
              <li><strong>Kỳ Co - Eo Gió (Quy Nhơn):</strong> Được ví như "Maldives thu nhỏ của Việt Nam".</li>
              <li><strong>Mũi Né (Phan Thiết):</strong> Thiên đường của nắng, gió, đồi cát bay và những môn thể thao lướt ván diều quốc tế.</li>
              <li><strong>Bãi Dài (Cam Ranh):</strong> Biển xanh thoai thoải, bờ cát trắng mịn hoàn hảo cho các gia đình nghỉ dưỡng.</li>
            </ul>
          </div>
          <div>
            <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🐠</span> 5. Đa dạng sinh học biển nhiệt đới</h2>
            <p>Hệ sinh thái biển Việt Nam vô cùng phong phú và độc đáo:</p>
            <ul class="list-disc pl-5 mt-2 space-y-1.5 text-xs">
              <li><strong>Rạn san hô:</strong> Hơn 350 loài san hô xây rạn với tổng diện tích hơn 1.100 km² phân bố ở Côn Đảo, Phú Quốc, Nha Trang.</li>
              <li><strong>Rừng ngập mặn Cần Giờ:</strong> "Lá phổi xanh" và là Khu dự trữ sinh quyển thế giới ven biển.</li>
              <li><strong>Hải sản phong phú:</strong> Hàng ngàn loài cá biển, tôm hùm, cua huỳnh đế, ốc hương, mực ống... mang giá trị dinh dưỡng cao.</li>
            </ul>
          </div>
        </div>

        <!-- MỤC 6, 7, 8 -->
        <hr class="border-slate-100 my-8">
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">⛵</span> 6. Kinh tế biển & Làng chài truyền thống</h2>
          <p>Kinh tế biển đóng góp tỷ trọng lớn vào GDP cả nước thông qua khai thác dầu khí, đánh bắt nuôi trồng thủy sản, đóng tàu và hệ thống cảng biển quốc tế nước sâu như Hải Phòng, Cái Mép - Thị Vải. Văn hóa làng chài ven biển với phong tục thờ cúng Cá Ông, Lễ hội Cầu Ngư cầu mưa thuận gió hòa, cùng nghệ thuật làm nước mắm truyền thống đã đúc kết nên cốt cách can trường, bao dung của những người con của biển.</p>
        </div>

        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2 mt-6"><span class="text-2xl">🏄</span> 7. Thể thao & Trải nghiệm biển đỉnh cao</h2>
          <p>Biển Việt Nam mở ra vô vàn hoạt động thể thao mạo hiểm và thư giãn hấp dẫn: lặn biển ngắm rạn san hô bằng bình dưỡng khí (Scuba diving), chèo thuyền kayak khám phá các hang luồn Hạ Long, lướt ván diều tại biển Mũi Né, bay dù lượn trên bờ biển Đà Nẵng, trải nghiệm câu mực đêm cùng ngư dân địa phương hay thả mình trên những du thuyền 5 sao đẳng cấp quốc tế.</p>
        </div>

        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2 mt-6"><span class="text-2xl">🚢</span> 8. Chiến lược Kinh tế biển Việt Nam</h2>
          <p>Nghị quyết số 36-NQ/TW của Ban Chấp hành Trung ương Đảng đã xác định mục tiêu đến năm 2030: <em>"Việt Nam trở thành quốc gia biển mạnh; đạt cơ bản các tiêu chí về phát triển bền vững kinh tế biển; hình thành văn hóa sinh thái biển; chủ động thích ứng với biến đổi khí hậu, nước biển dâng"</em>. Kinh tế biển là động lực then chốt đưa đất nước vươn mình ra biển lớn.</p>
        </div>

        <!-- MỤC 9: GIÁ TRỊ TO LỚN -->
        <div class="bg-sky-50/40 rounded-3xl p-6 md:p-8 my-8 border border-sky-100">
          <h2 class="text-2xl font-bold text-slate-900 mb-6 text-center">⚓ 9. Giá trị và Tầm vóc của Biển đảo Việt Nam</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-100">
              <h4 class="font-bold text-slate-800 text-base mb-2"><span class="text-xl">🛡️</span> Phòng tuyến an ninh Tổ quốc</h4>
              <p class="text-sm">Hệ thống đảo ven bờ và xa bờ tạo thành thế trận phòng thủ vững chắc, kiểm soát các tuyến hàng hải huyết mạch quốc tế qua Biển Đông.</p>
            </div>
            <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-100">
              <h4 class="font-bold text-slate-800 text-base mb-2"><span class="text-xl">💎</span> Kho báu tài nguyên thiên nhiên</h4>
              <p class="text-sm">Nguồn tài nguyên dầu khí, khoáng sản đáy biển, năng lượng gió ngoài khơi và trữ lượng thủy hải sản hàng triệu tấn mỗi năm.</p>
            </div>
            <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-100">
              <h4 class="font-bold text-slate-800 text-base mb-2"><span class="text-xl">✈️</span> Mũi nhọn du lịch quốc tế</h4>
              <p class="text-sm">Du lịch biển đảo chiếm trên 70% lượng khách du lịch toàn quốc, tạo công ăn việc làm và nguồn thu ngoại tệ quan trọng cho đất nước.</p>
            </div>
            <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-100">
              <h4 class="font-bold text-slate-800 text-base mb-2"><span class="text-xl">🌊</span> Các loại hình du lịch biển nổi bật</h4>
              <p class="text-sm mb-2">Đa dạng lựa chọn trải nghiệm phù hợp với mọi đối tượng du khách:</p>
              <div class="flex flex-wrap gap-1.5">
                <span class="text-[10px] bg-slate-100 px-2 py-1 rounded">Nghỉ dưỡng Resort</span>
                <span class="text-[10px] bg-slate-100 px-2 py-1 rounded">Lặn ngắm san hô</span>
                <span class="text-[10px] bg-slate-100 px-2 py-1 rounded">Du thuyền Cruise</span>
                <span class="text-[10px] bg-slate-100 px-2 py-1 rounded">Khám phá đảo hoang</span>
                <span class="text-[10px] bg-slate-100 px-2 py-1 rounded">Thể thao nước</span>
              </div>
            </div>
          </div>
        </div>

        <!-- MỤC 10 & KẾT LUẬN -->
        <div class="border-l-4 border-sky-500 pl-5">
          <h2 class="text-xl font-bold text-slate-900 mb-2 flex items-center gap-2"><span class="text-2xl">🌱</span> 10. Chung tay Bảo vệ Môi trường Biển Đảo</h2>
          <p>Biển đang đối mặt với những thách thức to lớn từ rác thải nhựa, ô nhiễm môi trường và biến đổi khí hậu. Mỗi hành động nhỏ của du khách như: <strong>nói không với túi nilon khi ra đảo, không giẫm đạp lên các rạn san hô, không xả rác xuống biển và ưu tiên sử dụng sản phẩm thân thiện môi trường</strong> đều góp phần giữ cho đại dương của chúng ta mãi xanh biếc và trù phú.</p>
        </div>

        <div class="text-center mt-12 mb-4">
          <h3 class="text-2xl font-extrabold text-slate-900 mb-3">🇻🇳 Biển bạc Việt Nam – Tự hào Tổ quốc nơi đầu sóng</h3>
          <p class="text-slate-600 max-w-2xl mx-auto italic">"Biển đảo là cội nguồn của sự sống, là biểu tượng kiên cường bất khuất của dân tộc Việt Nam. Giữ vững chủ quyền biển đảo và gìn giữ vẻ đẹp hoang sơ của biển quê hương là trách nhiệm và niềm tự hào của muôn triệu trái tim Việt Nam."</p>
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
      const clickableElement = e.target.closest('a:not([href="index.php"]):not([href="thien_nhien.php"]):not([href="van_hoa.php"]):not([href="am_thuc.php"]):not([href="mien_bac.php"]):not([href="mien_trung.php"]):not([href="mien_nam.php"]), button, input, .cursor-pointer');

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
