<?php require_once("inc/config.php");
include(ROOT_PATH . 'inc/header.php'); ?>

<h1>Welcome to Damian&rsquo;s Dice game!</h1>
<p>Hi :D </p>


<?php 
echo "Welcome to the Dice Game!\nBefore we start, Please create an account.";
	?>
	<form id="create_account" method="post" action="submission_success.php">
		<p>
			<?php echo "Enter your First name";?> <br />
			<input type="text" name="firstname" size="30">
		</p>
		<p>
			 <?php echo "Enter your Last name"; ?> <br /> 
			<input type="text" name="lastname" size="30">
		</p>
		<p>
			<?php echo "Enter your Email Address"; ?> <br />
			<input type="text" name="email" size="30">
		</p>
		<p>
			<?php echo "Enter your Username" ?><br />
			<input type="text" name="username" size="30">
		</p>
		<p>
			<?php echo "Enter your Password" ?><br />
			<input type="password" name="password" size="30">
		</p>
		<p>
			<input type="submit" name="submit" value="Submit form">
		</p>
	</form>
<?php include(ROOT_PATH . 'inc/footer.php');?>
