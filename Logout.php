<?php
    // Start session for user login
    session_start();
    // Check user is logedin.
    $_SESSION['Email']=="";
    // unset the loged in user.
    unset($_SESSION['Email']);
    // Destroy the sessio.
    session_destroy();
    // Send the logout user for login page.
    header ('location:Login.php');

?>