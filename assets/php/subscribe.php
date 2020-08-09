<?php 
$user = "saoixsle_fjavier97vall";  
$password = "t7K72qt4ZDT7hvk";  
$host = "localhost";  
$dbase = "saoixsle_newsletter";  
$table = "users";  

$email = $_POST['email'];
$timestamp = date("Y-m-d H:i:s");
  
// Connection to DBase  
$dbc= mysqli_connect($host,$user,$password, $dbase)  
or die("Unable to select database"); 
 
 
$query= "INSERT INTO $table  ". "VALUES (NULL,'$email','$timestamp')"; 
 
mysqli_query ($dbc, $query) 
or die ("Error querying database"); 
 
echo 'You have been successfully added.' . '<br>'; 
 
mysqli_close($dbc);

header('Location: ../../index.html');
?> 