<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ẩm thực Việt Nam - VIETNAM TRAVEL</title>
  
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
    <div class="w-full h-[350px] sm:h-[450px] rounded-3xl bg-cover bg-center relative overflow-hidden shadow-lg mb-8" style="background-image: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=1200&q=80');">
      <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent flex items-end p-8 sm:p-12">
        <div>
          <span class="px-3 py-1.5 bg-orange-500 text-white text-[11px] font-bold rounded-full mb-3 inline-flex items-center gap-1.5 uppercase tracking-wider">
            <i class="fa-solid fa-utensils"></i> Tinh hoa phong vị
          </span>
          <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-3">🍜 Ẩm thực Việt Nam</h1>
          <p class="text-slate-200 text-sm font-medium max-w-2xl leading-relaxed">
            Sự kết hợp tinh tế giữa ngũ hành, ngũ vị và triết lý âm dương hài hòa. Ẩm thực Việt Nam chinh phục thế giới bởi sự thanh nhẹ, tươi ngon và đậm đà nghĩa tình.
          </p>
        </div>
      </div>
    </div>

    <!-- NỘI DUNG BÀI VIẾT -->
    <div class="bg-white rounded-3xl p-6 sm:p-12 shadow-sm border border-slate-100">
      <div class="max-w-none text-slate-600 space-y-8 leading-loose text-justify">
        
        <!-- MỞ ĐẦU -->
        <p class="text-[15px] font-medium text-slate-800 bg-orange-50/60 p-5 rounded-2xl border-l-4 border-orange-500">
          Ẩm thực Việt Nam không đơn thuần là những món ăn nuôi sống con người, mà là một bức tranh văn hóa đa màu sắc kết tinh qua hàng ngàn năm lịch sử. Khác với nhiều nền ẩm thực chú trọng chất béo hay gia vị cay nồng, món ăn Việt ghi điểm nhờ độ thanh thoát, sự cân bằng tự nhiên giữa rau xanh, thịt cá và các loại thảo mộc tươi mát, mang đến hương vị tròn đầy và tốt cho sức khỏe.
        </p>
        
        <!-- MỤC 1 -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">☯️</span> 1. Triết lý Âm Dương & Ngũ Hành trong ẩm thực</h2>
          <p class="mb-3">Điểm đặc sắc làm nên bản sắc ẩm thực Việt chính là sự hòa hợp triết lý phương Đông sâu sắc:</p>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-4">
            <div class="p-4 bg-slate-50 rounded-xl border border-slate-100">
              <h4 class="font-bold text-slate-800 text-sm mb-1.5 flex items-center gap-2 text-orange-600">
                <i class="fa-solid fa-scale-balanced"></i> Cân bằng Âm - Dương
              </h4>
              <p class="text-xs text-slate-600 leading-relaxed">
                Người Việt luôn phối hợp thực phẩm có tính hàn (lạnh) đi kèm gia vị có tính nhiệt (ấm) để đảm bảo món ăn hài hòa. Ví dụ: thịt vịt tính hàn chấm với nước mắm gừng ấm áp; hải sản tính lạnh ăn kèm ớt, sả, tiêu; trứng vịt lộn luôn ăn kèm rau răm.
              </p>
            </div>

            <div class="p-4 bg-slate-50 rounded-xl border border-slate-100">
              <h4 class="font-bold text-slate-800 text-sm mb-1.5 flex items-center gap-2 text-amber-600">
                <i class="fa-solid fa-circle-nodes"></i> Hòa hợp Ngũ Vị
              </h4>
              <p class="text-xs text-slate-600 leading-relaxed">
                Năm vị cơ bản tương ứng với ngũ hành: Chua (Mộc), Cay (Kim), Mặn (Thủy), Ngọt (Thổ), Đắng (Hỏa). Một món ăn xuất sắc thường là sự dung hòa kỳ diệu của cả năm vị, kích thích trọn vẹn vị giác mà không bị lấn át.
              </p>
            </div>
          </div>
        </div>

        <!-- MỤC 2, 3, 4: ẨM THỰC 3 MIỀN -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🗺️</span> 2. Dấu ấn ẩm thực 3 miền Bắc - Trung - Nam</h2>
          <p class="mb-4">Mỗi vùng miền trên dải đất hình chữ S lại mang trong mình một phong vị đặc trưng không thể nhầm lẫn:</p>
          
          <div class="space-y-4">
            <!-- MIỀN BẮC -->
            <div class="p-4 rounded-2xl bg-emerald-50/50 border border-emerald-100">
              <h3 class="text-base font-bold text-emerald-800 mb-2 flex items-center gap-2">
                <i class="fa-solid fa-bowl-food"></i> Ẩm thực Miền Bắc: Thanh đạm, tinh tế và chuẩn mực
              </h3>
              <p class="text-xs text-slate-600 mb-2">
                Món ăn miền Bắc có vị thanh vừa phải, không quá cay, không quá ngọt hay béo ngậy. Màu sắc món ăn nhã nhặn, tôn vinh vị nguyên bản của nguyên liệu tươi ngon.
              </p>
              <div class="flex flex-wrap gap-2 text-[11px] font-semibold text-emerald-900">
                <span class="bg-white px-2.5 py-1 rounded-lg border border-emerald-200 shadow-2xs">Phở bò Hà Nội</span>
                <span class="bg-white px-2.5 py-1 rounded-lg border border-emerald-200 shadow-2xs">Bún chả</span>
                <span class="bg-white px-2.5 py-1 rounded-lg border border-emerald-200 shadow-2xs">Bún thang</span>
                <span class="bg-white px-2.5 py-1 rounded-lg border border-emerald-200 shadow-2xs">Chả cá Lã Vọng</span>
                <span class="bg-white px-2.5 py-1 rounded-lg border border-emerald-200 shadow-2xs">Bánh cuốn Thanh Trì</span>
                <span class="bg-white px-2.5 py-1 rounded-lg border border-emerald-200 shadow-2xs">Cốm làng Vòng</span>
              </div>
            </div>

            <!-- MIỀN TRUNG -->
            <div class="p-4 rounded-2xl bg-amber-50/50 border border-amber-100">
              <h3 class="text-base font-bold text-amber-800 mb-2 flex items-center gap-2">
                <i class="fa-solid fa-pepper-hot"></i> Ẩm thực Miền Trung: Đậm đà, cay nồng và cầu kỳ
              </h3>
              <p class="text-xs text-slate-600 mb-2">
                Khí hậu khắc nghiệt hun đúc nên gu ẩm thực mạnh mẽ với vị cay, mặn đậm đà. Nổi tiếng nhất là sự giao thoa giữa ẩm thực Cung đình Huế cầu kỳ, sang trọng và ẩm thực dân dã miền biển phong phú.
              </p>
              <div class="flex flex-wrap gap-2 text-[11px] font-semibold text-amber-900">
                <span class="bg-white px-2.5 py-1 rounded-lg border border-amber-200 shadow-2xs">Bún bò Huế</span>
                <span class="bg-white px-2.5 py-1 rounded-lg border border-amber-200 shadow-2xs">Mì Quảng</span>
                <span class="bg-white px-2.5 py-1 rounded-lg border border-amber-200 shadow-2xs">Cao lầu Hội An</span>
                <span class="bg-white px-2.5 py-1 rounded-lg border border-amber-200 shadow-2xs">Bánh bèo - nậm - lọc</span>
                <span class="bg-white px-2.5 py-1 rounded-lg border border-amber-200 shadow-2xs">Cơm hến</span>
                <span class="bg-white px-2.5 py-1 rounded-lg border border-amber-200 shadow-2xs">Mắm tôm chua</span>
              </div>
            </div>

            <!-- MIỀN NAM -->
            <div class="p-4 rounded-2xl bg-orange-50/50 border border-orange-100">
              <h3 class="text-base font-bold text-orange-800 mb-2 flex items-center gap-2">
                <i class="fa-solid fa-shrimp"></i> Ẩm thực Miền Nam: Phóng khoáng, ngọt ngào và trù phú
              </h3>
              <p class="text-xs text-slate-600 mb-2">
                Được thiên nhiên ưu đãi với hệ thống sông ngòi trù phú, ẩm thực Nam Bộ mang tính tự nhiên, đậm vị ngọt của đường thốt nốt, béo ngậy của nước cốt dừa và vô vàn các loại rau đồng, bông súng, hoa điên điển.
              </p>
              <div class="flex flex-wrap gap-2 text-[11px] font-semibold text-orange-900">
                <span class="bg-white px-2.5 py-1 rounded-lg border border-orange-200 shadow-2xs">Cơm tấm Sài Gòn</span>
                <span class="bg-white px-2.5 py-1 rounded-lg border border-orange-200 shadow-2xs">Canh chua cá lóc</span>
                <span class="bg-white px-2.5 py-1 rounded-lg border border-orange-200 shadow-2xs">Cá kho tộ</span>
                <span class="bg-white px-2.5 py-1 rounded-lg border border-orange-200 shadow-2xs">Hủ tiếu Mỹ Tho / Sa Đéc</span>
                <span class="bg-white px-2.5 py-1 rounded-lg border border-orange-200 shadow-2xs">Bánh xèo miền Tây</span>
                <span class="bg-white px-2.5 py-1 rounded-lg border border-orange-200 shadow-2xs">Lẩu mắm</span>
              </div>
            </div>
          </div>
        </div>

        <!-- ẢNH MINH HỌA -->
        <div class="rounded-2xl overflow-hidden h-64 bg-cover bg-center my-8 shadow-sm" style="background-image: url('https://images.unsplash.com/photo-1582878826629-29b7ad1cdc43?auto=format&fit=crop&w=1000&q=80');"></div>

        <!-- MỤC 3 -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🏺</span> 3. Nước mắm - 'Linh hồn' ẩm thực Việt</h2>
          <p class="mb-3">Không có gia vị nào phản ánh tâm hồn và sợi dây liên kết của người Việt sâu sắc như nước mắm truyền thống. Được ủ chượp ròng rã suốt hàng năm trời từ cá cơm tươi và muối hạt tinh khiết tại các vùng biển danh tiếng như Phú Quốc, Phan Thiết, Cát Hải:</p>
          <p>Bát nước mắm nguyên chất thơm lừng hay bát nước mắm chua ngọt pha tỏi, ớt, chanh luôn được đặt trang trọng ở chính giữa mâm cơm, là biểu tượng của tinh thần sẻ chia, gắn bó gia đình <em>"Ăn chung một mâm, chấm chung một bát nước mắm"</em>.</p>
        </div>

        <!-- MỤC 4 & 5 -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div>
            <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🥪</span> 4. Ẩm thực đường phố vang danh thế giới</h2>
            <p>Đường phố Việt Nam là một "bảo tàng ẩm thực sống" đầy mê hoặc:</p>
            <ul class="list-disc pl-5 mt-2 space-y-1.5 text-xs">
              <li><strong>Bánh mì Việt Nam:</strong> Món bánh sandwich ngon nhất thế giới với vỏ giòn rụm, pate béo ngậy, thịt nướng thơm lừng và đồ chua tươi giòn.</li>
              <li><strong>Cà phê trứng & Cà phê sữa đá:</strong> Nét văn hóa thưởng thức cà phê độc đáo được báo chí quốc tế ngợi ca.</li>
              <li><strong>Bún đậu mắm tôm:</strong> Sự bùng nổ hương vị dân dã đầy cá tính.</li>
              <li><strong>Gỏi cuốn tôm thịt:</strong> Món ăn thanh đạm lọt top món ăn ngon nhất hành tinh do CNN bình chọn.</li>
            </ul>
          </div>
          <div>
            <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🌿</span> 5. Rau thơm và gia vị tự nhiên</h2>
            <p>Vườn rau gia vị Việt Nam phong phú bậc nhất Đông Nam Á:</p>
            <ul class="list-disc pl-5 mt-2 space-y-1.5 text-xs">
              <li><strong>Rau húng, kinh giới, tía tô, ngò gai:</strong> Vừa làm dậy vị món ăn vừa là những vị thuốc nam thanh nhiệt, tiêu thực.</li>
              <li><strong>Hành, tỏi, gừng, sả, nghệ:</strong> Khử mùi tanh, kích thích vị giác và tạo màu sắc tự nhiên bắt mắt.</li>
              <li><strong>Vị chua dân dã:</strong> Từ quả sấu, quả me, khế chua, lá giang, giấm bỗng... mang lại độ chua thanh mát, dễ chịu.</li>
            </ul>
          </div>
        </div>

        <!-- MỤC 6, 7, 8 -->
        <hr class="border-slate-100 my-8">
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🍲</span> 6. Bữa cơm gia đình - Sợi dây gắn kết thiêng liêng</h2>
          <p>Trong nhịp sống hiện đại, bữa cơm nhà vẫn là bến đỗ bình yên của mỗi người con đất Việt. Bát cơm trắng thơm hương lúa mới, đĩa rau muống luộc dầm sấu, bát cà pháo giòn tan cùng khúc cá kho tộ... là nơi cả gia đình quây quần sau một ngày làm việc, nhắc nhở con cháu đạo hiếu kính và trân trọng hạt ngọc trời ban.</p>
        </div>

        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2 mt-6"><span class="text-2xl">🌱</span> 7. Xu hướng Ẩm thực Chay & Thực dưỡng</h2>
          <p>Ẩm thực chay Việt Nam phát triển rực rỡ nhờ bề dày Phật giáo lâu đời. Người ăn chay ở Việt Nam không chỉ hướng đến tâm thanh tịnh mà còn đón đầu xu hướng sống xanh bền vững. Các món chay được chế biến cầu kỳ từ nấm, đậu hũ, sen, củ sen, hạt sen Huế... tạo nên những bữa tiệc thanh khiết, đầy đủ dưỡng chất và trọn vẹn hương vị tự nhiên.</p>
        </div>

        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2 mt-6"><span class="text-2xl">⭐</span> 8. Ẩm thực Việt Nam trên bản đồ quốc tế</h2>
          <p>Ẩm thực Việt Nam liên tục được vinh danh bởi các tổ chức uy tín hàng đầu: Danh hiệu <em>"Điểm đến ẩm thực hàng đầu châu Á"</em> tại World Travel Awards, sự góp mặt của cẩm nang ẩm thực danh giá Michelin Guide tại Hà Nội, TP.HCM và Đà Nẵng, cùng sự yêu thích cuồng nhiệt của các đầu bếp lừng danh như Gordon Ramsay hay cố đầu bếp Anthony Bourdain.</p>
        </div>

        <!-- MỤC 9: GIÁ TRỊ VĂN HÓA ẨM THỰC -->
        <div class="bg-orange-50/40 rounded-3xl p-6 md:p-8 my-8 border border-orange-100">
          <h2 class="text-2xl font-bold text-slate-900 mb-6 text-center">🏆 9. Giá trị nổi bật của Ẩm thực Việt</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-100">
              <h4 class="font-bold text-slate-800 text-base mb-2"><span class="text-xl">❤️</span> Tốt cho sức khỏe (Healthy Food)</h4>
              <p class="text-sm">Rất ít dầu mỡ, nhiều chất xơ từ rau củ, sử dụng nguyên liệu tươi sống trong ngày, giúp người ăn no lâu mà cơ thể vẫn nhẹ nhàng, khỏe khoắn.</p>
            </div>
            <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-100">
              <h4 class="font-bold text-slate-800 text-base mb-2"><span class="text-xl">🌍</span> Sự thích ứng & Giao thoa</h4>
              <p class="text-sm">Tiếp thu tinh hoa từ ẩm thực Pháp, Trung Hoa, Ấn Độ nhưng được Việt hóa một cách thông minh, tạo nên phong cách độc bản không nơi nào có.</p>
            </div>
            <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-100">
              <h4 class="font-bold text-slate-800 text-base mb-2"><span class="text-xl">🤝</span> Tính cộng đồng và hiếu khách</h4>
              <p class="text-sm">Bữa ăn là dịp để tiếp đãi bạn bè, chia sẻ niềm vui. Khách đến nhà dù sang hay nghèo đều được chủ nhà thết đãi chén trà, mâm cơm nồng hậu.</p>
            </div>
            <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-100">
              <h4 class="font-bold text-slate-800 text-base mb-2"><span class="text-xl">🚀</span> Đòn bẩy phát triển du lịch</h4>
              <p class="text-sm mb-2">Ẩm thực là đại sứ thương hiệu mạnh mẽ nhất thúc đẩy du khách quốc tế đến và quay trở lại Việt Nam nhiều lần:</p>
              <div class="flex flex-wrap gap-1.5">
                <span class="text-[10px] bg-slate-100 px-2 py-1 rounded">Food Tour</span>
                <span class="text-[10px] bg-slate-100 px-2 py-1 rounded">Cooking Class</span>
                <span class="text-[10px] bg-slate-100 px-2 py-1 rounded">Chợ ẩm thực</span>
                <span class="text-[10px] bg-slate-100 px-2 py-1 rounded">Michelin Selected</span>
                <span class="text-[10px] bg-slate-100 px-2 py-1 rounded">Nông sản OCOP</span>
              </div>
            </div>
          </div>
        </div>

        <!-- MỤC 10 & KẾT LUẬN -->
        <div class="border-l-4 border-orange-500 pl-5">
          <h2 class="text-xl font-bold text-slate-900 mb-2 flex items-center gap-2"><span class="text-2xl">🌾</span> 10. Gìn giữ và Nâng tầm Ẩm thực Dân tộc</h2>
          <p>Trước làn sóng thức ăn nhanh hiện đại, việc gìn giữ bí quyết nấu nướng gia truyền, phát triển nông nghiệp hữu cơ sạch và quảng bá tinh hoa ẩm thực trên các nền tảng số là sứ mệnh quan trọng. Mỗi món ăn là một câu chuyện lịch sử, mỗi hương vị là một niềm tự hào dân tộc.</p>
        </div>

        <div class="text-center mt-12 mb-4">
          <h3 class="text-2xl font-extrabold text-slate-900 mb-3">🥢 Ẩm thực Việt Nam – Hương vị chạm đến trái tim</h3>
          <p class="text-slate-600 max-w-2xl mx-auto italic">"Không chỉ là thỏa mãn vị giác, ẩm thực Việt Nam còn gói trọn tình yêu quê hương, lòng tri ân đất mẹ và nét đẹp hào sảng của con người Việt Nam gửi gắm đến bạn bè khắp năm châu."</p>
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
      const clickableElement = e.target.closest('a:not([href="index.php"]):not([href="thien_nhien.php"]):not([href="van_hoa.php"]):not([href="bien_dao.php"]):not([href="mien_bac.php"]):not([href="mien_trung.php"]):not([href="mien_nam.php"]), button, input, .cursor-pointer');

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
