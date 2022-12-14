<?php
$hasError=0;
session_start();
if(isset($_REQUEST['next']))
{
    if(!isset($_REQUEST['billtype'])||$_REQUEST['billtype']=='')
    {
        $hasError++;
            echo '<br> bill type is required';
    }
    
    if(!isset($_REQUEST['subscription'])||$_REQUEST['subscription']=='')
    {
        $hasError++;
            echo '<br> subscription is required';
    }
  
    if(!isset($_REQUEST['recipientName'])|| $_REQUEST['recipientName']=='')
    {
         $hasError++;
            echo '<br> recipent name is reqired';
    }
   
    if(!isset($_REQUEST['recipientNumber'])|| $_REQUEST['recipientNumber']=='')
    {
        $hasError++;
        echo '<br> recipent phone number is required';
    }
    else{
        if(strlen($_REQUEST['recipientNumber'])!=11)
        {
            $hasError++;
            echo '<br> please enter a valid recipient phone number';
        }
    }
    if($hasError==0)
    {
        $billTransaction=array(
            'recipientNumber'=>$_REQUEST['recipientNumber'],
            'recipientName'=>$_REQUEST['recipientName'],
            'billtype'=>$_REQUEST['billtype'],
            'subscription'=>$_REQUEST['subscription']
        );
        $_SESSION['billTransaction']=json_encode($billTransaction,JSON_PRETTY_PRINT);
       switch ($_REQUEST['billtype']) {
        case 'electricity':
             header('Location: ../view/payElectricityBill.php');
            break;
        case 'gas':
            header('Location: ../view/payGasBill.php');
            break;
        default:
            # code...
            break;
       }
      
       

    }
}

?>