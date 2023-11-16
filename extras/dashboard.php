<?php
session_start();

if (isset($_SESSION["username"]) ){
    echo"Welcome " .$_SESSION['username'];
    echo "<a href='logout.php'>Log Out</a>";
} else {
    echo 'Welcome Guest </br>';
    echo '<a href="/php-crash/13_sessions.php">Go back</a>';
}
?>