<?php
session_start();
require_once 'config.php'; // Gọi file kết nối CSDL

$error_message = '';
$success_message = '';
$active_tab = 'login'; // Mặc định mở tab đăng nhập

// Xử lý khi Form được Submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // ==========================================
    // NẾU LÀ FORM ĐĂNG KÝ (LƯU VÀO BẢNG users)
    // ==========================================
    if (isset($_POST['action']) && $_POST['action'] == 'register') {
        $active_tab = 'register';
        $fullname = trim($_POST['fullname']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        if(empty($fullname) || empty($email) || empty($password)) {
            $error_message = "Vui lòng điền đầy đủ thông tin!";
        } else {
            // Kiểm tra email đã tồn tại chưa
            $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
            $stmt->execute([$email]);
            if ($stmt->rowCount() > 0) {
                $error_message = "Email này đã được sử dụng!";
            } else {
                // Mã hóa mật khẩu
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                
                // THÊM NGƯỜI DÙNG MỚI VÀO BẢNG users
                $stmt = $conn->prepare("INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)");
                if($stmt->execute([$fullname, $email, $hashed_password])) {
                    $success_message = "Đăng ký thành công! Hãy đăng nhập.";
                    $active_tab = 'login'; // Chuyển về form đăng nhập
                } else {
                    $error_message = "Có lỗi xảy ra, vui lòng thử lại.";
                }
            }
        }
    }
    
    // ==========================================
    // NẾU LÀ FORM ĐĂNG NHẬP (LƯU VÀO BẢNG login_history)
    // ==========================================
    if (isset($_POST['action']) && $_POST['action'] == 'login') {
        $active_tab = 'login';
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        if(empty($email) || empty($password)) {
            $error_message = "Vui lòng nhập Email và Mật khẩu!";
        } else {
            // Tìm user trong bảng users theo email
            $stmt = $conn->prepare("SELECT id, fullname, password FROM users WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch();

            // Kiểm tra mật khẩu mã hóa có khớp không
            if ($user && password_verify($password, $user['password'])) {
                // Đăng nhập thành công, lưu thông tin vào Session
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['fullname'] = $user['fullname'];
                $_SESSION['isLoggedIn'] = true; 
                
                // THÊM NHẬT KÝ VÀO BẢNG login_history
                $stmt_history = $conn->prepare("INSERT INTO login_history (user_id, email) VALUES (?, ?)");
                $stmt_history->execute([$user['id'], $email]);

                // Chuyển hướng sang giao diện trang chủ bằng Javascript
                echo "<script>
                        localStorage.setItem('isLoggedIn', 'true');
                        window.location.href = 'index.php';
                      </script>";
                exit;
            } else {
                $error_message = "Email hoặc Mật khẩu không chính xác!";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xác thực Tài khoản - VIETNAM TRAVEL</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@1,600;1,700&display=swap" rel="stylesheet">
  <style> body { font-family: 'Plus_Jakarta_Sans', sans-serif; } .font-script { font-family: 'Playfair Display', serif; } </style>
</head>
<body class="bg-slate-100 flex items-center justify-center min-h-screen p-4">

  <div class="max-w-4xl w-full bg-white rounded-3xl shadow-2xl overflow-hidden flex flex-col md:flex-row relative">
    
    <a href="index.php" class="absolute top-4 left-4 z-20 w-10 h-10 bg-black/30 backdrop-blur-md rounded-full flex items-center justify-center text-white hover:bg-black/50 transition">
      <i class="fa-solid fa-arrow-left"></i>
    </a>

    <div class="md:w-1/2 h-64 md:h-auto bg-cover bg-center relative" style="background-image: url('https://images.unsplash.com/photo-1528127269322-539801943592?auto=format&fit=crop&w=800&q=80');">
      <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/40 to-transparent flex flex-col justify-end p-8 text-white">
        <h2 class="font-script text-3xl text-amber-300 mb-1">Vietnam Travel</h2>
        <p class="text-sm text-slate-200 leading-relaxed">Đăng nhập để mở khóa bản đồ tương tác, lập kế hoạch bằng AI và lưu lại các điểm đến yêu thích của bạn.</p>
      </div>
    </div>

    <div class="md:w-1/2 p-8 lg:p-12 bg-white">
      
      <!-- Hiện thông báo lỗi/thành công từ PHP -->
      <?php if(!empty($error_message)): ?>
        <div class="bg-red-50 text-red-600 p-3 rounded-lg text-sm mb-4 border border-red-100 font-medium">
          <i class="fa-solid fa-circle-exclamation mr-1"></i> <?php echo $error_message; ?>
        </div>
      <?php endif; ?>

      <?php if(!empty($success_message)): ?>
        <div class="bg-emerald-50 text-emerald-600 p-3 rounded-lg text-sm mb-4 border border-emerald-100 font-medium">
          <i class="fa-solid fa-circle-check mr-1"></i> <?php echo $success_message; ?>
        </div>
      <?php endif; ?>

      <div class="flex space-x-6 border-b border-slate-200 mb-8">
        <button id="tab-login-btn" class="pb-3 text-sm font-bold <?php echo ($active_tab == 'login') ? 'text-blue-600 border-b-2 border-blue-600' : 'text-slate-400 hover:text-slate-600 border-b-2 border-transparent'; ?>" onclick="switchTab('login')">ĐĂNG NHẬP</button>
        <button id="tab-register-btn" class="pb-3 text-sm font-bold <?php echo ($active_tab == 'register') ? 'text-blue-600 border-b-2 border-blue-600' : 'text-slate-400 hover:text-slate-600 border-b-2 border-transparent'; ?>" onclick="switchTab('register')">ĐĂNG KÝ</button>
      </div>

      <!-- FORM ĐĂNG NHẬP -->
      <form id="form-login" class="space-y-5 <?php echo ($active_tab == 'login') ? '' : 'hidden'; ?>" method="POST" action="auth.php">
        <input type="hidden" name="action" value="login">
        <div>
          <label class="block text-xs font-semibold text-slate-600 mb-1.5">Email của bạn</label>
          <div class="relative">
            <i class="fa-regular fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
            <input type="email" name="email" required placeholder="Nhập email" class="w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none focus:border-blue-500 focus:bg-white transition">
          </div>
        </div>
        <div>
          <label class="block text-xs font-semibold text-slate-600 mb-1.5">Mật khẩu</label>
          <div class="relative">
            <i class="fa-solid fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
            <input type="password" name="password" required placeholder="••••••••" class="w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none focus:border-blue-500 focus:bg-white transition">
          </div>
        </div>
        
        <button type="submit" class="w-full py-3.5 bg-[#1e40af] hover:bg-blue-800 text-white font-bold rounded-xl text-sm shadow-lg shadow-blue-500/30 transition">
          ĐĂNG NHẬP NGAY
        </button>
      </form>

      <!-- FORM ĐĂNG KÝ -->
      <form id="form-register" class="space-y-5 <?php echo ($active_tab == 'register') ? '' : 'hidden'; ?>" method="POST" action="auth.php">
        <input type="hidden" name="action" value="register">
        <div>
          <label class="block text-xs font-semibold text-slate-600 mb-1.5">Họ và tên</label>
          <input type="text" name="fullname" required placeholder="Vd: Nguyễn Văn A" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none focus:border-blue-500 focus:bg-white transition">
        </div>
        <div>
          <label class="block text-xs font-semibold text-slate-600 mb-1.5">Email</label>
          <input type="email" name="email" required placeholder="email@example.com" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none focus:border-blue-500 focus:bg-white transition">
        </div>
        <div>
          <label class="block text-xs font-semibold text-slate-600 mb-1.5">Mật khẩu</label>
          <input type="password" name="password" required placeholder="Tạo mật khẩu (Ít nhất 6 ký tự)" minlength="6" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none focus:border-blue-500 focus:bg-white transition">
        </div>

        <button type="submit" class="w-full py-3.5 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-xl text-sm shadow-lg shadow-emerald-500/30 transition">
          TẠO TÀI KHOẢN
        </button>
      </form>

    </div>
  </div>

  <script>
    function switchTab(tab) {
      const formLogin = document.getElementById('form-login');
      const formRegister = document.getElementById('form-register');
      const tabLoginBtn = document.getElementById('tab-login-btn');
      const tabRegisterBtn = document.getElementById('tab-register-btn');

      if(tab === 'login') {
        formLogin.classList.remove('hidden');
        formRegister.classList.add('hidden');
        
        disableFormFields(formRegister, true);
        disableFormFields(formLogin, false);

        tabLoginBtn.className = "pb-3 text-sm font-bold text-blue-600 border-b-2 border-blue-600";
        tabRegisterBtn.className = "pb-3 text-sm font-bold text-slate-400 hover:text-slate-600 border-b-2 border-transparent";
      } else {
        formLogin.classList.add('hidden');
        formRegister.classList.remove('hidden');
        
        disableFormFields(formLogin, true);
        disableFormFields(formRegister, false);

        tabRegisterBtn.className = "pb-3 text-sm font-bold text-blue-600 border-b-2 border-blue-600";
        tabLoginBtn.className = "pb-3 text-sm font-bold text-slate-400 hover:text-slate-600 border-b-2 border-transparent";
      }
    }

    function disableFormFields(formElement, isDisabled) {
        const inputs = formElement.querySelectorAll('input, button');
        inputs.forEach(input => {
            input.disabled = isDisabled;
        });
    }

    document.addEventListener('DOMContentLoaded', () => {
        const currentTab = '<?php echo $active_tab; ?>';
        switchTab(currentTab);
    });
  </script>
</body>
</html>