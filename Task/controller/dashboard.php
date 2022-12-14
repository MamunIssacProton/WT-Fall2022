<?php
require('../model/db.php');
session_start();
$db = new db();
$conn = $db->Connect();
$dirUsersData='usersData';
$balanceSheets='balanceSheets';
$firstName='';
$lastName='';
if( isset($_SESSION['usr']))
{
    if($db->CheckTableExist($conn,$dirUsersData))
    {
        $res = $db->GetUserDataByID($conn, $_SESSION['usr']);
        if($res->num_rows==1)
        {
            foreach($res as $r=>$user)
            {
                $firstName = $user['firstName'];
                $lastName = $user['lastName'];
            //    echo ($firstName);
            }
        }
        $sheet = $db->GetBalanceSheetByUserID($conn, $_SESSION['usr']);
        if($sheet->num_rows==1)
        {
          foreach($sheet as $sh=>$s)
          {
           
            $_SESSION['balance']=$s['availableBalance'];
            $_SESSION['limit']=$s['currentLimit'];
            $_SESSION['totalLimit']=$s['totalLimit'];
            $_SESSION['due']=$s['due'];
                
          }

            echo ('<div class="account-container">
 <label>Your Account Balance  Info</label>
  <div class="line"></div>
  <label>Current Balance : '. $_SESSION['balance'].' BDT'.'</label>'.
  '<label>Current Limit : '. $_SESSION['limit'] .' BDT'.'</label>'.
  '<label>Due : '.$_SESSION['due'].' BDT</label>'.
  '<div class="line"></div>
</div> ');

        }
    }
    echo "<p>". $_SESSION['usr']. "Welcome to the dashboard</p>";
   
}
else{
    header('Location: ../view/login.php');
}
 if(isset($_REQUEST['del']))
    {
        echo 'should delete';
    }
?>