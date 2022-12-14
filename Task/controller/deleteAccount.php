<?php
session_start();
ob_start();
$dirActiveDirectory='../data/activeDirectory.json';
$dirUsersData='../data/usersData.json';
$dirAgentData='../data/agentsData.json';
$dirBalanceSheets='../data/balanceSheets.json';
$hasDue=false;
if(isset($_SESSION['usr']))
{
   
   
     if(isset($_REQUEST['confirm']))
    {   
        ob_end_clean();
        if(file_exists($dirActiveDirectory))
        {
            $balanceSheet=json_decode(file_get_contents($dirBalanceSheets),true);
            if(array_key_exists($_SESSION['usr'],$balanceSheet))
            {
                 $userBalance=$balanceSheet[$_SESSION['usr']];
                 if($userBalance['due']!=0)
                 {
                    echo '<br><b>sorry you cant delete your account until you clear your due</b>';
                    $hasDue=true;
                
                 }
            }
           
            if($hasDue==false)
            {
                unset($balanceSheet[$_SESSION['usr']]);
            $userAd=json_decode(file_get_contents($dirActiveDirectory),true);
            unset($userAd[$_SESSION['usr']]);
            $userData=json_decode(file_get_contents($dirUsersData),true);
            unset($userData[$_SESSION['usr']]);

            

            $agentData=json_decode(file_get_contents($dirAgentData),true);
            unset($agentData[$_SESSION['usr']]);


           if(file_put_contents($dirActiveDirectory,json_encode($userAd,JSON_PRETTY_PRINT)))
           {

            echo '<br><b> users active directorty deleted</b>';
           }
           if(file_put_contents($dirUsersData,json_encode($userData,JSON_PRETTY_PRINT)))
           {
            echo '<br><b> users user data deleted </b>';
           }
           if(file_put_contents($dirBalanceSheets,json_encode($balanceSheet,JSON_PRETTY_PRINT)))
           {
            echo '<br> <b> users balance sheet deleted </b>';
           }
           if(file_put_contents($dirAgentData,json_encode($agentData,JSON_PRETTY_PRINT)))
           {
            echo '<br><b> users agent data deleted </b>';
            session_destroy();
            header('Location: ../view/login.php');
           // echo '<br> <a href=' .'../view/login.php'.'>Return to Login Page</a>';
           }

          }
          

            

           

           

        }

     

      //  echo 'all deleted';
    }

}

?>