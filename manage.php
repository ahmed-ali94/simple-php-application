<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<script  src="scripts/enhancements.js"></script>
	<meta charset="utf-8">
	<meta name="description" content="Manage EOI">
	<meta name="keywords" content="Manage, HR, SQL ">
	<meta name="author" content="Ahmed Ali">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Manage EOI</title>

</head>

<body>
<?php

if (isset($_SESSION['user_id'])) {
	echo "<p> Logged In As"," ", $_SESSION['user_id'], " ", "</p>";
}
else {
header("Location: login.php"); //redirect to the login page
}
include 'header.inc';

?>


<h1>HR Application Management</h1>

<form method="post" action="list_all.php">
<fieldset>
<legend> List all EOI</legend>
<input type="submit" value="List all" class="form_button">
</fieldset>
</form>

<form method="post" action="list_all_reference.php">
<fieldset>
<legend> List based on reference number </legend>
<label for="eoi_reference"> Enter Job Reference Number: </label>
<input type="text" name="eoi_reference" id="eoi_reference" required="required" >
<input type="submit" value="Search" class="form_button">
</fieldset>
</form>

<form method="post" action="list_all_applicant.php">
<fieldset>
<legend> List based on Applicant Name </legend>
<label for="eoi_applicant"> Enter Applicant First Name: </label>
<input type="text" name="eoi_applicant_fname" id="eoi_applicant_fname" >
<label for="eoi_applicant"> Enter Applicant Last Name: </label>
<input type="text" name="eoi_applicant_lname" id="eoi_applicant_lname" >
<p><input type="submit" value="Search" class="form_button"></p>
</fieldset>
</form>

<form method="post" action="list_all_delete.php">
<fieldset>
<legend> Delete based on reference number </legend>
<label for="eoi_delete"> Enter Job Reference Number: </label>
<input type="text" name="eoi_delete" id="eoi_delete" required="required" >
<input type="submit" value="Search" class="form_button">
</fieldset>
</form>

<form method="post" action="update_status.php">
<fieldset>
<legend> Change Status </legend>
<label for="eoi_status"> Enter Status (New,Current,Final) : </label>
<input type="text" name="eoi_status" id="eoi_status" required="required">
<label for="eoi_num"> Enter Applicant EOI Number:</label>
<input type="text" name="eoi_num" id="eoi_num" required="required">
<input type="submit" value="Update" class="form_button">
</fieldset>
</form>
</div>
</div>
<?php 
include 'footer.inc';
?>
</body>
</html> 