<?php
$Code=array("00","33","66","99","CC","FF");
$count = count($Code);

echo '<table border = 1
bgcolor="FFFFFF">';
echo '<tr>';
for($i = 0; $i <= $count-1; $i++){
    for($j = 0; $j <= $count-1; $j++){
        for($k = 0; $k <= $count-1; $k++){
            $color = "#" . $Code[$i] . $Code[$j] . $Code[$k];
            echo "<td 
            style = 'color: ". $color ."'>
            $color
            </td>";
        }
        echo '</tr>';
    }
    }
    echo '</table>';
?>


<?php echo "<br>" ?>


<?php
$Code=array("00","33","66","99","CC","FF");
$CodeC=array("FF","CC","99","66","33","00");
$count = count($Code);

echo '<table border = 1
bgcolor="">';
echo '<tr>';
for($i = 0; $i <= $count-1; $i++){
    for($j = 0; $j <= $count-1; $j++){
        for($k = 0; $k <= $count-1; $k++){
            $colorC = "#" . $CodeC[$i] . $CodeC[$j] . $CodeC[$k];
            $color = "#" . $Code[$i] . $Code[$j] . $Code[$k];
            echo "<td bgcolor = $color style = 'color: $colorC'>";
            echo $color;
            echo "</td>";
        }
        echo '</tr>';
        }
        
    }
echo '</table>';
?>