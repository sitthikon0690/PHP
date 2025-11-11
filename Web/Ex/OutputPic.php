<?php

$newfile = 'image/'.$_FILES['picfile']['name'];
if(copy($_FILES['picfile']['tmp_name'],$newfile)){
 echo '<img width="120" height="150" src="'.$newfile.'">';
}

?>