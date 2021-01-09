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
	<title> Enhancements</title>

</head>

<body>
<?php include 'header.inc';
    
    ?>

<h1>Enhancements</h1>

<section id="enhancement_1">
<h2>Media Queries</h2>
<p>This website has been designed to accommodate different devices. To do this I have used @media and set the min width to different devices. I set the wrapper width to 100% so that it can be displayed properly on all devices. The source in which @media queries was used from can be found <a class="link" href="https://developer.mozilla.org/en-US/docs/Web/CSS/Media_Queries/Using_media_queries">here</a>. To test this, I had to inspect my webpage element on Google Chrome and selected device toolbar to scale to different device dimensions. The code can be found in the stylesheet.</p>
</section>

<section id="enhancement_2">
<h2>@import url()</h2>
<p>The import tag was utilised in the CSS file. This tag was used to retrieve a custom font from Google to be used in the website. The font that was used was Montserrat with a medium font. To use this feature, the @import url(“”) code was used. Inside the semicolons, the user must retrieve the link to the font. In my case this was located at Google font website via their API. I have used to font heavily throughout the website and is major design influence for my pages. The resource that I used in order to implement the font can be found <a class="link" href="https://developers.google.com/fonts/docs/getting_started">here</a> (Google, 2019). An example can be found in the <a class="link" href="index.php#banner">index html</a>.</p>
</section>
</div>
</div>
<?php 
include 'footer.inc';
?>
</body>
</html> 