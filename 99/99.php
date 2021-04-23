<?php
    echo'<pre>';
for($i=1; $i<10; $i++){
    for($j=1; $j<10; $j++){
        echo getPaddedStr($i * $j);
        if($j < 9){
            echo " ";
        }
    }
    echo PHP_EOL;
}
function getPaddedStr($n){
    if($n<0){
        return "" . $n;
    }
    if($n<10){
        return "0" . $n;
    }
    return "" . $n;
}
echo'</pre>';
?>