<?php
if (isset($_POST['submit'])) {
	echo 'Thank you for your submission.';
}
?>

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

<form name="contactForm" action="" method="post">
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
	<option value="homework">Home Work Questions</option>
	<option value="techissues">Tech. Questions</option>
	<option value="other">All Other Inqueries</option>
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

<button name="submit" type="submit">Submit</button>

</fieldset>
</form>

</body>
</html>