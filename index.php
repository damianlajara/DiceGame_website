<?php require_once("inc/config.php");
include(ROOT_PATH . 'inc/header.php'); ?>

<h1>Welcome to Damian and Henry&rsquo;s Dice game!</h1>
<p>Hi :D </p>


<?php 
echo "Welcome to the Dice Game!\nBefore we start, Please create an account.";
	?>
<div id="form">
	<form method="post" action="submission_success.php">
		<p>
			<input id="name" type="text" name="firstname" size="30" placeholder="Name">
			<span>Enter your first name</span>
		</p>
		<p>
			<input type="text" name="lastname" size="30" placeholder="Last Name">
			<span>Enter your last name</span>
			
		</p>
		<p>
			<input type="text" name="email" size="30" placeholder="Email">
			<span>Please enter a valid email address</span>
		</p>
		<p>
			<input type="text" name="username" size="30" placeholder="Username">
			<span>Enter your username</span>
		</p>
		<p>
			<input type="password" name="password" size="30" placeholder="Password">
			<span>Enter your password</span>
		</p>
		<p>
			<input class="submit "type="submit" name="submit" value="Submit form">
		</p>
	</form>
</div>

<script type="text/javascript">
	$("form span").hide();
	$("input, textarea").focus(function(){
		$(this).next().fadeIn("slow");
	}).blur(function(){
		$(this).next().fadeOut("slow");
	})
</script>

<?php include(ROOT_PATH . 'inc/footer.php');?>
