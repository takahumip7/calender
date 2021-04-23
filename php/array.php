<!-- 配列for文で出力 -->
<?php
$fruits = array("Orange", "Apple", "Berry");
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i];
    echo '<br>';
}
?>
<!-- 連想配列 -->
<?php
$foods = array(
    "野菜" => "キャベツ",
    "果物" => "イチゴ",
    "肉" => "鴨",
    "魚" => "アジ"
);

foreach ($foods as $key => $value) {
    echo $key . ':';
    echo $value . '<br>';
}
?>
<!-- 二次元配列 -->
<?php
$array = array(
    array("名前" => "狩山", "住所" => "愛媛", "年齢" => "20才"),
    array("名前" => "山元", "住所" => "東京", "年齢" => "39才"),
    array("名前" => "元山", "住所" => "青森", "年齢" => "31才"),
);
echo $array[0]["住所"] . "<br>";
?>

<!-- 消費税関数 -->
<?php
function Tax()
{
    $result = 1.1;
    return $result;
}
$a = 1280;
echo $a * Tax();
?>