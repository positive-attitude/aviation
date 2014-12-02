<?php
$file = "passwords.txt";

$username = htmlspecialchars($_POST['username']);
$password = md5($_POST['password']);

?>