<?php
// Kết nối đến cơ sở dữ liệu MySQL
$host = "localhost"; // Tên máy chủ cơ sở dữ liệu
$username = "root"; // Tên người dùng cơ sở dữ liệu
$password = ""; // Mật khẩu cơ sở dữ liệu
$database = "damquocdan"; // Tên cơ sở dữ liệu

$connection = mysqli_connect($host, $username, $password, $database);

// Kiểm tra kết nối
if (!$connection) {
    die("Lỗi kết nối cơ sở dữ liệu: " . mysqli_connect_error());
}

if (!$connection) {
    die("Lỗi kết nối cơ sở dữ liệu: " . mysqli_connect_error());
}

// Xử lý dữ liệu biểu mẫu
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $birthday = $_POST["birthday"];
    $sex = $_POST["sex"];
    $fullname = $_POST["fullname"];

    // Mã hóa mật khẩu (thường sử dụng bcrypt)
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Thực hiện truy vấn SQL để thêm tài khoản vào cơ sở dữ liệu
    $query = "INSERT INTO member (username, password, email, birthday, sex, fullname) VALUES ('$username', '$hashedPassword', '$email', '$birthday', '$sex', '$fullname')";

    if (mysqli_query($connection, $query)) {
        header("Location: trangchu.php"); // Thay thế "login.php" bằng URL của trang đăng nhập của bạn
        exit;
    } else {
        echo "Lỗi: " . mysqli_error($connection);
    }

    // Đóng kết nối cơ sở dữ liệu
    mysqli_close($connection);
}
?>