<?php
session_start();
$dirBalanceSheet='../data/balanceSheets.json';
if(isset( $_SESSION['usr']))
{
    if(isset($_REQUEST['preview']))
{
    if(isset($_REQUEST['reciever']) && $_REQUEST['reciever']!='' && strlen($_REQUEST['reciever'])==11 &&
        isset($_REQUEST['amount']) && $_REQUEST['amount']!='' && $_REQUEST['amount']>50 &&
        $_REQUEST['reciever']!=$_SESSION['usr']
        
        )
    {
        
          if($_SESSION['balance']>=$_REQUEST['amount']&&
           $_SESSION['limit']!=0)
           {  
            $expire=time()+300;
            $transaction=array(
                'amount'=>$_REQUEST['amount'],
                'reciever'=>$_REQUEST['reciever'],
                'expire'=>$expire
            );
           
            // echo($expire);
           //  echo date('m/d/Y H:i:s',$expire);
          
           //  $dt = new DateTime("now", new DateTimeZone('Asia/Dhaka'));
            
            //  echo $dt->format('m/d/Y, H:i:s');
          
             setcookie('sendMoneyTransaction',json_encode($transaction,JSON_PRETTY_PRINT),$expire);
             header('Location: ../view/confirmSendMoney.php');
           }

        
        else{
            echo '<br> the database has been removed or deleted, please try to create new agent';
        }
    }
    else{
        // if($_REQUEST['reciever']=='')
        // {
        //     
        // }
        // if(strlen($_REQUEST['reciever'])!=11)
        // {
        //     echo '<br> please enter a recievers valid number';
        // }
        echo '<br> please enter the valid reciever number';
        if($_REQUEST['amount']=='')
        {
            echo '<br> please enter the amount to be transfer';

        }
        if($_REQUEST['amount']<50)
        {
            echo '<br> please enter the minimum transfer amount 50 tk ';
        }
    }
    
}
}
else
{
    header('Location: ../view/login.php');
}


?>