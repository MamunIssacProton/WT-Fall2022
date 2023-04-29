<?php
include('../controller/cssTest.php');
?>
<body>
    
   <form method="POST"  action=""  onsubmit="return checkValidity()" >
   <table>
       <tr>
           <td>First  Name</td>
           <td>
               <input name="firstName" id="firstName"/>
           </td>
       </tr>
       <tr>
           <td>Last Name</td>
           <td>
               <input name="lastName" id="lastName"/>
           </td>
       </tr>
       <tr>
           <td>Email</td>
           <td>
               <input  name='email' id="email"/>
           </td>
       </tr>
       <tr>
           <td>Password</td>
           <td>
               <input  name='password' id-="password" />
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
           <td>

           <input type="submit" name="submit"></input>
           </td>
       </tr>
      
   </table>
   </form>

  <script src="../script/custom.js"></script>
</body>