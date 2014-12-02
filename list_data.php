<?php
//Connect to the database
    include 'db.php';

    
    try {
        $dbh = new PDO("mysql:host=$hostname;
                       dbname=jim_aviation", $username, $password);
        //echo "Connected to database.";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    
    $sql = "SELECT id, definition, img_file, img_alt, audio_file FROM flashcard";
    
    try {
	$stmt = $dbh->prepare($sql);
	$stmt->execute($a_bind_params);
	$a_data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
    ÊÊtrigger_error('Wrong SQL: ' . $sql . ' Error: ' . $e->getMessage(), E_USER_ERROR);
    }
    
    $id=$row['id'];
    
    foreach($a_data as $row) {
	echo $row['id'] . '<br>';
	echo '<a href="admin_update.html?id='.$row[id].'">' .$row[definition]. '</a><br>';
	echo $row['img_file'] . '<br>';
	echo $row['img_alt'] . '<br>';
	echo $row['audo_file'];
    }
    
    
    

    
?>