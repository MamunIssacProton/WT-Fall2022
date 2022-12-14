<?php
 include('../controller/contactInfo.php')
?>

<body>

<form method="POST" action="">
   
   <table>
       <tr>
           <td>Permanent Address</td>
           <td>
               <input name="permanentAddress"/>
           </td>
       </tr>
       <tr>
           <td>Current Address</td>
           <td>
               <input name="currentAddress"/>
           </td>
       </tr>
       <tr>
           <td>Division</td>
           <td>
               <input  name='division'/>
           </td>
       </tr>
      
       <tr>
           <td>District</td>
           <td>
               <input name='district'/>
           </td>
       </tr>
       
   </table>
  <button type="submit" name="next">Next</button>
</form>

</body>