<?php
    // Khai báo thông tin cá nhân
    $name = "Mạnh";
    $age = 22;
    $job = "Lập trình viên Web";
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông tin cá nhân</title>
     <link rel="stylesheet" href="bai2.css">
</head>
<body>

    <div class="profile-card">
        <h2>Thông tin cá nhân</h2>

        <div class="info">
            <span>Tên:</span> <?php echo $name; ?>
        </div>

        <div class="info">
            <span>Tuổi:</span> <?php echo $age; ?>
        </div>

        <div class="info">
            <span>Nghề nghiệp:</span> <?php echo $job; ?>
        </div>
    </div>

</body>
</html>
