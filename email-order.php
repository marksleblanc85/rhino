<?php
	define("MAILTO" , "mark@marksleblanc.com,");
	define("SUBJECT" ,  'New Order on RhinoPaper.com');

	define("ERROR_MESSAGE" , "Error sending your message");
	define("SUCCESS_MESSAGE" , "Your order has been submitted successfully! A representative will contact you soon.");

	$message = '';
	$message .= 'Customer Name: ' . $_POST['customername'] . "\r\n";
	$message .= 'Contact Name: ' . $_POST['contactname'] . "\r\n";
	$message .= 'Email: ' . $_POST['email'] . "\r\n";
	$message .= 'Phone: ' . $_POST['phone'] . "\r\n";
	$message .= 'Business Type: ' . $_POST['type'] . "\r\n\r\n";

	$message .= 'Shipping Address: '."\r\n";
	$message .= $_POST['shippingaddress'] . "\r\n";
	$message .= $_POST['shippingcity'] .', ' . $_POST['shippingstate'] .' '. $_POST['shippingzip'] . "\r\n\r\n";
	if($_POST['billingaddress']){
		$message .= 'Billing Address: ' ."\r\n";
		$message .= $_POST['billingaddress'] . "\r\n";
		$message .= $_POST['billingcity'] . ', ' . $_POST['billingstate'] . ' ' .$_POST['billingzip'] . "\r\n\r\n";
	}
	$message .= 'Part or SKU / Product: ' . $_POST['partsku'] . "\r\n";
	$message .= 'How Many: ' . $_POST['quantity'] . "\r\n";
	$message .= 'Order Description / Details: ' . $_POST['description'] . "\r\n\r\n";
	$message .= 'Wants promotional messages: ' . $_POST['promo'] . "\r\n";
	$message .= 'Wants verbal confirmation: ' . $_POST['verbal'];

	function validateEmail($email) {
	   if(preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email))
		  return true;
	   else
		  return false;
	}
	if((strlen($_POST['customername']) < 1 ) || (strlen($_POST['email']) < 1 ) || validateEmail($_POST['email']) == FALSE ) {
		echo( ERROR_MESSAGE );
	} else {
		if( mail( MAILTO , SUBJECT , $message , "From: ".$_POST['name']." <".$_POST['email'].">\r\n" ."Reply-To: ".$_POST['email']."\r\n" ) ) {
			echo( SUCCESS_MESSAGE );
		} else {
			echo( ERROR_MESSAGE );
		}
	}
?>