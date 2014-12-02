<?php
error_reporting(E_ALL);

include 'db.php';

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

$sql = "INSERT INTO flashcard (definition, img_file, img_alt, audio_file) 
	VALUES (:definition, :img_file, :img_alt, :audio_file)";

$query = $dbh->prepare($sql);
$query->execute(array(':definition' => $definition, ':img_file' => $img_file, 
	':img_alt' => $img_alt, ':audio_file' => $audio_file));

?>