<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Văn hóa Việt Nam - VIETNAM TRAVEL</title>
  
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
            <i class="fa-solid fa-landmark"></i> Khám phá di sản
          </span>
          <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-3">🏛️ Văn hóa Việt Nam</h1>
          <p class="text-slate-200 text-sm font-medium max-w-2xl leading-relaxed">
            Hơn 4.000 năm lịch sử dựng nước và giữ nước đã hun đúc nên một nền văn hóa rực rỡ, giàu lòng nhân ái, kết tinh tinh hoa từ nền văn minh lúa nước và sự giao thoa độc đáo của 54 dân tộc anh em.
          </p>
        </div>
      </div>
    </div>

    <!-- NỘI DUNG BÀI VIẾT -->
    <div class="bg-white rounded-3xl p-6 sm:p-12 shadow-sm border border-slate-100">
      <div class="max-w-none text-slate-600 space-y-8 leading-loose text-justify">
        
        <!-- MỞ ĐẦU -->
        <p class="text-[15px] font-medium text-slate-800 bg-amber-50/60 p-5 rounded-2xl border-l-4 border-amber-500">
          Văn hóa Việt Nam là dòng chảy bền bỉ xuyên suốt hàng nghìn năm lịch sử. Khởi nguồn từ nền văn minh lúa nước châu thổ sông Hồng gắn liền với thời đại các Vua Hùng dựng nước, trải qua bao thăng trầm và tiếp biến văn hóa, dân tộc Việt Nam luôn giữ vững bản sắc riêng biệt, tạo nên một kho tàng di sản vật thể và phi vật thể vô giá được cả thế giới ngưỡng mộ.
        </p>
        
        <!-- MỤC 1 -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🏮</span> 1. Di sản Văn hóa Thế giới được UNESCO vinh danh</h2>
          <p class="mb-3">Việt Nam tự hào sở hữu nhiều di sản văn hóa vật thể và phi vật thể đại diện của nhân loại, phản ánh bàn tay tài hoa, tâm hồn và trí tuệ của bao thế hệ cha ông:</p>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-4">
            <div class="p-4 bg-slate-50 rounded-xl border border-slate-100">
              <h4 class="font-bold text-slate-800 text-sm mb-1.5 flex items-center gap-2 text-amber-600">
                <i class="fa-solid fa-monument"></i> Di sản Văn hóa Vật thể
              </h4>
              <ul class="list-disc pl-5 space-y-1 text-xs">
                <li><strong>Quần thể di tích Cố đô Huế:</strong> Đỉnh cao kiến trúc cung đình triều Nguyễn.</li>
                <li><strong>Đô thị cổ Hội An:</strong> Thương cảng quốc tế sầm uất thế kỷ 16-17 còn vẹn nguyên.</li>
                <li><strong>Thánh địa Mỹ Sơn:</strong> Quần thể đền tháp Chăm Pa huyền bí giữa thung lũng.</li>
                <li><strong>Hoàng thành Thăng Long:</strong> Trung tâm quyền lực liên tục hơn 13 thế kỷ.</li>
                <li><strong>Thành nhà Hồ:</strong> Công trình kiến trúc đá độc nhất vô nhị ở Đông Nam Á.</li>
              </ul>
            </div>

            <div class="p-4 bg-slate-50 rounded-xl border border-slate-100">
              <h4 class="font-bold text-slate-800 text-sm mb-1.5 flex items-center gap-2 text-rose-600">
                <i class="fa-solid fa-music"></i> Di sản Văn hóa Phi vật thể
              </h4>
              <ul class="list-disc pl-5 space-y-1 text-xs">
                <li><strong>Nhã nhạc Cung đình Huế:</strong> Âm nhạc bác học đỉnh cao thời phong kiến.</li>
                <li><strong>Không gian văn hóa Cồng chiêng Tây Nguyên:</strong> Tiếng nói tâm linh giữa đại ngàn.</li>
                <li><strong>Dân ca Quan họ Bắc Ninh:</strong> Nét giao duyên ngọt ngào, tinh tế xứ Kinh Bắc.</li>
                <li><strong>Hát Xoan Phú Thọ & Ca Trù:</strong> Nghệ thuật trình diễn cổ truyền độc đáo.</li>
                <li><strong>Đờn ca tài tử Nam Bộ:</strong> Giai điệu mộc mạc gắn liền với người phương Nam.</li>
                <li><strong>Tín ngưỡng Thờ Mẫu Tam phủ:</strong> Tinh thần tôn vinh người Mẹ và thiên nhiên.</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- MỤC 2 -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🎉</span> 2. Lễ hội truyền thống - Điểm hẹn văn hóa ba miền</h2>
          <p class="mb-3">Việt Nam có gần 8.000 lễ hội lớn nhỏ diễn ra quanh năm, trong đó phần lớn tập trung vào mùa xuân sau Tết Nguyên Đán. Lễ hội là dịp để con cháu nhớ về tổ tiên, cầu mong mưa thuận gió hòa, quốc thái dân an:</p>
          <ul class="list-disc pl-6 space-y-2">
            <li><strong>Giỗ Tổ Hùng Vương (Đền Hùng - Phú Thọ):</strong> Câu ca dao <em>"Dù ai đi ngược về xuôi / Nhớ ngày Giỗ Tổ mùng mười tháng ba"</em> đã in sâu trong tâm thức người Việt như một sợi dây liên kết thiêng liêng về nguồn cội.</li>
            <li><strong>Tết Nguyên Đán:</strong> Lễ hội lớn nhất và quan trọng nhất trong năm, thời khắc sum vầy gia đình, bày tỏ lòng hiếu kính với ông bà cha mẹ và ước mong một năm mới an khang, thịnh vượng.</li>
            <li><strong>Lễ hội Chùa Hương & Hội Lim:</strong> Nét đẹp thanh tịnh nơi cửa Phật và không gian hội làng náo nức với những làn điệu dân ca Quan họ trên thuyền rồng.</li>
            <li><strong>Lễ hội Cầu Ngư miền Trung:</strong> Nét văn hóa tín ngưỡng đặc sắc của ngư dân vùng biển gắn liền với tục thờ Cá Ông (cá voi).</li>
            <li><strong>Lễ hội Ka-tê (người Chăm) & Ok Om Bok (người Khmer):</strong> Những nét văn hóa rực rỡ, độc đáo của các đồng bào miền duyên hải và đồng bằng sông Cửu Long.</li>
          </ul>
        </div>

        <!-- ẢNH MINH HỌA NGHỆ THUẬT & TRUYỀN THỐNG -->
        <div class="rounded-2xl overflow-hidden h-64 bg-cover bg-center my-8 shadow-sm" style="background-image: url('https://images.unsplash.com/photo-1528127269322-539801943592?auto=format&fit=crop&w=1000&q=80');"></div>

        <!-- MỤC 3 -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">👘</span> 3. Trang phục truyền thống - Tôn vinh nét đẹp Việt</h2>
          <p class="mb-3">Trang phục truyền thống của người Việt vừa mang tính thẩm mỹ cao, vừa gắn liền với khí hậu và đời sống sinh hoạt:</p>
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-4">
            <div class="bg-amber-50/70 p-3.5 rounded-xl border border-amber-100 text-center">
              <h4 class="font-bold text-slate-800 text-xs mb-1">Áo dài truyền thống</h4>
              <p class="text-[11px] text-slate-500">Biểu tượng duyên dáng của người phụ nữ Việt Nam, kết hợp sự trang nhã, kín đáo và hiện đại.</p>
            </div>
            <div class="bg-amber-50/70 p-3.5 rounded-xl border border-amber-100 text-center">
              <h4 class="font-bold text-slate-800 text-xs mb-1">Thổ cẩm vùng cao</h4>
              <p class="text-[11px] text-slate-500">Được dệt thủ công tỉ mỉ với họa tiết hoa văn phong phú của đồng bào H'Mông, Dao, Thái, Tây Nguyên.</p>
            </div>
            <div class="bg-amber-50/70 p-3.5 rounded-xl border border-amber-100 text-center">
              <h4 class="font-bold text-slate-800 text-xs mb-1">Áo bà ba & Khăn rằn</h4>
              <p class="text-[11px] text-slate-500">Nét mộc mạc, gần gũi và phóng khoáng đặc trưng của con người miền Tây Nam Bộ châu thổ sông Tiền, sông Hậu.</p>
            </div>
          </div>
        </div>

        <!-- MỤC 4 & 5 -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div>
            <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🎭</span> 4. Nghệ thuật Diễn xướng & Sân khấu dân gian</h2>
            <p>Việt Nam có nền nghệ thuật biểu diễn dân gian độc đáo:</p>
            <ul class="list-disc pl-5 mt-2 space-y-1.5 text-xs">
              <li><strong>Múa rối nước:</strong> Nghệ thuật sân khấu nước độc nhất vô nhị ra đời từ đời sống nông nghiệp châu thổ sông Hồng.</li>
              <li><strong>Hát Chèo & Tuồng cổ:</strong> Lối biểu diễn ước lệ với sự kết hợp nhuần nhuyễn giữa kịch, múa và âm nhạc dân tộc.</li>
              <li><strong>Nghệ thuật Cải lương:</strong> Sân khấu ca kịch hiện đại giàu cảm xúc và trữ tình của người miền Nam.</li>
              <li><strong>Độc tấu Đàn Bầu:</strong> Cây đàn một dây với âm sắc ngân nga chạm tới lòng người, được ví như tiếng lòng dân tộc.</li>
            </ul>
          </div>
          <div>
            <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🪔</span> 5. Tín ngưỡng & Đạo lý truyền thống</h2>
            <p>Hệ thống tín ngưỡng người Việt thể hiện lòng biết ơn sâu sắc:</p>
            <ul class="list-disc pl-5 mt-2 space-y-1.5 text-xs">
              <li><strong>Tín ngưỡng Thờ cúng Tổ tiên:</strong> Bàn thờ gia tiên là nơi tôn nghiêm trong mỗi mái nhà, nhắc nhở con cháu đạo hiếu.</li>
              <li><strong>Thờ Thành Hoàng Làng:</strong> Vị thần bảo hộ cho sự bình yên và thịnh vượng của mỗi ngôi làng Việt.</li>
              <li><strong>Tinh thần "Tam giáo đồng nguyên":</strong> Sự dung hợp hài hòa giữa Phật giáo, Nho giáo và Đạo giáo qua hàng thế kỷ.</li>
              <li><strong>Đạo lý "Uống nước nhớ nguồn":</strong> Nền tảng cốt lõi định hình phẩm chất nhân văn của người Việt Nam.</li>
            </ul>
          </div>
        </div>

        <!-- MỤC 6, 7, 8 -->
        <hr class="border-slate-100 my-8">
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🏺</span> 6. Tinh hoa Làng nghề thủ công truyền thống</h2>
          <p>Trải qua hàng trăm năm lịch sử, các làng nghề truyền thống vẫn lưu giữ những bí quyết chế tác thủ công tinh xảo. Có thể kể đến gốm sứ Bát Tràng (Hà Nội), gốm Chu Đậu (Hải Dương), làng lụa Vạn Phúc (Hà Đông), tranh khắc gỗ dân gian Đông Hồ (Bắc Ninh), đúc đồng Đại Bái, chạm bạc Đồng Xâm hay làng nón Chuông. Mỗi sản phẩm thủ công không chỉ là một tác phẩm nghệ thuật mà còn chứa đựng cả tâm hồn người thợ.</p>
        </div>

        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2 mt-6"><span class="text-2xl">🏡</span> 7. Kiến trúc truyền thống & Không gian văn hóa</h2>
          <p>Kiến trúc cổ truyền Việt Nam luôn hòa quyện với tự nhiên. Hình ảnh <em>"Cây đa, giếng nước, sân đình"</em> đã trở thành biểu tượng thân thương của làng quê Bắc Bộ. Ở Tây Nguyên, ngôi nhà rông sừng sững giữa buôn làng là nơi sinh hoạt cộng đồng và lưu giữ linh hồn bộ tộc. Tại vùng cao phía Bắc, nhà sàn bằng gỗ hay nhà trình tường bằng đất của người Hà Nhì, H'Mông thể hiện sự thích nghi tuyệt vời với thời tiết núi rừng.</p>
        </div>

        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2 mt-6"><span class="text-2xl">🍵</span> 8. Phong tục, Tập quán & Lối sống tình nghĩa</h2>
          <p>Người Việt Nam coi trọng tình làng nghĩa xóm: <em>"Bán anh em xa, mua láng giềng gần"</em>, tinh thần sẻ chia <em>"Lá lành đùm lá rách"</em>. Phong tục têm trầu cánh phượng với câu nói quen thuộc <em>"Miếng trầu là đầu câu chuyện"</em>, văn hóa uống trà mộc mạc hay truyền thống tôn sư trọng đạo, hiếu học là những nét đẹp văn hóa trường tồn mãi cùng thời gian.</p>
        </div>

        <!-- MỤC 9: GIÁ TRỊ VĂN HÓA -->
        <div class="bg-amber-50/40 rounded-3xl p-6 md:p-8 my-8 border border-amber-100">
          <h2 class="text-2xl font-bold text-slate-900 mb-6 text-center">⭐ 9. Giá trị và Sức sống của Văn hóa Việt Nam</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-100">
              <h4 class="font-bold text-slate-800 text-base mb-2"><span class="text-xl">🛡️</span> Sức mạnh nội sinh bền bỉ</h4>
              <p class="text-sm">Văn hóa là cội nguồn tạo nên sức mạnh giúp dân tộc Việt Nam giữ vững độc lập, chủ quyền và không bị đồng hóa qua hơn một nghìn năm lịch sử.</p>
            </div>
            <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-100">
              <h4 class="font-bold text-slate-800 text-base mb-2"><span class="text-xl">🤝</span> Tinh thần gắn kết cộng đồng</h4>
              <p class="text-sm">Lòng yêu nước nồng nàn, tinh thần đại đoàn kết toàn dân tộc và lòng nhân ái, khoan dung luôn là nền tảng vững chắc trong mọi thời đại.</p>
            </div>
            <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-100">
              <h4 class="font-bold text-slate-800 text-base mb-2"><span class="text-xl">🌏</span> Sức hút du lịch quốc tế</h4>
              <p class="text-sm">Bản sắc văn hóa độc đáo, thân thiện và giàu lòng hiếu khách là điểm nhấn đặc biệt thu hút hàng triệu du khách khắp năm châu đến trải nghiệm.</p>
            </div>
            <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-100">
              <h4 class="font-bold text-slate-800 text-base mb-2"><span class="text-xl">✨</span> Sự đa dạng trong thống nhất</h4>
              <p class="text-sm mb-2">54 dân tộc anh em tạo nên bức tranh văn hóa đa sắc màu với nhiều loại hình di sản:</p>
              <div class="flex flex-wrap gap-1.5">
                <span class="text-[10px] bg-slate-100 px-2 py-1 rounded">Di tích lịch sử</span>
                <span class="text-[10px] bg-slate-100 px-2 py-1 rounded">Lễ hội dân gian</span>
                <span class="text-[10px] bg-slate-100 px-2 py-1 rounded">Nghệ thuật cổ</span>
                <span class="text-[10px] bg-slate-100 px-2 py-1 rounded">Làng nghề</span>
                <span class="text-[10px] bg-slate-100 px-2 py-1 rounded">Ẩm thực di sản</span>
              </div>
            </div>
          </div>
        </div>

        <!-- MỤC 10 & KẾT LUẬN -->
        <div class="border-l-4 border-amber-500 pl-5">
          <h2 class="text-xl font-bold text-slate-900 mb-2 flex items-center gap-2"><span class="text-2xl">🕊️</span> 10. Gìn giữ và Phát huy Bản sắc Dân tộc</h2>
          <p>Trong bối cảnh hội nhập quốc tế ngày càng sâu rộng, việc bảo tồn và phát huy các giá trị văn hóa truyền thống càng trở nên cấp thiết. Mỗi người dân, đặc biệt là thế hệ trẻ, chính là những sứ giả tiếp nối ngọn lửa văn hóa cha ông, gìn giữ sự trong sáng của tiếng Việt, tôn trọng các di sản lịch sử và ứng dụng công nghệ để lan tỏa vẻ đẹp văn hóa Việt Nam ra thế giới.</p>
        </div>

        <div class="text-center mt-12 mb-4">
          <h3 class="text-2xl font-extrabold text-slate-900 mb-3">🇻🇳 Việt Nam – Đất nước ngàn năm văn hiến</h3>
          <p class="text-slate-600 max-w-2xl mx-auto italic">"Văn hóa là hồn cốt của dân tộc, nói lên bản sắc của dân tộc. Văn hóa còn thì dân tộc còn. Tìm về với văn hóa Việt Nam là tìm về với cội nguồn yêu thương, lòng tự hào và điểm tựa tâm hồn vững chắc cho hành trình bước tới tương lai."</p>
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
      const clickableElement = e.target.closest('a:not([href="index.php"]):not([href="thien_nhien.php"]):not([href="am_thuc.php"]):not([href="bien_dao.php"]):not([href="mien_bac.php"]):not([href="mien_trung.php"]):not([href="mien_nam.php"]), button, input, .cursor-pointer');

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
