<?php

include_once 'dbcon.php';

if(isset($_POST['chk'])=="")
{
?>
<script>
alert('Please select atleast one!');
window.location.href='index.php';
</script>
<?php
}
$chk = $_POST['chk'];
$chkcount = count($chk);

?>
<title>Lamudi Exam - To Do List</title>
<form method="post" action="update_mul.php">
<link rel="stylesheet" href="style.css" type="text/css" />
<table width="500px" align="center" border="0">
<tr>
<td colspan="3"><img src="images/logo.png" /></td>
</tr>
<?php
for($i=0; $i<$chkcount; $i++)
{
$noteid = $chk[$i];
$res=$SQLConn->query("SELECT * FROM todolist WHERE noteid=".$noteid);
while($row=$res->fetch_array())
{
?>
<tr>
<td align="center">
<input type="hidden" name="noteid[]" value="<?php echo $row['noteid'];?>" />

</td>
<td><input type="text" name="nl[]" value="<?php echo $row['note'];?>" class="textbox"/></td>
</tr>
<?php
}
}
?>
<tr>
<td colspan="2">
<div style="float:left; margin-right:5px;"><button type="submit" name="savemul" id="abtn">Update all</button></div>&nbsp;
<div id="backbtn"><a href="index.php">cancel</a></div>
</td>
</tr>
</table>
</form>
