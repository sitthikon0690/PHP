<?php
$countries=array(
    "th"=> 'Thailand',
    "ca"=> 'Canada',
    "uk"=> 'United Kingdom',
    "usa"=> 'United State of America',
);
$key = key($countries);
$value = current($countries);

echo '<table border = 1
bgcolor="FFFFFF">';
echo '<tr>'; 
foreach($countries as $key=> $value){
    echo '<td>';
    echo $key;
    echo '</td>';

    echo '<td>';
    echo $value;
    echo '</td>';

    echo '</tr>';
    }
    echo '</table>';
?>


<?php echo "<br>" ?>


<?php
$Alphabet=array("A","B","C");
$count = count($Alphabet);

echo '<table border = 1
bgcolor="FFFFFF">';
echo '<tr>';
for($i = 0; $i <= $count-1; $i++){
    for($j = 0; $j <= $count-1; $j++){
        echo '<td>';
        echo $Alphabet[$i];
        echo $Alphabet[$j];
        echo '</td>';
    }
    echo '</tr>';
    }
    echo '</table>';
?>


<?php echo "<br>" ?>


<?php
$Alphabet=array("A","B","C");
$count = count($Alphabet);

echo '<table border = 1
bgcolor="FFFFFF">';
echo '<tr>';
for($i = 0; $i <= $count-1; $i++){
    for($j = 0; $j <= $count-1; $j++){
        for($k = 0; $k <= $count-1; $k++){
            echo '<td>';
            echo $Alphabet[$i];
            echo $Alphabet[$j];
            echo $Alphabet[$k];
            echo '</td>';
        }
        echo '</tr>';
    }
    }
    echo '</table>';
?>


<?php echo "<br>" ?>


<?php
$Code=array("00","33","66","99","CC","FF");
$count = count($Code);

echo '<table border = 1
bgcolor="FFFFFF">';
echo '<tr>';
for($i = 0; $i <= $count-1; $i++){
    for($j = 0; $j <= $count-1; $j++){
        echo '<td>';
        echo $Code[$i];
        echo $Code[$j];
        echo '</td>';
        
    }
    echo '</tr>';
    }
    echo '</table>';
?>