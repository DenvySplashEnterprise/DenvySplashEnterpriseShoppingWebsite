<?php 

session_start();
    //header("location:login.php");

    $formdb=mysqli_connect("localhost","root","","db_balas")
    or die("Error: ".mysqli_error($formdb));

    mysqli_select_db($formdb, "db_balas");

    $Name 		= $_POST['Name'];
	$Email 		= $_POST['Email'];
	$Telephone 	= $_POST['Telephone'];
	$Subject 	= $_POST['Subject'];
	$Message 	= $_POST['Message'];
    
    $resultgodb=mysqli_query
	
    ($formdb,"INSERT INTO denvy_mailus(Name,Email,Telephone,Subject,Message) 
    VALUES ('$Name','$Email','$Telephone','$Subject','$Message')");

    if($resultgodb > 0){
        //echo "<script>alert('We have received your enquiry.');</script>";
        echo "<script>window.location.href='contact.php';</script>";
           }
    else {
        echo "Oops there seems to be a problem, maybe the server is down. Try again latter. Thank you. DENVY SPLASH ENTERPRISE";
		//echo "<script>window.location.href='contact.php';</script>";

    }
?>