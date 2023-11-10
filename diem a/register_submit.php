<?php
// Bắt đầu phiên làm việc của người dùng
session_start();

// Nạp cấu hình kết nối đến cơ sở dữ liệu từ tệp 'config.php'
include 'config.php';

// Kiểm tra xem biểu mẫu đăng ký đã được gửi và cả năm trường 'name', 'username', 'password', 'repassword', và 'email' đã được điền
if (isset($_POST["submit"]) && !empty($_POST["name"]) && !empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["repassword"]) && !empty($_POST["email"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    $level = 0;

    // Kiểm tra xem tên và tên đăng nhập khác nhau
    if ($name == $username) {
        $_SESSION["thongbao"] = "Tên và tên đăng nhập phải khác nhau.";
        header("location: register.php"); // Điều hướng người dùng trở lại trang đăng ký
        exit;
    }

    // Kiểm tra xem checkbox 'agree' có được chọn hay không
    if (!isset($_POST["agree"])) {
        $_SESSION["thongbao"] = "Đồng ý điều khoản.";
        header("location: register.php"); // Điều hướng người dùng trở lại trang đăng ký
        exit;
    }

    // Kiểm tra định dạng email (phải kết thúc bằng "@gmail.com")
    if (!preg_match("/@gmail\.com$/", $email)) {
        $_SESSION["thongbao"] = "Email không hợp lệ";
        header("location: register.php"); // Điều hướng người dùng trở lại trang đăng ký
        exit;
    }

    if ($password != $repassword) {
        $_SESSION["thongbao"] = "Sai mật khẩu nhập lại";
        header("location: register.php");
        exit;
    }

    // Sử dụng câu lệnh đã chuẩn bị để kiểm tra xem tên người dùng đã tồn tại chưa
    $stmt = $conn->prepare("SELECT * FROM user WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Kiểm tra xem đã tồn tại người dùng có cùng tên đăng nhập chưa
    if ($result->num_rows > 0) {
        $_SESSION["thongbao"] = "Tên người dùng đã tồn tại";
        header("location: register.php");
        exit;
    }

    // Mã hóa mật khẩu sử dụng bcrypt
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Sử dụng câu lệnh đã chuẩn bị sẵn để chèn dữ liệu người dùng vào cơ sở dữ liệu
    $stmt = $conn->prepare("INSERT INTO user (name, email, username, password, level) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $name, $email, $username, $hashedPassword, $level);

    // Thực hiện truy vấn chèn dữ liệu người dùng
    if ($stmt->execute()) {
        $_SESSION["thongbao"] = "Đã đăng ký thành công";
        header("location: login.php");
    } else {
        echo "Lỗi: " . $stmt->error;
    }
} else {
    $_SESSION["thongbao"] = "Nhập đầy đủ thông tin";
    header("location: register.php");
    exit;
}
?>
