<?php
include('../controller/transactionHistory.php');
?>
<body>
<form method="POST" action="">
    <label>Back to History</label>
    <input type="submit" name="back"/>
</form>
<?php
    if(isset($_SESSION['trhistory']))
    {
    $data = json_decode($_SESSION['trhistory'],true);
  
?>
<center>
    <table>
        <tr>
            <td>
                <label>Reciever &nbsp;</label>
             
            </td>
            <td>
                <label>Amount &nbsp;</label>
               
            </td>
            <td>
                <label>Date &nbsp;</label>
              
            </td>
        </tr>
        
  <?php

    foreach($data as $transaction)
    {
        echo '<tr><td><label>'.$transaction['reciever'].'&nbsp;</label></td>'.'<td><label>&nbsp;'.$transaction['amount'].'&nbsp;</label></td>'
       .'<td><label>'.date('Y-m-d, H:M:S',$transaction['time']).'&nbsp;</label></tr>'
        .'</tr>';
    }
    ?>
    </table>
</center>
    <?php  
    }
    else
    {
    echo '<center><h3>You dont have a History session.</h3></center>';
    }
?>
</body>