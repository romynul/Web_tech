<?php
session_start();
ob_start();

if (!(isset($_SESSION['aiubid']))){
header("location:index.php");
}
else {
?>
<html>
<head>
	<title>Add Assignment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">

  	<script src="js/bootstrap.min.js"></script>
</head>

<body class="container">
<br>
	<a href="user.php"><span class="btn btn-primary">Dashboard</span></a>
	<!--<a href="search.php?search="><span class="btn btn-success">Search</span></a>-->
	<a href="logout.php"><span class="btn btn-warning">Logout</span></a>
	<br/><br/>
    <center><h1>Upload Assignment Information</h1></center><hr>

	<form action="add_action.php" method="post" name="form1" enctype="multipart/form-data">

        <div class="input-group">
            <span class="input-group-addon">Course Name</span>
            <input id="coursename" type="text" class="form-control" name="coursename" placeholder="Write the name of the Course">
        </div>
        <div class="input-group">
      		<span class="input-group-addon">Assignment Name</span>
      		<input id="assignmentname" type="text" class="form-control" name="assignmentname" placeholder="Write the name of the assignment">
    	</div>
        <div class="input-group">
      		<span class="input-group-addon">Upload File</span>
      		<input id="file_link" type="file" class="form-control" name="file_link" placeholder="Click Here to upload the pdf/png/jpeg/jpg/doc/docx file">
    	</div>
         <div class="input-group">
      		<span class="input-group-addon">Remarks</span>
      		<input id="remarks" type="text" class="form-control" name="remarks" placeholder="Remarks">
    	</div>
        
        <input type="submit" name="Submit" value="Save Information" class="btn btn-success btn-block btn-lg">
        
        <input type="reset" name="reset" value="Clear Information" class="btn btn-danger  btn-block btn-lg">
        
        
        
        
      
	</form>
    <?php
    }
    ?>
</body>
</html>

