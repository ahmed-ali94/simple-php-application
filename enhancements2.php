<!DOCTYPE html>

<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<script src="scripts/enhancements.js"></script>
	<meta charset="utf-8">
	<meta name="description" content="Enhancements">
	<meta name="keywords" content="Enhancements ">
	<meta name="author" content="Ahmed Ali">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Enhancements</title>

</head>

<body>
<?php include 'header.inc';
    
    ?>

<h1>Enhancements JS</h1>

<section id="enhancement_1">
<h2>Countdown Timer</h2>
<p>In the apply page, there Is a countdown timer that is set to 5 minutes. In the event that the timer reaches zero, the page will alert the user and will redirect to the index page. To implement this feature, I created a time array and split the array between the ‘:’ character, this meant that hour hand was set to timeArray[0]  and the seconds was set to timeArray[1]. A function was created that checked the seconds with if statemenets. For e.g. if the seconds are &lt; 10 and >= 0 an added zero will be put in front of the numbers.  By using the inbuilt JS setTimeout(Coundown_timer, 1000) allows the whole process to begin, (1000 ms = 1 sec countdown interval). In the init function, I used an if statement that checks to see if we are on the apply page, when this is met, the countdown timer function is called, and the process begins.  This feature can be found on the <a class="link" href="apply.php">Apply Page</a>. The resources that were used to implement this feature can be found at <a class="link" href="https://www.w3schools.com/jsref/met_win_settimeout.asp">w3schools</a> and at: </p>
<p>Ishan (2019), ‘<em>Javascript 5 minute countdown timer</em>’, (Version 1.0), [Source Code] <a class="link" href="https://codepen.io/ishanbakshi/pen/pgzNMv">https://codepen.io/ishanbakshi/pen/pgzNMv</a>.</p>
</section>

<section id="enhancement_2">
<h2>Switch Color Theme</h2>
<p>This enhancement allows the user to select between two color themes; dark or light. I split both the theme to its own respective function. In each function, I used the in-built JS querySelector function that enables the customization of CSS through specific HTML ID tags. In this case, I accessed both the body and footer tag through the function and changed the background colors. I used an event listener function that looks for a mouse click on the html 'button' I created that triggers the change of theme. This feature is consistent throughout all web pages; an instance can be found <a class="link" href="apply.php">here</a>. The resource that was used can be found at <a class="link" href="https://developer.mozilla.org/en-US/docs/Web/API/Document/querySelector">here</a>.</p>
</section>
</div>
</div>
<?php 
include 'footer.inc';
?>
</body>
</html> 