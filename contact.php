<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/awesomestyle.css">

    <title>Aviation Flash Cards Version 3</title>

</head>

<body>

	<?php
	include 'nav.php';
	?>
	    
<h4>Please fill out the form below and someone will
	get back to you soon.</h4>

<form id="contactForm" action="contact_submit.asp" method="get">
	<fieldset>
		<legend>Contact Details</legend>	

<label>
	<span>Title:</span>
	<input type="text" name="title" required autofocus><br>
</label>

<label>
	<span>Subject:</span>
<select name="subject" required>
	<option value="">Select one</option>
	<option value="A">A</option>
	<option value="B">B</option>
	<option value="C">C</option>
</select><br>
</label>

<label>
	<span>Student Name:</span>
	<input type="text" name="studentName" required><br>
</label>

<label>
	<span>Email:</span>
	<input type="email" name="email" required><br><br>
</label>

<label>
	<span>Message:</span>
	<textarea name="message" rows="10" cols="40" wrap="soft" required></textarea><br>
</label>

<button name="submit" type="submit" id="contact-submit">Submit</button>

</fieldset>
</form>

	<br>
	<a href= "aviationHome.html">Home</a>
	<br>



</body>
</html>