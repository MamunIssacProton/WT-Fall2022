<?php
if(isset($_REQUEST['submit']))
{
    if(isset($_REQUEST['firstName'])&&$_REQUEST['lastName']!='')
    {
        echo '<br> Valid';
    }
    else{
        echo '<br> not valid';
    }
}
?>