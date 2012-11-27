<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Contact Me</title>
</head>
<body>
<h1>Contact Me</h1>
<?php # Script 11.1 - email.php

// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{

	// Minimal form validation:
	if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['comments']) ) 
        {
	
		// Create the body:
		$body = "Name: {$_POST['name']}\n\nMessage: {$_POST['message']}";

		// Make it no longer than 70 characters long:
		$body = wordwrap($body, 70);
	
		// Send the email:
		mail('bpramanik75@gmail.com', 'Contact Form Submission', $body, "From: {$_POST['email']}");

		// Print a message:
		echo '<p><em>Thank you for contacting me. I will reply some day.</em></p>';
		
		// Clear $_POST (so that the form is not sticky):
		$_POST = array();
	
	} 
        else 
        {
		echo '<p style="font-weight: bold; color: #C00">Please fill out the form completely.</p>';
	}
	
} // End of main isset() IF.

?>
<p>Please fill out the form in previous page to contact me. Thank you.</p>
</body>
</html>