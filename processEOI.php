<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
	<script  src="scripts/enhancements.js"></script>
	<meta charset="utf-8">
	<meta name="description" content="Manage EOI">
	<meta name="keywords" content="Manage, HR, SQL ">
	<meta name="author" content="Ahmed Ali">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Process EOI </title>
</head>
<body>
<?php include 'header.inc';
    
 ?>
    <h1> Expression of Intrest Confirmation </h1>

<?php

error_reporting(E_ERROR | E_PARSE); // Disables non-critical errors

function sanatise_input($data) { // function that sanitises data for securty purposes/code injection.
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST["referenceid"])) { // reference id
    $referenceid = $_POST["referenceid"];
   
}

else {
    header ("location: apply.php");
}


 if (isset($_POST["fname"])) { // fname
     $fname = $_POST["fname"];
    
 }

 else {
     header ("location: apply.php");
 }

 if (isset($_POST["lname"])) { // lname
    $lname = $_POST["lname"];
   
}

else {
    header ("location: apply.php");
}

if (isset($_POST["dob"])) { // dob
    $dob = $_POST["dob"];
   
}
else {
    header ("location: apply.php");
}

$gender = "";   // gender 

if (isset($_POST["male"])) {
    $gender = $gender. "Male";
}

if (isset($_POST["female"])) {
    $gender = $gender. "Female";
}
if (isset($_POST["other"])) {
    $gender = $gender. "Other";
}

if (isset($_POST["street"])) { // street
    $street = $_POST["street"];
   
}

else {
    header ("location: apply.php");
}

if (isset($_POST["suburb"])) { // suburb
    $suburb = $_POST["suburb"];
   
}

else {
    header ("location: apply.php");
}

if (isset($_POST["state"])) { // state
    $state = $_POST["state"];
   
}

else {
    header ("location: apply.php");
}

if (isset($_POST["pcode"])) { // post code
    $pcode = $_POST["pcode"];
   
}

else {
    header ("location: apply.php");
}

if (isset($_POST["Email"])) { // e-mail
    $email = $_POST["Email"];
   
}

else {
    header ("location: apply.php");
}

if (isset($_POST["ph"])) { // phone number
    $ph = $_POST["ph"];
   
}

else {
    header ("location: apply.php");
}



$skills = "";   // skills 

if (isset($_POST["leadership"])) {
    $leadership_skill = $leadership_skill. "Leadership";
}

if (isset($_POST["communication"])) {
    $communication_skill = $communication_skill. "Communication";
}
if (isset($_POST["teamwork"])) {
    $teamwork_skill = $teamwork_skill. "Teamwork";
}
if (isset($_POST["computer"])) {
    $computer_skill = $computer_skill. "Computer";
}
if (isset($_POST["otherskill"])) {
    $skills = $skills. "Other";
}

if (isset($_POST["comment"])) { // Comment box
    $comment = $_POST["comment"];
   
}

else {
    header ("location: apply.php");
}


$referenceid = sanatise_input($referenceid); // Sanatise all inputs
$fname = sanatise_input($fname);
$lname = sanatise_input($lname);
$dob = sanatise_input($dob);
$street = sanatise_input($street);
$suburb = sanatise_input($suburb);
$pcode = sanatise_input($pcode);
$email = sanatise_input($email);
$ph = sanatise_input($ph);
$comment = sanatise_input($comment);

$errMsg = "";

if ($referenceid == "") {
    $errMsg = "<p> You must enter the refernce ID!</p>";
    echo "<p> $errMsg </p>";
}

else if (!preg_match("/^[a-zA-Z0-9]{5}$/", $referenceid)) {
    $errMsg = "<p> Only five Apha Numeric Charcters allowed in the reference id</p>";
    echo "<p> $errMsg </p>";
}

if ($fname == "") {
    $errMsg = "<p> You must enter your first name!</p>";
    echo "<p> $errMsg </p>";
}

else if (!preg_match("/^[a-zA-Z]{1,20}$/", $fname)) {
    $errMsg = "<p> Only Alpha characters allowed in your firstname, max 20 characters</p>";
    echo "<p> $errMsg </p>";
}


if ($lname == "") {
    $errMsg = "<p> You must enter your last name!</p>";
    echo "<p> $errMsg </p>";
}

else if (!preg_match("/^[a-zA-Z]{1,20}$/", $lname)) {
    $errMsg = "<p> Only Alpha characters allowed in your last name!, max 20 characters</p>";
    echo "<p> $errMsg </p>";
}



$dmy = split("/", $dob); // splits the dob variable into an array. To get the birth year 
$birthyear = $dmy[2];
$currentyear = date("Y"); // inbuilt php date function
$age = $currentyear - $birthyear;


if ($dob == "") { // Age reg exp 
    $errMsg = "<p> You must enter your date of birth!</p>";
    echo "<p> $errMsg </p>";
}

