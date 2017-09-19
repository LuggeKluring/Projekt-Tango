<!-- **** Version 1.0 ****
*
Detta är sidan där den inloggade eleven kan checka in på sin arbetsplats på T4.
*
-->

<?php
/*

Description: I denna fil sköts in och utstämpligen, och totala inloggningstiden
In: submit, ID
Out: total inloggad tid.

*/
include 'includes/dbh.inc.php';
include 'includes/checkin.inc.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /> <!-- Flikikon -->
    <link href="https://fonts.googleapis.com/css?family=Exo+2:300|Open+Sans:300" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-egen.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animations.js"></script>
    <script src="js/clock.js"></script>
    <title>Stämpla - T4</title>
  </head>
  <body onload="clock()"> <!-- "onload="clock()" " laddar skriptet för den digitala klockan på sidan -->    <!-- Navbar på toppen -->
    <div class="container-fluid" id="header">
      <!-- Grupp med logga ut/in- utstämplingsknappar -->
      <div class="container nav-buttons">
        <a href="user.php" id="home_button" class="btn btn-primary nav-button" role="button">Hem</a>
        <a href="login.php" class="btn btn-danger nav-button" role="button">Logga ut</a>
      </div>
      <!--  -->
      <!-- Logga -->
      <img class="nav-logo" src="img/t4.jpg" />
      <!--  -->
    </div>
    <!-- Bild på sidan -->
    <div class="container-fluid" id="checkin_well">
      <div class="container" id="checkin_inputs">
        <h2 id="checkin_header">Stämpla</h2>
        <img src="img/clock_checkIn.svg" />
        <!-- Klocka som räknas ut med JavaScript -->
        <h3 id="clock"></h3>
        <!-- Knappar för in/utstämpling samt historik -->
        <div id="checkin_buttons">
          <form method="post" action="">
            <?php
/* startar session checkedin, om checkin är true ändras knappen till "stämpla ut" */
          $checkedin = $_SESSION['checkedin'];
          if ($checkedin == "true"){?>
            <button id="checkin_button1" class="btn btn-success" type="submit" name="checkout">Stämpla ut</button>
            <?php
          }
/*annars ändras knappen till "stämpla in" */
          else { ?>
             <button id="checkin_button1" class="btn btn-success" type="submit" name="checkin">Stämpla in</button>
            <?php }
          ?>

        </form>
          <button id="checkin_button2" class="btn btn-primary" type="submit">Historik</button>
        </div>
        <div id="checkinLog">
          <p>
            <?php
/* hämtar session checkedin, om session "totalaminuter" inte är tom hämtas session totalaminuter och läggs in i en variabel".
om checkedin är "true" hämtas tiden från tabellen tidslogg från personens ID som är inloggad, denna data adderas,
när den har hämtats konverteras den till timmar och minuter */
            $checkedin = $_SESSION['checkedin'];

            if (!empty($_SESSION['totalaminuter'])) {

              $total = $_SESSION['totalaminuter'];
            }
              if($checkedin == "true"){
              $totalsum = "SELECT SUM(tid) AS value_sum FROM tidslogg WHERE IDperson =$id";
              $sumquery = mysqli_query($conn, $totalsum);
              $row = mysqli_fetch_assoc($sumquery);
              $sum = $row['value_sum'];

              function convertToHoursMins($time, $sum = '%02d:%02d') {
/* om tiden som man har varit inloggad är mer än 1 fortsätter koden */
                if ($time < 1) {
                  return;
                }
/* Denna kod konverterar totalaminuter till timmar och minuter */
                  $hours = floor($time / 60);
                  $minutes = ($time % 60);
                  return sprintf($sum, $hours, $minutes);
              }
//summan skrivs ut på hemsidan
                  echo convertToHoursMins($sum, '%2d timmar och %02d minuter total instämplingstid');

              }
/* om total är mer än 0 skrivs den totala tiden ut */
                else if(!empty($total)){
                  $total = $_SESSION['totalaminuter'];
                  echo "Du har varit inloggad i " . $total . " minut(er).";
                }

            ?>
          </p>
        </div>
      </div>
    </div>
    <!-- Container med innehåll på sidan -->
    <div id="checkin_history_container" class="container content">
      <div id="checkin_history" class="container">
        <h2 id="checkin_history_header">Senaste in/utstämplingarna</h2>
        <button id="checkin_history_hide" class="btn btn-danger" type="submit">Göm historik</button>
      </div>
    </div>
    <!-- Footer med information om webbsidans ansvarige -->
    <footer>
      <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
          <img id="logo_school" src="img/itg.svg" />
        </div>
        <div class="col-md-4">
          <ul class="footer_school_info">
            <li><h5>Kontakta oss</h5></li>
            <li>It-Gymnasiet Skövde</li>
            <li>Kylarvägen 1, 541 34 Skövde</li>
            <li>Tel: 0500-41 69 90</li>
          </ul>
        </div>
      </div>
    </footer>
  </body>
</html>
