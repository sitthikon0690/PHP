<?php
$Code=array("00","33","66","99","CC","FF");
$count = count($Code);

for($i = 0; $i <= $count-1; $i++){
    for($j = 0; $j <= $count-1; $j++){
        for($k = 0; $k <= $count-1; $k++){
            $color = $Code[$i] + $Code[$j];
        }
    }
    }
    echo $color;
?>