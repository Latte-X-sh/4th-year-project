<?php
//initialize session
session_start();
$_SESSION = array() ; //unset all of the sessions variables
session_destroy();
header("location:index.php"); //redirects to sign in page
exit;
?>