<?php
ob_start();
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

if ($_POST) {
    if (!empty($username) && !empty($password)) {

        $form = $_POST;

        $username = $_POST['username'];
        $password = $_POST['password'];

        //Check if the loggedin status is set to true, meaning that user is logged in.
        // if ( isset ( $_SESSION['loggedin'] ) && $_SESSION['loggedin'] == true  ) {
        //     echo '<p>Hello '. $_SESSION['username'] . ', <a href="Logout.php">Logout.</a></p>';
        // }else{
        // }

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
            } else {
    }
	echo 'Please enter a username and password';	
}
ob_flush();
?>