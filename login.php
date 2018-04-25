<?php

	if(isset($_POST['loginButton']))
	{

	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Slotify!</title>
</head>
<body>
	<div id="inputContainer">
		<form id="loginForm" action="login.php" method="POST">
			<h2>Login</h2>
			<p>
				<label for="loginUsername">Username</label>
				<input id="loginUsername" name="loginUsername" type="text" required>
			</p>
			<p>
				<label for="loginPassword">Password</label>
				<input id="loginPassword" name="loginPassword" type="Password" required>
			</p>
			<button type="submit" name="loginButton">Login</button>
		</form>
	</div>
</body>
</html>