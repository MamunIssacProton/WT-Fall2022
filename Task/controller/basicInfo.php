<?php
session_start();
$err=0;

// if(isset($_SESSION['onPage']))
// {
//     $page=$_SESSION['onPage'];
//     switch ($page) {
//         case 1:
//            header('Location: ../view/contactInfo.php');
//             break;
//         case 2:
//             header('Location: ../view/businessInfo.php');
//             break;
//         case 3:
//           header('Location: ../view/profileInfo.php');
//            break;
//          case 4:
//             header('Location: ../view/preview.php');
//              break;
       
//         default:
         
//             break;
//     }
// }
// else{
//     if(isset($_REQUEST['next']))
//     {
//         $_SESSION['onPage']=0;
//         $firstName=$_REQUEST['firstName'];
//         $lastName=$_REQUEST['lastName'];
//         $dob=$_REQUEST['dob'];
//         $primaryContact=$_REQUEST['primaryContact'];
//         $gender=$_REQUEST['gender'];
//         if(!isset($firstName)||$firstName==="")
//         {
//             $err++;
//             echo '<br> <b> first name </b> is required';
//         }
//         if(!isset($lastName)||$lastName==="")
//         {
//             $err++;
//             echo '<br> <b> last name </b> is required';
//         }
    
//         if(!isset($dob)||$dob==="")
//         {
//             $err++;
//             echo '<br> <b> Date of Birth </b> is required';
//         }
//         if(!isset($primaryContact)||$primaryContact==="")
//         {
//             $err++;
//             echo '<br> <b> first name </b> is required';
//         }
//         if(!isset($gender)||$gender==='')
//         {
//             $err++;
//             echo '<br> gender is required';
//         }
//         if($err>0){
//             echo '<br> total <b> error</b> count : <b>'.$err.'</b>';
//         }
//        $_SESSION['firstName']=$firstName;
//        $_SESSION['lastName']=$lastName;
//        $_SESSION['dob']=$dob;
//        $_SESSION['primaryContact']=$primaryContact;
//        $_SESSION['gender']=$gender;
//        $_SESSION['onPage']=1;
//        header('Location: ../View/contactInfo.php');
//     }
// }

?>