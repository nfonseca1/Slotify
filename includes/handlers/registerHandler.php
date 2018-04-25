<?php
	
	function sanitizeFormPassword($inputText) {
		$inputText = strip_tags($inputText);
		return $inputText;
	}

	function sanitizeFormUsername($inputText) {
		$inputText = strip_tags($inputText);
		$inputText = str_replace(" ", "", $inputText);
		return $inputText;
	}

	function sanitizeFormString($inputText) {
		$inputText = strip_tags($inputText);
		$inputText = str_replace(" ", "", $inputText);
		$inputText = ucfirst(strTolower($inputText));
		return $inputText;
	}

	if(isset($_POST['registerButton']))
	{
		$username = sanitizeFormUsername($_POST['username']);
		$firstname = sanitizeFormUsername($_POST['firstname']);
		$lastname = sanitizeFormUsername($_POST['lastname']);
		$email = sanitizeFormUsername($_POST['email']);
		$password = sanitizeFormUsername($_POST['password']);
		$passwordConfirm = sanitizeFormUsername($_POST['passwordConfirm']);

		$account->validate($username, $firstname, $lastname, $email, $password, $passwordConfirm);
	}

 ?>