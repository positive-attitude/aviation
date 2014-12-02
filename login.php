<?php

include 'db.php';

    //Check if the loggedin status is set to true, meaning that user is logged in.
    if ( isset ( $_SESSION['loggedin'] ) && $_SESSION['loggedin'] == true  ) {
        echo '<p>Hello '. $_SESSION['username'] . ', <a href="Logout.php">Logout.</a></p>';
    }else{
        //If the user is not logged in display a login form
        echo '<form action="index.php" method="post">';
        echo '<input type="text" name="username">';
        echo '<input type="text" name="password">';
        echo '<input type="submit" name="submit" value="submit">';
        echo '<form>';
    }
    
    $dbh = new PDO("mysql:host=localhost;dbname=jim_aviation", $username, $password);
        $stmt = $dbh->prepare("SELECT * FROM users WHERE username=':name' AND password=':pwd'");
        $stmt->bindParam(":name", $_POST['username']);
        $stmt->bindParam(":pword", $_POST['password']);
        $stmt->execute();

        if( $stmt->rowCount() > 0 ){

            echo 'There is a match!';
        }else{
            echo 'nooooo';
        }
?>