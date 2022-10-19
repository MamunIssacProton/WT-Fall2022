<?php

    include("../controller/login.php");

?>
<body>
    <form method="POST" action="">
        <table>
        <tr>
            <td>
                <label>Username</label>
            </td>
            <td>
                 <input name="username"/>
            </td>
        </tr>
        <tr>
            <td>
                <label>Password</label>
            </td>
            <td>
                 <input name="password"/>
            </td>
        </tr>
        
        </table>
  
        <tr>
            <td>
                <input type="submit" name="login"></input>
            </td>
        </tr>
    </form>
</body>