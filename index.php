<?php
include_once 'dbcon.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lamudi Exam - To Do List</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<script src="js-script.js" type="text/javascript"></script>
</head>

<body>
<form method="post" name="frm">
<table width="500px" align="center" border="0">
<tr>
<td colspan="2"><img src="images/logo.png" /></td>
</tr>
<tr>
<th style="width:5%">&nbsp;</th>
<th style="width:95%">List</th>
</tr>
<?php
$res = $SQLConn->query("SELECT * FROM todolist");
$count = $res->num_rows;

if($count > 0)
{
while($row=$res->fetch_array())
{
?>
<tr>
<td><input type="checkbox" name="chk[]" class="chk-box" value="<?php echo $row['noteid']; ?>" /></td>
<td style="text-align:left;"><?php echo $row['note']; ?></td>
</tr>
<?php
}
}
else
{
?>
<tr>
<td colspan="3"> No Fields Available</td>
</tr>
<?php
}
?>

<?php

if($count > 0)
{
?>
<tr>
<td colspan="3">
<div id="add_rec"><a href="generate.php">Add ...</a></div>

<div id="btns">
<label id="actions">
<button type="button" onClick="edit_records();" alt="edit" id="ebtn">edit </button>
<button type="button" onClick="delete_records();" alt="delete" id="dbtn">delete </button>
</label>
</div>
</td>
</tr>
<?php
}

?>

</table>
</form>
</body>
</html>
