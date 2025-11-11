<?php
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gender = $_POST['gender'];
$date = $_POST['selectdate'];
$month = $_POST['selectmonth'];
$year = $_POST['year'];
$address = $_POST['address'];
$tele = $_POST['tele'];
$email = $_POST['email'];
$home = $_POST['home'];
$edu = $_POST['Education'];
$pos = $_POST['position1'];

if($_POST['firstname']==''||$_POST['lastname']==''||$_POST['gender']==''||$_POST['selectdate']==''||$_POST['selectmonth']==''||$_POST['year']==''){
    include("job.php");
}else{
    echo $fname;
    echo $lname;
    echo $gender;
    echo $date;
    echo $month;
    echo $year;
}

?>
