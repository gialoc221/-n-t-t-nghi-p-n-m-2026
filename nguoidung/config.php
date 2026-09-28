<?php
// config.php - Cấu hình kết nối Database
// 1. Thiết lập múi giờ mặc định cho toàn bộ hệ thống PHP là giờ Việt Nam
date_default_timezone_set('Asia/Ho_Chi_Minh');

$servername = "localhost";
$username = "root";
$password = "";
$database = "viettour_db"; // Kết nối đúng CSDL của bạn

// 2. Tạo kết nối bằng PDO
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // 3. Ép MySQL sử dụng múi giờ Việt Nam (UTC +7) khi lưu thời gian tự động
    $conn->exec("SET time_zone = '+07:00'");
    
} catch(PDOException $e) {
    die("Lỗi kết nối CSDL: " . $e->getMessage());
}
?>