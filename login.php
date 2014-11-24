<?php
$file = "passwords.txt";

$username = htmlspecialchars($_POST['username']);
$password = md5($_POST['password']);

$file = "passwords.txt";

if (!file) 
{
	echo "Unable to open file";
}

foreach ($login as userpass)
{
	// Split the strings one by one
	list($user, $pass) = explode(":", $userpass);

	if ($username == $user) AND ($password == $pass))
	{
		// Login successful
		

	}
}
?>