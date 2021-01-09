<!DOCTYPE html>

<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<script  src="scripts/enhancements.js"></script>
	<meta charset="utf-8">
	<meta name="description" content="Volunteer Profile">
	<meta name="keywords" content="Melbourne Red Cross, Volunteer Prfole ">
	<meta name="author" content="Ahmed Ali">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Volunteer Profile</title>

</head>

<body>
<?php include 'header.inc';
    
    ?>

<h1 class="titlep"> My Profile </h1>
	
<section id="detail_1">
<h3>Details:</h3>
<dl>
<dt><strong>Name:</strong></dt>
<dd>Ahmed Ali</dd>
<dt><strong>Student Number:</strong></dt>
<dd>101383139</dd>
<dt><strong>Tutor's Name:</strong></dt>
<dd>Bo Li</dd>
<dt><strong>Course:</strong></dt>
<dd>Master of Information Technology</dd>
</dl>
</section>
<figure>
<img src="images/profilepic.png" alt="Profile Picture">
</figure>



<section id="detail_2">
<h1 class="titlep"> More Information </h1>
<table class="timetable">
	<caption>My Timetable</caption>
	<tr>
		<th>Day</th>
		<th>8:30-9:30</th>
		<th>9:30-10:30</th>
		<th>10:30-12:30</th>
		<th>12:30-1:30</th>
		<th>1:30-2:30</th>
		<th>2:30-3:30</th>
		<th>3:30-4:30</th>
		<th>4:30-6:30</th>
	</tr>

	<tr>
		<td>Monday</td>
		<td>---</td>
		<td>---</td>
		<td>INF60013 Lecture</td>
		<td>---</td>
		<td>INF60013 Lab</td>
		<td>---</td>
		<td>---</td>
		<td>---</td>
	</tr>	

	<tr>
		<td>Tuesday</td>
		<td>---</td>
		<td>---</td>
		<td>---</td>
		<td>---</td>
		<td>---</td>
		<td>---</td>
		<td>---</td>
		<td>---</td>
	</tr>

	<tr>
		<td>Wednesday</td>
		<td>---</td>
		<td>---</td>
		<td>---</td>
		<td>---</td>
		<td>---</td>
		<td>---</td>
		<td>---</td>
		<td>COS60004 Lecture</td>
	</tr>

	<tr>
		<td>Thursday</td>
		<td>---</td>
		<td>---</td>
		<td>INF70005 Lecture</td>
		<td>---</td>
		<td>---</td>
		<td>---</td>
		<td>---</td>
		<td>---</td>
	</tr>

	<tr>
		<td>Friday</td>
		<td>---</td>
		<td>---</td>
		<td>---</td>
		<td>INF70005 Lab</td>
		<td>---</td>
		<td>COS60004 Lab</td>
		<td>---</td>
		<td>---</td>
	</tr>	
	
</table>

<dl id="email">
<dt>Email:</dt> 
<dd><a class="link" href="mailto:101383139@student.swin.edu.au">101383139@student.swin.edu.au</a></dd>
</dl>
</section>
</div>
</div>
<?php 
include 'footer.inc';
?>
</body>
</html>