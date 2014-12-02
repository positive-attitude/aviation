<?php
require 'db.php';

try 
{
	$dbh = new PDO("mysql:host=$hostname;
		dbname=jim_aviation", $username, $password);
	echo "Connected to database";
} 
catch (PDOException $e) {
	echo $e->getMessage();
}

$definition = $_POST['definition'];
$img_file = $_POST['img_file'];
$img_alt = $_POST['img_alt'];
$audio_file = $_POST['audio_file'];

$sql = "UPDATE flashcard SET definition=?, img_file=?, img_alt=?, audo_file=?
	WHERE id=?";

$query = $db->prepare($sql);
$query->execute(array($definition, $img_file, $img_alt, $audio_file, $id));

?>