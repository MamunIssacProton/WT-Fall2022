<?php
 require('../controller/businessInfo.php')
?>
<body>
<form method="POST" action="">
   
   <table>
       <tr>
           <td>Business/Agent Name</td>
           <td>
               <input name="businessName"/>
           </td>
       </tr>
       <tr>
           <td>Business/Shop Address</td>
           <td>
               <input name="businessAddress"/>
           </td>
       </tr>
       <tr>
           <td>Desired Agent Number</td>
           <td>
               <input  name='agentNumber' maxlength="11"/>
           </td>
       </tr>
      
       <tr>
           <td><Label>Transaction Tier</Label></td>
           <td>
               <input value="basic"  name='tier' type="radio"/>
               <label>(Basic) 20000 - 40000 BDT per month</label>
           </td>
           <td>
               <input value="standard"  name='tier' type="radio"/>
               <label>(Standard) 40001 - 45000 BDT per month</label>
           </td>
           <td>
               <input value="premium" name='tier' type="radio"/>
               <label>(Premium) 45001 - 50000 BDT per month</label>
           </td>
           <td>
               <input value="gold" name='tier' type="radio"/>
               <label>(GOLD) 50001 - 500000 BDT per month</label>
           </td>
       </tr>
       
   </table>
  <button type="submit" name="next">Next</button>
</form>
</body>