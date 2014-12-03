<?php
ob_start();
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

if ($_POST) {

        $form = $_POST;

        $username = $form['username'];
        $password = $form['password'];

        //Check if the loggedin status is set to true, meaning that user is logged in.
        // if ( isset ( $_SESSION['loggedin'] ) && $_SESSION['loggedin'] == true  ) {
        //     echo '<p>Hello '. $_SESSION['username'] . ', <a href="Logout.php">Logout.</a></p>';
        // }else{
        // }

                if (empty($username) || empty($password)) {
                    echo 'Please enter a username or password.';
                    header('Refresh: 5; URL=login.html');
                }

                // Student login
                else if (strstr($username, 'mail.greenriver.edu', 'true')) {
                    echo 'Access granted';
                    header('location: aviationHome.php');
                }
                // Admin login 
                else if (strstr($username, 'greenriver.edu', 'true')){
                    echo 'ADMIN access granted';
                    header('location: admin_add.php');
                } else{ 
                    echo 'Access denied' . '<br>';
                echo '<a href="login.html">Back</a>';
            }
}
ob_flush();
?>