<?php

$uname= $_POST['uname'];
$fname=$_POST['fname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$pass=$_POST['pass'];
$gender=$_POST['gender'];


echo "Registration Successfull";
echo "<br>User Name : ".$uname;
echo "<br>Full Name : ".$fname;
echo "<br>Email: ".$email;
echo "<br>Phone : ".$phone;
echo "<br>Password : ".$pass;
echo "<br>Gender :".$gender;
echo "<p>Education :</p>";
foreach($_POST['edu'] as $edu) {
echo "<p>".$edu."</p>";
}
?>