<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dice Game</title>
	<link rel="stylesheet" href="css/mystyle.css" type="text/css"><!--merge into style.css-->
	<!--<link rel="stylesheet" href="css/style.css" type="text/css">-->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<!--<script type="text/javascript" src="js/jquery.js"></script>-->
	<!--<script type="text/javascript" src="js/login.js"></script>-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() 
    {
    	$("#login-box").hide(); //hide on startup

    	$("#hide").click(function(){//hide if u click on hide
    		$("#login-box").hide();
  		});
  		$("#show").click(function(){//show if u click on show
    		$("#login-box").show();
  		});
        $("#slide_up").click(function() {//slide up if you click on slide up
            $("#login-box").slideUp("slow");
        });
        $("#login_btn").click(function(){//show and slide down if you click on login
        	$("#login-box").show("slow"); //have to show it before u slide it down
    		$("#login-box").slideDown("slow");
   });
</script>
</head>

<body>
<div class="menu">
	<ul class="nav">
		<li><button type="button" id="home"><a href="index.php">Home</a></button></li>
		<li><button type="button" id="login_btn"><a href="#" class="login-window">Log In</a></button></li>
		<li><button type="button" id="signup_btn"><a href="signup.php">Sign Up</a></button></li>
	</ul>
</div>
