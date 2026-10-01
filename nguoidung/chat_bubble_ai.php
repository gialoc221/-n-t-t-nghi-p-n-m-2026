<!-- ======================================================== -->
<!-- BONG BÓNG CHAT AI ANDROID (FLOATING CHAT BUBBLE WIDGET) -->
<!-- THIẾT KẾ THU GỌN 2/3: TINH TẾ, DỊU MẮT, KHÔNG CHIẾM DIỆN TÍCH -->
<!-- ======================================================== -->

<style>
  /* Hiệu ứng thở nhẹ nhàng, êm dịu cho bong bóng Android mini */
  @keyframes bubbleSoftPulse {
    0% { transform: scale(1); box-shadow: 0 3px 14px 0 rgba(37, 99, 235, 0.35); }
    50% { transform: scale(1.05); box-shadow: 0 5px 18px 3px rgba(37, 99, 235, 0.45); }
    100% { transform: scale(1); box-shadow: 0 3px 14px 0 rgba(37, 99, 235, 0.35); }
  }

  .android-bubble-soft {
    animation: bubbleSoftPulse 3s infinite ease-in-out;
  }

  /* Thanh cuộn tin nhắn mỏng mini */
  #ai-chat-messages::-webkit-scrollbar {
    width: 4px;
  }
  #ai-chat-messages::-webkit-scrollbar-track {
    background: transparent;
  }
  .theme-light #ai-chat-messages::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 10px;
  }
  .theme-light #ai-chat-messages::-webkit-scrollbar-thumb:hover {
    background: #94a3b8;
  }
  .theme-dark #ai-chat-messages::-webkit-scrollbar-thumb {
    background: #334155;
    border-radius: 10px;
  }

  /* 3 chấm gõ tin nhắn mini */
  .typing-dot {
    width: 5px;
    height: 5px;
    border-radius: 50%;
    animation: typingBounce 1.4s infinite ease-in-out both;
  }
  .theme-light .typing-dot { background-color: #2563eb; }
  .theme-dark .typing-dot { background-color: #60a5fa; }
  .typing-dot:nth-child(1) { animation-delay: -0.32s; }
  .typing-dot:nth-child(2) { animation-delay: -0.16s; }
  @keyframes typingBounce {
    0%, 80%, 100% { transform: scale(0); opacity: 0.3; }
    40% { transform: scale(1); opacity: 1; }
  }
</style>

<div id="ai-chat-bubble-container" class="fixed z-[9999] select-none" style="bottom: 18px; right: 18px;">

  <!-- 1. BONG BÓNG CHAT TRÒN KIỂU ANDROID (THU GỌN 2/3 VỪA VẶN) -->
  <div id="android-chat-head" class="relative group cursor-pointer touch-none">
    
    <!-- Tooltip thông báo nổi nhỏ nhắn -->
    <div id="bubble-welcome-tooltip" class="absolute right-[56px] top-1/2 -translate-y-1/2 whitespace-nowrap bg-white text-slate-800 text-[11px] font-semibold px-2.5 py-1.5 rounded-xl shadow-lg border border-slate-200/90 flex items-center gap-1.5 transition-all duration-300 pointer-events-auto">
      <span class="w-4 h-4 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center text-[10px] shrink-0">
        <i class="fa-solid fa-wand-magic-sparkles"></i>
      </span>
      <span>Hỏi AI Du Lịch! 👋</span>
      <button onclick="event.stopPropagation(); closeBubbleTooltip();" class="text-slate-400 hover:text-slate-600 ml-0.5 text-[10px]">✕</button>
      <div class="absolute -right-1 top-1/2 -translate-y-1/2 w-0 h-0 border-t-[4px] border-t-transparent border-b-[4px] border-b-transparent border-l-[5px] border-l-white"></div>
    </div>

    <!-- Nút bong bóng tròn Android (Thu gọn ~46px vừa vặn, không che khuất màn hình) -->
    <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-full bg-gradient-to-tr from-blue-600 via-indigo-600 to-sky-500 flex items-center justify-center text-white shadow-lg android-bubble-soft hover:scale-105 active:scale-95 transition transform duration-200 border-2 border-white">
      <i class="fa-solid fa-robot text-lg drop-shadow-sm"></i>
      
      <!-- Chấm xanh Online trạng thái sẵn sàng -->
      <span class="absolute top-0 right-0 w-3.5 h-3.5 bg-emerald-500 border-2 border-white rounded-full flex items-center justify-center shadow-xs">
        <span class="w-1 h-1 bg-white rounded-full animate-ping"></span>
      </span>
      
      <!-- Huy hiệu AI nhỏ xinh -->
      <span class="absolute -bottom-1 bg-white text-blue-700 text-[8px] font-extrabold px-1 py-0 rounded-full shadow-xs border border-blue-200 uppercase tracking-tighter">
        AI
      </span>
    </div>
  </div>

  <!-- 2. KHUNG CỬA SỔ CHAT POPUP (THU NHỎ 2/3: RỘNG ~320px, CAO ~420px) -->
  <div id="android-chat-window" class="theme-light hidden fixed sm:absolute bottom-0 right-0 w-full sm:w-[325px] h-[425px] max-h-[85vh] bg-white text-slate-800 rounded-t-2xl sm:rounded-2xl shadow-2xl border border-slate-200/90 flex flex-col overflow-hidden transition-all duration-300 transform scale-95 opacity-0 origin-bottom-right z-50">
    
    <!-- HEADER HỘP CHAT (THU GỌN GỌN GÀNG) -->
    <div id="chat-header" class="px-3 py-2.5 bg-gradient-to-r from-blue-600 via-indigo-600 to-blue-700 text-white flex items-center justify-between shrink-0 shadow-sm">
      <div class="flex items-center gap-2">
        <div class="w-7 h-7 rounded-full bg-white/20 backdrop-blur-sm text-white flex items-center justify-center text-xs shadow-inner border border-white/30 shrink-0">
          <i class="fa-solid fa-robot"></i>
        </div>
        <div>
          <h3 class="font-extrabold text-xs leading-tight flex items-center gap-1">
            Trợ Lý AI Du Lịch
            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 inline-block shadow-xs"></span>
          </h3>
          <p class="text-[9px] text-blue-100 leading-tight line-clamp-1 opacity-90">
            Hỏi đáp du lịch Việt Nam 24/7
          </p>
        </div>
      </div>

      <!-- Nút điều khiển mini: Đổi giao diện, reset, thu nhỏ, đóng -->
      <div class="flex items-center gap-0.5">
        <button onclick="toggleChatTheme()" id="chat-theme-btn" title="Chuyển chế độ sáng/tối" class="w-6 h-6 rounded-md text-white/80 hover:text-white hover:bg-white/15 flex items-center justify-center text-[10px] transition">
          <i class="fa-solid fa-moon"></i>
        </button>
        <button onclick="clearChatHistory()" title="Xóa lịch sử chat" class="w-6 h-6 rounded-md text-white/80 hover:text-white hover:bg-white/15 flex items-center justify-center text-[10px] transition">
          <i class="fa-solid fa-rotate-right"></i>
        </button>
        <button onclick="toggleAndroidChat(false)" title="Thu nhỏ về bong bóng" class="w-6 h-6 rounded-md text-white/80 hover:text-white hover:bg-white/15 flex items-center justify-center text-xs font-bold transition">
          <i class="fa-solid fa-minus"></i>
        </button>
        <button onclick="toggleAndroidChat(false)" title="Đóng chat" class="w-6 h-6 rounded-md text-white/80 hover:text-rose-200 hover:bg-white/15 flex items-center justify-center text-xs transition">
          ✕
        </button>
      </div>
    </div>

    <!-- KHU VỰC NỘI DUNG TIN NHẮN (MESSAGES) -->
    <div id="ai-chat-messages" class="flex-1 p-2.5 overflow-y-auto space-y-2.5 bg-[#f8fafc] transition-colors duration-200">
      
      <!-- Tin nhắn chào mừng ban đầu của AI (gọn gàng, chữ sắc nét) -->
      <div class="flex items-start gap-2 message-row">
        <div class="w-6 h-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center text-[10px] shrink-0 mt-0.5 shadow-xs border border-blue-200/60">
          <i class="fa-solid fa-robot"></i>
        </div>
        <div class="bot-bubble max-w-[88%] bg-white border border-slate-200/90 rounded-xl rounded-tl-xs p-2.5 text-slate-700 text-[11px] leading-relaxed shadow-xs">
          Xin chào! Mình là <strong class="text-blue-700 font-bold">Trợ lý AI Du Lịch</strong>. Bạn cần gợi ý điểm đến, món ngon hay lịch trình 3 miền? Nhắn cho mình nhé!
        </div>
      </div>

    </div>

    <!-- GỢI Ý CÂU HỎI NHANH (QUICK CHIPS GỌN GÀNG) -->
    <div id="chat-quick-box" class="px-2.5 py-1.5 bg-white border-t border-slate-200/80 transition-colors duration-200">
      <div class="text-[9px] text-slate-500 font-semibold mb-1 flex items-center gap-1">
        <i class="fa-solid fa-wand-magic-sparkles text-blue-500 text-[8px]"></i> Gợi ý nhanh:
      </div>
      <div class="flex gap-1 overflow-x-auto pb-0.5 no-scrollbar text-[10px]" id="quick-prompt-chips">
        <button onclick="sendQuickPrompt('Mùa đẹp nhất ở Sa Pa?')" class="quick-chip px-2.5 py-1 rounded-full bg-slate-50 hover:bg-blue-50 hover:text-blue-600 text-slate-700 border border-slate-200/90 hover:border-blue-300 whitespace-nowrap transition cursor-pointer shrink-0 shadow-2xs font-medium">
          Mùa đẹp ở Sa Pa?
        </button>
        <button onclick="sendQuickPrompt('Món ngon Hội An?')" class="quick-chip px-2.5 py-1 rounded-full bg-slate-50 hover:bg-blue-50 hover:text-blue-600 text-slate-700 border border-slate-200/90 hover:border-blue-300 whitespace-nowrap transition cursor-pointer shrink-0 shadow-2xs font-medium">
          Món ngon Hội An?
        </button>
        <button onclick="sendQuickPrompt('Đi Phú Quốc mấy ngày?')" class="quick-chip px-2.5 py-1 rounded-full bg-slate-50 hover:bg-blue-50 hover:text-blue-600 text-slate-700 border border-slate-200/90 hover:border-blue-300 whitespace-nowrap transition cursor-pointer shrink-0 shadow-2xs font-medium">
          Đi Phú Quốc mấy ngày?
        </button>
        <button onclick="sendQuickPrompt('Lịch trình Đà Nẵng 3N2Đ?')" class="quick-chip px-2.5 py-1 rounded-full bg-slate-50 hover:bg-blue-50 hover:text-blue-600 text-slate-700 border border-slate-200/90 hover:border-blue-300 whitespace-nowrap transition cursor-pointer shrink-0 shadow-2xs font-medium">
          Lịch trình Đà Nẵng?
        </button>
        <button onclick="sendQuickPrompt('Đặc sản Miền Tây?')" class="quick-chip px-2.5 py-1 rounded-full bg-slate-50 hover:bg-blue-50 hover:text-blue-600 text-slate-700 border border-slate-200/90 hover:border-blue-300 whitespace-nowrap transition cursor-pointer shrink-0 shadow-2xs font-medium">
          Đặc sản Miền Tây?
        </button>
      </div>
    </div>

    <!-- KHUNG NHẬP TIN NHẮN (INPUT COMPACT) -->
    <div id="chat-input-box" class="p-2 bg-white border-t border-slate-200/80 shrink-0 transition-colors duration-200">
      <form id="ai-chat-form" onsubmit="handleSendChatMessage(event)" class="relative flex items-center">
        <input 
          type="text" 
          id="ai-user-input" 
          placeholder="Hỏi AI về du lịch..." 
          autocomplete="off"
          class="w-full pl-3 pr-8 py-1.5 bg-slate-50 border border-slate-200 focus:border-blue-500 rounded-full text-[11px] text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-1 focus:ring-blue-200 transition shadow-inner focus:bg-white"
        >
        <button 
          type="submit" 
          id="ai-send-btn"
          class="absolute right-1 w-6 h-6 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white flex items-center justify-center shadow-xs hover:scale-105 active:scale-95 transition"
        >
          <i class="fa-solid fa-paper-plane text-[9px]"></i>
        </button>
      </form>
    </div>

  </div>

</div>

<!-- SCRIPT ĐIỀU KHIỂN BONG BÓNG CHAT ANDROID, ĐỔI GIAO DIỆN VÀ AI LOGIC -->
<script>
  let isChatOpen = false;
  let isAiResponding = false;
  let currentTheme = localStorage.getItem('vietour_ai_theme') || 'light';

  // Áp dụng theme lưu trữ ngay khi tải
  document.addEventListener('DOMContentLoaded', () => {
    applyChatTheme(currentTheme);
  });

  // 1. Chuyển đổi giao diện Sáng dịu mắt / Tối dịu đêm (Light / Soft Slate Dark)
  function toggleChatTheme() {
    currentTheme = currentTheme === 'light' ? 'dark' : 'light';
    localStorage.setItem('vietour_ai_theme', currentTheme);
    applyChatTheme(currentTheme);
  }

  function applyChatTheme(theme) {
    const windowEl = document.getElementById('android-chat-window');
    const headerEl = document.getElementById('chat-header');
    const messagesEl = document.getElementById('ai-chat-messages');
    const quickBox = document.getElementById('chat-quick-box');
    const inputBox = document.getElementById('chat-input-box');
    const themeBtn = document.getElementById('chat-theme-btn');
    const userInput = document.getElementById('ai-user-input');

    if (!windowEl) return;

    if (theme === 'dark') {
      // Chế độ Tối Dịu (Soft Slate Night)
      windowEl.classList.remove('theme-light', 'bg-white', 'border-slate-200/90');
      windowEl.classList.add('theme-dark', 'bg-[#0f172a]', 'border-slate-700/80');

      headerEl.className = 'px-3 py-2 bg-gradient-to-r from-slate-900 via-indigo-950 to-slate-900 text-white border-b border-slate-700/50 flex items-center justify-between shrink-0 shadow-sm';
      messagesEl.className = 'flex-1 p-2.5 overflow-y-auto space-y-2.5 bg-[#0b1120] transition-colors duration-200';
      quickBox.className = 'px-2.5 py-1.5 bg-[#0f172a] border-t border-slate-800 transition-colors duration-200';
      inputBox.className = 'p-2 bg-[#0f172a] border-t border-slate-800 shrink-0 transition-colors duration-200';
      
      userInput.className = 'w-full pl-3 pr-8 py-1.5 bg-[#1e293b] border border-slate-700 focus:border-blue-500 rounded-full text-[11px] text-white placeholder-slate-400 focus:outline-none focus:ring-1 focus:ring-blue-500 transition shadow-inner';
      
      if (themeBtn) themeBtn.innerHTML = '<i class="fa-solid fa-sun text-amber-400"></i>';
      
      // Đổi class các tin nhắn hiện có
      document.querySelectorAll('.bot-bubble').forEach(el => {
        el.className = 'bot-bubble max-w-[88%] bg-[#1e293b] border border-slate-700/80 rounded-xl rounded-tl-xs p-2.5 text-slate-200 text-[11px] leading-relaxed shadow-xs';
      });
      document.querySelectorAll('.quick-chip').forEach(el => {
        el.className = 'quick-chip px-2.5 py-1 rounded-full bg-[#1e293b] hover:bg-slate-700 text-slate-300 border border-slate-700 whitespace-nowrap transition cursor-pointer shrink-0 shadow-2xs font-medium';
      });
    } else {
      // Chế độ Sáng Dịu Mặc Định
      windowEl.classList.remove('theme-dark', 'bg-[#0f172a]', 'border-slate-700/80');
      windowEl.classList.add('theme-light', 'bg-white', 'border-slate-200/90');

      headerEl.className = 'px-3 py-2 bg-gradient-to-r from-blue-600 via-indigo-600 to-blue-700 text-white flex items-center justify-between shrink-0 shadow-sm';
      messagesEl.className = 'flex-1 p-2.5 overflow-y-auto space-y-2.5 bg-[#f8fafc] transition-colors duration-200';
      quickBox.className = 'px-2.5 py-1.5 bg-white border-t border-slate-200/80 transition-colors duration-200';
      inputBox.className = 'p-2 bg-white border-t border-slate-200/80 shrink-0 transition-colors duration-200';

      userInput.className = 'w-full pl-3 pr-8 py-1.5 bg-slate-50 border border-slate-200 focus:border-blue-500 rounded-full text-[11px] text-slate-800 placeholder-slate-400 focus:outline-none focus:ring-1 focus:ring-blue-200 transition shadow-inner focus:bg-white';
      
      if (themeBtn) themeBtn.innerHTML = '<i class="fa-solid fa-moon text-white"></i>';

      // Đổi class các tin nhắn hiện có
      document.querySelectorAll('.bot-bubble').forEach(el => {
        el.className = 'bot-bubble max-w-[88%] bg-white border border-slate-200/90 rounded-xl rounded-tl-xs p-2.5 text-slate-700 text-[11px] leading-relaxed shadow-xs';
      });
      document.querySelectorAll('.quick-chip').forEach(el => {
        el.className = 'quick-chip px-2.5 py-1 rounded-full bg-slate-50 hover:bg-blue-50 hover:text-blue-600 text-slate-700 border border-slate-200/90 hover:border-blue-300 whitespace-nowrap transition cursor-pointer shrink-0 shadow-2xs font-medium';
      });
    }
  }

  // 2. Điều khiển Mở / Đóng Bong Bóng Chat Android
  function toggleAndroidChat(forceState) {
    const windowEl = document.getElementById('android-chat-window');
    const bubbleEl = document.getElementById('android-chat-head');
    const tooltipEl = document.getElementById('bubble-welcome-tooltip');

    if (forceState !== undefined) {
      isChatOpen = forceState;
    } else {
      isChatOpen = !isChatOpen;
    }

    if (isChatOpen) {
      windowEl.classList.remove('hidden');
      setTimeout(() => {
        windowEl.classList.remove('scale-95', 'opacity-0');
        windowEl.classList.add('scale-100', 'opacity-100');
      }, 10);
      bubbleEl.classList.add('hidden'); // Ẩn bong bóng tròn khi đã mở cửa sổ chat
      if (tooltipEl) tooltipEl.classList.add('hidden');
      
      // Focus vào ô nhập
      setTimeout(() => {
        const input = document.getElementById('ai-user-input');
        if (input) input.focus();
      }, 100);
    } else {
      windowEl.classList.remove('scale-100', 'opacity-100');
      windowEl.classList.add('scale-95', 'opacity-0');
      setTimeout(() => {
        windowEl.classList.add('hidden');
        bubbleEl.classList.remove('hidden'); // Hiện lại bong bóng tròn
      }, 200);
    }
  }

  function closeBubbleTooltip() {
    const tooltipEl = document.getElementById('bubble-welcome-tooltip');
    if (tooltipEl) tooltipEl.remove();
  }

  // ==========================================
  // KÉO THẢ BONG BÓNG ANDROID (DRAGGABLE CHAT HEAD)
  // ==========================================
  const chatBubbleContainer = document.getElementById('ai-chat-bubble-container');
  const chatHead = document.getElementById('android-chat-head');
  let isDragging = false;
  let startX, startY, origX, origY;
  let hasMoved = false;

  chatHead.addEventListener('pointerdown', (e) => {
    if (e.target.closest('#bubble-welcome-tooltip button')) return;
    isDragging = true;
    hasMoved = false;
    startX = e.clientX;
    startY = e.clientY;
    const rect = chatBubbleContainer.getBoundingClientRect();
    origX = rect.left;
    origY = rect.top;
    chatHead.setPointerCapture(e.pointerId);
  });

  chatHead.addEventListener('pointermove', (e) => {
    if (!isDragging) return;
    const dx = e.clientX - startX;
    const dy = e.clientY - startY;
    if (Math.hypot(dx, dy) > 5) {
      hasMoved = true;
      chatBubbleContainer.style.bottom = 'auto';
      chatBubbleContainer.style.right = 'auto';
      chatBubbleContainer.style.left = Math.max(8, Math.min(window.innerWidth - 56, origX + dx)) + 'px';
      chatBubbleContainer.style.top = Math.max(8, Math.min(window.innerHeight - 56, origY + dy)) + 'px';
    }
  });

  chatHead.addEventListener('pointerup', (e) => {
    if (!isDragging) return;
    isDragging = false;
    try { chatHead.releasePointerCapture(e.pointerId); } catch(err) {}

    if (!hasMoved) {
      toggleAndroidChat(true);
    } else {
      // Hút mượt về cạnh màn hình gần nhất giống Android Messenger!
      const rect = chatBubbleContainer.getBoundingClientRect();
      const screenWidth = window.innerWidth;
      const targetLeft = (rect.left + rect.width / 2 > screenWidth / 2) ? (screenWidth - rect.width - 16) : 16;
      chatBubbleContainer.style.transition = 'all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275)';
      chatBubbleContainer.style.left = targetLeft + 'px';
      setTimeout(() => {
        chatBubbleContainer.style.transition = '';
      }, 350);
    }
  });

  // Bấm phím Escape để đóng chat
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && isChatOpen) {
      toggleAndroidChat(false);
    }
  });

  // 3. Gửi câu hỏi nhanh từ Chips
  function sendQuickPrompt(promptText) {
    const input = document.getElementById('ai-user-input');
    input.value = promptText;
    document.getElementById('ai-chat-form').dispatchEvent(new Event('submit'));
  }

  // 4. Xử lý Gửi Tin Nhắn
  function handleSendChatMessage(e) {
    e.preventDefault();
    if (isAiResponding) return;

    const input = document.getElementById('ai-user-input');
    const message = input.value.trim();
    if (!message) return;

    // Hiển thị tin nhắn người dùng
    appendUserMessage(message);
    input.value = '';

    // Hiển thị trạng thái đang soạn tin (typing)
    showTypingIndicator();
    isAiResponding = true;

    // Tạo câu trả lời thông minh của AI
    setTimeout(() => {
      const response = generateSmartAiResponse(message);
      removeTypingIndicator();
      appendBotMessage(response);
      isAiResponding = false;
    }, 550 + Math.random() * 350); // 0.55s - 0.9s
  }

  // Thêm tin nhắn của User
  function appendUserMessage(text) {
    const container = document.getElementById('ai-chat-messages');
    const row = document.createElement('div');
    row.className = 'flex items-start justify-end gap-1.5 message-row';
    row.innerHTML = `
      <div class="max-w-[88%] bg-gradient-to-r from-blue-600 to-indigo-600 rounded-xl rounded-tr-xs p-2.5 text-white text-[11px] leading-relaxed shadow-xs">
        ${escapeHtml(text)}
      </div>
      <div class="w-6 h-6 rounded-full bg-slate-200 text-slate-700 flex items-center justify-center text-[10px] shrink-0 mt-0.5 shadow-2xs font-semibold">
        <i class="fa-solid fa-user"></i>
      </div>
    `;
    container.appendChild(row);
    scrollChatToBottom();
  }

  // Thêm tin nhắn của Bot
  function appendBotMessage(htmlText) {
    const container = document.getElementById('ai-chat-messages');
    const row = document.createElement('div');
    row.className = 'flex items-start gap-1.5 message-row';

    const isDark = currentTheme === 'dark';
    const bubbleClass = isDark
      ? 'bot-bubble max-w-[88%] bg-[#1e293b] border border-slate-700/80 rounded-xl rounded-tl-xs p-2.5 text-slate-200 text-[11px] leading-relaxed shadow-xs'
      : 'bot-bubble max-w-[88%] bg-white border border-slate-200/90 rounded-xl rounded-tl-xs p-2.5 text-slate-700 text-[11px] leading-relaxed shadow-xs';
    
    const avatarClass = isDark
      ? 'w-6 h-6 rounded-full bg-blue-900/60 text-blue-400 flex items-center justify-center text-[10px] shrink-0 mt-0.5 shadow-xs border border-blue-700/40'
      : 'w-6 h-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center text-[10px] shrink-0 mt-0.5 shadow-xs border border-blue-200/60';

    row.innerHTML = `
      <div class="${avatarClass}">
        <i class="fa-solid fa-robot"></i>
      </div>
      <div class="${bubbleClass}">
        ${htmlText}
      </div>
    `;
    container.appendChild(row);
    scrollChatToBottom();
  }

  // Hiển thị 3 chấm gõ tin mini
  function showTypingIndicator() {
    const container = document.getElementById('ai-chat-messages');
    const typing = document.createElement('div');
    typing.id = 'ai-typing-indicator';
    typing.className = 'flex items-center gap-1.5';

    const isDark = currentTheme === 'dark';
    const bubbleClass = isDark
      ? 'bg-[#1e293b] border border-slate-700/80 rounded-xl p-2 flex items-center gap-1 shadow-xs'
      : 'bg-white border border-slate-200/90 rounded-xl p-2 flex items-center gap-1 shadow-xs';

    const avatarClass = isDark
      ? 'w-6 h-6 rounded-full bg-blue-900/60 text-blue-400 flex items-center justify-center text-[10px] shrink-0 mt-0.5 shadow-xs border border-blue-700/40'
      : 'w-6 h-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center text-[10px] shrink-0 mt-0.5 shadow-xs border border-blue-200/60';

    typing.innerHTML = `
      <div class="${avatarClass}">
        <i class="fa-solid fa-robot"></i>
      </div>
      <div class="${bubbleClass}">
        <div class="typing-dot"></div>
        <div class="typing-dot"></div>
        <div class="typing-dot"></div>
      </div>
    `;
    container.appendChild(typing);
    scrollChatToBottom();
  }

  function removeTypingIndicator() {
    const typing = document.getElementById('ai-typing-indicator');
    if (typing) typing.remove();
  }

  function scrollChatToBottom() {
    const container = document.getElementById('ai-chat-messages');
    container.scrollTop = container.scrollHeight;
  }

  function clearChatHistory() {
    if (confirm('Bạn muốn bắt đầu cuộc trò chuyện mới với AI?')) {
      const isDark = currentTheme === 'dark';
      const bubbleClass = isDark
        ? 'bot-bubble max-w-[88%] bg-[#1e293b] border border-slate-700/80 rounded-xl rounded-tl-xs p-2.5 text-slate-200 text-[11px] leading-relaxed shadow-xs'
        : 'bot-bubble max-w-[88%] bg-white border border-slate-200/90 rounded-xl rounded-tl-xs p-2.5 text-slate-700 text-[11px] leading-relaxed shadow-xs';
      
      const avatarClass = isDark
        ? 'w-6 h-6 rounded-full bg-blue-900/60 text-blue-400 flex items-center justify-center text-[10px] shrink-0 mt-0.5 shadow-xs border border-blue-700/40'
        : 'w-6 h-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center text-[10px] shrink-0 mt-0.5 shadow-xs border border-blue-200/60';

      const container = document.getElementById('ai-chat-messages');
      container.innerHTML = `
        <div class="flex items-start gap-1.5 message-row">
          <div class="${avatarClass}">
            <i class="fa-solid fa-robot"></i>
          </div>
          <div class="${bubbleClass}">
            Xin chào! Mình là <strong class="text-blue-700 font-bold">Trợ lý AI Du Lịch</strong>. Bạn cần gợi ý điểm đến, món ngon hay lịch trình 3 miền? Nhắn cho mình nhé!
          </div>
        </div>
      `;
    }
  }

  function escapeHtml(text) {
    const div = document.createElement('div');
    div.textContent = text;
    return div.innerHTML;
  }

  // ========================================================
  // 5. BỘ NÃO TRÍ TUỆ NHÂN TẠO DU LỊCH VIỆT NAM (SMART AI TRAVEL ENGINE)
  // ========================================================
  function generateSmartAiResponse(query) {
    const q = query.toLowerCase();

    // 1. SA PA / LÀO CAI
    if (q.includes('sa pa') || q.includes('sapa') || q.includes('lào cai') || q.includes('fansipan')) {
      return `🏔️ <strong class="text-blue-600 font-bold text-xs">Cẩm nang du lịch Sa Pa:</strong><br><br>
      • <strong>Mùa đẹp nhất:</strong> T9 - T11 (mùa lúa chín vàng) & T12 - T2 (săn mây, hoa đào, băng tuyết Fansipan).<br>
      • <strong>Điểm check-in:</strong> Đỉnh Fansipan 3.143m, bản Cát Cát, thung lũng Mường Hoa, đèo Ô Quy Hồ.<br>
      • <strong>Món ngon:</strong> Lẩu cá hồi, thịt lợn cắp nách, thắng cố Bắc Hà.<br><br>
      💡 <em>Gợi ý: Đi 3 ngày 2 đêm là lý tưởng nhất!</em>`;
    }

    // 2. HỘI AN / QUẢNG NAM
    if (q.includes('hội an') || q.includes('hoi an') || q.includes('quảng nam')) {
      return `🏮 <strong class="text-amber-600 font-bold text-xs">Phố cổ Hội An:</strong><br><br>
      • <strong>Món ngon:</strong> Cao lầu Hội An, Mì Quảng, Cơm gà Bà Buội, Bánh mì Phượng, Nước Mót sả chanh.<br>
      • <strong>Trải nghiệm:</strong> Đi thuyền thả hoa đăng sông Hoài, xem show Ký ức Hội An, đạp xe quanh đồng lúa Cẩm Thanh.<br>
      • <strong>Thời điểm:</strong> T2 - T7 trời nắng ráo biển trong.`;
    }

    // 3. PHÚ QUỐC / KIÊN GIANG
    if (q.includes('phú quốc') || q.includes('phu quoc') || q.includes('kiên giang')) {
      return `🏖️ <strong class="text-sky-600 font-bold text-xs">Đảo Ngọc Phú Quốc:</strong><br><br>
      • <strong>Nên đi mấy ngày?</strong> <strong>3N2Đ</strong> hoặc <strong>4N3Đ</strong> là chuẩn nhất.<br>
      • <strong>Mùa đẹp:</strong> T11 - T4 (sóng êm biển lặng).<br>
      • <strong>Lịch trình:</strong><br>
      - <em>N1:</em> Check-in Bãi Sao, ngắm hoàng hôn Bãi Dài, chợ đêm.<br>
      - <em>N2:</em> Tour cano 4 đảo lặn ngắm san hô + Cáp treo Hòn Thơm.<br>
      - <em>N3:</em> Vinpearl Safari & Grand World.<br>
      • <strong>Đặc sản:</strong> Bún quậy Kiến Xây, gỏi cá trích, ghẹ Hàm Ninh.`;
    }

    // 4. ĐÀ NẴNG
    if (q.includes('đà nẵng') || q.includes('da nang') || q.includes('bà nà') || q.includes('cầu vàng')) {
      return `🌉 <strong class="text-blue-600 font-bold text-xs">Du lịch Đà Nẵng:</strong><br><br>
      • <strong>Điểm nổi tiếng:</strong> Cầu Vàng Bà Nà Hills, Cầu Rồng phun lửa (21h T7 & CN), Bán đảo Sơn Trà, Biển Mỹ Khê.<br>
      • <strong>Lịch trình 3N2Đ:</strong> N1 Sơn Trà + tắm biển; N2 Bà Nà Hills; N3 Ngũ Hành Sơn + Phố cổ Hội An.<br>
      • <strong>Món ngon:</strong> Bánh tráng cuốn thịt heo, Mì Quảng, Chả bò, Hải sản Năm Đảnh.`;
    }

    // 5. HÀ GIANG
    if (q.includes('hà giang') || q.includes('ha giang') || q.includes('mã pí lèng') || q.includes('nho quế')) {
      return `🏍️ <strong class="text-emerald-600 font-bold text-xs">Phượt Hà Giang:</strong><br><br>
      • <strong>Mùa đẹp:</strong> T10 - T12 (hoa tam giác mạch) hoặc T1 - T3 (hoa đào mận nở).<br>
      • <strong>Điểm đến:</strong> Đèo Mã Pí Lèng, thuyền sông Nho Quế hẻm Tu Sản, Cột cờ Lũng Cú.<br>
      • <strong>Chi phí:</strong> Khoảng 1.8tr - 2.5tr/người cho 3N2Đ từ Hà Nội.`;
    }

    // 6. ĐÀ LẠT
    if (q.includes('đà lạt') || q.includes('da lat') || q.includes('lâm đồng')) {
      return `🌸 <strong class="text-rose-600 font-bold text-xs">Đà Lạt mộng mơ:</strong><br><br>
      • <strong>Thời tiết:</strong> Se lạnh, nhớ mang áo ấm.<br>
      • <strong>Trải nghiệm:</strong> Glamping hồ Tuyền Lâm, săn mây đồi chè Cầu Đất lúc 5h sáng, chợ đêm ăn bánh tráng nướng.<br>
      • <strong>Món ngon:</strong> Lẩu gà lá é Tao Ngộ, lẩu bò Ba Toa, kem bơ Thanh Thảo.`;
    }

    // 7. MIỀN TÂY / CẦN THƠ / BẾN TRE
    if (q.includes('miền tây') || q.includes('cần thơ') || q.includes('bến tre') || q.includes('chợ nổi') || q.includes('an giang')) {
      return `🚣 <strong class="text-teal-600 font-bold text-xs">Miền Tây sông nước:</strong><br><br>
      • <strong>Trải nghiệm:</strong> Chợ nổi Cái Răng lúc 5h30 sáng, hái trái cây miệt vườn Bến Tre, xuồng ba lá rừng tràm Trà Sư.<br>
      • <strong>Mùa đẹp:</strong> T9 - T11 (mùa nước nổi bông điên điển).<br>
      • <strong>Món ngon:</strong> Lẩu mắm cá linh, cá tai tượng chiên xù, bánh xèo.`;
    }

    // 8. HÀ NỘI / MIỀN BẮC
    if (q.includes('hà nội') || q.includes('ha noi') || q.includes('miền bắc')) {
      return `🥢 <strong class="text-blue-700 font-bold text-xs">Văn hóa Hà Nội:</strong><br><br>
      • <strong>Món ngon:</strong> Phở Bát Đàn, Bún chả Hương Liên, Chả cá Lã Vọng, Cà phê trứng Giảng.<br>
      • <strong>Mùa đẹp:</strong> Mùa thu (T9 - T11 trời mát mẻ).<br>
      • <strong>Điểm đến:</strong> Hồ Gươm, Văn Miếu, Hoàng thành, 36 phố phường.`;
    }

    // 9. NINH BÌNH / HẠ LONG
    if (q.includes('ninh bình') || q.includes('hạ long') || q.includes('quảng ninh') || q.includes('tràng an')) {
      return `⛵ <strong class="text-sky-700 font-bold text-xs">Hạ Long & Tràng An:</strong><br><br>
      • <strong>Vịnh Hạ Long:</strong> Du thuyền ngủ đêm 5 sao, chèo kayak hang Luồn, đảo Ti Tốp.<br>
      • <strong>Tràng An:</strong> Đi thuyền nan xuyên hang động, leo đỉnh Hang Múa ngắm sông Ngô Đồng.<br>
      • <strong>Đặc sản:</strong> Chả mực Hạ Long, cơm cháy dê Ninh Bình.`;
    }

    // 10. CHI PHÍ / TIẾT KIỆM / GIÁ CẢ
    if (q.includes('chi phí') || q.includes('giá') || q.includes('tiết kiệm') || q.includes('bao nhiêu tiền')) {
      return `💰 <strong class="text-emerald-700 font-bold text-xs">Ước tính chi phí tự túc:</strong><br><br>
      • <strong>Tour 2N1Đ:</strong> ~800k - 1.4tr/người.<br>
      • <strong>Tour 3N2Đ:</strong> ~2.5tr - 3.8tr/người.<br>
      • <strong>Tour Biển đảo:</strong> ~4.0tr - 6.0tr/người (tùy vé bay).<br><br>
      💡 <em>Mẹo: Săn vé trước 3 tuần và đi nhóm 4 người để chia phòng & xe nhé!</em>`;
    }

    // 11. THỜI TIẾT / MÙA NÀO ĐẸP
    if (q.includes('thời tiết') || q.includes('mùa nào') || q.includes('tháng mấy') || q.includes('mưa')) {
      return `⛅ <strong class="text-indigo-600 font-bold text-xs">Thời tiết du lịch 3 miền:</strong><br><br>
      • <strong>Miền Bắc:</strong> Đẹp nhất mùa Thu (T9 - T11) và Xuân (T2 - T4).<br>
      • <strong>Miền Trung:</strong> Nắng đẹp T3 - T8 (biển trong). Tránh bão T9 - T11.<br>
      • <strong>Miền Nam:</strong> Mùa khô T11 - T4 là thời điểm vàng đi biển đảo!`;
    }

    // 12. CÂU HỎI MẶC ĐỊNH / CHUNG CHUNG
    return `✨ <strong class="text-blue-700 font-bold text-xs">Chào bạn!</strong><br><br>
    Với câu hỏi <em>"${escapeHtml(query)}"</em>, bạn có thể cho mình biết thêm:<br>
    1. Bạn muốn đi <strong>vùng nào</strong>?<br>
    2. Đi <strong>mấy ngày</strong> và có mức <strong>ngân sách</strong> ra sao?<br>
    3. Đi cùng <strong>gia đình, cặp đôi hay bạn bè</strong>?<br><br>
    Mình sẽ lên lịch trình chi tiết ngay cho bạn nhé! 😊`;
  }
</script>
