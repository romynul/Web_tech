<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100" rel="stylesheet">
    <meta charset="UTF-8">
    <title>RS Dream World</title>
    <style>
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
    </style>
</head>
<body style="background-color: #000000;">
    <div class="logo rs_div" style="width:50%; height:100px;">
        <img src="images/main_logo.png" style="max-width:13%; margin-left: 10%;" >
    </div>
    <div class="menu rs_div" style="width:50%; height:100px;">
        <ul>
            <li ><a class="active" href='index.php'>Home</a></li>
            <li><a href='resources/education.html'>Education</a></li>
            <li><a href='resources/project.html'>Projects</a></li>
            <li><a href='resources/contact.html'>Contact</a></li>
			 <li><a href='resources/registration.php'>Registration</a></li>
			  <li><a href='resources/login.php'>Login</a></li>
        </ul>
    </div>

    <div class="body_image rs_div" style="width:50%; height:500px;">
        <img src="images/rs_shuvo.jpg" style="max-width:50%; margin-left: 20%;" >
    </div>
    <div class="body_text rs_div" style="width:50%; height:500px;">
            <span ></span>
        <h1 class="write" data-strings="I`m Romynul Shuvo" style="background-image:url(images/back.jpg);">I'm Romynul Shuvo </h1>
    </div>

    <div class="rs_div" style="width:100%; height:80px; margin-top: 7%; text-align: center;">
        <hr color="#5a5353">

    </div>

    <div class="about_image rs_div" style="width:50%; height:350px;">
        <img src="images/rhs.jpg" style="max-width:50%; margin-left: 20%;" >
    </div>
    <div class="about_text rs_div" style="width:50%; height:350px; margin-top: 35px;">
        <span style="color:#ffffff; font-size: 40px; font-family: Montserrat, sans-serif; font-weight: bold;">About Me</span>
        <hr align="left" width="25%">
            <p style="color: #b7b7b7; padding-right: 30%; font-family: 'Montserrat', sans-serif;">
                There are many variations of passages of Lorem Ipsum available, but the
                majority have suffered alteration in some form, by injected humour, or
                randomised words which don't look even slightly believable. If you are
                going to use a passage of Lorem Ipsum, you need to be sure there isn't
                anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                generators on the Internet tend to repeat predefined chunks as necessary,
                making this the first true generator on the Internet. It uses a dictionary of
                over 200 Latin words, combined with a handful of model sentence
                structures.
            </p>
        <button class="rs_button">Contact Me</button>
    </div>

</body>
</html>