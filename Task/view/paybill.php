<?php
    include('../view/navhead.php');
    include('../controller/paybill.php');
?>
<body>
<form method="POST" action="">

    <table>
        <tr>
            <td>
                <label>Choose the bill type</label>
            </td>
         
            <td>
              
                <label>Electricity</label>
                <input type="radio" value="electricity" name="billtype" />
            </td>
            <td>
                <label>Gas</label>
                <input type="radio" value="gas" name="billtype"/>
            </td>
         
        </tr>  

        <tr>
            <td>
                <label>SubscriptionType</label>
            </td>
       
         <td>
               <label>Pre-Paid</label>
               <input type="radio" value="prepaid" name="subscription"/>
            </td>
            <td>
                <label>Post-Paid</label>
                <input type="radio" value="postpaid" name="subscription"/>

            </td>
           
        </tr> 
        <tr>
          <td>
                <label>Recipient Name</label>
             

          </td>
         <td>
               <input name="recipientName"/>
         </td>

        </tr>
        <tr>
        <td>
        <label>Recipient Phone Number</label>
        
       </td>
       <td>
        <input name="recipientNumber"/>
       </td>
        </tr>
        <tr>
            <td>
                <label>Next</label> 
                <input type="submit" name="next">
            </td>
          
        </tr>
       
    </table>
</form>
    
</body>
