<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sổ liên lạc</title>
    <link rel="stylesheet" href="/15-12-2025/contact-mvc/public/css/main.css">
</head>

<body>

    <div class="container">

        <h2>Thêm liên lạc</h2>

        <form method="POST">
            <input type="text" name="name" placeholder="Tên" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="phone" placeholder="Số điện thoại" required>
            <button type="submit">Lưu</button>
        </form>

        <hr>

        <h2>Danh sách liên lạc</h2>

        <table>
            <tr>
                <th>Tên</th>
                <th>Email</th>
                <th>SĐT</th>
            </tr>

            <?php foreach ($contacts as $contact): ?>
                <tr>
                    <td><?php echo $contact['name']; ?></td>
                    <td><?php echo $contact['email']; ?></td>
                    <td><?php echo $contact['phone']; ?></td>
                </tr>
            <?php endforeach; ?>

        </table>

    </div>

</body>

</html>