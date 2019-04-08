<?php
session_start();
$user_input=$_POST['m_code'];
$code=$_SESSION['code'];

if ($code==$user_input) {
	echo "<b><script type='text/javascript'>alert('verified!'); </script></b>";

    echo "<script>";
	echo "window.location='mobile_uploaded_ads.php'";
	echo "</script>";
}
else{
	echo "<script type='text/javascript'>alert('invalid PIN code'); </script>";
	echo "<script>";
	echo "window.location='mobile_uploaded_ads_submit.php'";
	echo "</script>";
}

?>