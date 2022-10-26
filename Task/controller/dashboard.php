<?php
session_start();
if( isset($_SESSION['usr']))
{
   
    echo "<p>". $_SESSION['usr']. "Welcome to the dashboard</p>";
}
else{
    header('Location: ../view/login.php');
}

?>