<?php
	
	class Account 
	{	
		private $errorLogs;

		public function __construct() 
		{
			$errorLogs = array();
		}

		public function validate($un, $fn, $ln, $email, $pass, $pass2) 
		{
			validateUsername($un);
			validateName($fn);
			validateName($ln);
			validateEmail($email);
			validatePassword($pass, $pass2);
		}

		private function validateUsername($user) 
		{
			if (strlen($user) > 25 || strlen($user) < 5)
			{
				array_push($errorLogs, "Username must be between 5 and 25 characters");
				return;
			}
		}

		private function validateName($name) 
		{
			if (preg_match('#^[a-zA-Z0-9_]{4,10}$D#', $name))
			{
				array_push($errorLogs, "Not a valid name");
				return;
			}
		}

		private function validateEmail($email) 
		{
			if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				array_push($errorLogs, "Not a valid email");
				return;
			}
		}

		private function validatePassword($pass, $pass2) 
		{
			if(!$pass == $pass2)
			{
				array_push($errorLogs, "Passwords do not match");
			}
		}
	}


?>