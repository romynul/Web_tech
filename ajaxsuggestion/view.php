<?php
include('config.php');

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$pass = $_POST["pw"];


$conn = OpenCon();
	$sql = "insert into user_info (fname,lname,email,phone,pass)values('$fname','$lname','$email','$phone','$pass')";
	$result = $conn->query($sql);
	CloseCon($conn);
?>
<html>

<head>	

<font face = "Consolas">

<style>
table {
    border-collapse: collapse;
}
table, th, td {
    border: 1px solid black;
}
</style>



</head>


<body>
	
	<table>
		<tr>
			<td>Name</td>
			<td><?php echo $_POST["fname"]. $_POST["lname"]; ?></td>			
		</tr>
		

		<tr>
			<td>Phone Number</td>
			<td><?php echo $_POST["phone"]?></td>			
		</tr>
		
		<tr>
			<td>Email</td>
			<td><?php echo $_POST["email"]?></td>			
		</tr>

		<tr>
			<td>Password</td>
			<td><?php echo $_POST["pw"]?></td>			
		</tr>
		
		
	</table>

</body>
</html>