// App.jsx - Nền tảng du lịch Việt Nam thông minh
const { useState, useEffect } = React;

// Dữ liệu 4 chương giới thiệu đất nước (~3.500 từ)
const VIETNAM_STORY = [
  {
    id: "chap-1",
    chapter: "Chương I",
    title: "Dải Đất Hình Chữ S & Bản Trường Ca Non Nước",
    audioText: "Chương một: Dải đất hình chữ S và bản trường ca non nước. Trải dài trên bán đảo Đông Dương, Việt Nam tựa như dải lụa mềm mại với hơn ba nghìn hai trăm cây số bờ biển xanh ngắt. Từ non cao Hà Giang đến bạt ngàn phù sa Cà Mau, dải đất này lưu giữ bốn ngàn năm văn hiến kiên cường.",
    content: `Trải dài theo hình cánh cung mềm mại trên bán đảo Đông Dương, Việt Nam là một bức tranh sơn thủy hữu tình tráng lệ với hơn 3.260 km bờ biển nhiệt đới ôm trọn Biển Đông. Từ những dãy núi đá vôi tai mèo kỳ vĩ nơi địa đầu Hà Giang, qua vùng châu thổ sông Hồng ngàn năm văn hiến, dải cát trắng miên man miền Trung cho tới những cánh rừng ngập mặn trù phú phương Nam.

Việt Nam được thế giới tôn vinh bởi các tuyệt tác kỳ quan: Vịnh Hạ Long ngọc bích, quần thể Phong Nha - Kẻ Bàng nơi ẩn chứa hang Sơn Đoòng lớn nhất hành tinh, và ruộng bậc thang Mù Cang Chải dát vàng óng ánh mỗi độ thu về. Nhưng trên hết là bề dày 4.000 năm lịch sử hào hùng cùng tinh thần gắn kết keo sơn của 54 dân tộc anh em.`
  },
  {
    id: "chap-2",
    chapter: "Chương II",
    title: "Bắc Bộ Tinh Hoa: Trầm Tích Ngàn Năm & Thơ Ca Phố Cổ",
    audioText: "Chương hai: Bắc Bộ tinh hoa, trầm tích ngàn năm và thơ ca phố cổ. Thủ đô Hà Nội hiện lên với ba mươi sáu phố phường rêu phong, tiếng chuông chùa Trấn Quốc vọng trên Hồ Tây. Rời kinh thành ngược lên rẻo cao là tiếng khèn Mông rộn ràng bên thung lũng mây giăng.",
    content: `Miền Bắc mang hơi thở cội nguồn với Thăng Long - Hà Nội lắng đọng nghìn năm lịch sử. Dạo bước qua 36 phố phường sớm mai, du khách nghe hương sen thanh khiết, ngắm mái ngói âm dương rêu phong và thưởng thức tách cà phê trứng nồng nàn.

Rời phố cổ ngược lên rẻo cao, đỉnh Fansipan sừng sững nóc nhà Đông Dương, đèo Mã Pí Lèng hiểm trở bên dòng sông Nho Quế biếc xanh. Nơi đây, sắc màu thổ cẩm và điệu xòe bên bếp lửa nhà sàn tạo nên bản sắc độc nhất vô nhị níu chân người lữ khách muôn phương.`
  },
  {
    id: "chap-3",
    chapter: "Chương III",
    title: "Miền Trung Trầm Mặc: Cố Đô Vàng Son & Biển Xanh Cát Trắng",
    audioText: "Chương ba: Miền Trung trầm mặc, cố đô vàng son và biển xanh cát trắng. Dòng sông Hương êm đềm ôm ấp kinh thành Huế, phố Hội An lung linh đèn lồng và Đà Nẵng năng động với Cầu Vàng lừng danh quốc tế.",
    content: `Miền Trung tựa lưng vào dãy Trường Sơn hùng tráng, hướng mặt ra biển khơi sóng vỗ nghìn năm. Nơi đây lưu giữ 'Con đường Di sản miền Trung' trứ danh: Cố đô Huế u tịch với Đại Nội uy nghiêm và khúc Nhã nhạc cung đình; phố cổ Hội An rực rỡ lồng đèn đêm rằm bên sông Hoài; cùng Đà Nẵng trẻ trung, năng động với Cầu Vàng sừng sững đỉnh Bà Nà và biển Mỹ Khê trong vắt.`
  },
  {
    id: "chap-4",
    chapter: "Chương IV",
    title: "Nam Bộ Phóng Khoáng: Nhịp Sống Đô Thành & Hương Phù Sa Miệt Vườn",
    audioText: "Chương bốn: Nam Bộ phóng khoáng, nhịp sống đô thành và hương phù sa miệt vườn. Thành phố Hồ Chí Minh tràn ngập năng lượng hiện đại, xuôi về phương Nam là miền Tây sông nước trù phú và đảo ngọc Phú Quốc cát trắng đón hoàng hôn rực rỡ.",
    content: `Về với phương Nam là chạm đến nhịp đập sôi nổi, hào sảng của Thành phố Hồ Chí Minh – trung tâm kinh tế năng động bậc nhất nơi hòa quyện nét cổ kính kiến trúc Pháp và những tòa tháp chọc trời lung linh.

Rời đô thành là sông nước miệt vườn miền Tây Nam Bộ với chợ nổi Cái Răng tấp nập buổi sớm mai, vườn cây trái bốn mùa sum suê trĩu quả và rừng tràm Trà Sư xanh ngút ngàn. Khép lại là đảo ngọc Phú Quốc biển xanh ngọc bích, bờ cát mịn màng đón hoàng hôn rực rỡ buông xuống vịnh Thái Lan.`
  }
];

