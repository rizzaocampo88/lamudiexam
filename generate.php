<link rel="stylesheet" href="style.css" type="text/css" />
<form method="post" action="add-data.php">

<table width="500px" align="center" border="0">
<tr>
<td colspan="3"><img src="images/logo.png" /></td>
</tr>
<tr>
<td>How many task will you do today?</td>
</tr>

<tr>
<td>
<input type="text" name="no_of_rec" placeholder="how many records u want to enter ? ex : 1 , 2 , 3 , 5" maxlength="2" pattern="[0-9]+" required />
</td>
</tr>

<tr>
<td style="padding-top:30px;">
<div style="float:left"><button type="submit" name="btn-gen-form" id="ebtn">Generate</button></div>
<div id="backbtn"><a href="index.php">Go Back</a></div>
</td>
</tr>

</table>

</form>
