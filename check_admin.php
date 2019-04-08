<?php

session_start();

$email=$_POST["email"];
$pass=$_POST["password"];

$conn=new mysqli("localhost","root","","webdev"); //build connection

$q="select * from admin where email='$email' && password='$pass'";
$records=$conn->query($q);

if($records->num_rows>0)
{
	//$_SESSION["username"]=$first_name;
  
echo '<script language="javascript">';
echo 'alert("Welcome")';
echo '</script>';
  echo "<script> window.location='admin_php.php'</script>";
  
}
else
{
	echo '<script language="javascript">';
echo 'alert("Invalid Email or Password")';
echo '</script>';
  echo "<script>window.location='admin_login.html'</script>";


     
}

?>