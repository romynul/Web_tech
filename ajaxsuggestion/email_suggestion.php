<?php
include('config.php');
$q=$_GET["q"];

$conn = OpenCon();
	$sql = "SELECT * FROM user_info where email= '$q'";
	$result = $conn->query($sql);
	$rows=mysqli_num_rows($result);
	
	$che;
if ($rows> 0)
{
    echo "Email Already Exist";
}
else
{
    echo "Right Email";

}
CloseCon($conn);