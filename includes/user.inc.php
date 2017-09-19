<?php
/*

Description:    Här startas olika sessions, och en check om man är inlogad kontrolleras
In:						 
Out:  					

*/
session_start();
include 'dbh.inc.php';

$id = $_SESSION['u_id'];
$firstname = $_SESSION['u_first'];
$email = $_SESSION['u_email'];
if (!$_SESSION['login']){
  header("location:login.php");
  die;
}

?>
