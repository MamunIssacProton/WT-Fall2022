<?php
$data=$_REQUEST['search'];
echo 'recieved : ' . $data;
include('../model/db.php');
$db=new db();
$conn=$db->Connect();
$res = $db->GetUserDataByID($conn,$data);
if($res->num_rows>0)
{
    $ln = '';
    foreach($res as $r)
    {
        $ln = $r['lastName'];
    }
    echo 'last name ' . $ln;
}
?>