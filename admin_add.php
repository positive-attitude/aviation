<?php
error_reporting(E_ALL);

include 'db.php';
include 'nav.php';

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

echo 'Thank you for your submission.';

?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/awesomestyle.css">

    <title>Aviation: Add content</title>
    <style>
        input{width: 300px;}
        
        button{
            width: 100px;
            height: 50px;
            font-size: 20px;
        }
        
    </style>
</head>

<body>

<h4>Add new flashcard</h4>

<form id="addForm" action="admin_add.php" method="POST">
    
    <fieldset>
		<legend>Flashcard details</legend>	

                <label>
                        <span>Definition:</span>
                        <input type="text" name="definition" value="" required autofocus><br>
                </label>
                <br>
                
                <label>
                        <span>Image file name:</span>
                        <input type="text" name="img_file" value=""  required autofocus><br>
                </label>
                <br>
                
                <label>
                        <span>Image ALT description:</span>
                        <input type="text" name="img_alt" value="" required><br>
                </label>
                <br>
                
                <label>
                        <span>Audio file name:</span>
                        <input type="text" name="audio_file" value="" required><br>
                </label>
                <br>

<p><input type="submit" name="submit"></p>

</fieldset>
</form>
	
</body>
</html>