<!--
*
*
Sidan för inloggningsrutan där användaren kan mata in sitt användar-id samt lösenord
för att få tillgång till sin elevsida. Den består av ett fält för att mata in ID, ett
fält för att mata in sitt lösenord samt en knapp för submit.
*
*
-->
<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Exo+2:300|Open+Sans:300" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap-egen.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Logga in - T4</title>
  </head>
  <body>
    <div class="container-fluid" id="bg">
      <footer>
        <img id="logo_school" src="img/itg.svg" />
      </footer>
      <!-- * Rutan med inloggningsformulär * -->
      <div class="container" id="login">
        <!-- T4-loggan -->
        <div id="logo"><img src="img/t4.jpg" /></div>
        <!-- Inmatning av användarens id-nummer -->
        <form action = "includes/login.inc.php" method = "POST">
          <div class="textInput" id="username">
            <label>Användar-id</label>
            <input type="text" placeholder="Användar-id" name="id" />
          </div>
          <!-- Inmatning av användarens lösenord -->
          <div class="textInput" id="password">
            <label>Lösenord</label>
            <input type="password" placeholder="Lösenord" name="pwd" />
          </div>
          <!-- Knapp för att skicka iväg uppgifterna till webbservern för jämförelse med databas -->
          <div class="textInput" id="loginButton">
            <button class="btn btn-success" type="submit" name = "submit">Logga in</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>

<?php session_destroy(); ?>
