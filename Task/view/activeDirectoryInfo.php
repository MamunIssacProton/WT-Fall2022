<?php
include '../controller/activeDirectoryInfo.php'
?>
<body>

<form method="POST" action="">
   
   <table>
       <tr>
           <td>Primary Email Address</td>
           <td>
               <input name="email"/>
           </td>
       </tr>
         <tr>
           <td>Enter your Password</td>
           <td>
               <input type="password" name="password"/>
           </td>
       </tr>
      
       <tr>
           <td>Re-type Password</td>
           <td>
               <input type="password" name='repassword' />
           </td>
       </tr>
       <tr>
           <td>Security Question</td>
           <td>What's the room number of your Web Tech lab class?</td>
           <td>
               <input name="secAns"/>
           </td>
       </tr>
       <!-- <tr>
           <td>Date of Birth</td>
           <td>
               <input type="date" min='01-01-1970' name='dob'/>
           </td>
       </tr>
      
       <tr>
           <td>Primary Contact</td>
           <td>
               <input name='primaryContact'/>
           </td>
       </tr>
       <tr>
           <td>Gender</td>
           <td>
               <input name='gender' value="male" type="radio"/>
               <label>Male</label>
           </td>
           <td>
               <input name='gender' value="female" type="radio"/>
               <label>Female</label>
           </td>
       </tr> -->
   </table>
  <button type="submit" name="preview">Preview</button>
</form>

</body>