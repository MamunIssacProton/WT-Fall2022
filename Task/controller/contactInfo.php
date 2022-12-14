<?php
session_start();
$err=0;
if(!isset($_SESSION['onPage']))
{
    $page=$_SESSION['onPage'];
    echo($page);
    switch ($page) {
        // case 1:
        //    header('Location: ../view/contactInfo.php');
        //     break;
        case 2:

            header('Location: ../view/businessInfo.php');
            break;
        case 3:
          header('Location: ../view/profileInfo.php');
           break;
         case 4:
            header('Location: ../view/preview.php');
             break;
       
        default:
         
            break;
    }

}

if(isset($_REQUEST['next']))
{
    echo('on nxt');
    $permanentAddress=$_REQUEST['permanentAddress'];
    $currentAddress=$_REQUEST['currentAddress'];
    $division=$_REQUEST['division'];
    $district=$_REQUEST['district'];

    if(!isset($permanentAddress)||$permanentAddress==='')
    {
        $err++;
        echo '<br> <b> Permanent address </b> is required';
    }
    if(!isset($currentAddress)||$currentAddress==='')
    {
        $err++;
        echo '<br> <b> Current address </b> is required';
    }
    if(!isset($division)||$division==='')
    {
        $err++;
        echo '<br> <b> Division </b> is required';
    }
    if(!isset($district)||$district==='')
    {
        $err++;
        echo '<br> <b> District </b> is required';
    }
    if($err>0){
        echo '<br> total <b> error</b> count : <b>'.$err.'</b>';
    }
    $_SESSION['permanentAddress']=$permanentAddress;
    $_SESSION['currentAddress']=$currentAddress;
    $_SESSION['division']=$division;
    $_SESSION['district']=$district;
    $_SESSION['onPage']=2;
    header('Location: ../View/businessInfo.php');
}




?>