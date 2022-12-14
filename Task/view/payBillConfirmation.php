<?php
require('../view/navhead.php');
include('../controller/payBillConfirmation.php');
?>
<body>
<form action="" method="POST">
    <?php
    if(!isset($_COOKIE['eBillTransaction'])&&!isset($_COOKIE['egasBillTransaction'])){
     ?>
       <label>You dont have cookie or it  has expired</label>
    
    <?php
    }else{
        ?>
    <table>
        <tr>
            <td>
                
                <label>confirm</label>
            
            </td>
            <td>
                <input type="submit"  name="confirm"/>
            </td>
        </tr>
        <tr>
            <td>
                
                <label>Cancel Transaction</label>
            
            </td>
            <td>
                <input type="submit"  name="cancel"/>
            </td>
        </tr>
    </table><?php
    }?>
</form>
</body>