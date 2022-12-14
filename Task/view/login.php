<?php  include("../controller/login.php");
?>
<head>
    <link type="text/css" rel='stylesheet' href='../css/styles.css'/>

</head>
  <form method="POST" action="">
      <div class="container">
     <div class="brand-logo"></div>
  <div class="brand-title">bKash</div>
  <div class="inputs">
    <label>Phone Number</label>
    <input name="username"  placeholder="01xx-xxxx-xxx" />
    <label>PASSWORD</label>
    <input type="password" name="password" placeholder="your password" />
    <button type="submit" name="login">LOGIN</button>
    <a href="../view/basicInfo.php">Register as a Agent</a>
  </div>
 
  </form>