<?php

include("../controller/dashboard.php");
include('../controller/accountStatus.php');
?>
<head>
<link rel='stylesheet' type="text/css" href="../css/styles.css"/>
</head>
<body >
<header class="header">
 
   <table >
    
     <tr>
        <td>
            <a href="../view/dashboard.php">Home</a>
        </td>
        <td></td>
        <td></td>
        <td></td>
      <td>
         <a href="../view/sendmoney.php">Send Money</a>
    
      </td>
   <td> </td>
   <td></td>
   <td></td>
      <td>
       <a href="../view/paybill.php"> Pay Bill</a>
     </td>
  <td></td>
  <td> </td>
   <td></td>
      <td>
       <a href="../view/applyforloan.php"> Appy for Loan</a>
     </td>
     <td></td>
     <td> </td>
   <td></td>
      <td>
        <a href="../view/history.php">History
        </a>
        </td>
        <td></td>
        <td> </td>
      <td></td>
        <td>
            <a href="../controller/logout.php">Logout</a>
        </td>

        <td></td>
        <td> </td>
      <td></td>
        <td>
            <a href="../view/deleteAccount.php">Delete My Account</a>
        </td>
     </tr>
   </table>

    <hr>
</header>
<!-- <header>
  <div class="neu">
   
  
   
     <!-- <ul>
      <li >
        <a  href="../view/dashboard.php">Home</a>
      </li>

      <li class='nav-item'>
      <a class="nav-link" href="../view/sendmoney.php">Send Money</a>
      </li>


      <li class='nav-item'>
      <a class="nav-link" href="../view/paybill.php"> Pay Bill</a>
      </li>


      <li class='nav-item'>
      <a class="nav-link" href="../view/applyforloan.php"> Appy for Loan</a>
      </li>

      <li class='nav-item'>
      <a class="nav-link" href="../view/history.php">History </a>
      </li>

      <li class="nav-item">
      <a class="nav-link" href="../controller/logout.php">Logout</a>
      </li>
      <li class="nav-item">
      <a class="nav-link"  href="../view/deleteAccount.php">Delete My Account</a>
      </li>
  
    </ul> -->
 
<!-- </div>
</header>
<div class="dash-container">
<label >Hey <?php echo '<b>'. $firstName.'</b>'?></label>
<label>Welcome to dashboard</label>
<label>Your Agent Number is : <br><br><?php echo $_SESSION['usr']?></label>

</div>
<?php


?> -->

</body>