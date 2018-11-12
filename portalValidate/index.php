<?php
/**
 * Created by PhpStorm.
 * User: Saef
 * Date: 08-Mar-16
 * Time: 9:41 AM
 */



?>
<html>
<head>
    <link rel="stylesheet" href="css.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/bootstrap.min.js"></script>
</head>
<body class="container-fluid">
<h1>Assignment Uploading System</h1>
<hr>
<h3>Login Here or <a href="register.php">Click Here for Registration</a></h3><br>
        <form name="login" method="post" action="enter.php">

            <div class="form-group">
                <label for="AIUB ID">AIUB ID:</label>
                <input type="text" class="form-control" id="un" name="un">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pw" name="pw">
            </div>
            <input type="submit" value="Login" class="btn btn-default">
            <!--<button type="submit" class="btn btn-default">Submit</button>-->
        </form>







</body>
</html>
