<?php
    require('../controller/deleteAccount.php');
?>
<form action="" method="POST">

  <?php
        if(isset($_SESSION['due']))
        {
            if($_SESSION['due']==0)
            {
                echo '<br><b>'.$_SESSION['usr'].'all of your data will be deleted';
                ?>
                <label >Confirm to Delete</label>
            <input type="submit" name="confirm"/>
                <?php
            }
            else{
                ?>
                <center>
                    <h3>As you have some dues, you cannot delete your account until you pay your dues</h3>
               
                    <a href="../view/dashboard.php">Return to Home</a>
                </center>
               
                <?php
            }
          
        }
    ?>
    

</form>