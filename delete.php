<?php

error_reporting(0);

include_once 'dbcon.php';

$chk = $_POST['chk'];
$chkcount = count($chk);

if(!isset($chk))
{
?>
<script>
alert('Check atleast one task!');
//window.location.href = 'index.php';
</script>
<?php
}
else
{
for($i=0; $i<$chkcount; $i++)
{
$del = $chk[$i];
$sql=$SQLConn->query("DELETE FROM todolist WHERE noteid=".$del);
}

if($sql)
{
?>
<script>
alert('<?php echo $chkcount; ?> Task deleted!');
window.location.href='index.php';
</script>
<?php
}
else
{
?>
<script>
alert('Error while Deleting, TRY AGAIN');
//window.location.href='index.php';
</script>
<?php
}

}
?>
<link rel="stylesheet" href="style.css" type="text/css" />

<table width="500px" align="center" border="0">
<tr>
<td colspan="3"><img src="images/logo.png" /></td>
</tr>

<tr>
<td colspan="2">

<div id="gen_rec"><a href="generate.php">Add New Tasks</a></div>
</td>
</tr>
</table>
