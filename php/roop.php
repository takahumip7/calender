<!-- if文をスキップさせる -->
<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i === 3 || $i === 15 || $i === 16 || $i === 55) {
        echo "スキップ<br/>";
        continue;
    }
    echo $i . "<br>";
}
?>
<!-- 1から100までの和 -->
<?php
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum = $sum + $i;
}
echo $sum . "<br>";
?>
<!-- 10でbreak -->
<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i === 11) {
        break;
    }
    echo $i . "<br>";
}
?>
<!-- 偶数だけ表示 -->
<?php
for ($i=1; $i <= 100; $i++) { 
    if ($i%2==1) {
        continue;
    }
    echo $i ."<br>";
}
?>