
<?php 
session_start();

$_SESSION['username'] = null;
$_SESSION['password'] = null;
$_SESSION['email'] = null;
$_SESSION['permission'] = null;

header("location: ../index.php");


?>