<?php
 include('../controller/basicInfo.php')
?>
<head>
<link rel='stylesheet' type="text/css" href="../css/task.css"/>

</head>
<body>
<div class="body">
<div class="header">

<label class="headLabel">bKash</label>
<label class="headSubTitle">1.0</label>
</div>

<div class="nav">
<div class="nav navitem">
    <ul>
        <li>
            <a href="">About Us</a>
        </li>
    </ul>
</div>
</div>

<div class="border Title">
    <label> Basic Info</label>
</div>
<div class="frm">
    <form method="POST" action="" onsubmit="return cv()">
    <table>
        <tr>
            <td>First Name</td>
            <td>
                <input id="firstName" name="firstName"/>
            </td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td>
                <input id='lastName'  name="lastName"/>
            </td>
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td>
                <input type="date" min='01-01-1970' name='dob' id='dob'/>
            </td>
        </tr>
       
        <tr>
            <td>Primary Contact</td>
            <td>
                <input name='primaryContact' id='primaryContact' maxlength="11"/>
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input name='gender' value="male" type="radio"/>
                <label>Male</label>
            </td>
            <td>
                <input name='gender' value="female" type="radio"/>
                <label>Female</label>
            </td>
        </tr>
    </table>
   <button class="button" type="submit" name="next">Next</button>
</form>
</div>

</div>

<script src="../script/custom.js"></script>


</body>