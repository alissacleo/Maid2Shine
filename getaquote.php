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
    if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['service']))  {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }



	$error_message = "";

	$name = $_POST['name'];
	$name_exp = "/^[A-Za-z .'-]+$/";
	if(!preg_match($name_exp,$name)) {
		$error_message .= 'The First Name you entered does not appear to be valid.<br />';
	}

	$email = $_POST['email'];
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/'; 
	if(!preg_match($email_exp,$email)) {
		$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
	}

	$phone = $_POST['phone'];
	$service = $_POST['service'];

	if(isset($_POST['freq'])) {
		$freq = $POST['freq'];
	}

	$string_exp = "/^[\w\s.#';,-]*+$/";
	if(isset($_POST['size1'])) {
		$size1 = $_POST['size1'];
		if(!preg_match($string_exp,$size1)) {
			$error_message .= 'The size you entered does not appear to be valid.<br />';
		}
	}
	if(isset($_POST['size2'])) {
		$size2 = $_POST['size2'];
		if(!preg_match($string_exp,$size2)) {
			$error_message .= 'The size you entered does not appear to be valid.<br />';
		}
	}
	$text =  $_POST['text'];

	if(strlen($error_message) > 0) {
		died($error_message);
	}

	function clean_string($string) {
    	$bad = array("content-type","bcc:","to:","cc:","href");
    	return str_replace($bad,"",$string);
    }

 	$myemail = 'alissa.cleo@gmail.com';
    $subject = 'Message from Maid2shine.com.au';
    $message = "New Quote Request from Maid2shine.com.au\n\n";
    $message .= "From: ".clean_string($name)."\n";
	$message .= "Email: ".clean_string($email)."\n";
	$message .= "Phone: ".clean_string($phone)."\n\n";
	$message .= "Service: ".clean_string($service)."\n\n";
	$message .= "Frequency: ".clean_string($freq)."\n\n";
	$message .= "Size: ".clean_string($size1).clean_string($size2)."\n\n";
	$message .= clean_string($text)."\n";


	// Create headers
	$headers = "From: ".clean_string($email)."\r\n".
	"Reply-To: ".clean_string($email)."\r\n";
	$headers .= "X-Mailer: PHP/".phpversion();

	mail($myemail, $subject, $message, $headers);

	header("Location: quote.php?message=sent");

	echo 'Your message has been sent';

} else {
	header("Location: quote.php?message=notsent");
	echo 'Your message has not been sent';
}

?>