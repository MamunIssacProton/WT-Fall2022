<?php
$errorCount=0;
if(isset($_REQUEST["login"]))
{

    if(file_exists("../data/users.json"))
    {

        if(isset($_REQUEST["username"])|| isset($_REQUEST["password"]))
        {
            if($_REQUEST["username"]=="")
            {
                echo "<br> Username is required";
                $errorCount++;
            }
            if($_REQUEST["password"]=="")
            {
                echo "<br> Password is required";
                $errorCount++;
            }
            if($_REQUEST["password"]!=="" && strlen($_REQUEST["password"])<5)
            {
                echo "<br>password length is invalid, please use your correct password, is must require min of 5 chars";
            }
            $data=json_decode(file_get_contents("../data/users.json"));
          
            foreach ($data as $user=>$usr)
            {
              $users[$user]=array($usr);
              if($user==$_REQUEST["username"]&&$usr->Password==$_REQUEST["password"])
              {
                
                echo $_REQUEST["username"]."<b>welcome to the dashboard";
                return;
              }
              
           }


        }
        else{
           
              echo "<br> please try with valid username and password with valid legth<br>";
             
            
        }
    }
    else{
        echo "<br>the database file might be deleted, plase try to register with new one and try again later";
    }
}



?>