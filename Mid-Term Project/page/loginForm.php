<?php
session_start();
$user = $pass = $error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $user = $_POST["user"];
    $pass = $_POST["pass"];
	
	$myFile = "../xml/ClientData.xml";
	$dom = simplexml_load_file($myFile);
	
	foreach($dom->data as $d)
	{
		if($user == $d->userName && $pass == $d->password)
		{
			$_SESSION['activeUser'] = $user;
			
			header('location:../index.php');
			break;
		}
		
	}
	$error = "<span style= ' color: red ' > Please ! Check your UserName and Password . </span>";
}
?>
<html>
	<head>
	
		<title>Login</title>
		
			<!–– This is Bootstrap ––> 
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			<!–– This is Bootstrap ––> 
			
			<!-- This is CSS-->
			<link href = "../css/login.css" type = "text/css" rel="stylesheet">
	</head>

	<body>
		<div class = "container-fluid bg" >
		
				

		
		<h2>Login</h2>
			<div class = "bar">
			| <a href = "../index.php"> Home </a> | <a href = "reg.php"> Register </a> | <a href = "loginForm.php"> Login </a> |
			</div>
			<div class = "row">
			<div class = "col-md-4 col-sm-4 col-xs-12"></div>
				<div class = "col-md-4 col-sm-4 col-xs-12">
			
			 </br></br>
			
				<form class="logTab" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
					  <div class="form-group">
						<label for="exampleInputEmail1">User Name</label>
						<input type="text" class="form-control" placeholder="User Name" name="user">
					  </div>
					  <div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" placeholder="Password" name="pass">
					  </div>
					  
					  <div class="checkbox">
						<label>
						  <input type="checkbox"> "Remember me"
						</label>
					  </div>
					  <button type="submit" class="btn btn-success btn-block">Login</button>
					  
					  <?php echo $error; ?>
					  
				</form>
				
		</div>
			<div class = "col-md-4 col-sm-4 col-xs-12"></div>
			</div>
			</div>
	</body>
</html>