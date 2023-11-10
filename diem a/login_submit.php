<?php
// Bắt đầu phiên làm việc của người dùng
session_start();

// Nạp cấu hình kết nối đến cơ sở dữ liệu từ tệp 'config.php'
include 'config.php';

// Kiểm tra xem biểu mẫu đăng nhập đã được gửi và cả hai trường 'username' và 'password' đã được điền
if (isset($_POST["submit"]) && !empty($_POST["username"]) && !empty($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Sử dụng prepared statement để tránh SQL Injection
    $stmt = $conn->prepare("SELECT id, username, password FROM user WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Kiểm tra xem có người dùng tương ứng
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row["password"];

        // Kiểm tra tính hợp lệ của mật khẩu sử dụng 'password_verify'
        if (password_verify($password, $hashed_password)) {
            // Xác thực thành công, lưu thông tin người dùng vào phiên làm việc
            $_SESSION["user"] = [
                "name" => $row["username"],
                "id" => $row["id"]
            ];
            $_SESSION["thongbao"] = "Đăng nhập thành công";

            // Chuyển hướng người dùng đến trang chính ('index.php')
            header("Location: index.php");
            exit;
        } else {
            // Mật khẩu không hợp lệ, thông báo lỗi và chuyển hướng lại trang đăng nhập
            $_SESSION["thongbao"] = "Sai mật khẩu";
            header("Location: login.php");
            exit;
        }
    } else {
        // Không tìm thấy tên đăng nhập tương ứng, thông báo lỗi và chuyển hướng lại trang đăng nhập
        $_SESSION["thongbao"] = "Sai tên đăng nhập";
        header("Location: login.php");
        exit;
    }
} else {
    // Người dùng chưa điền đầy đủ thông tin, thông báo lỗi và chuyển hướng lại trang đăng nhập
    $_SESSION["thongbao"] = "Vui lòng nhập đầy đủ thông tin";
    header("Location: login.php");
    exit;
}
?>

