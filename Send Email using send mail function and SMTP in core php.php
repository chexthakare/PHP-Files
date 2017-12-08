<?php
if(isset($_POST['send_email'])){
	require_once "Mail.php";

	$firstname = $_POST['fname'];
	$lastaname = $_POST['lname'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	
	$from = '<hyperdestechweb@gmail.com>';
	$to = '<hyperdestech2017@gmail.com>';
	$subject = 'Enquiry from website!';
	$body = "Hi,\n\nI want to know more about the services!\n\nMy contact details are given below.\n\nName: $firstname $lastaname .\n\nEmail: $email\n\nContact Number: $number \n\nRegards,\n\n$firstname $lastaname";

	$headers = array(
		'From' => $from,
		'To' => $to,
		'Subject' => $subject
	);

	$smtp = Mail::factory('smtp', array(
			'host' => 'ssl://smtp.gmail.com',
			'port' => '465',
			'auth' => true,
			'username' => 'hyperdestechweb@gmail.com',
			'password' => 'aqpc3708'
		));

	$mail = $smtp->send($to, $headers, $body);

	if (PEAR::isError($mail)) {
		echo	"<script>alert($mail->getMessage())</script>)";
	} else {
		echo	"<script>alert('Message successfully sent!')</script>)";
	}
}
?>