<html>
<body>

<?php
//Retrieved from HTML Form
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$message = "From: " . $name . "\nEmail: " . $email . "\nphone: " . $phone . "\n" . $message;
$to = "fjavier97vall@gmail.com";

if(!empty($name) and !empty($phone) and !empty($email)){
	//Send email
	$retval = mail ($to,$subject,$message);
}else{
	echo "Please fill all fields";
}

//Check server reply   
if( $retval == true ) {
    echo "Message sent successfully.";
}else {
    echo "Message could not be sent.";
}
	 
?>

</body>
</html> 