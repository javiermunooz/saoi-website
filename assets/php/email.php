<html>
<body>
HOLA

<?php
//Retrieved from HTML Form

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$message = "From: " . $name . "\nEmail: " . $email . "\nphone: " . $phone . "\n" . $message;
$to = "contact@saoi.tech";

//Send email
$retval = mail ($to,$subject,$message);

//Check server reply   
if( $retval == true ) {
    echo "Message sent successfully...";
}else {
    echo "Message could not be sent...";
}

header('Location: ../../index.html');
		 
?>

</body>
</html>