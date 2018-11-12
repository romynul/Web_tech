<?php
session_start();
ob_start();
if (!(isset($_SESSION['aiubid']))){
    header("location:index.php");
}
else {
//including the database connection file
    include("config.php");
    //connect_db();
//getting id of the data from url
    $id = $_GET['id'];

//deleting the row from table // actually not deleting it just unlinking from the result
    $result = mysqli_query($conn,"update info set deleted_at=now() WHERE id='$id'");
	//close_db();
//redirecting to the display page (admin.php in our case)
    header("Location:admin.php");
}
?>

