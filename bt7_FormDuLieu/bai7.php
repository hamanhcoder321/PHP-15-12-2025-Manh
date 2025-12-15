<?php
// tạo niến
$name = $email = $password = "";
$nameErr = $emailErr = $passErr = "";
$success = "";

// validate
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Vui lòng nhập tên";
    } else {
        $name = $_POST["name"];
    }

    if (empty($_POST["email"])) {
        $emailErr = "Vui lòng nhập email";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Email không đúng định dạng";
    } else {
        $email = $_POST["email"];
    }

    if (empty($_POST["password"])) {
        $passErr = "Vui lòng nhập mật khẩu";
    } elseif (strlen($_POST["password"]) < 6) {
        $passErr = "Mật khẩu tối thiểu 6 ký tự";
    }

    if ($nameErr == "" && $emailErr == "" && $passErr == "") {
        $success = "Đăng ký thành công!";
    }
}

?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Form đăng ký</title>
    <link rel="stylesheet" href="bai7.css">
</head>

<body>

    <form method="post">
        <h2 class="title">Đăng ký</h2>

        <input type="text" name="name" placeholder="Tên" value="<?php echo $name; ?>">
        <?php if ($nameErr): ?>
            <div class="error"><?php echo $nameErr; ?></div>
        <?php endif; ?>

        <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
        <?php if ($emailErr): ?>
            <div class="error"><?php echo $emailErr; ?></div>
        <?php endif; ?>

        <input type="password" name="password" placeholder="Mật khẩu">
        <?php if ($passErr): ?>
            <div class="error"><?php echo $passErr; ?></div>
        <?php endif; ?>

        <br>
        <button type="submit">Đăng ký</button>

        <?php if ($success): ?>
            <div class="success"><?php echo $success; ?></div>
        <?php endif; ?>
    </form>


</body>

</html>