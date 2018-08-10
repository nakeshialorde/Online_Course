<?php

require_once __DIR__ . '/login.sql';


    // Start the session
    session_start();

    // Defines email and password. Retrieve however you like,
    $email = "email";
    $password = "password";

    // Error message
    $error = "";

    // Checks to see if the user is already logged in. If so, redirect to correct page.
    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {
        $error = "success";
        header('Location: success.php');
    }

    // Checks to see if the email and password have been entered.
    // If so and are equal to the email and password defined above,log them in.
    if (isset($_POST['email']) && isset($_POST['password'])) { 
        if ($_POST['email'] == $email && $_POST['password'] == $password) {
            $_SESSION['loggedIn'] = true;
            header('Location: success.php');
        } else {
            $_SESSION['loggedIn'] = false;
            $error = "Invalid email and password!";
        }
    }

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'tutors246');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(localhost, root, '', tutors246);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>