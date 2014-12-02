<?php
ob_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'db.php';

    //Check if the loggedin status is set to true, meaning that user is logged in.
    if ( isset ( $_SESSION['loggedin'] ) && $_SESSION['loggedin'] == true  ) {
        echo '<p>Hello '. $_SESSION['username'] . ', <a href="Logout.php">Logout.</a></p>';
    }else{
    }

    if (!empty($username) && !empty($password)) {
   
    $db = new PDO("mysql:host=localhost;dbname=jim_aviation", $username, $password);
        $stmt = $db->prepare("SELECT * FROM users WHERE username=? AND password=?");
        $stmt->bindParam(1, $_POST['username']);
        $stmt->bindParam(2, $_POST['password']);
        $stmt->execute();

        $username = $_POST['username'];
	if( $stmt->rowCount() == 1) {
		// Student login
		if (strstr($username, 'mail.greenriver.edu', 'true')) {
			echo 'Access granted';
			header('location: aviationHome.html');
		}
		// Admin login 
		else if (strstr($username, 'greenriver.edu', 'true')){
			echo 'ADMIN access granted';
			header('location: admin_add.html');
        } else{ 
            echo 'Access denied &nbsp;';
	    echo '<a href="login.html">Back</a>';
		}
	}
    } else {
	echo 'Please enter a username and password';	
}
ob_flush();
?>