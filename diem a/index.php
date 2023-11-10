<?php
session_start();
if (!isset($_SESSION["user"]) || !is_array($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}

// Lấy thông tin người dùng từ phiên làm việc
$userName = $_SESSION["user"]["name"];
$userId = $_SESSION["user"]["id"];
?>

<h1>Xin chào, <?php echo $userName; ?></h1>
<p>ID của bạn: <?php echo $userId; ?></p>
<a href="logout.php">Đăng xuất</a>
