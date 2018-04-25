<?php 
	include("includes/classes/Account.php");
	include("includes/handlers/registerHandler.php");

	$account = new Account();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Slotify!</title>
</head>
<body>
	<div id="inputContainer">
		<form id="registerForm" action="registerForm" method="POST">
			<h2>Register</h2>
			<p>
				<label for="username">Username</label>
				<input id="username" name="username" type="text" required>
			</p>
			<p>
				<label for="firstname">First Name</label>
				<input id="firstname" name="firstname" type="text" required>
			</p>
			<p>
				<label for="lastname">Last Name</label>
				<input id="lastname" name="lastname" type="text" required>
			</p>
			<p>
				<label for="email">Email</label>
				<input id="email" name="email" type="Email" required>
			</p>
			<p>
				<label for="password">Password</label>
				<input id="password" name="password" type="Password" required>
			</p>
			<p>
				<label for="passwordConfirm">Confirm Password</label>
				<input id="passwordConfirm" name="passwordConfirm" type="Password" required>
			</p>
			<button type="submit" name="button">Register</button>
		</form>
	</div>
</body>
</html>