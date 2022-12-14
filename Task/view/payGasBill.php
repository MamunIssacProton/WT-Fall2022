<?php
   include('../controller/payGasBill.php')
?>

<body>
    <h1>Pay Gas Bill</h1>
    <form method="POST" action="">
    <?php
    if(isset($_SESSION['billTransaction']))
    {
         $transaction=json_decode($_SESSION['billTransaction'],true);
        $subs=  $transaction['subscription'];
        if($subs=='prepaid')
        {
            $today=date('Y-m-d');
            echo '<label>Select the month of payment (Prepaid)    </label>';
            echo  '<input type="date" name="month"'.'max="'.$today.'"'. '/>';
        }
        else{
            $lastmonth=date(('Y-m-d'),strtotime('-1 months'));
           
            echo '<label>Select the month of payment (post-padid)    </label>';
            echo  '<input type="date" name="month"'.'max="'.$lastmonth.'"'. '/>';
        }
        // $lastmonth=date(('Y-m-d'),strtotime('-1 months'));
        // echo $lastmonth;
    }
   
    ?>
    <table>
        <tr>
            <td>
                <label>Select Provider</label>
            </td>
            <td>
                <select name="provider">
                 <option value="">None</option>
                 <option value="titash">Titas Gas</option>
                 <option value="meghna">Meghna Gas</option>
                 <option value="gas Ignitr">Gas Ignitr</option>
                </select>
               
            </td>
        </tr>
        <tr>
            <td><label>Amount : </label></td>
            <td><input name="amount"/></td>
        </tr>
    </table>
    <label>Preview</label>
    <input type="submit" name="preview"/>
    </form>
</body>