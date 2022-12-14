<?php
session_start();
if(isset($_REQUEST['back']))
{
    unset($_SESSION['eBillHistory']);
    header('Location: ../view/dashboard.php');
    
}
?>
