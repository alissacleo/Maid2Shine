<?php
 if(isset($_POST['submit'])) {
 
	function died($error) {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

 	// validation expected data exists
    if(!isset($_POST['fname']) ||
        !isset($_POST['lname']) ||
        !isset($_POST['email']) ||
        !isset($_POST['text'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$text =  $_POST['text'];

	$error_message = "";

	$string_exp = "/^[A-Za-z .'-]+$/";
	if(!preg_match($string_exp,$fname)) {
		$error_message .= 'The First Name you entered does not appear to be valid.<br />';
	}
	if(!preg_match($string_exp,$lname)) {
		$error_message .= 'The Last Name you entered does not appear to be valid.<br />';
	}
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/'; 
	if(!preg_match($email_exp,$email)) {
		$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
	}
	if(strlen($text) < 2) {
		$error_message .= 'The Comments you entered do not appear to be valid.<br />';
	}

	if(strlen($error_message) > 0) {
		died($error_message);
	}

	function clean_string($string) {
    	$bad = array("content-type","bcc:","to:","cc:","href");
    	return str_replace($bad,"",$string);
    }

 	$myemail = 'admin@maid2shine.com.au';
    $subject = 'Message from Maid2shine.com.au';
    $message = "New Message from Maid2shine.com.au contact form\n\n";
    $message .= "From: ".clean_string($fname)." ";
    $message .= clean_string($lname)."\n\n";
	$message .= "Email: ".clean_string($email)."\n";
	$message .= "Phone: ".clean_string($phone)."\n\n";
	$message .= clean_string($text)."\n";


	// Create headers
	$headers = "From: ".clean_string($email)."\r\n".
	"Reply-To: ".clean_string($email)."\r\n";
	$headers .= "X-Mailer: PHP/".phpversion();

	mail($myemail, $subject, $message, $headers);

	// if(isset($_REQUEST["destination"])){
	// 	header("Location: {$_REQUEST["destination"]}?message=sent#cForm");
	// }else if(isset($_SERVER["HTTP_REFERER"])){
	// 	header("Location: {$_SERVER["HTTP_REFERER"]}?message=sent#cForm");
	// }else{
		header("Location: contact.php?message=sent&email=".$email."#cForm");
	// }

	echo 'Your message has been sent';

} else {

	// if(isset($_REQUEST["destination"])){
	// 	header("Location: {$_REQUEST["destination"]}?message=notsent#cForm");
	// }else if(isset($_SERVER["HTTP_REFERER"])){
	// 	header("Location: {$_SERVER["HTTP_REFERER"]}?message=notsent#cForm");
	// }else{
		header("Location: contact.php?message=notsent#cForm");
	// }
	echo 'Your message has not been sent';
}
?>