<?php
session_start();

if(!isset($_SESSION['name'])){
header("location:home.php")};

else{
	echo "Hello ".$_SESSION;
	echo"<a href='login.php'> Go Back</a>";
	}


?>