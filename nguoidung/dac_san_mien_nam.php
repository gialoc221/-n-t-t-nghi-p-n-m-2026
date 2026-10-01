<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đặc sản Miền Nam - VIETNAM TRAVEL</title>
  
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
    <div class="w-full h-[350px] sm:h-[450px] rounded-3xl bg-cover bg-center relative overflow-hidden shadow-lg mb-8" style="background-image: url('https://images.unsplash.com/photo-1555126634-323283e090fa?auto=format&fit=crop&w=1200&q=80');">
      <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/40 to-transparent flex items-end p-8 sm:p-12">
        <div>
          <span class="px-3 py-1.5 bg-orange-500 text-white text-[11px] font-bold rounded-full mb-3 inline-flex items-center gap-1.5 uppercase tracking-wider">
            <i class="fa-solid fa-utensils"></i> Đặc sản 3 miền
          </span>
          <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-3">🥥 Đặc sản Miền Nam</h1>
          <p class="text-slate-200 text-sm font-medium max-w-2xl leading-relaxed">
            Hương vị phóng khoáng, ngọt lành từ thiên nhiên trù phú. Sự kết hợp độc đáo giữa vị béo nước cốt dừa, vị ngọt đường thốt nốt và rổ rau đồng ngút ngàn sông nước Cửu Long.
          </p>
        </div>
      </div>
    </div>

    <!-- NỘI DUNG BÀI VIẾT -->
    <div class="bg-white rounded-3xl p-6 sm:p-12 shadow-sm border border-slate-100">
      <div class="max-w-none text-slate-600 space-y-8 leading-loose text-justify">
        
        <!-- MỞ ĐẦU -->
        <p class="text-[15px] font-medium text-slate-800 bg-orange-50/60 p-5 rounded-2xl border-l-4 border-orange-500">
          Được đất mẹ thiên nhiên hào phóng ban tặng hệ thống sông rạch chằng chịt, tôm cá đầy đồng cùng bạt ngàn vườn cây ăn trái, ẩm thực miền Nam mang phong cách tự nhiên, hoang dã và chân chất như chính con người nơi đây. Món ăn Nam Bộ thường có vị ngọt rõ nét từ nước dừa, đường thốt nốt, vị chua thanh từ me, quả quách và đặc biệt là đĩa rau đồng bạt ngàn với hàng chục loại rau rừng, bông súng, điên điển, so đũa.
        </p>
        
        <!-- MỤC 1: CÁC MÓN NGON TIÊU BIỂU -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🍲</span> 1. Các món ngon trứ danh đất phương Nam theo tỉnh thành</h2>
          <p class="mb-4">Những món ăn đậm chất sông nước và nhịp sống đô thị sôi động của miền Nam:</p>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col justify-between">
              <div>
                <div class="flex items-center justify-between mb-1.5">
                  <span class="text-[10px] bg-red-100 text-red-700 font-extrabold px-2 py-0.5 rounded-full uppercase">TP. Hồ Chí Minh</span>
                  <span class="text-[10px] text-slate-400">Đô thị hiện đại</span>
                </div>
                <h4 class="font-bold text-slate-800 text-sm mb-1 text-orange-800 flex items-center gap-2">
                  <i class="fa-solid fa-plate-wheat"></i> Cơm tấm Sài Gòn
                </h4>
                <p class="text-xs text-slate-600 leading-relaxed">
                  Đĩa cơm nấu từ hạt gạo tấm nở xốp thơm bùi, miếng sườn cốt lết tẩm ướp mật ong nướng than hoa vàng ươm khói thơm nức mũi, chả trứng hấp mềm mịn, bì heo trộn thính dai bùi và mỡ hành béo ngậy. Chan thìa nước mắm chua ngọt keo sệt kèm đĩa đồ chua củ cải cà rốt giòn ngọt.
                </p>
              </div>
              <span class="text-[10px] text-orange-700 font-semibold mt-2">Quán gợi ý: Cơm tấm Ba Ghiền, Cơm tấm Phúc Lộc Thọ, Cơm tấm Bụi Sài Gòn</span>
            </div>

            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col justify-between">
              <div>
                <div class="flex items-center justify-between mb-1.5">
                  <span class="text-[10px] bg-sky-100 text-sky-800 font-extrabold px-2 py-0.5 rounded-full uppercase">Tiền Giang (Mỹ Tho)</span>
                  <span class="text-[10px] text-slate-400">Đặc sản sông Tiền</span>
                </div>
                <h4 class="font-bold text-slate-800 text-sm mb-1 text-orange-800 flex items-center gap-2">
                  <i class="fa-solid fa-bowl-food"></i> Hủ tiếu Mỹ Tho
                </h4>
                <p class="text-xs text-slate-600 leading-relaxed">
                  Sợi hủ tiếu dai mềm đặc trưng vùng đất Mỹ Tho. Tô hủ tiếu đầy ắp tôm tươi luộc đỏ au, thịt bằm, sườn non, gan, cật, trứng cút. Nước lèo hầm xương ống và khô mực thơm ngọt lịm. Thưởng thức theo kiểu "nước" thanh ngọt hoặc kiểu "khô" trộn sốt đậm đà bên đĩa cần tây, giá đỗ tươi giòn.
                </p>
              </div>
              <span class="text-[10px] text-orange-700 font-semibold mt-2">Quán gợi ý: Hủ tiếu Mỹ Tho Trung Lương, Hủ tiếu Bánh Cam, Hủ tiếu Chị Sáu</span>
            </div>

            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col justify-between">
              <div>
                <div class="flex items-center justify-between mb-1.5">
                  <span class="text-[10px] bg-amber-100 text-amber-800 font-extrabold px-2 py-0.5 rounded-full uppercase">Cần Thơ & An Giang</span>
                  <span class="text-[10px] text-slate-400">Đồng bằng sông Cửu Long</span>
                </div>
                <h4 class="font-bold text-slate-800 text-sm mb-1 text-orange-800 flex items-center gap-2">
                  <i class="fa-solid fa-fire-burner"></i> Lẩu mắm miền Tây
                </h4>
                <p class="text-xs text-slate-600 leading-relaxed">
                  Được nấu từ mắm cá linh, cá sặc Châu Đốc trứ danh, nước lẩu đậm đà dậy mùi sả ớt thơm lừng. Nhúng kèm cá basa, lươn đồng, tôm sú, thịt ba chỉ và đặc biệt là rổ "rau đồng bạt ngàn" với hơn 20 loại: bông súng, điên điển, so đũa, rau đắng, kèo nèo, chuối chát...
                </p>
              </div>
              <span class="text-[10px] text-orange-700 font-semibold mt-2">Quán gợi ý: Lẩu mắm Dạ Lý (Cần Thơ), Lẩu mắm Cây Dừa, Lẩu mắm Miền Tây</span>
            </div>

            <div class="p-4 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col justify-between">
              <div>
                <div class="flex items-center justify-between mb-1.5">
                  <span class="text-[10px] bg-emerald-100 text-emerald-800 font-extrabold px-2 py-0.5 rounded-full uppercase">Đồng Tháp & Bến Tre</span>
                  <span class="text-[10px] text-slate-400">Hương vị dân dã</span>
                </div>
                <h4 class="font-bold text-slate-800 text-sm mb-1 text-orange-800 flex items-center gap-2">
                  <i class="fa-solid fa-fish"></i> Cá lóc nướng trui & Bánh xèo miền Tây
                </h4>
                <p class="text-xs text-slate-600 leading-relaxed">
                  Cá lóc đồng tươi sống xiên que tre lụi rơm nướng trui cháy xém, cạo sạch vảy lộ lớp thịt trắng phau ngọt lịm cuốn lá sen non Đồng Tháp chấm mắm me chua ngọt; bánh xèo đúc chảo gang to bằng cái nia vàng giòn rụm ngập nhân tôm đất, thịt ba rọi và củ hũ dừa Bến Tre ngọt lịm.
                </p>
              </div>
              <span class="text-[10px] text-orange-700 font-semibold mt-2">Quán gợi ý: Bánh xèo Mười Xiềm, Bánh xèo Đinh Công Tráng, Làng ẩm thực Cần Thơ</span>
            </div>
          </div>
        </div>

        <!-- MỤC 2: BẢN ĐỒ ĐẶC SẢN THEO TỈNH THÀNH MIỀN NAM -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">📍</span> 2. Danh bạ đặc sản theo từng tỉnh thành Miền Nam</h2>
          <p class="mb-3">Khám phá các món ăn đặc trưng phân theo từng tỉnh thành miệt vườn và duyên hải phía Nam:</p>
          
          <div class="space-y-3 my-4">
            <div class="p-3.5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
              <div class="flex items-center gap-2.5">
                <span class="w-8 h-8 rounded-lg bg-red-600 text-white font-bold flex items-center justify-center text-xs shrink-0">SG</span>
                <div>
                  <h5 class="font-bold text-slate-800 text-xs">TP. Hồ Chí Minh</h5>
                  <p class="text-[11px] text-slate-500">Cơm tấm sườn bì chả Sài Gòn, Bánh mì thịt chả, Phá lấu bò Chợ Lớn, Hủ tiếu bò kho, Bò bía</p>
                </div>
              </div>
              <span class="text-[10px] text-red-700 font-semibold whitespace-nowrap bg-red-50 px-2 py-1 rounded-full border border-red-100">Siêu đô thị năng động</span>
            </div>

            <div class="p-3.5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
              <div class="flex items-center gap-2.5">
                <span class="w-8 h-8 rounded-lg bg-sky-600 text-white font-bold flex items-center justify-center text-xs shrink-0">CT</span>
                <div>
                  <h5 class="font-bold text-slate-800 text-xs">Cần Thơ</h5>
                  <p class="text-[11px] text-slate-500">Bánh tét lá cẩm Cần Thơ, Lẩu mắm Dạ Lý, Nem nướng Cái Răng, Bánh cống, Ốc nướng tiêu xanh</p>
                </div>
              </div>
              <span class="text-[10px] text-sky-700 font-semibold whitespace-nowrap bg-sky-50 px-2 py-1 rounded-full border border-sky-100">Thủ phủ miền Tây</span>
            </div>

            <div class="p-3.5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
              <div class="flex items-center gap-2.5">
                <span class="w-8 h-8 rounded-lg bg-emerald-600 text-white font-bold flex items-center justify-center text-xs shrink-0">BT</span>
                <div>
                  <h5 class="font-bold text-slate-800 text-xs">Bến Tre</h5>
                  <p class="text-[11px] text-slate-500">Kẹo dừa Bến Tre, Gỏi củ hũ dừa tôm thịt, Bánh tráng sữa Mỹ Lồng, Đuông dừa béo ngậy, Rượu dừa</p>
                </div>
              </div>
              <span class="text-[10px] text-emerald-700 font-semibold whitespace-nowrap bg-emerald-50 px-2 py-1 rounded-full border border-emerald-100">Xứ sở dừa xiêm</span>
            </div>

            <div class="p-3.5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
              <div class="flex items-center gap-2.5">
                <span class="w-8 h-8 rounded-lg bg-amber-600 text-white font-bold flex items-center justify-center text-xs shrink-0">TG</span>
                <div>
                  <h5 class="font-bold text-slate-800 text-xs">Tiền Giang (Mỹ Tho)</h5>
                  <p class="text-[11px] text-slate-500">Hủ tiếu Mỹ Tho, Xoài cát Hòa Lộc, Vú sữa Lò Rèn Vĩnh Kim, Mắm còng Gò Công, Chả nướng Chợ Gạo</p>
                </div>
              </div>
              <span class="text-[10px] text-amber-700 font-semibold whitespace-nowrap bg-amber-50 px-2 py-1 rounded-full border border-amber-100">Vùng đất hoa trái</span>
            </div>

            <div class="p-3.5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
              <div class="flex items-center gap-2.5">
                <span class="w-8 h-8 rounded-lg bg-pink-500 text-white font-bold flex items-center justify-center text-xs shrink-0">ĐT</span>
                <div>
                  <h5 class="font-bold text-slate-800 text-xs">Đồng Tháp</h5>
                  <p class="text-[11px] text-slate-500">Nem Lai Vung chua ngọt, Hủ tiếu Sa Đéc bột tươi, Khô cá lóc Tràm Chim, Hạt sen sấy Tháp Mười</p>
                </div>
              </div>
              <span class="text-[10px] text-pink-700 font-semibold whitespace-nowrap bg-pink-50 px-2 py-1 rounded-full border border-pink-100">Xứ sở sen hồng</span>
            </div>

            <div class="p-3.5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
              <div class="flex items-center gap-2.5">
                <span class="w-8 h-8 rounded-lg bg-yellow-600 text-white font-bold flex items-center justify-center text-xs shrink-0">AG</span>
                <div>
                  <h5 class="font-bold text-slate-800 text-xs">An Giang (Châu Đốc)</h5>
                  <p class="text-[11px] text-slate-500">Bún cá Châu Đốc ngải bún, Bò bảy món núi Sam, Lẩu mắm cá linh bông điên điển, Mắm Thái Châu Đốc</p>
                </div>
              </div>
              <span class="text-[10px] text-yellow-700 font-semibold whitespace-nowrap bg-yellow-50 px-2 py-1 rounded-full border border-yellow-100">Vương quốc mắm cá</span>
            </div>

            <div class="p-3.5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
              <div class="flex items-center gap-2.5">
                <span class="w-8 h-8 rounded-lg bg-purple-600 text-white font-bold flex items-center justify-center text-xs shrink-0">ST</span>
                <div>
                  <h5 class="font-bold text-slate-800 text-xs">Sóc Trăng & Bạc Liêu</h5>
                  <p class="text-[11px] text-slate-500">Bánh pía sầu riêng Vũng Thơm, Bún nước lèo Sóc Trăng, Bánh cóng Đại Tâm, Bánh tằm bì Bạc Liêu</p>
                </div>
              </div>
              <span class="text-[10px] text-purple-700 font-semibold whitespace-nowrap bg-purple-50 px-2 py-1 rounded-full border border-purple-100">Hương vị giao thoa</span>
            </div>

            <div class="p-3.5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
              <div class="flex items-center gap-2.5">
                <span class="w-8 h-8 rounded-lg bg-teal-600 text-white font-bold flex items-center justify-center text-xs shrink-0">KG</span>
                <div>
                  <h5 class="font-bold text-slate-800 text-xs">Kiên Giang (Đảo Phú Quốc)</h5>
                  <p class="text-[11px] text-slate-500">Gỏi cá trích Phú Quốc, Nước mắm cá cơm 43 độ đạm, Bún quậy Kiến Xây, Ghẹ Hàm Ninh, Tiêu chín sọ Phú Quốc</p>
                </div>
              </div>
              <span class="text-[10px] text-teal-700 font-semibold whitespace-nowrap bg-teal-50 px-2 py-1 rounded-full border border-teal-100">Đảo ngọc thiên đường</span>
            </div>

            <div class="p-3.5 bg-slate-50 rounded-2xl border border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
              <div class="flex items-center gap-2.5">
                <span class="w-8 h-8 rounded-lg bg-orange-600 text-white font-bold flex items-center justify-center text-xs shrink-0">TN</span>
                <div>
                  <h5 class="font-bold text-slate-800 text-xs">Tây Ninh & Vũng Tàu</h5>
                  <p class="text-[11px] text-slate-500">Bánh tráng phơi sương Trảng Bàng, Bò tơ Tây Ninh, Muối tôm Tây Ninh, Bánh khọt Cô Ba Vũng Tàu</p>
                </div>
              </div>
              <span class="text-[10px] text-orange-700 font-semibold whitespace-nowrap bg-orange-50 px-2 py-1 rounded-full border border-orange-100">Đông Nam Bộ</span>
            </div>
          </div>
        </div>

        <!-- ẢNH MINH HỌA -->
        <div class="rounded-2xl overflow-hidden h-64 bg-cover bg-center my-8 shadow-sm" style="background-image: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=1000&q=80');"></div>

        <!-- MỤC 3: ĐẶC SẢN MUA LÀM QUÀ -->
        <div>
          <h2 class="text-xl font-bold text-slate-900 mb-3 flex items-center gap-2"><span class="text-2xl">🎁</span> 3. Đặc sản miền Nam lý tưởng mua làm quà (Theo tỉnh thành)</h2>
          <p class="mb-3">Những món quà thơm thảo đậm tình quê hương sông nước miệt vườn:</p>
          <ul class="list-disc pl-6 space-y-2 text-xs text-slate-600">
            <li><strong>Bến Tre:</strong> Kẹo dừa béo ngậy mạch nha lá dứa, Rượu dừa tiến vua hảo hạng, Bánh tráng sữa mè gừng dẻo thơm.</li>
            <li><strong>Sóc Trăng:</strong> Bánh pía sầu riêng tươi trứng muối ngàn lớp mỏng tang thơm nức, Lạp xưởng tôm trứng muối Mai Quế Lộ.</li>
            <li><strong>Đồng Tháp:</strong> Nem Lai Vung chua cay giòn sần sật bì heo, Bánh phồng tôm Sa Giang nở xốp, Rượu sen Đồng Tháp thanh tao.</li>
            <li><strong>Kiên Giang (Phú Quốc):</strong> Nước mắm cốt nhĩ cá cơm Phú Quốc truyền thống, Hạt tiêu chín ngào đường, Rượu sim rừng ngâm mật ong.</li>
            <li><strong>Tây Ninh:</strong> Muối tôm hảo hạng chấm hoa quả chua, Bánh tráng me, Bánh tráng bơ xì ke dẻo cay cuốn hút.</li>
          </ul>
        </div>

        <!-- MỤC TỔNG KẾT -->
        <div class="bg-orange-50/40 rounded-3xl p-6 md:p-8 my-8 border border-orange-100">
          <h2 class="text-2xl font-bold text-slate-900 mb-4 text-center">⭐ Nét đẹp văn hóa ẩm thực miền Nam</h2>
          <p class="text-xs text-slate-600 text-center max-w-xl mx-auto mb-6">
            Ẩm thực miền Nam là sự hào sảng, phóng khoáng, tình làng nghĩa xóm sum vầy bên mâm cơm miệt vườn với tiếng đàn ca tài tử ngân vang giữa trăng thanh gió mát.
          </p>
          <div class="grid grid-cols-2 md:grid-cols-4 gap-3 text-center">
            <div class="bg-white p-3 rounded-xl shadow-sm border border-orange-100">
              <span class="text-2xl block mb-1">🥥</span>
              <h6 class="font-bold text-xs text-slate-800">Béo ngậy</h6>
              <p class="text-[10px] text-slate-500">Nước cốt dừa thơm bùi</p>
            </div>
            <div class="bg-white p-3 rounded-xl shadow-sm border border-orange-100">
              <span class="text-2xl block mb-1">🌾</span>
              <h6 class="font-bold text-xs text-slate-800">Rau đồng</h6>
              <p class="text-[10px] text-slate-500">Hàng chục loại rau rừng</p>
            </div>
            <div class="bg-white p-3 rounded-xl shadow-sm border border-orange-100">
              <span class="text-2xl block mb-1">🍍</span>
              <h6 class="font-bold text-xs text-slate-800">Miệt vườn</h6>
              <p class="text-[10px] text-slate-500">Trái cây trĩu cành ngọt lịm</p>
            </div>
            <div class="bg-white p-3 rounded-xl shadow-sm border border-orange-100">
              <span class="text-2xl block mb-1">🤝</span>
              <h6 class="font-bold text-xs text-slate-800">Hào sảng</h6>
              <p class="text-[10px] text-slate-500">Mến khách, đậm ân tình</p>
            </div>
          </div>
        </div>

        <div class="text-center mt-12 mb-4">
          <h3 class="text-2xl font-extrabold text-slate-900 mb-3">🌴 Ẩm thực miền Nam – Mộc mạc mà đượm tình người</h3>
          <p class="text-slate-600 max-w-2xl mx-auto italic">"Dưới bóng râm miệt vườn sông nước, ngồi thưởng thức nồi lẩu mắm thơm lừng nghe câu vọng cổ ngân nga... đó chính là phong vị bình yên và hạnh phúc trọn vẹn của đất phương Nam."</p>
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
