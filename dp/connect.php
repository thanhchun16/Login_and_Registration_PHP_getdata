<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "DB_Login_and_Registration_PHP_getdata";

// Kết nối đến MySQL
$conn = mysqli_connect($host, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// echo "Kết nối thành công với CSDL!";
?>
