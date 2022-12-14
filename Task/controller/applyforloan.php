<?php
session_start();

$dirLoanHistory='../data/loanHistory.json';
$dirBalanceSheet='../data/balanceSheets.json';
if($_SESSION['due']!=0 || $_SESSION['balance']>500)
{
    echo '<center><h1><br> currently you are not eligible for loan </h1></center>';
    return;
}
if(isset($_REQUEST['apply']))
{
    if(isset($_REQUEST['amount'])&&$_REQUEST['amount']==='')
    {
        echo '<br>please select a valid amount ';
    }
    else
    {
        if(file_exists($dirBalanceSheet))
        {
            $balanceSheets=json_decode(file_get_contents($dirBalanceSheet),true);

            $sheet=$balanceSheets[$_SESSION['usr']];
            $sheet['availableBalance']=$_SESSION['balance']+$_REQUEST['amount'];
            $sheet['limit']=$_SESSION['limit'];
            $sheet['totalLimit']=$_SESSION['totalLimit'];
            $sheet['due']=$_REQUEST['amount'];
            $balanceSheets[$_SESSION['usr']]=$sheet;
            $loans=array();
            $lid=rand(1,1000);
            $history=array(
                'loanAmount'=>$_REQUEST['amount'],
               'requestedBy'=>$_SESSION['usr'],
                'time'=>time()
            );
            if(file_exists($dirLoanHistory))
            {
                $loans=json_decode(file_get_contents($dirLoanHistory),true);
            }
               $loans[$lid]=($history);
               if(file_put_contents($dirBalanceSheet,json_encode($balanceSheets,JSON_PRETTY_PRINT)) &&
                    file_put_contents($dirLoanHistory,json_encode($loans,JSON_PRETTY_PRINT))
                 )
                {   $_SESSION['balance']=$_SESSION['balance']+$_REQUEST['amount'];
                    $_SESSION['due']=$_REQUEST['amount'];
                    
                    header('Location: ../view/dashboard.php');
                }
                else{
                    echo '<br> something went wrong while updating the balance sheet and loan sheets';
                }
       
        }
    }
}
if(isset($_REQUEST['cancel']))
{
    header('Location: ../view/dashboard.php');
}
?>