<?php
echo "<h1>hàm tính tổng</h1>";
// func tính tổg
function sumArray($numbers)
{
    $sum = 0;

    foreach ($numbers as $num) {
        $sum += $num;
    }

    return $sum;
}

$numbers = [2, 4, 6];
echo sumArray($numbers);
?>

<hr>


<?php
echo "<h1>tính trung bình</h1>";
function averageArray($numbers)
{
    $sum = sumArray($numbers); // dùng lại hàm sumaray trên hàm tổg
    $count = count($numbers);

    return $sum / $count;
}
echo averageArray([2, 4, 6]); // 4

?>

<hr>

<?php
echo "<h1> func tìm max (số lớn nhất)</h1>";
function maxArray($numbers)
{
    $max = $numbers[0];

    foreach ($numbers as $num) {
        if ($num > $max) {
            $max = $num;
        }
    }

    return $max;
}
echo maxArray([3, 7, 2, 9]);
?>

<hr>

<?php
echo "<h1> func tìm min (số nỏ nhất)</h1>";
function minArray($numbers)
{
    $min = $numbers[0];

    foreach ($numbers as $num) {
        if ($num < $min) {
            $min = $num;
        }
    }

    return $min;
}
echo minArray([3, 7, 2, 9]);
?>