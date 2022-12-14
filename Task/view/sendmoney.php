<?php
    include('../view/navhead.php');
    require('../controller/sendmoney.php');
    include('../controller/accountStatus.php');
?>

<form action="" method="POST">
    <table>
        <tr>
            <td>
                <label>Reciever's Number</label>
            
            </td>
            <td>
                <input type="tel"  name="reciever"/>
            </td>
        </tr>
        <tr>
            <td>
                <label>Amount</label>
               
            </td>
            <td>
                 <input type="number" name="amount"/>
            </td>

        </tr>
        <tr>
            <td>
                  <label>Preview</label>
            </td>
            <td>
                 <input type="submit" name="preview"></input>
            </td>
          
        </tr>
    </table>
</form>