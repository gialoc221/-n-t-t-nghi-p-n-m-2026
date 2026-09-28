<?php
$servername = "localhost";
$username = "root"; // Tên đăng nhập mặc định của XAMPP
$password = ""; // Mật khẩu mặc định của XAMPP là để trống
$database = "test"; // Tên database mặc định hoặc bạn có thể đổi thành tên DB của bạn

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("<h2 style='color:red;'>Kết nối XAMPP (MySQL) THẤT BẠI: " . $conn->connect_error . "</h2>");
}
echo "<h2 style='color:green;'>Kết nối XAMPP (MySQL) THÀNH CÔNG!</h2>";
?>