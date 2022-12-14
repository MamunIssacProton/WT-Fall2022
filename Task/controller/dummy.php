<?php
include('../model/db.php');
$db = new db();
$conn=$db->Connect();
if(isset($_REQUEST['submit']))

    //echo 'submitted';
    // $db->AgentAvailable($conn, '01969798555');
    // echo '<br>';
    // echo $db;
//     $r=  $db->AgentAvailable($conn, '01969798559');
//     //echo($r->num_rows);
//     $fa=mysqli_fetch_array($r);
//     echo '<br>';
//     echo(($r->num_rows));
{
     //  $t = $db->CheckTableExist($conn, 'activeDirectory');
     // if($t)
     // {
     //      echo 'exist';
     // }
     // else{
     //      echo 'not exist';
     // }
    // $db->RestoreDataFromTable($conn,'activeDirectory');
  // $db->RestoreDataFromTable($conn, 'agentsData');

  // $db->CreateIfNotExist($conn, 'uff');
   $db->DropTableIfExist($conn, "pro");
   // $db->RestoreDataFromTable($conn,'balanceSheets');
   // $db->RestoreDataFromTable($conn, 'basicInfo');
   // $db->RestoreDataFromTable($conn, 'businessInfo');
   // $db->RestoreDataFromTable($conn, 'contactInfo');
   // $db->RestoreDataFromTable($conn, 'usersData');
  // echo 'deleted';
}
    
   // print_r( $res);
    // if(count(array($res))>0)
    // {
    //     echo 'found';
    // }
    // else{
    //     echo 'not found';
    // }

   // $db->AddDummy($conn, $_REQUEST['dta']);

//    foreach($db as $res=>$re)
//    {
//         echo 'r';
//    }
   // $db->Disconnect($conn);



?>