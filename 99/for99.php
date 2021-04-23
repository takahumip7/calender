<?php
for ($a = 1; $a <= 9; $a++) {
    for ($i = 1; $i <= 9; $i++) {
        $s = $a * $i;
        echo $a . '×' . $i . '=' . $s . '/';
    }
    echo '<br>';
}
