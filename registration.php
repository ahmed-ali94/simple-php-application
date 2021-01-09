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

<h1>Sign Up</h1>

<form method="post" action="create_user.php" validate="novalidate">
<fieldset>
<legend> Sign Up</legend>
<p><label for="sign_up_username"> Enter User Name: </label>
<input type="text" name="sign_up_username" id="sign_up_username" required="required" ></p>
<p class="signup_msg">Username Requirements:
    <ul class="signup_list">
    <li>Minimum of 1 Uppercase Character</li>
    <li>Between 5-10 characters</li>
    <li>Letters Only</li>
    </ul>
    </p>
<p><label for="sign_up_pw"> Enter Password: </label>
<input type="password" name="sign_up_pw" id="sign_up_pw" required="required" ></P>
<p class="signup_msg">Password Requirements:
    <ul class="signup_list">
    <li>Between 5 to 10 Characters</li>
    <li>Minimum of 1 Uppercase Character</li>
    <li>Letters Only</li>
    </ul>
    </p>
<p><input type="submit" value="Sign Up" class="form_button"></p>
</fieldset>
</form>

</div>
</div>
<?php 
include 'footer.inc';
?>
</body>
</html> 