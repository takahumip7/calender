<?php
$music = "jazz";
$array = [
    0 => "言葉",
    1 => "人間",
    2 => $music,
];

foreach ($array as $key => $value) {
    echo $key . "の数は" . $value . "<br>";
}


$vegetabels_color = [
    "tomato" => "red",
    "lettuce" => "green",
    "potato" => "brown",
];
foreach ($vegetabels_color as $name => $color) {
    echo $name . "の色は" . $color . "です。" .  "<br>";
}
