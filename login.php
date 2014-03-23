<?php require_once("inc/config.php");
include(ROOT_PATH . 'inc/header.php'); ?>

<div id="login_form">
	<form id="login">
		<input type="text" name="username" value="username" placeholder="Username">	
	</form>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$("button #login_btn").click(function() {
			$("p").slideDown("slow");
		});
	});
</script>
</body>

<?php include(ROOT_PATH . 'inc/footer.php');?>