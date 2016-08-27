<?php
if(isset($_POST['email']) && $_POST[submitted]) {

	$errors=array();
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$comments = $_POST['comments'];

	if($name == '')
	{
		$errors[] = "Please enter your name.";
	}
	if(preg_match("/[^A-Za-z0-9_-\s]/",$name))
	{
		$message = "Your name can only contain letters, spaces and apostrophes.";
		$errors[] = $message;
	}
	if(strlen($name) > 25)
	{
		$errors[] = "Your name must be less than 25 characters.";
	}
	define(
		'EMAIL_MATCHER',
		'/^[^@\s]+\@(\[?)([-\w]+\.)+([a-zA-Z]{2,6}|[0-9]{1,3})(\]?)$/'
	);
	if($email =='') {
		$errors[] = "Please enter your email.";
	}
	if(!preg_match(EMAIL_MATCHER,$email))
	{
		$message = "The address you entered does not appear  to be valid.";
		$errors[] = $message;
	}
	if(strlen($subject) > 200)
	{
		$errors[] = "Please make your subject brief but concise.";
	}
	if(strlen($comments) > 500)
	{
		$message = "You can only enter 500 characters for your note. " .
		"Sorry - this restriction is to prevent spammers from ".
		"abusing this form!";
		$errors[] = $message;
	}
	if(strlen($comments) == 0) {

		$errors[]="Please enter a short message or comment";
	}

	if(count($errors) == 0) {

		$subject = $_POST['subject'];
		$body = "Name: {$_POST['name']}\n\nComments: {$_POST['comments']}";
		$body = "Name: $_POST[name]\n\nComments: $_POST[comments]";

		//Make it no longer than 70 characters long:
		$body = wordwrap($body, 70);

		//Send the email
		mail('cec@casinoespanol.ph',$subject,$body,"From: {$_POST['email']}");


		//Clear $_POST (so that the form is not sticky):
		$_POST=array();

	}
}
?>