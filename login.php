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
<?php include 'header.inc';
    
 ?>

<h1>Login</h1>

<form method="post" action="login_validate.php" validate="novalidate">
<fieldset>
<legend> Login In</legend>
<p><label for="login_username"> Enter User Name: </label>
<input type="text" name="login_username" id="login_username" required="required" ></p>
<p><label for="login_pw"> Enter Password: </label>
<input type="password" name="login_pw" id="login_pw" required="required" ></P>
<p><input type="submit" value="Log In" class="form_button"></p>
</fieldset>
</form>
</div>
</div>
<?php 
include 'footer.inc';
?>
</body>
</html> 