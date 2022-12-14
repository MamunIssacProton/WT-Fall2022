<?php
      include('../view/navhead.php');
    include('../controller/applyforloan.php');
  
?>
<body>

    <form method="POST" action="">
        
           <?php
        $loanOptions=array();
        if(isset($_SESSION['due'])){
            
            if($_SESSION['due']==0 && $_SESSION['balance']<500)
            { 
                $loanLimit=$_SESSION['totalLimit']*.5;
            
                for ($i=1; $i<=5 ; $i++) { 
                    $loanOptions[$i]=
                        $loanLimit/$i;
                    
                }


                $keys=array_keys($loanOptions);
                ?>
                  <center>
                      <h1>You're eligible to apply for loan</h1>
                  <select name="amount">
                      <option value="">Choose your loan option</option>
                      <?php
                      foreach($loanOptions as $lo=>$loan)
                       {
                          echo '<option value='.$loan.'>'.$loan.'&nbsp;BDT</option>';
                      
                       }
                      ?>
                  </select>
                 <button name="cancel">Cancel</button>
                 <input type="submit" name="apply"/>
                  </center>
                <?php

            }



        }
     
    
    
    ?>
    
    </form>
 
</body>