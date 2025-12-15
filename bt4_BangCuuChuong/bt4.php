<?php
echo "<h1> vòng lặp for </h1>";
for ($i = 1; $i <= 2; $i++) { // $i → bảng 1 → 2

    echo "<h3>Bảng cửu chương $i</h3>";

    for ($j = 1; $j <= 10; $j++) { //$j → nhân từ 1 → 10
        echo "$i x $j = " . ($i * $j) . "<br>";
    }

} 
?>

<?php
echo "<h1> vòng lặp while </h1>";
$i = 1;

while ($i <= 2) {
    
    echo "<h3>Bảng cửu chương $i</h3>";

    $j = 1;
    while ($j <= 10) {
        echo "$i x $j = " . ($i * $j) . "<br>";
        $j++;
    }

    $i++;
    // Quên $i++ hoặc $j++ vòng lặp vô hạn
    
}
?>

<hr>

<?php
// tạo mảg
$tables = range(1, 2);
$numbers = range(1, 10);
?>

<?php
echo "<h1> vòng lặp foreach</h1>";
foreach ($tables as $i) {
    echo "<h3>Bảng cửu chương $i</h3>";

    foreach ($numbers as $j) {
        echo "$i x $j = " . ($i * $j) . "<br>";
    }

}
?>

