<?php
 include('../model/db.php');
 session_start();
$db=new db();
$conn = $db->Connect();
$err=0;
$agentNumberAvailable=false;
$dirActiveDirectory='activeDirectory';
if(isset($_SESSION['onPage']))
{
    $page=$_SESSION['onPage'];
   
    // switch ($page) {
    //     case 1:
    //        header('Location: ../view/contactInfo.php');
    //         break;
    //     case 2:
    //         header('Location: ../view/businessInfo.php');
    //         break;
    //     case 3:
    //       header('Location: ../view/profileInfo.php');
    //        break;
    //      case 4:
    //         header('Location: ../view/preview.php');
    //          break;
       
    //     default:
         
    //         break;
    // }

    switch ($page) {
        case 3:
            header('Location: ../view/activeDirectoryInfo.php');
            break;
        
        default:
            # code...
            break;
    }
}
if(isset($_REQUEST['next']))
{
    if(!isset( $_REQUEST['businessName'])|| $_REQUEST['businessName']==='')
    {
        $err++;
        echo '<br>';
        echo 'Business /agent name is required';
    }
    if(!isset($_REQUEST['businessAddress'])||$_REQUEST['businessAddress']==='')
    {
        $err++;
        echo '<br>';
        echo 'Business / shop address is required';

    }
    if(!isset($_REQUEST['agentNumber']))
    {
        $err++;
        echo '<br>';
        echo 'Agent number is required';
        // if($_REQUEST['agentNumer']>12||$_REQUEST['agentNumer']<11)
        // {
        //     $err++;
        //     echo 'Please enter a valid agent number';
        // }
    }
    if(isset($_REQUEST['agentNumber'])&&strlen($_REQUEST['agentNumber'])!=11)
    {
        $err++;
        echo '<br>please enter a 11 digit valid agent number';
    }
    if(!isset($_REQUEST['tier']))
    {
          $err++;
        echo '<br>';
        echo 'Please select a transaction tier';
    }
   
    if($err>0)
    {
       echo '<br>';
    echo 'total <b> '.$err.'</b> occurs';
     return;

    }
  
    if($db->CheckTableExist($conn,$dirActiveDirectory))
    {   if($db->AgentAvailable($conn,$_REQUEST['agentNumber']))
        {
              echo '<br><b> your agent number </b> is available to register';
            $agentNumberAvailable=true;
        }
       
        else{
            echo '<br><b>your agent number is already registered</b>,Please try with other number';
            $agentNumberAvailable=false;
        }
       
    }
    else
    {
      //  $agentNumberAvailable=true;
        
    }
    if($agentNumberAvailable)
    {
     $busineeName=  $_REQUEST['businessName'];
    $businessAddress=$_REQUEST['businessAddress'];
    $agentNumber=$_REQUEST['agentNumber'];
    $tier=$_REQUEST['tier'];
    $_SESSION['businessName']=$busineeName;
    $_SESSION['businessAddress']=$businessAddress;
    $_SESSION['agentNumber']=$agentNumber;
    $_SESSION['tier']=$tier;
    $_SESSION['onPage']=3;
    header('Location: ../view/activeDirectoryInfo.php');
    }
    else{
        echo '<br><b>'.$_REQUEST['agentNumber'].'is not available</b>';
    }
   

}
?>