<?php require_once("inc/config.php");
include(ROOT_PATH . 'inc/header.php'); ?>

<p>Why the fuck do these buttons work, but not the sign in one?!??!?!?</p>

<button id="hide">Hide</button>
<button id="show">Show</button>
<button id="slide_up">slide up</button>
<button id="slide_down">slide down</button>

<div class="welcome">
	<h1>Welcome to Damian and Henry&rsquo;s Dice game!</h1>
	<p>Hi :D </p>
	<?php 
	echo "Welcome to the Dice Game!\nBefore we start, Please create an account.";
	?>
</div>

<div id="login-box" class="login-popup">
<!--<a href="#" class="close"><img src="close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>-->

  <form method="post" class="signin" action="#">
        <fieldset class="textbox">
        <label class="username">
        <span>Username or email</span>
        <input id="username" name="username" value="" type="text" autocomplete="on" placeholder="Username">
        </label>
        <label class="password">
        <span>Password</span>
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
