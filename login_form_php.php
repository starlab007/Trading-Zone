<?php

session_start();

$email=$_POST["email"];
$pass=$_POST["password"];

$conn=new mysqli("localhost","root","","webdev"); //build connection

$q="select * from signup where email='$email' && password='$pass'";
$records=$conn->query($q);

if($records->num_rows>0)
{
	//$_SESSION["username"]=$first_name;
  
echo '<script language="javascript">';
echo 'alert("Welcome")';
echo '</script>';
  echo "<script> window.location='posting.html'</script>";
  
}
else
{
	echo '<script language="javascript">';
echo 'alert("Invalid Email or Password")';
echo '</script>';
  echo "<script>window.location='login.html'</script>";


     
}

?>