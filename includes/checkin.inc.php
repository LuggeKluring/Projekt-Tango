<?php

session_start();
include 'dbh.inc.php';  //includerar filen dbh.inc.php
if (!$_SESSION['login']){ /* om ingen användare är inloggad skickas man till login sidan */
  header("location:login.php");
  die;
}
//sessions startar med ID, Namn och Mail
$id = $_SESSION['u_id'];
$firstname = $_SESSION['u_first'];
$email = $_SESSION['u_email'];

$timesql = "SELECT tidstempel FROM loginkontroll WHERE IDperson='$id'"; //hämtar data som ligger i tidstempel från tabellen loginkontroll på Personen som är inloggad, denna data läggs in i variabeln "timesql"
$timeresult = mysqli_query($conn, $timesql);  //här utför man "frågan" i variabeln "timesql" och läggar in data från tabellen i timeresult
$timecheck = mysqli_num_rows($timeresult);  //här kollar vi hur många rader det ligger i variabeln "timeresult"
/* om det inte finnas någon rad i timecheck
läggs den personens ID som är inloggad in i tabellen loginkontroll,
sessions checedin sätts till true*/
if ($timecheck < 1){  
  if (isset($_POST['checkin'])) { 

    $insertLk = "INSERT INTO loginkontroll(IDperson) VALUES ($id)"; //Här lägger vi in ID på den inloggade i tabellen loginkontroll.
    mysqli_query($conn, $insertLk); //här utför man variablen ovan 
    $_SESSION['checkedin'] = true; // här sätts session "checkedin" till true

    header("Location:");  //refreshar sidan
  }
//stämmer inte ovanstående if sats så sätts checkedin till false
  else {
    $_SESSION['checkedin'] = false;
  }
}
  else{
    /*
    om man har klickat på stämpla ut så hämtas in och utstämplings timmar och sammanställs in i variabeln "total"
    */
    if (isset($_POST['checkout'])) {
    $timezone = date_default_timezone_get();
    date_default_timezone_set($timezone);
    $utstTimmar = date('H ', time());
    $utstMinuter = date('i ', time());
    $timerow = mysqli_fetch_assoc($timeresult);

    $instTid = $timerow['tidstempel'];
    $date = date_create($instTid);
    $instTimmar = date_format($date, 'H');
    $instMinuter = date_format($date, 'i');
    $totalTimmar = $utstTimmar - $instTimmar;
    $totalMinuter = $utstMinuter - $instMinuter;

    $total = $totalTimmar * 60+ $totalMinuter;

    $_SESSION['totalaminuter'] = $total;  // session "totalaminuter hämtas"
/*detta läggs in i databasen tidslogg.*/
    $insertTl = "INSERT INTO tidslogg(IDperson, tid) VALUES ($id, $total)";
    mysqli_query($conn, $insertTl);
/*
data på den inloggades ID tas bort från tabellen loginkontroll och session checkedin sätts till false och sidan refreshas
*/
    $delete = "DELETE FROM loginkontroll WHERE IDperson=$id";
    mysqli_query($conn, $delete);

    $_SESSION['checkedin'] = false;
    header("Location:");
  }
  //stämmer inte ovanstående if sats sätts session checkedin till true
    else {
      $_SESSION['checkedin'] = true;

    }
}
?>