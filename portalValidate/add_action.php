<?php
session_start();
ob_start();

if (!(isset($_SESSION['aiubid']))){
header("location:index.php");
}
else {
//including the database connection file
	require_once("config.php");
	//connect to db
	if (isset($_POST['Submit'])) {

		$aiubid= $_SESSION['aiubid'];
		$coursename=$_POST['coursename'];
		$assignmentname = $_POST['assignmentname'];
		$remarks = $_POST['remarks'];
		$flag=0;

		$filename=ucwords($coursename).ucwords($assignmentname);
		$filename=$aiubid.preg_replace('/\s+/', '', $filename);



			if(!$_FILES['file_link']['name']){
				echo "<br/>Please upload a document";
				echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

				}

			else{
			$info = pathinfo($_FILES['file_link']['name']);
			$ext = $info['extension']; // get the extension of the file
			//$newname = $aiubid.".".$ext;
			$newname = $filename.".".$ext;

			$target = 'docs/'.$newname;
			move_uploaded_file( $_FILES['file_link']['tmp_name'], $target);
			//insert data to database

			$result = mysqli_query($conn,"INSERT INTO info (coursename,assignmentname,file_link,remarks,uploaded_by) VALUES ('$coursename','$assignmentname','$target','$remarks','$aiubid')");

			//display success message
			//echo "<font color='green'>Data added successfully.";
			//echo "<br/><a href='admin.php'>View Result</a>||<a href='add.php'>Add New Data</a>||<a href='borrow.php'>View Current Borrow List</a>||<a href='borrowhistory.php'>View Borrow History</a>||<a href='logout.php'>Logout</a>";
			//$flag=1;
			//$_REQUEST[$flag];

			//echo $booking_id.$tour_detail.$money_in.$remarks;

			header("location:user.php");
			}


	}

	//close db connection
}

?>
