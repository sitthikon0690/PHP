<?php
$a=1;
echo "\$a=$a <BR>";
$test = "test";
echo "--------<BR>";
echo "$test$test$test<BR>";
echo "--------<BR>";
echo $test,$test,$test,"<BR>";
$a = 1;
$b = 2;
echo "--------<BR>";
echo $a,"+",$b,"=","$a+$b","<BR>";
echo "--------<BR>";
echo $a,"+",$b,"=",'$a+$b',"<BR>";
echo "--------<BR>";
echo $a,"+",$b,"=",$a+$b,"<BR>";
?>

<!-- 	OUTPUT

$a=1
--------
testtesttest
--------
testtesttest
--------
1+2=1+2
--------
1+2=$a+$b
--------
1+2=3