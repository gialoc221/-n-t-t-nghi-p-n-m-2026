<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đặc sản Miền Bắc - VIETNAM TRAVEL</title>
  
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
    <div class="w-full h-[350px] sm:h-[450px] rounded-3xl bg-cover bg-center relative overflow-hidden shadow-lg mb-8" style="background-image: url('https://images.unsplash.com/photo-1582878826629-29b7ad1cdc43?auto=format&fit=crop&w=1200&q=80');">
      <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent flex items-end p-8 sm:p-12">
        <div>
          <span class="px-3 py-1.5 bg-emerald-600 text-white text-[11px] font-bold rounded-full mb-3 inline-flex items-center gap-1.5 uppercase tracking-wider">
            <i class="fa-solid fa-bowl-food"></i> Đặc sản 3 miền
          </span>
          <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-3">🥢 Đặc sản Miền Bắc</h1>
          <p class="text-slate-200 text-sm font-medium max-w-2xl leading-relaxed">
            Tinh hoa ẩm thực đất kinh kỳ ngàn năm văn hiến. Món ăn miền Bắc ghi dấu ấn bởi sự thanh tao, tinh tế, vừa vặn và hương vị mộc mạc lưu luyến của núi rừng Tây Bắc.
          </p>
        </div>
      </div>
    </div>

    <!-- NỘI DUNG BÀI VIẾT -->
    <div class="bg-white rounded-3xl p-6 sm:p-12 shadow-sm border border-slate-100">
      <div class="max-w-none text-slate-600 space-y-8 leading-loose text-justify">
        
        <!-- MỞ ĐẦU -->
        <p class="text-[15px] font-medium text-slate-800 bg-emerald-50/60 p-5 rounded-2xl border-l-4 border-emerald-600">
          Ẩm thực miền Bắc từ xưa đến nay luôn được ca ngợi bởi chuẩn mực thanh nhã: không quá cay nồng như miền Trung, không quá ngọt béo như miền Nam. Từng món ăn là sự chắt lọc tỉ mỉ từ nguyên liệu tươi ngon, kết hợp các loại rau thơm gia vị đặc trưng như hành hoa, tía tô, kinh giới, giấm bỗng và tinh dầu cà cuống, tạo nên phong vị bác học và quyến rũ lòng người.
        </p>
        
        <!-- MỤC 1: CÁC MÓN ĂN TRỨ DANH -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🍲</span> 1. Những món ngon trứ danh đất Bắc theo tỉnh thành</h2>
          <p class="mb-4">Những món ăn mang tính biểu tượng gắn liền với từng vùng đất lịch sử:</p>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col justify-between">
              <div>
                <div class="flex items-center justify-between mb-1.5">
                  <span class="text-[10px] bg-red-100 text-red-700 font-extrabold px-2 py-0.5 rounded-full uppercase">Hà Nội</span>
                  <span class="text-[10px] text-slate-400">Di sản ẩm thực</span>
                </div>
                <h4 class="font-bold text-slate-800 text-sm mb-1 text-emerald-800 flex items-center gap-2">
                  <i class="fa-solid fa-utensils"></i> Phở Hà Nội
                </h4>
                <p class="text-xs text-slate-600 leading-relaxed">
                  Bánh phở mềm mướt, thịt bò tái chín ngọt mềm, nước dùng ninh từ xương bò suốt hơn 10 tiếng hòa cùng hương thơm của quế, hồi, thảo quả, gừng nướng và hành hoa xanh mướt. Thưởng thức phở nóng cùng quẩy giòn và giấm tỏi ớt vào buổi sớm se lạnh là trải nghiệm tuyệt đỉnh.
                </p>
              </div>
              <span class="text-[10px] text-emerald-700 font-semibold mt-2">Quán gợi ý: Phở Bát Đàn, Phở Thìn Lò Đúc, Phở Lý Quốc Sư</span>
            </div>

            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col justify-between">
              <div>
                <div class="flex items-center justify-between mb-1.5">
                  <span class="text-[10px] bg-red-100 text-red-700 font-extrabold px-2 py-0.5 rounded-full uppercase">Hà Nội</span>
                  <span class="text-[10px] text-slate-400">Đặc sản kinh kỳ</span>
                </div>
                <h4 class="font-bold text-slate-800 text-sm mb-1 text-emerald-800 flex items-center gap-2">
                  <i class="fa-solid fa-fire"></i> Bún chả Hà Nội
                </h4>
                <p class="text-xs text-slate-600 leading-relaxed">
                  Từng miếng chả băm và chả miếng được tẩm ướp đậm đà, kẹp vỉ tre nướng xém cạnh trên than hoa hồng rực. Bát nước chấm chua ngọt ấm nóng thả thêm đu đủ, cà rốt giòn sần sật, ăn kèm bún lá trắng ngần và rổ rau sống tươi roi rói.
                </p>
              </div>
              <span class="text-[10px] text-emerald-700 font-semibold mt-2">Quán gợi ý: Bún chả Hương Liên (Obama), Bún chả Đắc Kim, Bún chả Sinh Từ</span>
            </div>

            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col justify-between">
              <div>
                <div class="flex items-center justify-between mb-1.5">
                  <span class="text-[10px] bg-sky-100 text-sky-800 font-extrabold px-2 py-0.5 rounded-full uppercase">Quảng Ninh</span>
                  <span class="text-[10px] text-slate-400">Đặc sản vùng vịnh</span>
                </div>
                <h4 class="font-bold text-slate-800 text-sm mb-1 text-emerald-800 flex items-center gap-2">
                  <i class="fa-solid fa-fish"></i> Chả mực giã tay Hạ Long
                </h4>
                <p class="text-xs text-slate-600 leading-relaxed">
                  Mực mai tươi sống đánh bắt từ vịnh Bắc Bộ được giã tay thủ công giữ nguyên độ giòn dai sần sật đặc trưng, chiên vàng ươm thơm nức mũi. Món ăn ngon nhất khi ăn kèm xôi trắng dẻo hoặc bánh cuốn nóng chấm nước mắm hạt tiêu.
                </p>
              </div>
              <span class="text-[10px] text-emerald-700 font-semibold mt-2">Quán gợi ý: Chả mực Thoan (Chợ Hạ Long), Chả mực Quang Phong</span>
            </div>

            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col justify-between">
              <div>
                <div class="flex items-center justify-between mb-1.5">
                  <span class="text-[10px] bg-amber-100 text-amber-800 font-extrabold px-2 py-0.5 rounded-full uppercase">Hải Phòng</span>
                  <span class="text-[10px] text-slate-400">Đất Cảng</span>
                </div>
                <h4 class="font-bold text-slate-800 text-sm mb-1 text-emerald-800 flex items-center gap-2">
                  <i class="fa-solid fa-bowl-food"></i> Bánh đa cua Hải Phòng
                </h4>
                <p class="text-xs text-slate-600 leading-relaxed">
                  Sợi bánh đa đỏ trần dẻo dai đặc sắc của làng Dư Hàng Kênh hòa trong nước dùng gạch cua đồng béo ngậy ngọt lịm, chả lá lốt thơm nức, tôm tươi, chả cá và rau muống giòn sần sật.
                </p>
              </div>
              <span class="text-[10px] text-emerald-700 font-semibold mt-2">Quán gợi ý: Bánh đa cua Bà Cụ (Cầu Đất), Bánh đa cua Kỳ Đồng</span>
            </div>
          </div>
        </div>

        <!-- MỤC 2: BẢN ĐỒ ĐẶC SẢN THEO TỪNG TỈNH THÀNH PHÍA BẮC -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">📍</span> 2. Danh bạ đặc sản theo từng tỉnh thành Miền Bắc</h2>
          <p class="mb-3">Khám phá các món ăn đặc trưng phân theo từng tỉnh thành để bạn dễ dàng lên kế hoạch trải nghiệm:</p>
          
          <div class="space-y-3 my-4">
            <div class="p-3.5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
              <div class="flex items-center gap-2.5">
                <span class="w-8 h-8 rounded-lg bg-red-500 text-white font-bold flex items-center justify-center text-xs shrink-0">HN</span>
                <div>
                  <h5 class="font-bold text-slate-800 text-xs">Hà Nội</h5>
                  <p class="text-[11px] text-slate-500">Phở bò, Bún chả, Chả cá Lã Vọng, Bún đậu mắm tôm, Bánh cuốn Thanh Trì, Cốm Làng Vòng, Trà sen Tây Hồ</p>
                </div>
              </div>
              <span class="text-[10px] text-emerald-700 font-semibold whitespace-nowrap bg-emerald-50 px-2 py-1 rounded-full border border-emerald-100">Kinh kỳ văn hiến</span>
            </div>

            <div class="p-3.5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
              <div class="flex items-center gap-2.5">
                <span class="w-8 h-8 rounded-lg bg-sky-500 text-white font-bold flex items-center justify-center text-xs shrink-0">QN</span>
                <div>
                  <h5 class="font-bold text-slate-800 text-xs">Quảng Ninh</h5>
                  <p class="text-[11px] text-slate-500">Chả mực giã tay Hạ Long, Sá sùng Quan Lạn, Gà đồi Tiên Yên, Bún bề bề, Bánh gật gù Tiên Yên</p>
                </div>
              </div>
              <span class="text-[10px] text-sky-700 font-semibold whitespace-nowrap bg-sky-50 px-2 py-1 rounded-full border border-sky-100">Vùng biển vịnh</span>
            </div>

            <div class="p-3.5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
              <div class="flex items-center gap-2.5">
                <span class="w-8 h-8 rounded-lg bg-amber-500 text-white font-bold flex items-center justify-center text-xs shrink-0">HP</span>
                <div>
                  <h5 class="font-bold text-slate-800 text-xs">Hải Phòng</h5>
                  <p class="text-[11px] text-slate-500">Bánh đa cua bể, Nem cua bể, Bánh mì que cay, Pate Cột Đèn, Chè dừa dầm</p>
                </div>
              </div>
              <span class="text-[10px] text-amber-700 font-semibold whitespace-nowrap bg-amber-50 px-2 py-1 rounded-full border border-amber-100">Thành phố Cảng</span>
            </div>

            <div class="p-3.5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
              <div class="flex items-center gap-2.5">
                <span class="w-8 h-8 rounded-lg bg-emerald-600 text-white font-bold flex items-center justify-center text-xs shrink-0">NB</span>
                <div>
                  <h5 class="font-bold text-slate-800 text-xs">Ninh Bình</h5>
                  <p class="text-[11px] text-slate-500">Cơm cháy chà bông ruốc, Thịt dê núi đá tái chanh, Rượu Kim Sơn, Mắm tép Gia Viễn, Xôi trứng kiến</p>
                </div>
              </div>
              <span class="text-[10px] text-emerald-700 font-semibold whitespace-nowrap bg-emerald-50 px-2 py-1 rounded-full border border-emerald-100">Cố đô Tràng An</span>
            </div>

            <div class="p-3.5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
              <div class="flex items-center gap-2.5">
                <span class="w-8 h-8 rounded-lg bg-indigo-500 text-white font-bold flex items-center justify-center text-xs shrink-0">LC</span>
                <div>
                  <h5 class="font-bold text-slate-800 text-xs">Lào Cai (Sa Pa)</h5>
                  <p class="text-[11px] text-slate-500">Thắng cố ngựa, Lợn cắp nách nướng than hoa, Cá hồi Thác Bạc, Thịt sấy khói, Nấm hương rừng Sa Pa</p>
                </div>
              </div>
              <span class="text-[10px] text-indigo-700 font-semibold whitespace-nowrap bg-indigo-50 px-2 py-1 rounded-full border border-indigo-100">Nóc nhà Đông Dương</span>
            </div>

            <div class="p-3.5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
              <div class="flex items-center gap-2.5">
                <span class="w-8 h-8 rounded-lg bg-orange-600 text-white font-bold flex items-center justify-center text-xs shrink-0">HG</span>
                <div>
                  <h5 class="font-bold text-slate-800 text-xs">Hà Giang</h5>
                  <p class="text-[11px] text-slate-500">Thịt trâu gác bếp, Cháo ấu tẩu giải cảm, Bánh tam giác mạch, Thắng dền Đồng Văn, Phở chua Hà Giang</p>
                </div>
              </div>
              <span class="text-[10px] text-orange-700 font-semibold whitespace-nowrap bg-orange-50 px-2 py-1 rounded-full border border-orange-100">Cao nguyên đá</span>
            </div>

            <div class="p-3.5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
              <div class="flex items-center gap-2.5">
                <span class="w-8 h-8 rounded-lg bg-teal-600 text-white font-bold flex items-center justify-center text-xs shrink-0">HD</span>
                <div>
                  <h5 class="font-bold text-slate-800 text-xs">Hải Dương & Hưng Yên</h5>
                  <p class="text-[11px] text-slate-500">Bánh đậu xanh Rồng Vàng Hải Dương, Bánh gai Ninh Giang, Nhãn lồng Hưng Yên, Gà Đông Tảo</p>
                </div>
              </div>
              <span class="text-[10px] text-teal-700 font-semibold whitespace-nowrap bg-teal-50 px-2 py-1 rounded-full border border-teal-100">Đồng bằng màu mỡ</span>
            </div>

            <div class="p-3.5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
              <div class="flex items-center gap-2.5">
                <span class="w-8 h-8 rounded-lg bg-rose-500 text-white font-bold flex items-center justify-center text-xs shrink-0">TN</span>
                <div>
                  <h5 class="font-bold text-slate-800 text-xs">Thái Nguyên & Bắc Ninh</h5>
                  <p class="text-[11px] text-slate-500">Chè búp Tân Cương Thái Nguyên, Bánh phu thê Đình Bảng Bắc Ninh, Nem bùi Ninh Xá</p>
                </div>
              </div>
              <span class="text-[10px] text-rose-700 font-semibold whitespace-nowrap bg-rose-50 px-2 py-1 rounded-full border border-rose-100">Đệ nhất trà & Quan họ</span>
            </div>
          </div>
        </div>

        <!-- ẢNH MINH HỌA -->
        <div class="rounded-2xl overflow-hidden h-64 bg-cover bg-center my-8 shadow-sm" style="background-image: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=1000&q=80');"></div>

        <!-- MỤC 3: ĐẶC SẢN MUA LÀM QUÀ -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🎁</span> 3. Đặc sản miền Bắc lý tưởng mua làm quà biếu (Theo tỉnh thành)</h2>
          <p class="mb-3">Những thức quà thanh lịch, đậm nét văn hóa vùng đất để dành tặng gia đình và bạn bè:</p>
          <ul class="list-disc pl-6 space-y-2 text-xs text-slate-600">
            <li><strong>Hà Nội:</strong> Cốm non Làng Vòng bọc lá sen thơm ngát, Bánh cốm Hàng Than, Ô mai Hàng Đường (sấu bao tử, mơ gừng), Trà ướp sen Tây Hồ bách diệp.</li>
            <li><strong>Hải Dương:</strong> Bánh đậu xanh tiến vua tan ngay nơi đầu lưỡi khi nhâm nhi cùng chén trà nóng, Bánh gai Ninh Giang nhân đậu dừa bùi ngọt.</li>
            <li><strong>Quảng Ninh:</strong> Chả mực giã tay hút chân không, Sá sùng khô Quan Lạn bổ dưỡng, Rượu mơ Yên Tử ngọt thanh.</li>
            <li><strong>Tây Bắc (Lào Cai, Hà Giang, Sơn La):</strong> Thịt trâu gác bếp chuẩn vị hạt dổi mắc khén, Mật ong hoa bạc hà Mèo Vạc, Chè San Tuyết cổ thụ Suối Giàng.</li>
            <li><strong>Thái Nguyên:</strong> Trà đinh ngọc, Trà móc câu Tân Cương xanh tự nhiên, vị chát dịu hậu ngọt sâu.</li>
          </ul>
        </div>

        <!-- MỤC TỔNG KẾT -->
        <div class="bg-emerald-50/40 rounded-3xl p-6 md:p-8 my-8 border border-emerald-100">
          <h2 class="text-2xl font-bold text-slate-900 mb-4 text-center">⭐ Nét đẹp văn hóa ẩm thực miền Bắc</h2>
          <p class="text-xs text-slate-600 text-center max-w-xl mx-auto mb-6">
            Mâm cơm miền Bắc là biểu tượng của sự tề tựu gia đình, sự kính trên nhường dưới và triết lý sống hài hòa với đất trời bốn mùa Xuân - Hạ - Thu - Đông.
          </p>
          <div class="grid grid-cols-2 md:grid-cols-4 gap-3 text-center">
            <div class="bg-white p-3 rounded-xl shadow-sm border border-emerald-100">
              <span class="text-2xl block mb-1">🍜</span>
              <h6 class="font-bold text-xs text-slate-800">Thanh tao</h6>
              <p class="text-[10px] text-slate-500">Vị nguyên bản tự nhiên</p>
            </div>
            <div class="bg-white p-3 rounded-xl shadow-sm border border-emerald-100">
              <span class="text-2xl block mb-1">🌿</span>
              <h6 class="font-bold text-xs text-slate-800">Thảo mộc</h6>
              <p class="text-[10px] text-slate-500">Gia vị thuốc nam quý</p>
            </div>
            <div class="bg-white p-3 rounded-xl shadow-sm border border-emerald-100">
              <span class="text-2xl block mb-1">🍵</span>
              <h6 class="font-bold text-xs text-slate-800">Trà sen</h6>
              <p class="text-[10px] text-slate-500">Nghệ thuật thưởng thức</p>
            </div>
            <div class="bg-white p-3 rounded-xl shadow-sm border border-emerald-100">
              <span class="text-2xl block mb-1">🥢</span>
              <h6 class="font-bold text-xs text-slate-800">Cầu kỳ</h6>
              <p class="text-[10px] text-slate-500">Chuẩn mực kinh kỳ xưa</p>
            </div>
          </div>
        </div>

        <div class="text-center mt-12 mb-4">
          <h3 class="text-2xl font-extrabold text-slate-900 mb-3">🍲 Ẩm thực miền Bắc – Vương vấn hương vị ngàn năm</h3>
          <p class="text-slate-600 max-w-2xl mx-auto italic">"Dù đi đâu về đâu, người con đất Bắc vẫn luôn nhớ về mùi khói phở ban mai Hà Nội, vị chát ngọt của ngụm trà sen và bát canh cua đồng mồng tơi thơm lừng của mẹ."</p>
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
