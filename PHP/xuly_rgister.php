<?php
require '../dp/connect.php'; // Gọi file kết nối CSDL

if (isset($_POST['submit-reg'])) { // Kiểm tra xem form đã được submit chưa
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Kiểm tra xem các trường có bị bỏ trống không
    if (!empty($username) && !empty($password) && !empty($email)) {
        $sql = "INSERT INTO `taikhoan` (`username`, `password`, `email`) VALUES ('$username', '$password', '$email' )"; // Thêm dữ liệu vào bảng taikhoan
        if($conn->query($sql) === TRUE) {
            echo "<script>
        localStorage.setItem('showLogin', 'true');
        window.location.href = '../index.html';
    </script>";
            exit();
        } else {
            echo "Lỗi: {$sql}" . $sql . "<br>" . $conn->error;
        }
        // Thực hiện truy vấn
    } else {
        echo "Vui lòng nhập đầy đủ thông tin!";
    }
}
?>
