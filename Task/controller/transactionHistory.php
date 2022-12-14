<?php
session_start();
if(isset($_REQUEST['back']))
{
    unset($_SESSION['trhistory']);
    header('Location: ../view/dashboard.php');
    
}
?>