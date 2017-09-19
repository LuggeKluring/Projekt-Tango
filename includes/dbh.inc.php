<?php
//Anslutning till databasen
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "tidskollen";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
