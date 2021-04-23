<?php
$array = array(
    ['上杉', '愛媛県', '089-123-2485', 'ボードゲーム'],
    ['佐藤', '香川県', '089-929-9889', '釣り'],
    ['山下', '徳島県', '089-123-2485', '釣り'],
    ['井上', '高知県', '089-123-2485', 'お酒']
);

echo '<table border = "1">';
echo '<tr><th>名前</th><th>住所</th><th>電話</th><th>趣味</th></tr>';

foreach ($array as $key) {
    echo '<tr>';
    echo '<td>' . $key[0] . '</td>';
    echo '<td>' . $key[1] . '</td>';
    echo '<td>' . $key[2] . '</td>';
    echo '<td>' . $key[3] . '</td>';
    echo '</tr>';
}
echo '</table>';
