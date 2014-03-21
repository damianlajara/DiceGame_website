<?php require_once("inc/config.php");
include(ROOT_PATH . 'inc/header.php'); ?>

<h1>Welcome to Damian&rsquo;s Dice game!</h1>
<p>Hi :D </p>


<?php 
echo "Welcome to the Dice Game!\nBefore we start, Please create an account.";
	?>
<div id="form">
	<form method="post" action="submission_success.php">
		<p>
			<!-- <?php echo "Enter your First name";?> --><br />
			<input id="name" type="text" name="firstname" size="30" placeholder="Name">
			<span>Enter your name</span>
		</p>
		<p>
			 <!-- <?php echo "Enter your Last name"; ?> --><br /> 
			<input type="text" name="lastname" size="30" placeholder="Last Name">
			<span>Enter your last name</span>
			
		</p>
		<p>
			<!--<?php echo "Enter your Email Address"; ?>--><br />
			<input type="text" name="email" size="30" placeholder="Email">
			<span>Please enter a valid email address</span>
		</p>
		<p>
			<!-- <?php echo "Enter your Username" ?> --><br />
			<input type="text" name="username" size="30" placeholder="Username">
			<span>Enter your username</span>
		</p>
		<p>
			<!-- <?php echo "Enter your Password" ?> --><br />
			<input type="password" name="password" size="30" placeholder="Password">
			<span>Enter your password</span>
		</p>
		<p>
			<input class="submit "type="submit" name="submit" value="Submit form">
		</p>
	</form>
</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	$("form span").hide();
	$("input, textarea").focus(function(){
		$(this).next().fadeIn("slow");
	}).blur(function(){
		$(this).next().fadeOut("slow");
	})
</script>

<?php include(ROOT_PATH . 'inc/footer.php');?>
