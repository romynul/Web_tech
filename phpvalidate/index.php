<!DOCTYPE HTML>  
<html>
<head>
<style>
	.error {color: #FF0000;}
</style>
</head>
<body>
<?php
	$fnameErr = $emailErr = $genderErr = "";
	$fname = $email = $gender = $uname = $phone =$pass = "";
	
	if($_SERVER["REQUEST_METHOD"]== "POST"){
		if(empty($_POST["fname"])){
		$fnameErr="Name is Required";
		}
		else{
			$fname = test_input($_POST["fname"]);
			
			if(!preg_match("/^[a-zA-Z]*$/",$fname)){
				$fnameErr = "only Letters and white space";
			}
		}
		
		if(empty($_POST["email"])){
		$emailErr="Email is Required";}
		else{
			$email = test_input($_POST["email"]);
			
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$emailErr = "Invalid Email";
			}
		}
		
		if (empty($_POST["gender"])) {
		$genderErr = "Gender is required";
		} else {
		$gender = test_input($_POST["gender"]);
			}
  
		}
	
	
	function test_input($data){
		$data= trim($data);
		$data= stripcslashes($data);
		$data= htmlspecialchars($data);
		return $data;
	}
	?>
	
	
<form name="" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table>
	<tr>
	<td>User Name:</td>
	<td><input type="text" id="name" name="uname" placeholder="User Name.."></td>
	</tr>
	<tr>
	<td>Full Name:</td>
	<td><input type="text" name="fname" value="<?php echo $fname;?>">
  <span class="error">* <?php echo $fnameErr;?></span></td>
	</tr>
	
	<tr>
	<td>Email: </td>
	<td> <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span></td>
	</tr>
	
	<tr>
	<td>Phone:</td>
	<td><input type="text" id="phone" name="phone" placeholder="Your Phone.."></td>
	</tr>
	<tr>
	<td>Password:</td>
	<td> <input type="password" id="pass" name="pass" placeholder="Your Password.." ></td>
	</tr>
	<tr>
	<td>Confirm Pass:</td>
	<td><input type="password" id="pass" name="cpass" placeholder="Confirm Password.." ></td>
	</tr>
     
	</table>
	Gender:
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
	<span class="error">* <?php echo $genderErr;?></span>
	
    <input type="submit" value="Submit">

</form>

<?php
echo "Registration Successfull";
echo "<br>User Name : ".$uname;
echo "<br>Full Name : ".$fname;
echo "<br>Email: ".$email;
echo "<br>Phone : ".$phone;
echo "<br>Password : ".$pass;
echo "<br>Gender :".$gender;
?>
</body>
</html>