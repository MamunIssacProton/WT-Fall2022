<?php
session_start();
$err=0;
if(isset($_REQUEST['preview']))
{
    if(!isset($_REQUEST['month'])||$_REQUEST['month']=='')
    {
        $err++;
        echo '<br>the month is required';

    }
    if(!isset($_REQUEST['provider'])|| $_REQUEST['provider']==='')
    {
        $err++;
        if($_REQUEST['provider']=='')
        {
            echo '<br>the provider should not be empty';
        }
        else{
           echo '<br>the provider is required'; 
        }
        
    }
    
    if(!isset($_REQUEST['amount'])||$_REQUEST['amount']===''||$_REQUEST['amount']<100)
    {
        $err++;
        if($_REQUEST['amount']<100){
            echo '<br> the amount should be minimum 100 tk';

        }
        echo '<br> the amount is required';
    }
    if($_REQUEST['amount']> $_SESSION['balance'])
    {
        $err++;
        echo 'you dont have enough balance to complete this transaction';
    }
    if($err==0)
    {
         $bill=json_decode($_SESSION['billTransaction'],true);

         $ebill=array(
        'recipientNumber'=>$bill['recipientNumber'],
        'recipientName'=>$bill['recipientName'],
        'billtype'=>$bill['billtype'],
        'subscription'=>$bill['subscription'],
        'payOfMonth'=>$_REQUEST['month'],
        'provider'=>$_REQUEST['provider'],
        'amount'=>$_REQUEST['amount'],
        'paidBy'=>$_SESSION['usr']
        );
        setcookie('eBillTransaction',json_encode($ebill,JSON_PRETTY_PRINT,time()+120));
        unset($_SESSION['billTransaction']);
      
        header('Location: ../view/payBillConfirmation.php');
    }
 


}

?>