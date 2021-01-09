<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<script  src="scripts/enhancements.js"></script>
	<meta charset="utf-8">
	<meta name="description" content="Create User EOI">
	<meta name="keywords" content="Manage, HR, SQL ">
	<meta name="author" content="Ahmed Ali">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> List All EOI</title>

</head>

<body>
<?php include 'header.inc';
    
 ?>

<h1>Login Confirmation </h1>

<?php
 // Disables non-critical errors

function sanatise_input($data) { // function that sanitises data for securty purposes/code injection.
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST["login_username"])) {
    $userid = sanatise_input($_POST["login_username"]);
    $password = sanatise_input($_POST["login_pw"]);
}
else {
    header ("location: login.php"); // if no data is inputed into the form, thsi will send the user back. 
}

$errMsg = "";

if ($userid == "") {
    $errMsg = "<p> You must enter a user name !</p>";
    echo "<p> $errMsg </p>";
    echo "<p class=\"sql_msg\"><a class=\"redirect\" href=\"login.php\">Back</a></p>";
}




if ($password == "") {
    $errMsg = "<p> You Must Enter a Password!</p>";
    echo "<p> $errMsg </p>";
}


if ($errMsg == '') { // begin process if error msg is empty

require_once ("settings.php"); // refers to the settings

$conn = @mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {     // display error connection if unable to connect.
    echo "<p> Database Connection Error!</p>";
}

else {
    $sql_table = "user";
}



$query = "SELECT Userid, pw FROM $sql_table WHERE Userid='$userid' AND pw='$password'"; // sql query 

$result = mysqli_query($conn, $query); // pass in the connection to database and your query into the php fuction.

$rowcount=mysqli_num_rows($result);




if (!$result) {
    echo "<p> Something is wrong with", $query, "</p>";

    echo "<p> Cannot Log In Account</p>";
}


else if ($rowcount == 1) {
        $row = mysql_fetch_assoc($result);
        $_SESSION['user_id'] = $userid;
        mysqli_free_result($result);
        mysqli_close($conn); // close connection to database
        header ("location: manage.php");
        

    }

    else {
        echo "<p class=\"sql_msg\>Invalid login details. Please go back!</p>";
        echo "<p class=\"sql_msg\"><a class=\"redirect\" href=\"login.php\">Back</a></p>";
    }
    
}
?>
</div>
</div>
<?php 
include 'footer.inc';
?>
</body>
</html> 