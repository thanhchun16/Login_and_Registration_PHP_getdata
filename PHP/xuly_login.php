<?php
require '../dp/connect.php';

if (isset($_POST['submit-log'])) { // Kiểm tra xem form đã được submit chưa
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Kiểm tra nếu các trường bị bỏ trống
    if (empty($email) || empty($password)) {
        echo "<script>alert('Bạn không được để trống email hoặc mật khẩu!'); window.history.back();</script>";
    } else {
        $sql = "SELECT * FROM taikhoan WHERE email = '$email' AND password = '$password'"; // Truy vấn để kiểm tra tài khoản
        $result = mysqli_query($conn, $sql); // Thực hiện truy vấn
        if (mysqli_num_rows($result) > 0) { // Nếu có tài khoản
            $row = mysqli_fetch_assoc($result); // Lấy thông tin tài khoản
            session_start(); // Bắt đầu phiên làm việc
            $_SESSION['username'] = $row['username']; // Lưu tên đăng nhập vào session
            echo "<script> window.location.href = '../Home.html';</script>";
        } else {
            echo "<script>alert('Tài khoản hoặc mật khẩu không đúng!'); window.history.back();</script>";
        }
    }
}
?>