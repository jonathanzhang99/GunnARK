<?php 
	include "layout.php";

?>

<?php startblock("body") ?>
<div class="container-fluid">
	<div class="form-style">
		<h2>Login</h2>
		<form role="form" id="login_form">
			<div class="form-group">
				<input type="text" id="login_email" placeholder="Email">
				<input type="password" id="login_password" placeholder= "Password (shared)">
			</div>
			<input type="button" id="login_submit" value="Login">
		</form>
	</div>
</div>
<?php endblock() ?>

<?php startblock("javascript") ?>
<script src="js/login.js" type="text/javascript"></script>

<?php endblock() ?>