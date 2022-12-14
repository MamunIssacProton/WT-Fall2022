<?php
  require('../model/db.php');
  require('../controller/previewRegistration.php')

?>
<body>
    <fieldset>
    <legend>Basic Info</legend>

    <table>
        <tr>
            <td>First Name</td>
            <td>
               <label><?php echo $_SESSION['firstName'] ?></label>
            </td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td>
               <label><?php echo $_SESSION['lastName']?></label>
            </td>
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td>
               <label><?php echo $_SESSION['dob'] ?></label>
            </td>
        </tr>
       
        <tr>
            <td>Primary Contact</td>
            <td>
                <label><?php echo $_SESSION['primaryContact'] ?></label>
            </td>
        </tr>
        <tr>
        <td>Gender</td>
            <td>
                <label><?php echo $_SESSION['gender'] ?></label>
            </td>
        </tr>
    </table>
    </fieldset>
    <br></br>

    <fieldset>
        <legend>Contact Info</legend>
        <table>
         <tr>
         <td>Permanent Address</td>
            <td>
                <label><?php echo $_SESSION['permanentAddress'] ?></label>
            </td>
         </tr>
        <tr>
        <td>Current Address</td>
            <td>
                <label><?php echo $_SESSION['currentAddress'] ?></label>
            </td>
        </tr>
        <tr>
        <td>Division</td>
            <td>
                <label><?php echo $_SESSION['division'] ?></label>
            </td>
        </tr>
        <tr>
        <td>District</td>
            <td>
                <label><?php echo $_SESSION['district'] ?></label>
            </td>
        </tr>
       
        </table>
    </fieldset>
<br></br>
    <fieldset>
        <legend>Your BusinessInfo</legend>
        <table>
            <tr>
            <td>Business /Agent  Name</td>
            <td>
                <label><?php echo $_SESSION['businessName'] ?></label>
            </td>
            </tr>
            <tr>
            <td>Business/Shop Address</td>
            <td>
                <label><?php echo $_SESSION['businessAddress'] ?></label>
            </td>
            </tr>
            <tr>
            <td>Agent Number</td>
            <td>
                <label><?php echo $_SESSION['agentNumber'] ?></label>
            </td>
            </tr>
            <tr>
            <td>Transaction Tiert</td>
            <td>
                <label><?php echo $_SESSION['tier'] ?></label>
            </td>
            </tr>
           
        </table>
    </fieldset>
    <br></br>

    <fieldset>
        <legend>Your Profile Info</legend>
        <table>
            <tr>
            <td>Email</td>
            <td>
                <label><?php echo $_SESSION['email'] ?></label>
            </td>
            </tr>
            <tr>
                <td>Security Question: <b>What's the room number of your Web Tech lab class?<b></td>
         
            <td>
          
                <label>Your answer </label>
                <label><b><?php echo $_SESSION['secAns'] ?></b></label>
            </td>
            </tr>
        </table>
         
    </fieldset>
<form method="POST" action="">
    <input type="submit" name="save" />
</form>
  
</body>