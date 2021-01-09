<!DOCTYPE html>

<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<script  src="scripts/enhancements.js"></script>
	<meta charset="utf-8">
	<meta name="description" content="Enhancements">
	<meta name="keywords" content="Enhancements ">
	<meta name="author" content="Ahmed Ali">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> PHP Enhancements</title>

</head>

<body>
<?php include 'header.inc';
    
    ?>

<h1>PHP Enhancements</h1>

<section id="enhancement_1">
<h2>Sign Up and Login </h2>
<p>This website includes a ‘Sign up’ page which collects username and password through $_post that is sent to create_user.php. The php page sanitizes incoming input and validates the data based on preg_match. Next, a connection is made with the database which will store all the user accounts through settings.php. Using an SQL ‘Insert’ statement the $_post data is assigned to the database. Using the mysqli_fetch_assoc function, displays the user’s credentials through a table format. I also made use of mysqli_num_rows to display the number of rows retrieved. Moreover, a login page was also created. The login page collets data through $_post. This data is then sent to the login_validate.php page where it is first sanitized and then validated. The script matches the user credentilas with any existing records in the database using the SQL ‘Where’ statement.  By using mysqli_num_rows fuction iwas able to create an if statement that proceeds if record found = 1. If the num_rows = 1 then _session storage variable is created that stores the username variable. The user is then sent to the manage.php page with the accompanying session storage variable that is checked in the manage page, if no session storage found user cannot access the manage.php page.  The sign-up page can be found <a class="link" href="registration.php">Here </a>. The login page can be found <a class="link" href="login.php">Here </a>. I used <a class="link" href="https://www.w3schools.com/php/php_sessions.asp">w3schools </a> to learn more about session storage.</p>
</section>

</div>
</div>
<?php 
include 'footer.inc';
?>
</body>
</html> 