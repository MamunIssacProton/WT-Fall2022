<?php
include('../controller/loanHistory.php');
?>
<body>
<form method="POST" action="">
    <label>Back to History</label>
    <input type="submit" name="back"/>
</form>
<?php
    if(isset($_SESSION['eLoanHistory']))
    {
    $data = json_decode($_SESSION['eLoanHistory'],true);
  
?>
<center>
    <table>
        <tr>
            
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
      
        echo '<td><label>&nbsp;'.$transaction['loanAmount'].'&nbsp;</label></td>'
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