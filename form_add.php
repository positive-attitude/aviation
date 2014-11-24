<?php
require 'db.php';

$definition = $_POST['definition'];
$img_file = $_POST['img_file'];
$img_alt = $_POST['img_alt'];
$audio_file = $_POST['audio_file'];

$sql = "INSERT INTO flashcard (definition, img_file, img_alt, audio_file) 
	VALUES (:definition, :img_file, :img_alt, :audio_file)";

$query = $db->prepare($sql);
$query->execute(array(':definition'=>username, ':img_file'=>img_file, 
	':img_alt'=>img_alt, ':audio_file'=>audio_file));

?>