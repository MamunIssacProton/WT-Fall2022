<?php

session_start();
$userAvailable=false;
$dirAd='activeDirectory';
$dirBanksInfo='banksInfo';
$dirPayrollAccounts='payrollAccounts';
$dirPayrollTrnsactions='payrollTransactions';
$dirCashTransactions='cashTransactions';
$dirBillTransactions='billTransactions';
$dirUsersData='usersData';
$dirAgentsData='agentsData';
$dirBalanceSheets='balanceSheets';
$dirLoans='loans';
$dirContactInfo="contactInfo";
$dirBasicInfo = "basicInfo";
$dirBusinessInfo="businessInfo";
$users=array();
$usersData=array();
$AgentData=array();
$BalanceSheet=array();
$initialBalance=0;
$transferLimit=0;
$agentID=random_int(1,5000);
$db = new db();
$conn=$db->Connect();
if(isset($_REQUEST['save']))
{
    echo 'proceeding';
 
    if($db->CheckTableExist($conn,$dirAd))
    {
         echo ('exist');
         $db->AddAgentToActiveDirectory($conn,$_SESSION['agentNumber'],
                                        $_SESSION['password'],
                                        $_SESSION['secAns']);

    }
    else{
      //create table and insert data
    }
   
    #region create usesrData 
    if($db->CheckTableExist($conn,$dirUsersData))
    {
             $db->AddToUserData($conn, $_SESSION['agentNumber'],
                       $_SESSION['firstName'], $_SESSION['lastName'],
                       $_SESSION['dob'], $_SESSION['permanentAddress'],
                       $_SESSION['currentAddress'], $_SESSION['primaryContact'],
                       $_SESSION['division'], $_SESSION['district'],$_SESSION['email']
              );
       

    }
    
    // // #endRegion UsersData



     #region create AgentsData

    if($db->CheckTableExist($conn,$dirAgentsData))
    {
    echo '<br>on ag';
    $db->AddAgentData($conn, $_SESSION['agentNumber'], 
                       $agentID, $_SESSION['businessName'],
                       $_SESSION['businessAddress'],$_SESSION['tier']
                      );

        
    }
    else{
    }
     #endRegion Agents Data



    #region create BalanceSheets

    if($db->CheckTableExist($conn,$dirBalanceSheets))
    {
        //$existBalanceSheet=json_decode($dirBalanceSheets,true);
        $tier=$_SESSION['tier'];
        switch ($tier) {
            case 'basic':
                $initialBalance=1000;
                $transferLimit=40000;
                break;
            case 'standard':
                $initialBalance=10000;
                $transferLimit=45000;
                break;
            case 'premium':
                $initialBalance=30000;
                $transferLimit=50000;
                break;
            case 'gold':
                $initialBalance=50000;
                $transferLimit=500000;
                break;
            default:
          
                break;
        }
       

    $db->AddBalanceSheet($conn,$_SESSION['agentNumber'],
                         $initialBalance,$transferLimit,
                         $transferLimit,0
                        );
    }
    else{
    }

    #endRegion BalanceSheets

     #region create Loans

    if($db->CheckTableExist($conn,$dirBusinessInfo))
    {
       
        $db->AddBusinessInfo($conn,$_SESSION['agentNumber'],$_SESSION['businessName'],
                          $_SESSION['businessAddress'],$_SESSION['tier']
                            );

        echo '<br> business successfully created';
    
    }
    if($db->CheckTableExist($conn,$dirContactInfo))
    {
       

    $db->AddContactInfo($conn,$_SESSION['agentNumber'],$_SESSION['permanentAddress'],
                       $_SESSION['currentAddress'],$_SESSION['division'],$_SESSION['district']
                        );
      
         echo '<br> contact successfully created';
      
    }
    if($db->CheckTableExist($conn,$dirBasicInfo))
    {
    $db->AddBasicInfo(
      $conn, $_SESSION['agentNumber'], $_SESSION['firstName'], $_SESSION['lastName'],
      $_SESSION['dob'],$_SESSION['primaryContact'],$_SESSION['gender']
    );
          echo '<br> basic successfully created';
    

    }

   session_destroy();
   header('Location: ../view/login.php');
   // }

}
?>