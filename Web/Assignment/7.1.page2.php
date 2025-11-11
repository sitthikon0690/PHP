<?php
$Fnum = $_POST['Fnum'];
$Lnum = $_POST['Lnum'];
$Cal = $_POST['Cal'];

function Calculate($n1, $n2, $cal2){
    switch ($cal2) {
        case 0:
            $AN = $n1 + $n2;
            return "result = $AN";
        case 1:
            $AN = $n1 - $n2;
            return "result = $AN";
        case 2:
            $AN = $n1 * $n2;
            return "result = $AN";
        case 3:
            $AN = $n1 / $n2;
            return "result = $AN";
        default:
            break;
        }
}

echo Calculate($Fnum,$Lnum,$Cal);

?>