<!DOCTYPE html>
<html>
<head>
<title>Java Lab task</title>

	<script>
	var flagEmail = true;
	 function showResult(str) {

	 		var lnam = document.getElementById("ln").value;
	 		var fnam = document.getElementById("fn").value;

            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            } else {  // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    document.getElementById("email_suggestion").innerHTML=this.responseText;

					if (this.responseText == "Email Already Exist"){
						document.getElementById("email").style.borderColor = "red";
				document.getElementById("email_sugges").innerHTML=lnam + Math.floor(Math.random() * 31) + 1;
				document.getElementById("email_suggest").innerHTML=fnam + Math.floor(Math.random() * 30) + 1;
						flagEmail= false;
					}
					else {
						document.getElementById("email").style.borderColor = "green";

						document.getElementById( 'email_sugges' ).style.display = 'none';
						document.getElementById( 'email_suggest' ).style.display = 'none';
						
					}
                }
            }
            xmlhttp.open("GET","email_suggestion.php?q="+str,true);

            xmlhttp.send();
        }
		
	function validateForm() 
	{
    var fname = document.getElementById("fn").value;
    var lname = document.getElementById("ln").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var pw = document.getElementById("pw").value;
    var confirmpw = document.getElementById("confirmpw").value;
	var flag = true;
    if (fname == "") {
		document.getElementById("fn").style.borderColor = "red";
        flag= false;
    }
	else{
		document.getElementById("fn").style.borderColor = "green";
	}
	
	if (lname == "") {
		document.getElementById("ln").style.borderColor = "red";
        flag= false;
    }
	else{
		document.getElementById("ln").style.borderColor = "green";
	}
	
	if (phone == "") {
		document.getElementById("phone").style.borderColor = "red";
        flag= false;
    }
	else{
		document.getElementById("phone").style.borderColor = "green";
	}
	
	if (email == "" || !flagEmail) {
		document.getElementById("email").style.borderColor = "red";
        flag= false;
    }
	else{
		
		 if (/^\S+@\S+\.\S+/.test(email))
		{
		
		 flag= true;
		document.getElementById("email").style.borderColor = "green";
		}
		else{
		alert("You have entered an invalid email address!")
		document.getElementById("email").style.borderColor = "yellow";
		 flag= false;
		 }
	}
	
	if (pw == "") {
		document.getElementById("pw").style.borderColor = "red";
        flag= false;
    }
	else{
		 if (/^[A-Z][a-zA-Z]*[#?!@$%^&*-]*.{8,}$/.test(pw))
		{
		 flag= true;
		document.getElementById("pw").style.borderColor = "green";
		}
		else{
		alert("You have entered Weak Password It should contain one capital one small and special char minimum 8 length!")
		document.getElementById("pw").style.borderColor = "yellow";
		 flag= false;
		 }
	}
	
	if (confirmpw == "") {
		document.getElementById("confirmpw").style.borderColor = "red";
        flag= false;
    }
	else{
		if(pw==confirmpw){
		document.getElementById("confirmpw").style.borderColor = "green";
		}
		
		else{
		alert("Password Not match")
		document.getElementById("confirmpw").style.borderColor = "yellow";
		 flag= false;
		 }
	}
	return flag;
	}
</script>
	<style>
		.rform{
		height: 20%;
		width : 30%;
		position: absolute;
		top:-100px;
		bottom: 0;
		left: 0;
		right: 0;
		margin: auto;
		background: #efefef;
		}
		
		form 
		{
		background: #efefef;
		padding: 6% 5%;
		}
		
		
		.form-control
		{
		padding: 2% 2%;
		margin-bottom: 5px;
		display: block;
		margin: auto;	
		font-size: 15px;
		}
		
		.form-button
		{
		padding: 2% 18%;
		font-weight: bold;
		font-size: 17px;
		margin-bottom: 5px;
		display: block;
		margin: auto;
		}
		
		input 
		{
		width: 80%;
		}
		div#email_sugges {
    	width: 45%;
    	margin-left: 29px;
    	float: left;
    	margin-bottom: 20px;
		}

		div#email_suggestion {
    	margin-left: 29px;
		}

	</style>
</head>
<body>
<div class="rform">
	 <form name="login" method="post" action="view.php" onsubmit="return validateForm()">

                <input type="text" class="form-control" id="fn" placeholder="First name" name="fname"><br/>
                <input type="text" class="form-control" id="ln" placeholder="Last name" name="lname"><br/>
                <input type="text" class="form-control" id="email" placeholder="Email"  onblur="showResult(this.value)" name="email"><div id="email_suggestion"></div><br/>
                <div id="email_sugges"></div><div id="email_suggest"></div>
                <input type="text" class="form-control" id="phone" placeholder="Phone"  name="phone"><br/>
                <input type="password" class="form-control" id="pw" placeholder="Password" name="pw"><br/>
                <input type="password" class="form-control" id="confirmpw" placeholder="Confirm Password" name="confirmpw"><br/>
            <input type="submit" class="form-button" value="Login" class="btn btn-default">
        </form>
</div>

</body>
</html>