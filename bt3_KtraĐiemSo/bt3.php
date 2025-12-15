<?php
$score = 3.5;
$level = "";

if ($score >= 10) {
    $level = "Xuất sắc";
} elseif ($score >= 9) {
    $level = "Giỏi";
} elseif ($score >= 7) {
    $level = "Khá";
} elseif ($score >= 5) {
    $level = "Trung bình";
}else {
    $level = "yếu";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thông tin điểm</title>
    <link rel="stylesheet" href="bai3.css">
</head>

<body>
    <div class="score">
        
        <h2>Điểm</h2>

        <div class="success">
            <span>Điểm:</span> <?php echo $score; ?>
        </div>

        <div class="success">
            <span>xếp loại:</span> <?php echo $level; ?>
        </div>

    </div>
</body>

</html>