<?php
class db{
function Connect()
{
        $host='localhost';
        $user = 'root';
        $pass = '';
        $db = 'bkash';
        $conn = new mysqli($host, $user, $pass, $db);
        return $conn;

}
function Disconnect($conn){
  $conn->close();
}


function AuthUser($conn,$userName,$password)
{
                $query = "select username from activeDirectory where ".
                        "username='$userName' and password='$password'";

                $res = $conn->query($query);
                if($res->num_rows==1)
                {
                        return true;
                }
                else{
                        return false;
                }
}
function CheckForLoanAvailability($conn,$uid)
{
                $query = "select * from balanceSheets where userID='$uid' and due=0";
                return $conn->query($query);

}

function GetBillTransactionHistoryByID($conn,$uid,$type)
{
                $qury = "select * from billTransactionHistory where requestedBy='$uid' AND billtype='$type'";
                return $conn->query($qury);

}
function AgentAvailable($conn,$agentNumber)
{
                $query = "select * from activeDirectory where username='$agentNumber'";

              $res= $conn->query($query);
        if($res->num_rows==0)
        {
                        return true;
        }
        else{
                        return false;
        }
        


}

function CheckTableExist($conn,$tableName)
{
        $query="SELECT table_name FROM information_schema.tables WHERE table_type = 'base table' AND TABLE_NAME='$tableName'";
        $res= $conn->query($query);
        if($res->num_rows>0)
        {
                      return  true;
        }
        else{
                        return false;
        }
}
///check table exist or not in db

//SELECT table_name FROM information_schema.tables WHERE table_type = 'base table' AND TABLE_NAME='pro';
function AddAgentToActiveDirectory($conn,$username,
                                   $password,$secAns)
{
                $query = "insert into activeDirectory (username,password,secAns)" .

                        "values ('$username','$password','$secAns')";

              return $conn->query($query);
        
            
}

function AddAgentData($conn,$userID,$agentID,
                     $agentName,$shopAddress,$transactionTier
                     )
{
                $query = "insert into agentsData (userID,agentID,agentName,shopAddress,transactionTier)" .
                        "value ('$userID','$agentID','$agentName','$shopAddress','$transactionTier')";

                echo $query;
                        $conn->query($query);
                echo '<br><b>Added data into agent data</b>';
}

function GetAgentData($conn,$userID)
{
                $query = "select * from agentsData where userID='$userID'";
                return $conn->query($query);
}
function GetBalanceSheetByUserID($conn,$userID)
{
                $query = "select * from balanceSheets where userID ='$userID'";
                return $conn->query($query);
}
function UpdateBalanceSheetByUserID($conn,$userID,$availableBalance,$currentLimit,$totalLimit,$due)
{
                $query = "update balanceSheets set  userID='$userID',availableBalance='$availableBalance',".
                        "currentLimit='$currentLimit',totalLimit='$totalLimit',due='$due' where userID='$userID'";
                echo $query;
                        return $conn->query($query);
}

function AddBalanceSheet($conn,$userID, $availableBalance,
                        $currentLimit,$totalLimit,$due){
                $query = "insert into balanceSheets (userID,availableBalance,currentLimit,totalLimit,due)".
                        "values ('$userID',$availableBalance,$currentLimit,$totalLimit,$due)";
                $conn->query($query);

                echo 'data added balance sheet';

}

function GetSenderTransactionHistory($conn,$sender){
                $query = "select * from  transactionHistory where sender='$sender'";
                return $conn->query($query);
 
}
function GetRecieverTransactionHistory($conn,$reciever)
{
                $query = "select * from transactionHistory where reciever='$reciever'";
                return $conn->query($query);

}

function GetUserDataByID($conn,$id)
{
                $query = "select * from usersData where userID='$id'";
                return $conn->query($query);

}

function GetGasbillTransactionHistoryByID($conn,$id)
{
                $query = "select * from gasbillTransactionHistory where requestedBy='$id'";
                return $conn->query($query);
}
function GetLoanHistoryByID($conn,$id)
{
                $query = "select * from loanHistory where requestedBy='$id'";
                return $conn->query($query);
                
}
function AddContactInfo($conn,$agentNumber,$permanentAddress,
                        $currentAddress,$division,$district
                        )
{
        $query="insert into contactInfo (agentNumber,permanentAddress,currentAddress,division,district)".
                "values ('$agentNumber','$permanentAddress','$currentAddress','$division','$district')";
                return $conn->query($query);

}
 function AddBasicInfo($conn,$agentNumber,$firstName,$lastName,
                        $dob,$primaryContact,$gender)
 {
                $query = "insert into basicInfo (agentNumber,firstName,lastName,dob,primaryContact,gender)".
                         "values ('$agentNumber','$firstName','$lastName','$dob','$primaryContact','$gender')";
                $conn->query($query);
 }

