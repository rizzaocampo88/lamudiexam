<?php
include_once 'dbcon.php';
$noteid = $_POST['noteid'];
$nl = $_POST['nl'];
$chk = $_POST['chk'];
$chkcount = count($noteid);
for($i=0; $i<$chkcount; $i++)
{
$SQLConn->query("UPDATE todolist SET note='$nl[$i]' WHERE noteid=".$noteid[$i]);
}
header("Location: index.php");
?>