if (!preg_match("/^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/", $dob)) { // match dd/mm/yyyy
    $errMsg = "<p> You must enter a valid integer in the form of dd/mm/yyyy!</p>";
    echo "<p> $errMsg </p>";
}

else if ($age < 15 || $age > 80) {
    $errMsg = "<p> Age cannot be less than 15 or greater than 80!</p>";
    echo "<p> $errMsg </p>";
}



if ($gender == "") {
    $errMsg = "<p> You must select a gender!</p>";
    echo "<p> $errMsg </p>";
}


if ($street == "") {
    $errMsg = "<p> You must enter your street!</p>";
    echo "<p> $errMsg </p>";
}

else if (!preg_match("/^.{1,40}$/", $street)) {
    $errMsg = "<p> Max 40 characters!</p>";
    echo "<p> $errMsg </p>";
}


if ($suburb == "") {
    $errMsg = "<p> You must enter your suburb!</p>";
    echo "<p> $errMsg </p>";
}

else if (!preg_match("/^.{1,40}$/", $suburb)) {
    $errMsg = "<p> Max 40 characters!</p>";
    echo "<p> $errMsg </p>";
}



if ($pcode == "") {
    $errMsg = "<p> You must enter your post code!</p>";
    echo "<p> $errMsg </p>";
}

else if (!preg_match("/^\d{4}$/", $pcode)) {
    $errMsg = "<p> Max 4 digit post code!</p>";
    echo "<p> $errMsg </p>";
}


if ($state == "") {
    $errMsg = "<p> You must select your state!</p>";
    echo "<p> $errMsg </p>";
}

$pattern= '';

switch ($state) { // case statement to match state with post code with unique regex.
	case 'Please Select':
		return false;
	case 'vic': 
		$pattern = "/(3|8)\d+/";
		break;
	case 'nsw':
		$pattern = "/(1|2)\d+/";
		break;
	case 'qld':
		$pattern = "/(4|9)\d+/";
		break;
	case 'nt':
		$pattern = "/0\d+/";
		break;
	case 'wa':
		$pattern= "/6\d+/";
		break;
	case 'sa':
		$pattern = "/5\d+/";
		break;
	case 'tas':
		$pattern= "/7\d+/";
		break;
	case 'act':
		$pattern = "/0\d+/";
		break;
}


if (!preg_match($pattern,$pcode)) {
    $errMsg = "<p> Post Code and State Dont Match!</p>";
    echo "<p> $errMsg </p>";
}


if ($email == "") {
    $errMsg = "<p> You must enter your e-mail!</p>";
    echo "<p> $errMsg </p>";
}

else if (!preg_match("/.+\@.+\..+/", $email)) {
    $errMsg = "<p> must enter valid e-mail!</p>";
    echo "<p> $errMsg </p>";
}


if ($ph == "") {
    $errMsg = "<p> You must enter your phone number!</p>";
    echo "<p> $errMsg </p>";
}

else if (!preg_match("/^(?:\s*\d){8,12}$/", $ph)) {
    $errMsg = "<p> must enter valid e-mail!</p>";
    echo "<p> $errMsg </p>";
}


if ( $skills == "Other" and $comment == "")
{
    $errMsg = "<p> Other Skill has been selected, please insert your skills in the textbox!</p>";
    echo "<p> $errMsg </p>";
}

 if ($errMsg == '') {

require_once ("settings.php");

$conn = @mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
    echo "<p> Database connection error.</p>";
}

else {
    $sql_table = "eoi";
}

$uniqueID = uniqid(); // In built php function that generates a unique id based on time. 

$query = "INSERT INTO $sql_table (EOInumber, Position_Reference, EOI_Status, First_Name, Last_Name, DOB, Gender, Street, Suburb, Region, Post_Code, Email, Phone, Skill_1, Skill_2, Skill_3, Skill_4, Other) VALUES ('$uniqueID','$referenceid', 'New','$fname','$lname','$dob', '$gender', '$street', '$suburb', '$state', '$pcode', '$email', '$ph', '$leadership_skill', '$communication_skill','$teamwork_skill', '$computer_skill', '$comment')";

$result = mysqli_query($conn, $query);

if (!$result) {
    echo "<p> Something is wrong with", $result, "</p>";
}

else {
    echo "<p class=\"sql_msg\"> Expression of Intrest has been submitted</p>";
    echo "<p class=\"sql_msg\"> Your Applicant Reference ID is:"," ", $uniqueID, "</p>";
    echo "<p class=\"sql_msg\"><a class=\"redirect\" href=\"index.php\">Home Page</a></p>"; // redirect home page
}

mysqli_close($conn);
    
}

?>
</div>
</div>
<?php 
include 'footer.inc';
?>
</body>
</html>