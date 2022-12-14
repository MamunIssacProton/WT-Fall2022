<?php

    include("../controller/registration.php");

?>
<head>
<link rel='stylesheet' type="text/css" href="../css/task.css"/>
</head>
<body class="body">
    <form method="POST" action="" enctype="multipart/form-data">
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
                <label>FirstName</label>
            </td>
            <td>
                 <input name="firstname"/>
            </td>
        </tr>
        <tr>
            <td>
                <label>LastName</label>
            </td>
            <td>
                 <input name="lastname"/>
            </td>
        </tr>
        <tr>
            <td>
                <label>Contact Number</label>
            </td>
            <td>
                 <input type="number" name="contactno"/>
            </td>
        </tr>
        <tr>
            <td>
                <label>Password</label>
            </td>
            <td>
                <input name="password"/>
            </td>
            <td>
                <label>retype Password</label>
            </td>
            <td>
                <input name="retyped_password"/>
            </td>
            <td>
                <input type="file" name="profilepic"/>
            </td>
        </tr>
        <!-- <tr>
            <td>
                <label>Profession</label>
            </td>
            <td>
                <label>Student</label>
                <input type="checkbox" name="student" value="student"/>
            </td>
            <td>
                <label>Teacher</label>
                <input type="checkbox" name="teacher" value="teacher"/>
            </td>
            <td>
                <label>Engineer</label>
                <input type="checkbox" name="engineer" value="engineer"/>
            </td>
        </tr> -->
        </table>
  
        <tr>
            <td>
                <input type="submit" name="registration"></input>
            </td>
        </tr>
    </form>
</body>