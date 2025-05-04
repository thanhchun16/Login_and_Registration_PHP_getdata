<?php
require '../dp/connect.php';

if (isset($_POST['submit-log'])) { // Kiểm tra xem form đã được submit chưa
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Kiểm tra nếu các trường bị bỏ trống
    if (empty($email) || empty($password)) {
        echo "Bạn không được để trống email hoặc mật khẩu!";
    } else {
        $sql = "SELECT * FROM taikhoan WHERE email = '$email' AND password = '$password'"; // Truy vấn để kiểm tra tài khoản
        $result = mysqli_query($conn, $sql); // Thực hiện truy vấn
        if (mysqli_num_rows($result) > 0) { // Nếu có tài khoản
            $row = mysqli_fetch_assoc($result); // Lấy thông tin tài khoản
            session_start(); // Bắt đầu phiên làm việc
            $_SESSION['username'] = $row['username']; // Lưu tên đăng nhập vào session
            header("Location: ../Home.html"); // Chuyển hướng về trang chủ
            exit();
        } else {
            echo "Tài khoản hoặc mật khẩu không đúng!";
        }
    }
}
?>