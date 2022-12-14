<?php
require('../model/db.php');
session_start();
$dirBalanceSheet='balanceSheets';
$dirBillTransaction='billTransactionHistory';
$dirgasBillTransaction='gasbillTransactionHistory';
$err=0;
$db=new db();
$conn=$db->Connect();
if(isset($_COOKIE['eBillTransaction']))
{
    $bill=json_decode($_COOKIE['eBillTransaction'],true);
    $recipientNumber=$bill['recipientNumber'];
    $recipientName=$bill['recipientName'];
    $billType=$bill['billtype'];
    $subscription=$bill['subscription'];
    $payOfMontn=$bill['payOfMonth'];
    $provider=$bill['provider'];
    $amount=$bill['amount'];
    $balanceAfterPayment=$_SESSION['balance']-$amount;
    $limitAfterPayment= $_SESSION['limit']-$amount;
    $usrBalanceSheet=array();
    $balanceSheet=array();
    if($db->CheckTableExist($conn,$dirBalanceSheet)&&$db->CheckTableExist($conn,$dirBillTransaction))
    {
        if($db->CheckBillPaymentValidity($conn,$_SESSION['usr'],$amount))
        {
             echo '<br> Please complete this transacton in 120 secs';
             echo '<br> recipt reciver : '.$recipientName;
             echo '<br> recipient number : '.$recipientNumber;
             echo '<br> bill payment for the month : '.$payOfMontn;
             echo '<br> amount : '.$amount;
             echo '<br> connection type : '.$subscription;
             echo '<br> your balance after transaction : '.$balanceAfterPayment;
             echo '<br> your monthly limit after transaction : '.$limitAfterPayment;
    
           
        }
        else{
            $err++;
            '<br> sorry you have not sufficient balance or your monthly limit has exceed';
        }
       
        
    }
    else{
        $err++;

        echo '<br>could not proceed as the balance sheet has not found';
    }
    
    if(isset($_REQUEST['cancel']))
    {
       
             setcookie('eBillTransaction','',-60);
             header('Location: ../view/dashboard.php');
        
      
    }

    if(isset($_REQUEST['confirm'])&&$err===0)
    {
        echo '<br> transaction should be proceed';

       
        $db->AddBillTransactionHistory($conn,$_SESSION['usr'],
                                        $recipientNumber,$recipientName,$billType,$subscription,$payOfMontn,
                                        $provider,$amount,$balanceAfterPayment,$limitAfterPayment);

      $db->UpdateBalanceSheetByUserID($conn,$_SESSION['usr'],$balanceAfterPayment,
                                        $limitAfterPayment ,$_SESSION['totalLimit'],
                                        $_SESSION['due']
            );             

        
      setcookie('eBillTransaction','',-60);
       header('Location: ../view/dashboard.php');
    }

} 
if(isset($_COOKIE['egasBillTransaction']))
{
    echo 'on gas bill';
    $bill=json_decode($_COOKIE['egasBillTransaction'],true);
    $recipientNumber=$bill['recipientNumber'];
    $recipientName=$bill['recipientName'];
    $billType=$bill['billtype'];
    $subscription=$bill['subscription'];
    $payOfMontn=$bill['payOfMonth'];
    $provider=$bill['provider'];
    $amount=$bill['amount'];
    $balanceAfterPayment=$_SESSION['balance']-$amount;
    $limitAfterPayment= $_SESSION['limit']-$amount;

    if($db->CheckTableExist($conn,$dirBalanceSheet))
    {
        echo '<br> Please complete this transacton in 120 secs';
        echo '<br> recipt reciver : '.$recipientName;
        echo '<br> recipient number : '.$recipientNumber;
        echo '<br> bill payment for the month : '.$payOfMontn;
        echo '<br> amount : '.$amount;
        echo '<br> connection type : '.$subscription;
        echo '<br> your balance after transaction : '.$balanceAfterPayment;
        echo '<br> your monthly limit after transaction : '.$limitAfterPayment;
        
        
    }
    else{
        $err++;

        echo '<br>could not proceed as the balance sheet has not found';
    }
  
    if(isset($_REQUEST['cancel']))
    {
        setcookie('egssBillTransaction','',-60);
        header('Location: ../view/dashboard.php');
    }

    if(isset($_REQUEST['confirm'])&&$err===0)
    {
        echo '<br> transaction should be proceed';

        if($db->CheckBillPaymentValidity($conn,$_SESSION['usr'],$amount))
        {
            $db->AddGasBillTransactionHistory($conn,$_SESSION['usr'],
            $recipientNumber,$recipientName,$billType,$subscription,$payOfMontn,
            $provider,$amount,$balanceAfterPayment,$limitAfterPayment);


            $db->UpdateBalanceSheetByUserID($conn,$_SESSION['usr'],$_SESSION['balance']-$amount,
                                            $_SESSION['limit']-$amount,$_SESSION['totalLimit'],
                                            $_SESSION['due']
                );
        }
       setcookie('egasBillTransaction','',-60);
       header('Location: ../view/dashboard.php');
    }
}
?>