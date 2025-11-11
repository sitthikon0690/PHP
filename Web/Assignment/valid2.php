<?php
$name = $email = $gender = $comment = $website = "";
//----------------name-----------------------
$name = test_input($_POST["name"]);
if (!preg_match("/^[A-Za-z]+(\s[A-Za-z]+)*$/",$name)) {
  $nameErr = "Only letters allowed"; 
  echo $nameErr;
  echo "<br>";
}
//----------------email-----------------------
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
  echo $emailErr;
  echo "<br>";
}
//----------------website-----------------------
$website = test_input($_POST["website"]);
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
  $websiteErr = "Invalid URL"; 
  echo $websiteErr ;
  echo "<br>";
}
//----------------comment-----------------------
if (empty($_POST["comment"])) {
    $comment = "comment is required";
	echo  $comment;
	echo "<br>";
  } 
//----------------gender-----------------------
  if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
	echo $genderErr;
	echo "<br>";
  } 
//----------------function for checking-----------------------
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data; } ?>
