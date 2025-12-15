<?php
$students = [
    ["name" => "An", "score" => 9.2],
    ["name" => "Bình", "score" => 7.8],
    ["name" => "Chi", "score" => 6.4],
    ["name" => "Dũng", "score" => 4.5]
];

function level($score) {
    if ($score >= 9) {
        return "Xuất sắc";
    } elseif ($score >= 8) {
        return "Giỏi";
    } elseif ($score >= 6.5) {
        return "Khá";
    } elseif ($score >= 5) {
        return "Trung bình";
    } else {
        return "Yếu";
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
    <link rel="stylesheet" href="bai5.css">
</head>

<body>

<table>
    <tr>
        <th>Tên</th>
        <th>Điểm</th>
        <th>Xếp loại</th>
    </tr>

    <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student["name"]; ?></td>
            <td><?php echo $student["score"]; ?></td>
            <td><?php echo level($student["score"]); ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
