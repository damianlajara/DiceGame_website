<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dice Game</title>
	<link rel="stylesheet" href="css/mystyle.css" type="text/css"><!--merge into style.css-->
	<!--<link rel="stylesheet" href="css/style.css" type="text/css">-->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="//code.jquery.com/jquery-1.9.1.js"></script>
   <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<script type="text/javascript" src="js/klk.js"></script>
		
<script type="text/javascript">
	$(document).ready(function() {
		$("#login-box").hide();	
		$( "#login" ).click(function() {
			$( "#login-box" ).dialog( "open" );
		});
		$("#login-box").dialog({
      	autoOpen: false
		});
	});
</script>
	
</head>
	
<body>
		<button id="login">Login</button>
</body>
</html>