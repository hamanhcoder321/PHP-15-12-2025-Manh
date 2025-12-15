<?php
// tạo bién
$name = "";
$email = "";
$phone = "";
$success = "";

// khi submit form
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Kiểm tra
    if ($name != "" && $email != "" && $phone != "") {

        // ghi dliệu vào file
        $data = "$name | $email | $phone\n";
        file_put_contents("hihi.txt", $data, FILE_APPEND);

        $success = "Lưu liên hệ thành công!";
    }
}

// Đọc dsách lhệ
$hihi = [];
if (file_exists("hihi.txt")) {
    $contacts = file("hihi.txt", FILE_IGNORE_NEW_LINES);
    // thằng FILE_IGNORE_NEW_LINES này nó đọc dữ liệu từ tiệp tin người dùng chuyền vào
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Sổ liên lạc</title>
    <link rel="stylesheet" href="bai9.css">
</head>

<body>

    <div class="container">
        <h2>Sổ liên lạc</h2>

        <!-- form -->
        <form method="post">
            <input type="text" name="name" placeholder="Tên">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="phone" placeholder="Số điện thoại">

            <button type="submit">Lưu</button>
        </form>

        <?php if ($success): ?>
            <div class="success"><?php echo $success; ?></div>
        <?php endif; ?>

        <!-- Ddách -->
        <table>
            <tr>
                <th>Tên</th>
                <th>Email</th>
                <th>SĐT</th>
            </tr>

            <?php foreach ($contacts as $contact): ?>
                <?php
                $info = explode(" | ", $contact);
                ?>
                <tr>
                    <td><?php echo $info[0]; ?></td>
                    <td><?php echo $info[1]; ?></td>
                    <td><?php echo $info[2]; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>

</body>

</html>