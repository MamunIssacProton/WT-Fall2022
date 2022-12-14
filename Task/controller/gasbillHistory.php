<?php
session_start();
    if(isset($_REQUEST['back']))
    {
    unset($_SESSION['egasBillHistory']);
    header('Location: ../view/history.php');
    }
?>