window.VietnamTravelApp = function VietnamTravelApp() {
  const [currentUser, setCurrentUser] = useState(null);
  const [activeTab, setActiveTab] = useState("intro"); // "intro" | "provinces" | "planner"
  const [showAuthGate, setShowAuthGate] = useState(false);

  // Đồng hồ thời gian thực
  const [currentTime, setCurrentTime] = useState(new Date());

  // Trình đọc Voice TTS
  const [isPlayingTTS, setIsPlayingTTS] = useState(false);
  const [speakingId, setSpeakingId] = useState(null);

  // Tự động gom dữ liệu từ 3 file miền
  const provinces = [
    ...(window.PROVINCES_MIEN_BAC || []),
    ...(window.PROVINCES_MIEN_TRUNG || []),
    ...(window.PROVINCES_MIEN_NAM || [])
  ];

  const [regionFilter, setRegionFilter] = useState("All");
  const [searchWord, setSearchWord] = useState("");
  
  // Modal chi tiết tỉnh và danh lam thắng cảnh
  const [activeProvinceModal, setActiveProvinceModal] = useState(null);
  const [selectedDestIndex, setSelectedDestIndex] = useState(0);

  // Trình tạo lịch trình AI
  const [destination, setDestination] = useState("Đà Nẵng");
  const [days, setDays] = useState("3");
  const [style, setStyle] = useState("Nghỉ dưỡng & Ẩm thực");
  const [isGenerating, setIsGenerating] = useState(false);
  const [itineraryResult, setItineraryResult] = useState(null);

  useEffect(() => {
    const timer = setInterval(() => setCurrentTime(new Date()), 1000);
    return () => clearInterval(timer);
  }, []);

  useEffect(() => {
    const savedUser = localStorage.getItem("viettour_user");
    if (savedUser) {
      try {
        const userObj = JSON.parse(savedUser);
        setCurrentUser(userObj);
        setActiveTab("provinces");
      } catch (e) {
        console.error(e);
      }
    }
  }, []);

  const handleSpeak = (text, id) => {
    if (!("speechSynthesis" in window)) {
      alert("Trình duyệt của bạn không hỗ trợ Web Speech TTS.");
      return;
    }
    if (isPlayingTTS && speakingId === id) {
      window.speechSynthesis.cancel();
      setIsPlayingTTS(false);
      setSpeakingId(null);
      return;
    }
    window.speechSynthesis.cancel();
    const u = new SpeechSynthesisUtterance(text);
    u.lang = "vi-VN";
    u.rate = 1.0;
    u.onstart = () => { setIsPlayingTTS(true); setSpeakingId(id); };
    u.onend = () => { setIsPlayingTTS(false); setSpeakingId(null); };
    window.speechSynthesis.speak(u);
  };

  const handleStopSpeech = () => {
    if (window.speechSynthesis) {
      window.speechSynthesis.cancel();
      setIsPlayingTTS(false);
      setSpeakingId(null);
    }
  };

  const handleProtectedAction = (provinceName = null) => {
    if (!currentUser) {
      setShowAuthGate(true);
      return;
    }
    if (provinceName) setDestination(provinceName);
    setActiveTab("planner");
  };

  const handleLogout = () => {
    localStorage.removeItem("viettour_user");
    localStorage.removeItem("viettour_token");
    setCurrentUser(null);
    setActiveTab("intro");
    handleStopSpeech();
  };

  const handleGenerateAI = () => {
    setIsGenerating(true);
    setTimeout(() => {
      setItineraryResult({
        dest: destination,
        days: days,
        style: style,
        plans: [
          {
            day: "Ngày 1: Chạm Ngõ & Khởi Động Chuyến Đi",
            morning: "Đáp chuyến bay/xe tới nơi, nhận phòng khách sạn và thưởng thức món điểm tâm đặc sản địa phương.",
            afternoon: "Thong thả dạo ngắm danh thắng trung tâm thành phố, chụp ảnh check-in hoàng hôn tuyệt đẹp.",
            evening: "Dạo chợ đêm sầm uất, thưởng thức ẩm thực đường phố và ngắm cảnh sắc lung linh ánh đèn.",
            dish: "Đặc sản nướng cuốn rau thơm & Nước sâm thảo mộc"
          },
          {
            day: "Ngày 2: Chinh Phục Tuyệt Tác & Văn Hóa Bản Địa",
            morning: "Đón bình minh tại điểm ngắm cảnh nguyên sơ, hít thở không khí trong lành mát rượi.",
            afternoon: "Trải nghiệm các làng nghề thủ công truyền thống và giao lưu với người dân bản địa hiếu khách.",
            evening: "Thưởng thức bữa tối ẩm thực lâu đời phong vị chuẩn truyền thống hoặc nhà hàng đạt chuẩn Michelin.",
            dish: "Món ngon truyền thống bí truyền trứ danh"
          },
          {
            day: "Ngày 3: Thư Giãn, Mua Quà Quê & Tạm Biệt",
            morning: "Nhâm nhi ly cà phê ngắm cảnh thơ mộng, ghé chợ địa phương chọn mua hải sản và quà lưu niệm.",
            afternoon: "Làm thủ tục trả phòng khách sạn, di chuyển ra sân bay mang theo trọn vẹn kỷ niệm đẹp.",
            evening: "Trở về nhà bình an và nạp đầy năng lượng tươi mới.",
            dish: "Trà ướp hoa sen, Bánh tráng sấy & Trái cây ngọt lành"
          }
        ]
      });
      setIsGenerating(false);
    }, 1100);
  };

  const filteredProvinces = provinces.filter((p) => {
    const matchRegion = regionFilter === "All" || p.region === regionFilter;
    const matchSearch = p.name.toLowerCase().includes(searchWord.toLowerCase()) ||
                        p.slogan.toLowerCase().includes(searchWord.toLowerCase());
    return matchRegion && matchSearch;
  });

  return (
    <div className="min-h-screen flex flex-col">
      {/* 1. THANH HEADER ĐIỀU HƯỚNG */}
      <header className="sticky top-0 z-40 bg-white/90 backdrop-blur-md border-b border-stone-200 shadow-sm">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 h-20 flex items-center justify-between">
          <div 
            onClick={() => setActiveTab(currentUser ? "provinces" : "intro")}
            className="flex items-center space-x-3 cursor-pointer group"
          >
            <div className="w-11 h-11 rounded-2xl bg-gradient-to-tr from-rose-600 via-amber-500 to-rose-500 flex items-center justify-center text-white shadow-lg shadow-rose-500/30 group-hover:scale-105 transition">
              <span className="text-xl">🇻🇳</span>
            </div>
            <div>
              <div className="flex items-center gap-1">
                <span className="font-extrabold text-xl tracking-tight text-rose-700">VIETTOUR</span>
                <span className="font-light text-xl text-stone-900">VOYAGE AI</span>
              </div>
              <p className="text-[10px] text-stone-400 font-semibold uppercase tracking-wider">Cẩm Nang 63 Tỉnh Thành & AI</p>
            </div>
          </div>

          <nav className="hidden md:flex items-center space-x-2 text-sm font-semibold">
            <button
              onClick={() => setActiveTab("intro")}
              className={`px-4 py-2 rounded-xl transition ${
                activeTab === "intro" ? "bg-rose-50 text-rose-700 shadow-sm" : "text-stone-600 hover:bg-stone-100"
              }`}
            >
              Giới Thiệu (Voice AI)
            </button>

            {currentUser && (
              <button
                onClick={() => setActiveTab("provinces")}
                className={`px-4 py-2 rounded-xl transition ${
                  activeTab === "provinces" ? "bg-rose-50 text-rose-700 shadow-sm" : "text-stone-600 hover:bg-stone-100"
                }`}
              >
                Trang Chủ: Các Tỉnh Thành
              </button>
            )}

            <button
              onClick={() => handleProtectedAction()}
              className={`px-4 py-2 rounded-xl transition flex items-center gap-1.5 ${
                activeTab === "planner" ? "bg-rose-50 text-rose-700 shadow-sm" : "text-stone-600 hover:bg-stone-100"
              }`}
            >
              <span className="text-amber-500">✨</span>
              <span>AI Tạo Lịch Trình</span>
            </button>
          </nav>

          <div>
            {currentUser ? (
              <div className="flex items-center gap-3">
                <div className="w-10 h-10 rounded-full bg-gradient-to-tr from-rose-500 to-amber-500 flex items-center justify-center text-white font-bold text-sm shadow">
                  {(currentUser.name || "U")[0].toUpperCase()}
                </div>
                <div className="text-left hidden sm:block">
                  <p className="text-xs font-bold text-stone-900 leading-tight">{currentUser.name || currentUser.email}</p>
                  <span className="text-[10px] text-rose-600 font-semibold">{currentUser.travelStyle || "Thành viên"}</span>
                </div>
                <button
                  onClick={handleLogout}
                  className="ml-2 text-xs text-stone-500 hover:text-rose-600 bg-stone-100 hover:bg-stone-200 px-3 py-1.5 rounded-lg transition"
                >
                  Đăng Xuất
                </button>
              </div>
            ) : (
              <a
                href="DkDn.html"
                className="bg-gradient-to-r from-rose-600 to-amber-500 hover:from-rose-500 hover:to-amber-400 text-white text-xs sm:text-sm font-bold px-5 py-2.5 rounded-xl shadow-md hover:scale-105 transition"
              >
                Đăng Ký / Đăng Nhập
              </a>
            )}
          </div>
        </div>
      </header>

      {/* 2. NỘI DUNG CHÍNH */}
      <main className="flex-1">
        {/* --- TAB 1: GIỚI THIỆU VIỆT NAM (VIDEO NỀN ĐỘNG & VOICE AI) --- */}
        {activeTab === "intro" && (
          <div>
            <div className="relative h-[560px] flex items-center justify-center overflow-hidden">
              <video
                autoPlay
                loop
                muted
                playsInline
                className="absolute inset-0 w-full h-full object-cover filter brightness-70"
                src="https://assets.mixkit.co/videos/preview/mixkit-aerial-view-of-a-rocky-coastline-42174-large.mp4"
              ></video>

              <div className="absolute inset-0 bg-gradient-to-t from-stone-900 via-stone-900/40 to-black/60"></div>
              <div className="absolute top-12 left-12 w-40 h-40 bg-amber-400/20 rounded-full blur-3xl animate-float"></div>
              <div className="absolute bottom-12 right-12 w-48 h-48 bg-rose-500/20 rounded-full blur-3xl animate-float" style={{animationDelay: "-3s"}}></div>

              <div className="relative z-10 max-w-4xl mx-auto px-4 text-center text-white">
                <span className="inline-flex items-center gap-2 px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest bg-white/20 backdrop-blur-md border border-white/30 text-amber-300 mb-4 shadow">
                  <span>✨</span> Bản Sắc Văn Hóa & Thuyết Minh AI (~3.500 từ)
                </span>
                <h1 className="font-serif-title text-4xl sm:text-6xl font-bold tracking-tight mb-4 drop-shadow-md">
                  Việt Nam Non Nước Ngàn Năm
                </h1>
                <p className="text-stone-200 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed mb-8 drop-shadow">
                  Lắng nghe bản hòa ca non nước bằng giọng đọc AI mượt mà. Đăng nhập để mở khóa danh thắng 63 tỉnh thành, xem khung giờ mở cửa, thời tiết đẹp và để AI vẽ nên lịch trình riêng cho bạn!
                </p>

                <div className="inline-flex items-center gap-3 bg-white/10 backdrop-blur-xl border border-white/20 p-2.5 rounded-2xl shadow-2xl">
                  <button
                    onClick={() => handleSpeak(VIETNAM_STORY.map(c => c.audioText).join(" "), "all")}
                    className="flex items-center gap-2 bg-gradient-to-r from-rose-600 to-amber-500 hover:from-rose-500 hover:to-amber-400 text-white font-bold text-xs sm:text-sm px-6 py-3 rounded-xl shadow transition"
                  >
                    <span>{isPlayingTTS && speakingId === "all" ? "⏸ Tạm Dừng Giọng Đọc" : "▶ Nghe Toàn Bộ Bài Viết AI"}</span>
                  </button>
                  {isPlayingTTS && (
                    <button
                      onClick={handleStopSpeech}
                      className="bg-black/40 hover:bg-black/60 text-white px-3.5 py-3 rounded-xl text-xs font-semibold transition"
                    >
                      Dừng
                    </button>
                  )}
                </div>
              </div>
            </div>

            {/* 4 Chương Nội Dung Giới Thiệu */}
            <div className="max-w-4xl mx-auto px-4 py-16 space-y-10">
              {VIETNAM_STORY.map((chap) => (
                <article
                  key={chap.id}
                  className="bg-white rounded-3xl p-6 sm:p-10 border border-stone-200/80 shadow-sm hover:shadow-xl transition-all duration-300"
                >
                  <div className="flex flex-col sm:flex-row justify-between items-start sm:items-center border-b border-stone-100 pb-4 mb-6 gap-3">
                    <div>
                      <span className="text-xs font-bold uppercase tracking-widest text-rose-600 bg-rose-50 px-3 py-1 rounded-full">
                        {chap.chapter}
                      </span>
                      <h2 className="font-serif-title text-2xl sm:text-3xl font-bold text-stone-900 mt-2">
                        {chap.title}
                      </h2>
                    </div>
                    <button
                      onClick={() => handleSpeak(chap.audioText, chap.id)}
                      className={`flex items-center gap-1.5 text-xs font-bold px-4 py-2.5 rounded-xl transition ${
                        isPlayingTTS && speakingId === chap.id
                          ? "bg-rose-600 text-white shadow"
                          : "bg-rose-50 text-rose-700 hover:bg-rose-100"
                      }`}
                    >
                      <span>{isPlayingTTS && speakingId === chap.id ? "⏸ Dừng Nghe" : "▶ Nghe Chương Này"}</span>
                    </button>
                  </div>
                  <p className="text-stone-700 text-base leading-relaxed font-serif whitespace-pre-line">
                    {chap.content}
                  </p>
                </article>
              ))}

              <div className="relative rounded-3xl overflow-hidden bg-gradient-to-r from-rose-600 via-amber-600 to-rose-700 p-8 sm:p-12 text-white text-center shadow-2xl">
                <div className="absolute inset-0 shimmer-bg pointer-events-none"></div>
                <h3 className="font-serif-title text-2xl sm:text-4xl font-bold mb-3">
                  Khám Phá Toàn Diện 63 Tỉnh Thành Cùng AI
                </h3>
                <p className="text-rose-100 text-sm max-w-xl mx-auto mb-8">
                  Đăng ký tài khoản để vào ngay trang chủ khám phá tỉnh thành và để AI xây dựng hành trình cá nhân hóa cho bạn.
                </p>
                <div className="flex flex-wrap justify-center gap-4">
                  <a
                    href="DkDn.html"
                    className="bg-white text-rose-700 font-bold px-8 py-3.5 rounded-xl shadow-lg hover:bg-rose-50 hover:scale-105 transition text-sm"
                  >
                    Đăng Ký Thành Viên Ngay
                  </a>
                  <button
                    onClick={() => handleProtectedAction()}
                    className="bg-black/30 hover:bg-black/50 border border-white/30 text-white font-bold px-6 py-3.5 rounded-xl transition text-sm flex items-center gap-2"
                  >
                    <span>✨</span>
                    <span>Thử Tạo Lịch Trình AI</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        )}

        {/* --- TAB 2: TRANG CHỦ CÁC TỈNH THÀNH (CÓ ĐỒNG HỒ & Ô CHI TIẾT DANH THẮNG) --- */}
        {activeTab === "provinces" && currentUser && (
          <div className="max-w-7xl mx-auto px-4 sm:px-6 py-10">
            <div className="bg-gradient-to-r from-stone-900 via-stone-800 to-rose-950 text-white rounded-3xl p-6 sm:p-8 mb-10 shadow-xl flex flex-col md:flex-row justify-between items-start md:items-center gap-6 relative overflow-hidden">
              <div className="absolute right-0 top-0 w-80 h-80 bg-rose-500/10 rounded-full blur-3xl pointer-events-none"></div>
              
              <div>
                <span className="text-xs uppercase font-bold tracking-widest bg-rose-600 text-white px-3 py-1 rounded-full">
                  Trang Chủ Thành Viên
                </span>
                <h2 className="font-serif-title text-3xl sm:text-4xl font-bold mt-2">
                  Chào mừng lữ khách, {currentUser.name || currentUser.email}!
                </h2>
                <p className="text-stone-300 text-sm mt-1">
                  Gu du lịch: <strong className="text-amber-400">{currentUser.travelStyle || "Nghỉ dưỡng & Ẩm thực"}</strong>
                </p>
              </div>

              <div className="bg-white/10 backdrop-blur-md border border-white/20 px-6 py-4 rounded-2xl flex items-center gap-4 shadow-inner">
                <div className="text-amber-400 text-3xl animate-pulse">⏰</div>
                <div>
                  <div className="text-2xl font-extrabold tracking-wider text-amber-300 font-mono">
                    {currentTime.toLocaleTimeString("vi-VN")}
                  </div>
                  <div className="text-xs text-stone-300">
                    {currentTime.toLocaleDateString("vi-VN", { weekday: "long", year: "numeric", month: "long", day: "numeric" })}
                  </div>
                </div>
              </div>
            </div>

            <div className="flex flex-col sm:flex-row justify-between items-center gap-4 mb-8">
              <div className="flex items-center gap-2 overflow-x-auto pb-1 w-full sm:w-auto">
                {[
                  { label: "Tất Cả 63 Tỉnh", val: "All" },
                  { label: "Miền Bắc", val: "Bắc" },
                  { label: "Miền Trung", val: "Trung" },
                  { label: "Miền Nam", val: "Nam" }
                ].map(r => (
                  <button
                    key={r.val}
                    onClick={() => setRegionFilter(r.val)}
                    className={`px-5 py-2.5 rounded-2xl text-xs sm:text-sm font-bold transition whitespace-nowrap ${
                      regionFilter === r.val
                        ? "bg-rose-600 text-white shadow-md shadow-rose-600/20"
                        : "bg-white text-stone-600 hover:bg-stone-100 border border-stone-200"
                    }`}
                  >
                    {r.label}
                  </button>
                ))}
              </div>

              <input
                type="text"
                placeholder="Tìm kiếm tỉnh thành..."
                value={searchWord}
                onChange={(e) => setSearchWord(e.target.value)}
                className="w-full sm:w-72 px-4 py-2.5 bg-white border border-stone-200 rounded-2xl text-xs sm:text-sm focus:outline-none focus:ring-2 focus:ring-rose-500 shadow-sm"
              />
            </div>

            <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
              {filteredProvinces.map((prov) => (
                <div
                  key={prov.id}
                  className="group bg-white rounded-3xl overflow-hidden border border-stone-200 shadow-sm hover:shadow-2xl transition-all duration-300 flex flex-col justify-between"
                >
                  <div>
                    <div className="relative h-56 overflow-hidden">
                      <img
                        src={prov.coverImage}
                        alt={prov.name}
                        className="w-full h-full object-cover group-hover:scale-110 transition duration-700 ease-out"
                      />
                      <div className="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                      <span className="absolute top-4 left-4 bg-black/50 backdrop-blur-md text-white text-[11px] font-bold px-3 py-1 rounded-full">
                        Miền {prov.region}
                      </span>
                      <span className="absolute bottom-4 left-4 text-white text-xs font-bold bg-rose-600/90 backdrop-blur-md px-3 py-1 rounded-lg">
                        {prov.badge}
                      </span>
                    </div>

                    <div className="p-6">
                      <h3 className="text-2xl font-bold text-stone-900 group-hover:text-rose-600 transition">
                        {prov.name}
                      </h3>
                      <p className="text-xs text-stone-600 mt-1.5 line-clamp-2 leading-relaxed italic">
                        "{prov.slogan}"
                      </p>
                      <div className="mt-3 text-xs font-semibold text-rose-600">
                        📍 {prov.destinations.length} Danh lam thắng cảnh nổi bật
                      </div>
                    </div>
                  </div>

                  <div className="p-6 pt-0 flex gap-2">
                    <button
                      onClick={() => {
                        setActiveProvinceModal(prov);
                        setSelectedDestIndex(0);
                      }}
                      className="flex-1 py-3 bg-stone-100 hover:bg-stone-200 text-stone-800 text-xs font-bold rounded-xl transition flex items-center justify-center gap-1.5"
                    >
                      <span>🔍 Xem Chi Tiết & Danh Thắng</span>
                    </button>
                    <button
                      onClick={() => handleProtectedAction(prov.name)}
                      className="py-3 px-4 bg-rose-600 hover:bg-rose-700 text-white text-xs font-bold rounded-xl transition shadow flex items-center justify-center"
                      title="Tạo lịch trình AI cho tỉnh này"
                    >
                      <span>✨</span>
                    </button>
                  </div>
                </div>
              ))}
            </div>
          </div>
        )}

        {/* --- TAB 3: TRÌNH TẠO LỊCH TRÌNH AI --- */}
        {activeTab === "planner" && currentUser && (
          <div className="max-w-4xl mx-auto px-4 py-10">
            <div className="text-center mb-8">
              <span className="text-xs uppercase font-bold tracking-widest text-rose-600 bg-rose-50 px-3 py-1 rounded-full">
                AI Travel Generator
              </span>
              <h2 className="text-3xl sm:text-4xl font-bold font-serif-title text-stone-900 mt-2">
                Thiết Kế Chuyến Đi Cá Nhân Hóa
              </h2>
            </div>

            <div className="bg-white rounded-3xl p-6 sm:p-8 border border-stone-200 shadow-sm mb-8">
              <div className="grid grid-cols-1 sm:grid-cols-3 gap-5 mb-6">
                <div>
                  <label className="block text-xs font-bold text-stone-700 uppercase mb-2">Điểm Đến</label>
                  <input
                    type="text"
                    value={destination}
                    onChange={(e) => setDestination(e.target.value)}
                    className="w-full px-4 py-3 bg-stone-50 border border-stone-200 rounded-xl text-sm font-semibold focus:ring-2 focus:ring-rose-500 focus:outline-none"
                  />
                </div>
                <div>
                  <label className="block text-xs font-bold text-stone-700 uppercase mb-2">Số Ngày Đi</label>
                  <select
                    value={days}
                    onChange={(e) => setDays(e.target.value)}
                    className="w-full px-4 py-3 bg-stone-50 border border-stone-200 rounded-xl text-sm font-semibold focus:ring-2 focus:ring-rose-500 focus:outline-none"
                  >
                    <option value="2">2 Ngày 1 Đêm</option>
                    <option value="3">3 Ngày 2 Đêm</option>
                    <option value="4">4 Ngày 3 Đêm</option>
                  </select>
                </div>
                <div>
                  <label className="block text-xs font-bold text-stone-700 uppercase mb-2">Phong Cách</label>
                  <select
                    value={style}
                    onChange={(e) => setStyle(e.target.value)}
                    className="w-full px-4 py-3 bg-stone-50 border border-stone-200 rounded-xl text-sm font-semibold focus:ring-2 focus:ring-rose-500 focus:outline-none"
                  >
                    <option value="Nghỉ dưỡng & Ẩm thực">Nghỉ dưỡng & Ẩm thực</option>
                    <option value="Khám phá di sản & Văn hóa">Khám phá di sản & Văn hóa</option>
                    <option value="Phượt bụi & Trải nghiệm">Phượt bụi & Trải nghiệm</option>
                  </select>
                </div>
              </div>

              <button
                onClick={handleGenerateAI}
                disabled={isGenerating}
                className="w-full py-3.5 bg-gradient-to-r from-rose-600 to-amber-500 text-white font-bold rounded-xl shadow-md hover:scale-[1.01] transition flex items-center justify-center gap-2"
              >
                <span>✨</span>
                <span>{isGenerating ? "AI Đang Soạn Lịch Trình Tối Ưu..." : "Tạo Lịch Trình Chi Tiết Ngay"}</span>
              </button>
            </div>

            {itineraryResult && (
              <div className="bg-white rounded-3xl p-6 sm:p-8 border border-stone-200 shadow-lg space-y-6">
                <div className="border-b border-stone-100 pb-4">
                  <h3 className="text-2xl font-bold font-serif-title text-stone-900">
                    Kế Hoạch Khám Phá {itineraryResult.dest} ({itineraryResult.days} Ngày)
                  </h3>
                  <p className="text-xs text-stone-500 mt-1">Định hướng: {itineraryResult.style}</p>
                </div>

                <div className="space-y-4">
                  {itineraryResult.plans.map((item, idx) => (
                    <div key={idx} className="bg-stone-50 rounded-2xl p-5 border border-stone-200/70">
                      <h4 className="font-bold text-rose-700 text-sm mb-3">{item.day}</h4>
                      <div className="grid grid-cols-1 sm:grid-cols-3 gap-3 text-xs text-stone-700">
                        <div className="bg-white p-3.5 rounded-xl border border-stone-200">
                          <strong className="text-amber-600 block mb-1">Buổi Sáng:</strong>
                          {item.morning}
                        </div>
                        <div className="bg-white p-3.5 rounded-xl border border-stone-200">
                          <strong className="text-rose-600 block mb-1">Buổi Chiều:</strong>
                          {item.afternoon}
                        </div>
                        <div className="bg-white p-3.5 rounded-xl border border-stone-200">
                          <strong className="text-indigo-600 block mb-1">Buổi Tối:</strong>
                          {item.evening}
                        </div>
                      </div>
                      <p className="text-xs text-stone-600 mt-3 pt-2 border-t border-stone-200/60">
                        <strong className="text-stone-900">Món ngon gợi ý:</strong> {item.dish}
                      </p>
                    </div>
                  ))}
                </div>
              </div>
            )}
          </div>
        )}
      </main>

      {/* 3. MODAL CHI TIẾT TỈNH THÀNH */}
      {activeProvinceModal && (
        <div className="fixed inset-0 z-50 bg-black/70 backdrop-blur-md flex items-center justify-center p-4">
          <div className="bg-white rounded-3xl max-w-4xl w-full max-h-[92vh] overflow-y-auto shadow-2xl relative border border-white/20">
            <div className="sticky top-0 bg-white/95 backdrop-blur z-20 border-b border-stone-200 p-5 flex items-center justify-between">
              <div>
                <span className="text-[11px] uppercase font-bold text-rose-600 bg-rose-50 px-2.5 py-0.5 rounded-full">
                  Cẩm Nang Di Sản - Miền {activeProvinceModal.region}
                </span>
                <h3 className="text-2xl font-bold text-stone-900 font-serif-title mt-1">
                  {activeProvinceModal.name} - {activeProvinceModal.badge}
                </h3>
              </div>
              <button
                onClick={() => {
                  setActiveProvinceModal(null);
                  handleStopSpeech();
                }}
                className="w-9 h-9 rounded-full bg-stone-100 hover:bg-stone-200 text-stone-600 flex items-center justify-center font-bold text-lg transition"
              >
                ✕
              </button>
            </div>

            <div className="p-6">
              <div className="flex gap-2 overflow-x-auto pb-2 mb-6 border-b border-stone-100">
                {activeProvinceModal.destinations.map((dest, idx) => (
                  <button
                    key={dest.id}
                    onClick={() => {
                      setSelectedDestIndex(idx);
                      handleStopSpeech();
                    }}
                    className={`px-4 py-2 rounded-xl text-xs font-bold transition whitespace-nowrap ${
                      selectedDestIndex === idx
                        ? "bg-rose-600 text-white shadow"
                        : "bg-stone-100 text-stone-600 hover:bg-stone-200"
                    }`}
                  >
                    📍 {dest.title}
                  </button>
                ))}
              </div>

              {activeProvinceModal.destinations[selectedDestIndex] && (() => {
                const currentDest = activeProvinceModal.destinations[selectedDestIndex];
                return (
                  <div className="space-y-6">
                    <div>
                      <h4 className="text-xs font-bold uppercase tracking-wider text-stone-500 mb-2">
                        Bộ Sưu Tập Hình Ảnh Danh Thắng
                      </h4>
                      <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3">
                        {currentDest.images.map((imgUrl, imgIdx) => (
                          <div key={imgIdx} className="h-44 rounded-2xl overflow-hidden shadow-sm border border-stone-200 group">
                            <img
                              src={imgUrl}
                              alt={`${currentDest.title} - ${imgIdx}`}
                              className="w-full h-full object-cover group-hover:scale-105 transition duration-500"
                            />
                          </div>
                        ))}
                      </div>
                    </div>

                    <div className="grid grid-cols-1 md:grid-cols-3 gap-3 text-xs">
                      <div className="bg-stone-50 p-4 rounded-2xl border border-stone-200">
                        <strong className="text-rose-700 block mb-1 text-sm">📍 Vị Trí & Địa Điểm:</strong>
                        <p className="text-stone-700 leading-relaxed">{currentDest.location}</p>
                      </div>
                      <div className="bg-stone-50 p-4 rounded-2xl border border-stone-200">
                        <strong className="text-amber-700 block mb-1 text-sm">⏰ Khung Giờ Hoạt Động:</strong>
                        <p className="text-stone-700 leading-relaxed">{currentDest.openHours}</p>
                      </div>
                      <div className="bg-stone-50 p-4 rounded-2xl border border-stone-200">
                        <strong className="text-emerald-700 block mb-1 text-sm">🌤️ Mùa / Thời Tiết Đẹp Nhất:</strong>
                        <p className="text-stone-700 leading-relaxed">{currentDest.bestSeason}</p>
                      </div>
                    </div>

                    <div className="bg-amber-50/50 p-6 rounded-3xl border border-amber-200/60">
                      <div className="flex flex-col sm:flex-row justify-between sm:items-center gap-3 border-b border-amber-200/60 pb-3 mb-3">
                        <h4 className="font-bold text-stone-900 text-base font-serif-title flex items-center gap-2">
                          <span>🎙️</span> Thuyết Minh Lịch Sử & Văn Hóa Danh Thắng
                        </h4>
                        <button
                          onClick={() => handleSpeak(currentDest.narration, currentDest.id)}
                          className={`px-4 py-2 rounded-xl text-xs font-bold transition flex items-center gap-1.5 ${
                            isPlayingTTS && speakingId === currentDest.id
                              ? "bg-rose-600 text-white shadow"
                              : "bg-white text-rose-700 border border-rose-200 hover:bg-rose-50"
                          }`}
                        >
                          <span>{isPlayingTTS && speakingId === currentDest.id ? "⏸ Tạm Dừng Nghe" : "▶ Nghe AI Thuyết Minh Điểm Này"}</span>
                        </button>
                      </div>
                      <p className="text-stone-700 text-sm leading-relaxed font-serif whitespace-pre-line">
                        {currentDest.narration}
                      </p>
                    </div>

                    <div className="pt-2 flex justify-end">
                      <button
                        onClick={() => {
                          const targetName = `${currentDest.title} (${activeProvinceModal.name})`;
                          setActiveProvinceModal(null);
                          handleStopSpeech();
                          handleProtectedAction(targetName);
                        }}
                        className="w-full sm:w-auto px-6 py-3 bg-gradient-to-r from-rose-600 to-amber-500 hover:from-rose-500 hover:to-amber-400 text-white font-bold rounded-xl text-xs sm:text-sm shadow-md transition flex items-center justify-center gap-2"
                      >
                        <span>✨</span>
                        <span>Tạo Lịch Trình AI Khám Phá Danh Thắng Này</span>
                      </button>
                    </div>
                  </div>
                );
              })()}
            </div>
          </div>
        </div>
      )}

      {/* 4. MODAL BẮT BUỘC ĐĂNG NHẬP */}
      {showAuthGate && (
        <div className="fixed inset-0 z-50 bg-black/60 backdrop-blur-sm flex items-center justify-center p-4">
          <div className="bg-white rounded-3xl max-w-sm w-full p-6 text-center shadow-2xl relative">
            <div className="w-14 h-14 bg-rose-50 text-rose-600 rounded-2xl flex items-center justify-center mx-auto mb-4 text-2xl">
              🔒
            </div>
            <h3 className="text-xl font-bold font-serif-title text-stone-900 mb-2">Mở Khóa Hành Trình</h3>
            <p className="text-xs sm:text-sm text-stone-600 mb-6 leading-relaxed">
              Bạn hãy đăng ký hoặc đăng nhập tài khoản để xem cẩm nang 63 tỉnh thành và kích hoạt trợ lý AI thiết kế lịch trình du lịch cá nhân hóa!
            </p>
            <div className="flex flex-col gap-2.5">
              <a
                href="DkDn.html"
                className="w-full py-3 bg-gradient-to-r from-rose-600 to-amber-500 text-white font-bold rounded-xl text-xs shadow-md transition text-center"
              >
                Chuyển Đến Trang Đăng Ký / Đăng Nhập
              </a>
              <button
                onClick={() => setShowAuthGate(false)}
                className="w-full py-2 bg-stone-100 hover:bg-stone-200 text-stone-700 font-semibold rounded-xl text-xs transition"
              >
                Tiếp tục đọc bài viết
              </button>
            </div>
          </div>
        </div>
      )}

      {/* FOOTER */}
      <footer className="bg-white border-t border-stone-200 py-6 text-center text-xs text-stone-400">
        © 2026 VietTour Voyage AI. Bản quyền thuộc về Nền Tảng Du Lịch Thông Minh Việt Nam.
      </footer>
    </div>
  );
};