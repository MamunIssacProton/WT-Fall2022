<?php
require('../model/db.php');
session_start();
$dirTransactionHistory = 'transactionHistory';
$dirGasBillHistory = 'gasbillTransactionHistory';
$dirBillHistory = 'billTransactionHistory';
$dirLoanHistory = 'loanHistory';
$db = new db();
$conn = $db->Connect();

if(isset($_REQUEST['submit']))
{
    if(isset($_REQUEST['category'])) {
        $category = $_REQUEST['category'];
        switch($category)
        {

            case 'transaction':

                if($db->CheckTableExist($conn,$dirTransactionHistory))
                {
                    $tH = $db->GetSenderTransactionHistory($conn, $_SESSION['usr']);
                  //  $tHistories = json_decode(file_get_contents($dirTransactionHistory),true);
                 
                    $data = array();
                    foreach($tH as $history=>$t)
                    {
                      
                            array_push($data, $t);
                       
                    }
                    if(count($data)==0)
                    {
                        echo '<br><h2>You have no transaction (send money) yet<h2>';
                    }
                    else{
                        $_SESSION['trhistory'] = json_encode($data, JSON_PRETTY_PRINT);
                        header('Location: ../view/transactionHistory.php');
                    }
                }
                else{
                    echo '<br><h3>Sorry the transaction file does not exist</h3>';
                }
                break;

            case 'bill':
                if($db->CheckTableExist($conn,$dirBillHistory))
                {
                    $bills = $db->GetBillTransactionHistoryByID($conn,$_SESSION['usr'],'electricity');
                    $data = array();
                  
                    foreach($bills as $bill=>$t)
                    {
                        
                            array_push($data, $t);
                       
                    }
                    if(count($data)==0)
                    {
                        echo '<br><h3>You dont have electricity bill transaction</h3>';
                    }
                    else{
                       
                       $_SESSION['eBillHistory'] = json_encode($data, JSON_PRETTY_PRINT);
                       header('Location: ../view/billHistory.php');

                    }
                }
                else{
                    echo '<br><h5>The electricity bill does not exist</h5>';
                }
                break;

            case 'gasBill':
                if($db->CheckTableExist($conn,$dirGasBillHistory))
                {
                
                    $bills = $db->GetGasbillTransactionHistoryByID($conn,$_SESSION['usr']);
                    $data = array();
                  
                    foreach($bills as $bill=>$t)
                    {
                       
                            array_push($data, $t);
                    
                    }
                    if(count($data)==0)
                    {
                        echo '<br><h3>You dont have electricity bill transaction</h3>';
                    }
                    else{
                      $_SESSION['eGasBillHistory'] = json_encode($data, JSON_PRETTY_PRINT);
                   
                        header('Location: ../view/gasbillHistory.php');

                    }
                }
                else{
                    echo '<br><h5>The electricity bill does not exist</h5>';
                }
                break;
            case 'loan':
                if($db->CheckTableExist($conn,$dirLoanHistory))
                {
                
                    $loans = $db->GetLoanHistoryByID($conn,$_SESSION['usr']);
                    $data = array();
                  
                    foreach($loans as $loan=>$l)
                    {
                            array_push($data, $l);
                        
                    }
                    if(count($data)==0)
                    {
                        echo '<br><h3>You dont have any loan transaction</h3>';
                    }
                    else{
                        $_SESSION['eLoanHistory'] = json_encode($data, JSON_PRETTY_PRINT);
                   
                       header('Location: ../view/loanHistory.php');
                       
                    }
                }
                else{
                    echo '<br><h5>The Loan history  does not exist</h5>';
                }
                break;
            default:
                break;

        }
    }
}
?>