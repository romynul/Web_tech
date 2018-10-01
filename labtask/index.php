<?php

?>
<html>
<head>
</head>
<body>
<form name="" method="post" action="login.php">
    User Name   : <input type="text" id="name" name="uname" placeholder="User Name..">
	<br>
	Full Name  : <input type="text" id="name" name="fname" placeholder="Full Name..">
	<br>
	Email       : <input type="email" id="email" name="email" placeholder="Your Email..">
	<br>
	Phone        : <input type="text" id="phone" name="phone" placeholder="Your Phone..">
	<br>
    Password     : <input type="password" id="pass" name="pass" placeholder="Your Password..">
	<br>
	Confirm Pass : <input type="password" id="pass" name="cpass" placeholder="Confirm Password..">
	<br>
	<p>Gender</p>
	<input type="radio" name="gender" value="male"> Male
	<input type="radio" name="gender" value="female"> Female
	<input type="radio" name="gender" value="other"> Other
	
	<p>Education</p> 
	<input type="checkbox" name="edu[]" value="SSC"> SSC
	<input type="checkbox" name="edu[]" value="HSC"> HSC
	<input type="checkbox" name="edu[]" value="BSC"> BSC
	<input type="checkbox" name="edu[]" value="MSC"> MSC<br>
    <input type="submit" value="Submit">

</form>
</body>
</html>