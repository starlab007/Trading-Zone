<?php
session_start();
session_unset();//remove all session variables
session_destroy(); //destroy the session

echo "<script> window.location='login.html'</script>";
?>