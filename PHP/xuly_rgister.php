<?php
require '../dp/connect.php'; // Gọi file kết nối CSDL

if (isset($_POST['submit-reg'])) { // Kiểm tra xem form đã được submit chưa
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Kiểm tra xem các trường có bị bỏ trống không
    if (!empty($username) && !empty($password) && !empty($email)) {
        $sql = "INSERT INTO `taikhoan` (`username`, `password`, `email`) VALUES ('$username', '$password', '$email' )"; // Thêm dữ liệu vào bảng taikhoan
        if ($conn->query($sql) === TRUE) {
            echo "<script>
                window.location.href = '../index.html';
            </script>";
            exit();
        } else {
            echo "<script>
                alert('Đã xảy ra lỗi trong quá trình đăng ký. Vui lòng thử lại!');
                window.history.back();
            </script>";
        }
    } else {
        echo "<script>
            alert('Vui lòng nhập đầy đủ thông tin!');
            window.history.back();
        </script>";
    }
}
?>
