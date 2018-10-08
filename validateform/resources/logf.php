<?php
session_start();
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$name = $_POST['name'];
			$pass = $_POST['pass'];
		}  
if(isset($_COOKIE[$name])) {
   if($_COOKIE[$name]== $pass){
	$SESSION['name']= $name;
	header("location:home.php");
	}

	else{
		echo "<h1>Wrong Username and Password</h1>";
		echo"<a href='login.php'> Go Back</a>";
		}
} else {
	
	echo " no SUch User";
    
}

?>