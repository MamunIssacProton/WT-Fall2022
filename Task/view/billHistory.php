<?php
include('../controller/billHistory.php');

?>

<body>
<form method="POST" action="">    
<label>Back to History</label>
    <input type="submit" name="back"/>
</form>
<?php
    if(isset($_SESSION['eBillHistory']))
    {
    $data = json_decode($_SESSION['eBillHistory'],true);
  
?>
<center>
    <table>
        <tr>
            <td>
                <label>Recipient Number &nbsp;</label>
             
            </td>
            <td>
                <label>Recipient Name &nbsp;</label>
               
            </td>
            <td>
                <label>Provider &nbsp;</label>
              
            </td>
            <td>
                <label>Amount &nbsp;</label>
            </td>
            <td>
                <label>Subscription</label>
            </td>
        </tr>
        
  <?php

    foreach($data as $transaction)
    {
        echo '<tr><td><label>' . $transaction['recipientNumber'] . '&nbsp;</label></td>' . '<td><label>&nbsp;' . $transaction['recipientName'] . '&nbsp;</label></td>'.
        '<td><label>'. $transaction['provider']. '</label></td>' .
         '<td><label>'.$transaction['amount'].'</label></td>' .
        '<td><label>'.$transaction['subscription'].'&nbsp;</label></tr>'
       . '</tr>';
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
