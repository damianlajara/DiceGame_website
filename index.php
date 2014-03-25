<?php require_once("inc/config.php");
include(ROOT_PATH . 'inc/header.php'); ?>

<div class="welcome">
	<h1>Welcome to Damian and Henry&rsquo;s Dice game!</h1>
	<p>Hi :D </p>
	
	<?php 
	echo "Welcome to the Dice Game!\nBefore we start, Please create an account.";
	?>
	
	<script type="text/javascript">
		document.write("testing");
	var startGame = function() {
	console.log("Are you ready to play?\nEnter 'Y' for yes or 'N' for no");
	
	var name = prompt("What is your name", "Type you name here");
	alert("Hi " + name + "\nHope you are enjoying JavaScript!");
	alert("heyyy");
}
	startGame();
	</script>
	
</div>

<div id="login-box" class="login-popup">
<!--<a href="#" class="close"><img src="close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>-->
  <form method="post" class="signin" action="#">
	  <fieldset class="textbox">
        <label class="username">
			  <input id="username" name="username" value="" type="text" autocomplete="on" placeholder="Username">
        </label>
		  
		  <label class="password">
			  <input id="password" name="password" value="" type="password" placeholder="Password">
        </label>
			  <button class="submit button" type="button">Sign in</button>
			  <p>
				  <a class="forgot" href="#">Forgot your password?</a>
			  </p>
	  </fieldset>
  </form>
</div>

<?php include(ROOT_PATH . 'inc/footer.php');?>
