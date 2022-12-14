<?php
require('../model/db.php');
$db = new db();
$conn = $db->Connect();

session_start();
$dirBalanceSheet='balanceSheets';
$dirTransactionHistory='transactionHistory';
if(isset($_SESSION['usr']))
{
    if(isset($_COOKIE['sendMoneyTransaction']))
    {
        
        $data=json_decode($_COOKIE['sendMoneyTransaction'],true);
        
        $reciever=$data['reciever'];
        $amount=$data['amount'];
        $remaining=$_SESSION['balance']-$amount;
        $limit=$_SESSION['limit']-$amount;
        echo '<br> Recievers phone number : ';
      echo $data['reciever'];
      echo '<br>';
      echo 'money to be transfered : '. $data['amount'].' BDT';
      echo '<br> after transaction,<b> your remaining balance will be : '.$remaining.' BDT';
      echo '<br> your limit will be : '.$limit.' BDT';
        
       if(isset($_REQUEST['confirm']))
    {
            $id = random_int(10, 12000);
            $db->AddTransactionHistory($conn,$id, $_SESSION['usr'], $reciever, $amount,time());

             $db->UpdateBalanceSheetByUserID($conn,$_SESSION['usr'],
                                                    $remaining,$limit,$_SESSION['totalLimit']
                                                    ,$_SESSION['due']);
                header('Location: ../view/dashboard.php');

    }
    }
    else{
        echo '<br><b>Sorry your cookies has expired</b>';
        echo '<br><a href='.'../view/dashboard.php'.'>'.'Back to the homepage'.'</a>';
    }
   
}
?>
