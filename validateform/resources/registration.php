<!DOCTYPE HTML>  
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100" rel="stylesheet">
    <meta charset="UTF-8">
    <title>RS Dream World</title>
    <style>
	
		.error 
		{
		color: #FF0000;
		}
        .rs_div
        {
            display: block;
            float: left;
            position: relative;
        }


        .menu ul {
            margin: 20px 0px;
        }
        .menu ul li
        {
            text-decoration: none;
            display: block;
            position: relative;
            float: left;
        }
        .menu ul li a
        {
            text-decoration: none;
            font-family: sans-serif;
            font-size: 16px;
            color: #ffffff;
            padding: 17px 24px;


        }

        .menu ul li a:hover
        {
            color: #f6483b;


        }

        .active {
            color: #f6483b!important;

        }
        .body_text h1 {
            margin: 30px 0px;
            position: initial;
            top: 50%;
            font-size: 150px;
            color: #fff;
            font-weight: 700;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: cover;
        }
        button.rs_button {
            padding: 10px 35px;
            color: #fff;
            font-family: Montserrat, sans-serif;
            font-size: 14px;
            font-weight: bold;
            background-color: #f6483b;
            border: 1px solid #f6483b;
        }
        button.rs_button:hover {
            padding: 10px 35px;
            color: #f6483b;
            font-family: Montserrat, sans-serif;
            font-size: 14px;
            font-weight: bold;
            background-color: transparent;
            border: 1px solid #f6483b;
            cursor: pointer;
        }
		
		.contact
        {
            width:50%;
            display:block;
            margin:0 auto;
        }

        input
        {
            padding: 7px;
            background: transparent;
            border: 2px solid #b7b7b7;
            margin: 5px 0px;
			color:#fff;

        }

        input#name {
            width: 85%;
            display: block;
            float: left;
            margin-right: 10px;
            position: relative;
        }

        input#email {
            width: 100%;
            display: block;
            float: left;
            position: relative;
        }
        input#phone {
            width: 85%;
            margin-bottom: 10px;
        }

        textarea#description {
            width: 85%;
            background: transparent;
            border: 2px solid #b7b7b7;
			color:#fff;
        }
        input[type="submit"] {
            padding: 10px 35px;
            color: #fff;
            font-family: Montserrat, sans-serif;
            font-size: 14px;
            font-weight: bold;
            background-color: #f6483b;
            border: 1px solid #f6483b;
        }

        input[type="submit"]:hover {
            padding: 10px 35px;
            color: #f6483b;
            font-family: Montserrat, sans-serif;
            font-size: 14px;
            font-weight: bold;
            background-color: transparent;
            border: 1px solid #f6483b;
            cursor: pointer;
        }
        hr {
            margin-bottom: 5%;
        }
		
		td {
		color: #fff;
		}
		body {
    color: #fff;
		}
    </style>
</head>
<body style="background-color: #000000;">
    <div class="logo rs_div" style="width:50%; height:100px;">
        <img src="../images/main_logo.png" style="max-width:13%; margin-left: 10%;" >
    </div>
    <div class="menu rs_div" style="width:50%; height:100px;">
        <ul>
            <li ><a href='../index.php'>Home</a></li>
            <li><a href='education.html'>Education</a></li>
            <li><a href='project.html'>Projects</a></li>
            <li><a href='contact.html'>Contact</a></li>
			 <li><a class="active" href='registration.php'>Registration</a></li>
			  <li><a href='login.php'>Login</a></li>
        </ul>
    </div>

<?php
	$fnameErr = $emailErr = $genderErr = "";
	$name = $email = $gender = $uname = $phone =$pass = "";
	
	if($_SERVER["REQUEST_METHOD"]== "POST"){
		if(empty($_POST["name"])){
		$fnameErr="Name is Required";
		}
		else{
			$name = test_input($_POST["name"]);
			
			if(!preg_match("/^[a-zA-Z]*$/",$name)){
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
		
		if(empty($fnameErr))
		{
			setcookie($name, $pass, time() + (86400 * 30), "/");
			echo "Set Cookie";
		}
		}
	
	
	function test_input($data){
		$data= trim($data);
		$data= stripcslashes($data);
		$data= htmlspecialchars($data);
		return $data;
	}
	?>
	
<div class="contact">	
<form name="" method="post" action="login.php">
	<table>
	<tr>
	<td>User Name:</td>
	<td><input type="text" id="name" name="uname" placeholder="User Name.."></td>
	</tr>
	<tr>
	<td>Full Name:</td>
	<td><input type="text" name="name" value="<?php echo $name;?>">
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
	<span style="color:#fff">Gender:</span><br>
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"><span style="color:#fff">Female</span>
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"><span style="color:#fff">Male</span>
	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other"><span style="color:#fff">Other</span>  
	<span class="error">* <?php echo $genderErr;?></span>
	
    <input type="submit" value="Submit">

</form>
</div>
</body>
</html>