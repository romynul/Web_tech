<?php 
    session_start();
    if(empty($_SESSION['user']))
    {
        header("location:regData.php");
    }
	
	echo '<a href="logout.php">Sign Out</a>';
	
?>