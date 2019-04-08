<?php

$conn=new mysqli("localhost","root","","webdev");

$name=$_POST['firstname'];
$last_name=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$q="INSERT INTO `signup`(`first_name`, `last_name`, `email`, `password`, `confirm_password`) VALUES ('$name','$last_name','$email','$password','$confirm_password')";

if($conn->query($q) === TRUE){
	
	echo "<script>window.location='login.html'</script>";

}else{
	
	echo "<script>window.location='register.html'</script>";
}

$conn->close();

?>