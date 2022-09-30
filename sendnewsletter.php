<?php
include_once('phplib/db_config.php');


if(isset($_GET['q']) && strlen($_GET['q'])>0)
{
	global $con;
	date_default_timezone_set('GMT');//get current date time 
	$sent_datetime=date('d-m-Y H:i');//get current date time
	$sql="INSERT INTO `balas_newsletter`(`request_by`, `datetime`) VALUES ('".mysqli_real_escape_string($con,$_GET['q'])."','".mysqli_real_escape_string($con,$sent_datetime)."')";
	if($con->query($sql) === true)
	{
		echo "Thanks For Your Subscription";
		//DICKSON MAILS Here
		$to = 'workandmanymore@gmail.com';
		$subject = 'DSE  ( NEW SUBSCRIPTION)';
		$from = $_GET['q'];
		
// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Create email headers
		$headers .= 'From: '.$from."\r\n".
		    'Reply-To: '.$from."\r\n" .
		    'X-Mailer: PHP/' . phpversion();
// Compose a simple HTML email message
		$message = '<html><body>';
		$message .= '<h1 style="color:#f40;">E-mail :</h1>' .$from;
		$message .= '<h1 style="color:#f40;">Date :</h1>' .$sent_datetime;
		//$message .= '<h1 style="color:#080;">Message :</h1>';
		$message .= '<p style="color:#080;font-size:18px;">MESSAGE : NEW SUBSCRIPTION';
		$message .= '</p></body></html>';
// Sending email
		if(mail($to, $subject, $message, $headers)){
		    echo '';
		} else{
		    echo 'Unable to send email. Please try again.';
		}

	}
	
}
else
{
	echo "Enter Your Email";
}
?>