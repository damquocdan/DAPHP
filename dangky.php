<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký và đăng nhập</title>
    <link rel="stylesheet" href="stylerl.css">
</head>

<body>
    <h1>Trang đăng ký thành viên</h1>
    <form action="ketnoi.php" method="POST">
        <label for="username">Tên người dùng:</label>
        <input type="text" name="username" required>
        <br>
        <label for="password">Mật khẩu:</label>
        <input type="password" name="password" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <label for="birthday">Ngày sinh:</label>
        <input type="date" name="birthday" required>
        <br>
        <label>Giới tính:</label>
        <input type="radio" name="sex" value="Nam" required> Nam
        <input type="radio" name="sex" value="Nữ" required> Nữ
        <br>
        <label for="fullname">Tên đầy đủ:</label>
        <input type="text" name="fullname" required>
        <br>
        <input type="submit" value="Đăng Ký">

        <input type="reset" value="Nhập lại" />
    </form>
</body>

</html>