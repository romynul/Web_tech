<?php
/**
 * Created by PhpStorm.
 * User: Saef
 * Date: 08-Mar-16
 * Time: 10:31 AM
 */
session_start();
ob_start();

if (!(isset($_SESSION['admin']))){
    header("location:index.php");
}
else {
    require_once("config.php");
    //connect to db here
//fetching data in descending order (lastest entry first)
    $user=$_SESSION['aiubid'];
	$limit = 25;
	if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
	$start_from = ($page-1) * $limit;
  	$sql = "SELECT * FROM info where deleted_at is NULL order by id DESC LIMIT $start_from, $limit";
	$rs_result = mysqli_query ($conn,$sql);
}
?>

<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="css/switch.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
<style>
body {
   background-image: url("css/bg.jpg");
   background-color: #cccccc;
   background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover; /
}
</style>

</head>

<body class="container-fluid">
<br>
<a href="add.php"> <span class="btn btn-success">Add New Data</span></a>
<a href="logout.php"><span class="btn btn-warning">Logout</span></a>
<a href="adm-view/mkdir.php"><span class="btn btn-warning">Create Dir</span></a>

<form method="post" action="adm-action/onoff.php">
  File Submission on:
  <input type="checkbox" name="onoff">
  <input type="submit" value="change status">
</form>
<center><h1>Assignment Tracking System</h1></center><hr>
<table class="table table-striped table-bordered table-condensed">
<tr>
<td colspan="8">
<form method="get" action="search.php" style="float:right">
<input type="text" name="search" placeholder="Booking Number or Tour Details or Operator Name" class="input-sm"/>
<input type="submit" value="Search" class="btn btn-success"/>
</form>
</td>
</tr>
    <tr>
        <th>Course Name</th>
        <th>Assignment Name</th>
        <th>Uploaded By</th>
        <th>Upload Time</th>
        <th>Remarks</th>
        <th>Action</th>
    </tr>
    <?php
    while($res=mysqli_fetch_array($rs_result)) {
        echo "<tr>";
        echo "<td>".$res['coursename']."</td>";
		echo "<td>".$res['assignmentname']."</td>";
		echo "<td>".$res['uploaded_by']."</td>";
		echo "<td>".$res['uploaded_at']."</td>";
		echo "<td>".$res['remarks']."</td>";
		echo "<td><a href=./".$res['file_link']." target='_blank'><span class='glyphicon glyphicon-paperclip'></span></a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\"><span class='glyphicon glyphicon-remove-circle'></span></a></td>";
    }

    ?>

</table>
<?php
	$sql = "SELECT COUNT(id) FROM info";
	$rs_result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_row($rs_result);
	$total_records = $row[0];
	$total_pages = ceil($total_records / $limit);
	$pagLink = "<ul class='pagination pagination-lg'>";
	for ($i=1; $i<=$total_pages; $i++) {
             $pagLink .= "<li class='page-item'><a href='admin.php?page=".$i."'>".$i."</a></li>";
		};
	echo $pagLink . "</ul>";
    //close db connection here
?>
</body>
</html>