 function AddBusinessInfo($conn,$agentNumber,$businessName,$businessAddress,$transactionTier)
 {
                $query = "insert into businessInfo (agentNumber,businessName,businessAddress,transactionTier)".
                        "values ('$agentNumber','$businessName','$businessAddress','$transactionTier')";
                $conn->query($query);
 }

function AddTransactionHistory($conn,$id,$sender,
                                $reciever,$amount,$time){
                $query = "insert into transactionHistory (id,sender,reciever,amount,time)" .
                        "values ('$id','$sender','$reciever','$amount','$time')";
                $conn->query($query);
                echo $query;
                echo '<br> <b>added data into transaction history</b>';
}

function AddToUserData($conn,$userID,
                        $firstName,$lastName,
                        $dob,$permanentAddress,
                        $currentAddress,$primaryContact,
                        $division,$district,$primaryEmail)
{
                $query = "insert into usersData (userID,firstName,lastName,dob,permanentAddress,currentAddress,primaryContact,division,district,primaryEmail)" .
                        "values ('$userID','$firstName','$lastName','$dob','$permanentAddress','$currentAddress','$primaryContact','$division','$district','$primaryEmail')";
                $conn->query($query);
                echo '<br>';
                echo $query;
                echo '<br><b>Added data into users Data</b>';

}
function AddDummy($conn,$data){
           
     
         $qry = "insert into dummy (data) values ('$data')";
       $res= $conn->query($qry);
        echo 'check '. $res.' ';
        if($res)
        {
                        echo 'ret';  
        }
        else
        {
                echo 'sn';
        }
}
function CheckDummy($conn,$data)
{
                $query = "select * from dummy where data =".
                        "'$data'";

                return $conn->query($query);

}
function UpdateAgentData($conn,$userID,$agentID,
                         $agentName,$shopAddress,$transactionTier)
{
                $query = "update agentsData userID='$userID',agentID='$agentID',agentName='$agentName',shopAddress='$shopAddress',".
                        "transactionTier={$transactionTier}";
                 $conn->query($query);
}
function CheckBillPaymentValidity($conn,$userID,$amount)
{
                $query = "select * from balanceSheets where " .
                        "userID='$userID' and availableBalance>='$amount'";
                $res = $conn->query($query);
                if($res->num_rows==1)
                {
                        return true;
                }
                else{
                        return false;
                }
}

function AddBillTransactionHistory($conn,$requestedBy,$recipientNumber,$recipientName,$billType,
                                   $subscription,$payOfMonth,$provider,$amount,$balanceAfterPayment,$limitAfterPayment
){
                $query = "insert into billTransactionHistory (requestedBy,recipientNumber,recipientName,billtype,subscription,payOfMonth,provider,amount,balanceAfterPayment,limitAfterPayment)".
                        "values('$requestedBy','$recipientNumber','$recipientName','$billType','$subscription','$payOfMonth','$provider','$amount','$balanceAfterPayment','$limitAfterPayment')";
                echo "on bill qry <br>";
                echo $query;
                $conn->query($query);

  }

  function AddGasBillTransactionHistory($conn,$requestedBy,$recipientNumber,$recipientName,$billType,
                                   $subscription,$payOfMonth,$provider,$amount,$balanceAfterPayment,$limitAfterPayment
){
                $query = "insert into gasbillTransactionHistory (requestedBy,recipientNumber, recipientName, billType, subscription,payOfMonth,provider,amount,balanceAfterPayment,limitAfterPayment) " .
                        "values('$requestedBy','$recipientNumber','$recipientName','$billType','$subscription','$payOfMonth','$provider','$amount','$balanceAfterPayment','$limitAfterPayment')";

                $conn->query($query);
                
  }
 function CheckUser($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
 return $result;
 }


 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }
function SearchByName($conn,$name)
{
                $query = "select * from usersData where firstName='$name'";
                return $conn->query($query);
}
 function RestoreDataFromTable($conn,$tableName)
 {
                $query = "TRUNCATE TABLE `$tableName`";
                $r= $conn->query($query);
                echo $r;
                echo "<br> deleted '$tableName' <b></b>";
 }


 function CreateIfNotExist($conn,$table)
 {
                $tbQuery = "SELECT table_name FROM information_schema.tables WHERE table_type = 'base table' AND TABLE_NAME='$table'";
             
                $tres= $conn->query($tbQuery);
                if($tres->num_rows==1)
                {
                        echo $table.' Table exists';
                }
                else{
                        echo "<br> creating table";
                        $qury = "
                        CREATE TABLE `bkash`.`$table` (`recipientNumber` VARCHAR(11) NOT NULL , `recipientName` VARCHAR(20) NOT NULL , `billtype` VARCHAR(20) NOT NULL , `subscription` VARCHAR(20) NOT NULL , `payOfMonth` INT(120) NOT NULL , `provider` VARCHAR(10) NOT NULL , `amount` VARCHAR(6) NOT NULL , `balanceAfterPayment` VARCHAR(10) NOT NULL , `limitAfterPayment` VARCHAR(10) NOT NULL ) ENGINE = InnoDB;
                        ";
                        $res = $conn->query($qury);
                     
                        echo $res;

                }
 }

 function DropTableIfExist($conn,$table)
 {
        $tbQuery = "SELECT table_name FROM information_schema.tables WHERE table_type = 'base table' AND TABLE_NAME='$table'";
             
        $tres= $conn->query($tbQuery);
        if($tres->num_rows==1)
        {
                        $qury = "DROP TABLE `bkash`.`$table`";
               
                $res = $conn->query($qury);
             
                echo "'$table' deleted/droped";
        }
        else{
                echo "<br> table does not exist";
              

        }
 }

}
?>


<!-- 
<?php

//to update data from db, use SET like
//UPDATE tablename SET column='

///nxt mnday 28th qz week 6+8
?> -->