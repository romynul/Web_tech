<?php

	session_start();
	$error = "";
	$isDone =0;
	$done = "";
	$nameErr=$mailErr="";
	$con= 0;
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		
		$fn = $_POST["Cname"];
		if (!preg_match("/^[a-zA-Z ]*$/",$fn)) {
				$nameErr = "Only letters and white space allowed";
				$con= 1;
		}
		
		$user = $_POST["User"];
		$cn = $_POST["Cnum"];
		$acn = $_POST["ACnum"];
		$pass = $_POST["pw"];
		$reps = $_POST["REpw"];
		if (!filter_var($reps, FILTER_VALIDATE_EMAIL)) {
				$mailErr = "Invalid email";
				$con= 1;
		}
		
		
		if (isset($_POST['gender'])) 
		{
			$sex = $_POST['gender'];	
		}
		
		if (isset($_POST['tick'])) 
		{
			$rule = $_POST['tick'];
		}
		
		if (isset($_POST['type'])) 
		{
			$type = $_POST['type'];
		}
		
		
		
		
		if($fn == "" || $user == "" || $cn == "" || $acn == "" || $pass == "" || $reps == "" || $sex == "" || $rule == "" || $con== 1 || $type == "" )
		{
			$error = '<span style="color:red;font-size: 1.3em;font-weight: bold;border: 1px solid black;padding: 2px 2px;background-color: #FF69B4;"> Please ! Fill your form properly </span>';
			
		}
		else
		{
			$my_file = '../xml/ClientData.xml';
			$xml = simplexml_load_file($my_file);
			
			$data = $xml->addChild('data');
			$data->addChild('fullName', $fn);
			$data->addChild('userName', $user);
			$data->addChild('contactName', $cn);
			$data->addChild('alternativeContactNumber', $acn);
			$data->addChild('mail', $reps);
			$data->addChild('password', $pass);
			$data->addChild('type', $type);
			$data->addChild('gender', $sex);
			
			$dom = new DOMDocument('1.0');
			$dom->preserveWhiteSpace = false;
			$dom->formatOutput = true;
			$dom->loadXML($xml->asXML());
			$dom->save($my_file);
			
			$done = '<span style="color:green;font-size: 1.3em;font-weight: bold;border: 1px solid black;padding: 2px 2px;background-color: lightblue;"> Done! </span>' ;
			$isDone = 1;
			$con= 0;
			
			
			
			
		}
	}
	
	
	
?>
<!DOCTYPE html>
<html>

	<head>
	
		<title>Registration</title>
	
			<!---This is Bootstrap -->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			<!---This is Bootstrap -->
			
			<!-- This is CSS-->
			<link href = "../css/reg.css" type = "text/css" rel="stylesheet">
	
			<style>
	
						.popup 	{
						position: relative;
						display: inline-block;
						cursor: pointer;
						-webkit-user-select: none;
						-moz-user-select: none;
						-ms-user-select: none;
						user-select: none;
								}
								
								
						
								

						/* The actual popup */
						.popup .popuptext {
							visibility: hidden;
							width: 160px;
							background-color: #555;
							color: #fff;
							text-align: center;
							border-radius: 6px;
							padding: 8px 0;
							position: absolute;
							z-index: 1;
							bottom: 125%;
							left: 50%;
							margin-left: -80px;
											}

	
	
	
						.popup .show {
						visibility: visible;
						-webkit-animation: fadeIn 1s;
						animation: fadeIn 1s;
							}
							
							
							input[type=text], input[type=password]{ color: black; }
							
							
			
						
							
								
									
							
							
			</style>
	
	</head>


	<body>
	
		<div class = "container-fluid bg">
	
		<h2>Registration</h2>
		
			<div class = "bar">
			| <a href = "../index.php"> Home </a> | <a href = "reg.php"> Register </a> | <a href = "loginForm.php"> Login </a> |
			</div>
		
			
			<form class="regTab"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" >
			
				<div class="row">
						<div class="col-md-1"></div>
			
				<table>
					<tr>
						<td> Full Name </td>
						<td> <input type="text" name="Cname"> </td>
						<td> <?php echo $nameErr; ?> </td>
					</tr>
					
					<tr>
						<td> User Name </td>
						<td> <input type ="text" name="User">  </td>
					</tr>
					
					<tr>
						<td> Contact Number </td>
						<td> <input type ="text" name="Cnum"> </td>
					</tr>
					
					<tr>
						<td> Alternative Mobile Number </td>
						<td> <input type ="text" name="ACnum"> </td>
					</tr>
					
					<tr>
						<td> E-mail </td>
						<td> <input type ="text" name="REpw"> </td>
						<td> <?php echo $mailErr; ?> </td>
					</tr>
					
					<tr>
						<td> Password </td>
						<td> <input type ="password" name="pw"> </td>
					</tr>
					
					

				</table>
				
							
							<div class="col-md-1"></div>
							
							
					<table>
						<tr>
							<td>Male</td>
							<td><input type="radio" name="gender" value="male" > </td>
						</tr>	
							
						<tr>
							<td></td>
						</tr>	
							
						<tr>	
							<td>Female</td>
							<td><input type="radio" name="gender" value="female"></td>
						</tr>
						<br>
						<tr>
							<td>User Role</td><br>
						</tr>
						
						<tr>
					
							<td><input type="radio" name="type" value="Seller" > Seller</td>
							
						</tr>
						
						<tr>
				
							<td><input type="radio" name="type" value="Buyer" > Buyer</td>
						</tr>

					</table>
					
					
					<div class="col-md-2"></div>
					<table>
					
					<tr><td>
					<label>
						  <input type="checkbox" name="tick"> "Agree with terms & condition"
					</label>
					</td></tr>
					
					<tr><td>
					<!---This is a Popup Window-->
				
				
							<div class="popup" onclick="myFunction()">"Terms & Condition"
							<span class="popuptext" id="myPopup">Sold products are not returnable</span>
							</div>

							<script>
							// When the user clicks on div, open the popup
							function myFunction() {
								var popup = document.getElementById("myPopup");
								popup.classList.toggle("show");
							}
							</script>

							
					<!---This is a Popup Window-->
					</tr></td>
					</table>
					</div>
					
			
					
							</br></br>
					
					<div class="row">
						<div class="col-md-3"></div>
					
					<button type="submit" class="btn btn-success" name="ok"> Confirm </button>
					
					<?php echo $error; ?>
					<?php echo $done; if($isDone || $con= 0)echo "<a href='loginForm.php'>Click here to Login</a>";?>
					
							

					
					</div>
			</form>
			
			
			
		
	</body>
</html>