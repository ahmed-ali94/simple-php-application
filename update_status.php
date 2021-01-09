<!DOCTYPE html>

<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<script  src="scripts/enhancements.js"></script>
	<meta charset="utf-8">
	<meta name="description" content="List ALL EOI">
	<meta name="keywords" content="Manage, HR, SQL ">
	<meta name="author" content="Ahmed Ali">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Update Status EOI</title>

</head>

<body>
<?php include 'header.inc';
    
 ?>

<h1>Update Status</h1>

<?php

require_once ("settings.php"); // refers to the settings

function sanatise_input($data) {
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


$conn = @mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {     // display error connection if unable to connect.
    echo "<p> Database Connection Error!</p>";
}

else {
    $sql_table = "eoi";
}

$eoistatus = sanatise_input($_POST["eoi_status"]); // sanitse the input and pass the input from the form to the variable to be used in the sql query.

$eoinum = sanatise_input($_POST["eoi_num"]);

$query = "UPDATE $sql_table SET EOI_Status='$eoistatus' WHERE EOInumber='$eoinum'";

$result = mysqli_query($conn, $query);


if (!$result) {
    echo "<p> Something is wrong with", $query, "</p>";
}

else {
    

    echo "<p class=\"sql_msg\">Record Updated Sucessfully.</p>";
}
$query_two = "SELECT * FROM $sql_table WHERE EOInumber='$eoinum'";

$result_two = mysqli_query($conn, $query_two); // pass in the connection to database and your query into the php fuction.

if (!$result_two) {
        echo "<p> Something is wrong with", $query_two, "</p>";
    }
    
    else {
        echo "<table class=\"timetable\">\n";
        echo "<tr>\n"
        ."<th scope=\"col\">EOInumber</th>\n"
        ."<th scope=\"col\">Status</th>\n"
        ."<th scope=\"col\">Job Reference ID</th>\n"
        ."<th scope=\"col\">First Name</th>\n"
        ."<th scope=\"col\">Last Name</th>\n"
        ."<th scope=\"col\">DOB</th>\n"
        ."<th scope=\"col\">Gender</th>\n"
        ."<th scope=\"col\">Street</th>\n"
        ."<th scope=\"col\">Suburb</th>\n"
        ."<th scope=\"col\">State</th>\n"
        ."<th scope=\"col\">Post Code</th>\n"
        ."<th scope=\"col\">Email</th>\n"
        ."<th scope=\"col\">Phone</th>\n"
        ."<th scope=\"col\">Skill 1</th>\n"
        ."<th scope=\"col\">Skill 2</th>\n"
        ."<th scope=\"col\">Skill 3</th>\n"
        ."<th scope=\"col\">Skill 4</th>\n"
        ."<th scope=\"col\">Comment</th>\n"
        ."</tr>\n";
    
        while ($row = mysqli_fetch_assoc($result_two)) {
            echo "<tr>\n";
            echo "<td>", $row["EOInumber"], "</td>\n";
            echo "<td>", $row["EOI_Status"], "</td>\n";
            echo "<td>", $row["Position_Reference"], "</td>\n";
            echo "<td>", $row["First_Name"], "</td>\n";
            echo "<td>", $row["Last_Name"], "</td>\n";
            echo "<td>", $row["DOB"], "</td>\n";
            echo "<td>", $row["Gender"], "</td>\n";
            echo "<td>", $row["Street"], "</td>\n";
            echo "<td>", $row["Suburb"], "</td>\n";
            echo "<td>", $row["Region"], "</td>\n";
            echo "<td>", $row["Post_Code"], "</td>\n";
            echo "<td>", $row["Email"], "</td>\n";
            echo "<td>", $row["Phone"], "</td>\n";
            echo "<td>", $row["Skill_1"], "</td>\n";
            echo "<td>", $row["Skill_2"], "</td>\n";
            echo "<td>", $row["Skill_3"], "</td>\n";
            echo "<td>", $row["Skill_4"], "</td>\n";
            echo "<td>", $row["Other"], "</td>\n";
            echo "</tr>\n";
        }
    
        echo "</table>\n";
    
     $rowcount=mysqli_num_rows($result_two);
    
    echo "<p class=\"sql_msg\">Retrieved"," ", $rowcount, " ", "rows.</p>";
    echo "<p class=\"sql_msg\"><a class=\"redirect\" href=\"manage.php\">Manage</a></p>";
    mysqli_free_result($result_two);
    mysqli_close($conn); // close connection to database

}
?>
</div>
</div>
<?php 
include 'footer.inc';
?>
</body>
</html> 