<?php
$errorCounted=0;
$userAvailable=false;
$users=array();
if(isset($_REQUEST["registration"]))
{
    
    if(isset($_REQUEST["username"])||isset($_REQUEST["password"])||isset($_REQUEST["firstname"])||isset($_REQUEST["lastname"])||isset($_REQUEST["contactno"])||isset($_REQUEST["retyped_password"])||isset($_REQUEST["address"])||isset($_REQUEST["profilepic"]))
    {
      if(($_REQUEST["username"])=="")
      {
        echo "<br> username is requried";
        $errorCounted++;
      }
      if(($_REQUEST["password"]==""))
      {
        echo "<br> password is requried";
        $errorCounted++;
      }
      if(($_REQUEST["firstname"])=="")
      {
        echo "<br> first name is requried";
        $errorCounted++;
      }
      if(($_REQUEST["lastname"])=="")
      {
        echo "<br> last name is requried";
        $errorCounted++;
      }
      if(($_FILES["profilepic"]["name"])=="")
      {
        echo "<br>profile pic  is requried";
        $errorCounted++;
      }
      if($_REQUEST["contactno"]=="")
      {
        echo "<br> contact no is required";
        $errorCounted++;
      }
      if ($_REQUEST["contactno"]!=""&&strlen($_REQUEST["contactno"])!=11)
      {
        echo "<br> <b> contact no is not valid<b> use 11 digit number";
        $errorCounted++;
      }
      if ($_REQUEST["password"]!=""&&strlen($_REQUEST["password"])<5)
      {
        echo "<br> <b> password legth is not valid<b> use min of 5 chars";
        $errorCounted++;
      }
     if($errorCounted>0)
     {
       echo "<br>total <b>".$errorCounted."</b> Error has occured" ;
       return;
     }
      
          
          $filename=$_FILES["profilepic"]["tmp_name"];
          $img=getimagesize($filename);
          $imagename=$_FILES["profilepic"]["name"];
          
           if($_FILES["profilepic"]["size"]<1)
          {
            echo "<br>procceed faild...the profile pic size is less than 1 bytes";
           
          }
          else if($img==false)
          {
              echo "<br> the file is not an image";
              $errorCounted++;
              echo "<br>total <b>".$errorCounted."</b> Error has occured" ;
              return;
          }
        
             if(file_exists("../data/users.json")){
               $data=json_decode(file_get_contents("../data/users.json"));
         
            foreach ($data as $user=>$usr)
            {
             $users[$user]=array($usr);
              if($user==$_REQUEST["username"])
              {
              
                echo $_REQUEST["username"]."has already exist, please login or try with another username";
                return;
              }
              else{
                $userAvailable=true;  
              }
             
            }
              
             }
             else{
              $userAvailable=true;
             
             }
           
              if($_REQUEST["password"]==$_REQUEST["retyped_password"]&& $userAvailable==true && move_uploaded_file($filename,$imagename))    
               { 
                echo "<br>".$_REQUEST["username"]." is availbale <br>";
                $users[$_REQUEST["username"]]=array(
                            "Username"=>$_REQUEST["username"],
                            "Password"=>$_REQUEST["password"],
                            "FirstName"=>$_REQUEST["firstname"],
                            "LastName"=>$_REQUEST["lastname"],
                            "ContactNo"=>$_REQUEST["contactno"],
                            "ProfilePic"=>"../view/".$imagename
                          );
                  $pretty=json_encode($users,JSON_PRETTY_PRINT);
           
                if(file_put_contents("../data/users.json",$pretty))
                { 
               
                    echo "<br>User created successfully";
                    $users=null;
                    $userAvailable=false;
                }
                else
                {
                    echo "ops, something went wrong";
                }
        
              }
      }
}


?>