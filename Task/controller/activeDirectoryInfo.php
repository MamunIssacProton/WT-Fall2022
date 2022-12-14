<?php
$err=0;
session_start();
if(isset($_REQUEST['preview']))
{
   if(isset($_REQUEST['email'])&&$_REQUEST['email']==='')
   {
       $err++;
      echo '<b> email </b> is required';
   
   }
   if(isset($_REQUEST['password'])&&$_REQUEST['password']==='')
   {
    $err++;
    echo '<br> <b> password </b> is required';
    
   }
   if(isset($_REQUEST['repassword'])&& $_REQUEST['repassword']==='')
   {
    $err++;
    echo '<br> <b>Please retype your password</b> ';
   }

  
   if(isset($_REQUEST['secAns'])&& $_REQUEST['secAns']==='')
   {
    $err++;
   
    echo '<br> <b> Security Answer </b> is required';
   }
   
 if($err>0)
 {
   echo '<br> total <b> error</b> count : <b>'.$err.'</b>';
 }
 $email=$_REQUEST['email'];
 $password=$_REQUEST['password'];
 $retypePassword=$_REQUEST['repassword'];
 $secAns=$_REQUEST['secAns'];
 if($password!=$retypePassword)
 {
   echo '<br>';
   echo 'password match error!';
 }
 $_SESSION['email']=$email;
 $_SESSION['password']=$password;
 $_SESSION['secAns']=$secAns;
 $_SESSION['onPage']=4;
 header('Location: ../view/previewRegistration.php');


}

?>