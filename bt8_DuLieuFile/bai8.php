<?php
$name = "";
$email = "";
$message = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // lấy dữ liệu từ fom
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Kiểm tra rỗng
    if ($name != "" && $email != "" && $message != "") {

        // ghép chuỗi để ghi file
        $data = "Tên: $name | Email: $email | Nội dung: $message\n";

        // ghi vào file
        file_put_contents("data.txt", $data, FILE_APPEND);

        $success = "Lưu dữ liệu thành công!";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Lưu dữ liệu vào file</title>
    <link rel="stylesheet" href="bai8.css">
</head>

<body>

    <form method="post">
        <h3>Nhập thông tin</h3>

        <input type="text" name="name" placeholder="Tên">
        <input type="email" name="email" placeholder="Email">
        <textarea name="message" placeholder="Nội dung"></textarea>

        <button type="submit">Gửi</button>

        <?php if ($success): ?>
            <div class="success"><?php echo $success; ?></div>
        <?php endif; ?>
    </form>

</body>

</html>