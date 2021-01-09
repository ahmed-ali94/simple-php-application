<!DOCTYPE html>

<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<script src="scripts/validate.js"></script>
	<script src="scripts/enhancements.js"></script>
	<meta charset="utf-8">
	<meta name="description" content=" Apply Melbourne Red Cross">
	<meta name="keywords" content="Melbourne Red Cross,Apply">
	<meta name="author" content="Ahmed Ali">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Application Page for Melbourne Red Cross </title>

</head>



<body id="applyPage">
    <?php include 'header.inc';
    
    ?>

	<h1 id="form_title">Melbourne Red Cross 2019 Volunteering Application </h1> 
	<span id="timer"></span>

<form method="post" action="processEOI.php" id="regForm" novalidate="novalidate">

	<fieldset>
		<legend>Job Reference </legend>
		<label for="referenceid">Position Reference Number:</label>
		<input type="text" name="referenceid" id="referenceid" required="required" pattern="[A-Za-z0-9]{5}" readonly>
	</fieldset>

	<fieldset>
		<legend>Your Details</legend>
		<label for="fname">First Name:</label>
		<input type="text" name="fname" id="fname" required="required" pattern="[A-Za-z]{1,20}">
		<label for="lname">Last Name:</label>
		<input type="text" name="lname" id="lname" required="required" pattern="[A-Za-z]{1,20}">
		<label for="dob">Date of Birth:</label>
		<input type="text" name="dob" id="dob" required="required">
		<div class="error"><p id="dob_error"></p></div>
	</fieldset>

	<fieldset>
		<legend>Gender</legend>
		<label for="male">Male</label>
		<input type="radio" name="male" id="male" required="required">
		<label for="female">Female</label>
		<input type="radio" name="female" id="female">
		<label for="other">Other</label>
		<input type="radio" name="other" id="other">
	</fieldset>

	<fieldset>
		<legend>Address</legend>
		<p>
			<label for="street">Street Address:</label>
			<input type="text" name="street" id="street" required="required" pattern="^{1,40}">
		</p>
		<p>
			<label for="suburb">Suburb:</label>
			<input type="text" name="suburb" id="suburb" required="required" pattern="^{1,40}">
		</p>

		<p>
			<label for="state">State:</label>
			<select name="state" id="state">
				<option value="">Please Select</option>
				<option value="vic">VIC</option>
				<option value="nsw">NSW</option>
				<option value="qld">QLD</option>
				<option value="nt">NT</option>
				<option value="wa">WA</option>
				<option value="sa">SA</option>
				<option value="tas">TAS</option>
				<option value="act">ACT</option>
			</select>
		</p>

		<p>
			<label for="pcode">Post Code:</label>
			<input type="text" name="pcode" id="pcode" required="required" pattern="[0-9]{4}">
		</p>
		<div class="error"><p id="postcode_error"></p></div>
	</fieldset>

	<fieldset>
		<legend>Contact Details</legend>
		<p>
			<label for="mail">Email:</label>
			<input type="email" name="Email" id="mail" placeholder="name@domain.com" required="required">
		</p>

		<p>
			<label for="ph">Phone Number:</label>
			<input type="text" name="ph" id="ph" required="required" pattern="[0-9]{8,12}">
		</p>
	</fieldset>	

	<fieldset>
			<legend>Skills</legend>
			<p>
				<label for="leadership">Leadership Skills</label>
				<input type="checkbox" name="leadership" id="leadership">
				<label for="communication">Communication Skills</label>
				<input type="checkbox" name="communication" id="communication">
				<label for="teamwork">Teamwork Skills</label>
				<input type="checkbox" name="teamwork" id="teamwork">
				<label for="computer">Computer Skills</label>
				<input type="checkbox" name="computer" id="computer">
				<label for="otherskill">Other Skills</label>
				<input type="checkbox" name="otherskill" id="otherskill">
			</p>

			<p>
				<label for="comment">Other Skills:</label>
			</p>
			<p>	
				<textarea id="comment" name="comment" rows="4" cols="40" placeholder="List other skills here...."></textarea>
			</p>
			<div class="error"><p id="comment_error"></p></div>
	</fieldset>
	<input type="submit" value="Apply" class="form_button">
	<input type="reset" value="Reset" class="form_button">
</form>
</div>
</div>
<?php 
include 'footer.inc';
?>
</body>
</html>