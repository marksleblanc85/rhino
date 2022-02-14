<?php
	define("MAILTO" , "mark@marksleblanc.com");
	define("SUBJECT" ,  $_POST['subject']);

	define("ERROR_MESSAGE" , "Error sending your message");
	define("SUCCESS_MESSAGE" , "Thank you for your message!");

	$message = '';
	$message .= 'Name : ' . $_POST['name'] . "\r\n";
	$message .= 'Email : ' . $_POST['email'] . "\r\n";
	$message .= 'Phone : ' . $_POST['phone'] . "\r\n";
	$message .= 'Destination : ' . $_POST['dest'] . "\r\n";
	$message .= 'Subject : ' . $_POST['subject'] . "\r\n";
	$message .= 'Comments : ' . $_POST['comments'] . "\r\n";

	function validateEmail($email) {
	   if(preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email))
		  return true;
	   else
		  return false;
	}
	if((strlen($_POST['name']) < 1 ) || (strlen($_POST['email']) < 1 ) || validateEmail($_POST['email']) == FALSE ) {
		echo( ERROR_MESSAGE );
	} else {
		if( mail( MAILTO , SUBJECT , $message , "From: ".$_POST['name']." <".$_POST['email'].">\r\n" ."Reply-To: ".$_POST['email']."\r\n" ) ) {
			echo( SUCCESS_MESSAGE );
		} else {
			echo( ERROR_MESSAGE );
		}
	}
?>