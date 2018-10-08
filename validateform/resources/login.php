<?php

?>
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
			 <li><a href='registration.php'>Registration</a></li>
			  <li><a class="active" href='login.php'>Login</a></li>
        </ul>
    </div>
	<div class="contact">	
<form name="" method="post" action="logf.php">
    <input type="text" id="name" name="name" placeholder="Your name..">
    <input type="password" id="pass" name="pass" placeholder="Your Password..">
    <input type="submit" value="Submit">

</form>
</div>
</body>
</html>

