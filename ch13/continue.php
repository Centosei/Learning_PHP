<?php
session_start();

/* if (isset($_SESSION['forename'])) */
/* { */
/*     $forename = htmlspecialchars($_SESSION['forename']); */
/*     $surname  = htmlspecialchars($_SESSION['surname']); */

/*     echo "Welcome back $forename.<br> Your full name is $forename $surname.<br>"; */
/* } */
/* else echo "Please <a href='authenticate_session.php'>click here</a> to log in."; */

if (isset($_SESSION['forename']))
{
    $forename = $_SESSION['forename'];
    $surname  = $_SESSION['surname'];
    $ip       = $_SESSION['ip'];

    destroy_session_and_data();

    echo htmlspecialchars("Welcome back $forename");
    echo "<br>";
    echo htmlspecialchars("Your full name is $forename $surname (accessing from IP: $ip).");
}
else echo "Please <a href='authenticate_session.php'>click here</a> to log in.";

function destroy_session_and_data()
{
    $_SESSION = array();
    setcookie(session_name(), '', time() - 2592000, '/');
    session_destroy();
}
