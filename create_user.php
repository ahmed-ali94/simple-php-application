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

<h1>Account Confirmation </h1>

<?php

error_reporting(E_ERROR | E_PARSE); // Disables non-critical errors

function sanatise_input($data) { // function that sanitises data for securty purposes/code injection.
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST["sign_up_username"])) {
    $userid = sanatise_input($_POST["sign_up_username"]);
    $password = sanatise_input($_POST["sign_up_pw"]);
}
else {
    header ("location: registration.php"); // if no data is inputed into the form, thsi will send the user back. 
}

$errMsg = "";

if ($userid == "") {
    $errMsg = "<p> You must enter a user name !</p>";
    echo "<p> $errMsg </p>";
    echo "<p class=\"sql_msg\"><a class=\"redirect\" href=\"registration.php\">Back</a></p>";
}

else if (!preg_match('/^[A-Za-z][A-Za-z0-9]{5,10}$/', $userid)) {
    $errMsg="<p>User Name must Contain:\n"
    ."<ul>\n"
    ."<li>Must start with letter</li>\n"
    ."<li>5-10 characters</li>\n"
    ."<li>Letters and numbers only</li>\n"
    ."</ul>\n"
    ."</p>\n";
    echo "$errMsg"; 
}


if ($password == "") {
    $errMsg = "<p> You Must Enter a Password!</p>";
    echo "<p> $errMsg </p>";
}

else if (!preg_match('/^(?=.*[A-Z]).{5,10}$/', $password)) {
    $errMsg = "<p>Password Must Contain:\n"
    ."<ul>\n"
    ."<li>Between 5 to 10 Characters</li>\n"
    ."<li>Minimum of 1 Uppercase Character</li>\n"
    ."<li>Letters Only</li>\n"
    ."</ul>\n"
    ."</p>\n";
    echo "$errMsg"; 
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



$query = "INSERT INTO $sql_table (Userid, pw) VALUES ('$userid','$password')"; // sql query 

$result = mysqli_query($conn, $query); // pass in the connection to database and your query into the php fuction.


if (!$result) {
    echo "<p> Something is wrong with", $query, "</p>";

    echo "<p> Cannot Create Account</p>";
}

else {
    echo "<p class=\"sql_msg\">Succesfully Created Account!</p>";
}

$query_two = "SELECT * FROM $sql_table WHERE Userid='$userid' AND pw='$password'";

$result_two = mysqli_query($conn, $query_two);

if (!$result_two) {
    echo "<p> Something is wrong with", $query_two, "</p>";

    echo "<p> Cannot Create Account</p>";
}

else {
    echo "<table class=\"timetable\">\n";
    echo "<tr>\n"
    ."<th scope=\"col\">User Name</th>\n"
    ."<th scope=\"col\">Password</th>\n"
    ."</tr>\n";

    while ($row = mysqli_fetch_assoc($result_two)) {
        echo "<tr>\n";
        echo "<td>", $row["Userid"], "</td>\n";
        echo "<td>", $row["pw"], "</td>\n";
        echo "</tr>\n";
    }

    echo "</table>\n";

    $rowcount=mysqli_num_rows($result_two);
    echo "<p class=\"sql_msg\">Retrieved"," ", $rowcount, " ", "rows.</p>";
    echo "<p class=\"sql_msg\"><a class=\"redirect\" href=\"manage.php\">Manage</a></p>";
    mysqli_free_result($result_two);
    mysqli_close($conn); // close connection to database

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