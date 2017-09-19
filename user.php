<!--
*
*
Denna sida är till för den elev som är inloggad. Här finns lite aktuella nyheter
från T4, nyttiga länkar samt sist men inte minst en länk till stommen i detta projekt
 - in- och utcheckningssidan.
*
*
-->
<?php

include 'includes/user.inc.php';
$firstname = $_SESSION['u_first'];
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
    <title>Välkommen <?php echo $firstname;?> - T4</title>
  </head>
  <body>
    <!-- Navbar på toppen -->
    <div class="container-fluid" id="header">
      <!-- Grupp med logga ut samt in- utstämplingsknappar -->
      <div class="container nav-buttons">
        <a href="checkin.php" class="btn btn-success nav-button" role="button">Stämpla in/ut</a>
        <a href="login.php" class="btn btn-danger nav-button" role="button">Logga ut</a>
      </div>
      <!--  -->
      <!-- Logga -->
      <img class="nav-logo" src="img/t4.jpg" />
      <!--  -->
    </div>
    <!-- Bild på sidan -->
    <div class="container-fluid" id="user_well">
    </div>
    <!-- Container med innehåll på sidan -->
    <div class="container content">
      <h1>Välkommen <?php echo $firstname;?>!</h1>
      <div class="row">
        <!-- Vänsterkolumnen -->
        <div class="col-md-8">
          <div id="nyheter">
            <!-- Nyhetsartikel -->
            <div class="container nyhet">
              <div class="row">
                <!-- Nyhetsbild -->
                <div class="col-md-4">
                  <img class="nyhetsbild" src="img/t4nyhet.jpg" />
                </div>
                <!-- Nyhetstext -->
                <div class="col-md-8">
                  <h2>T4:s första projekt är igång!</h2>
                  <p>
                    Årets nya elever har nu påbörjat sin första sprint i T4!
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nulla rutrum,
                    fermentum velit quis, porta metus. Etiam efficitur nisl a eros gravida, non feugiat
                    lorem volutpat. Orci varius natoque penatibus et magnis dis parturient montes,
                    nascetur ridiculus mus. Maecenas metus tellus, fermentum placerat vulputate in,
                    feugiat eget nunc. Proin justo enim, consectetur vitae congue vel, commodo sed diam.
                    Phasellus sodales enim libero, eu auctor nisl aliquam ut. Nunc lobortis dictum quam,
                    vitae porta felis eleifend in.
                  </p>
                </div>
              </div>
            </div>
            <!-- Nyhetsartikel -->
            <div class="container nyhet">
              <div class="row">
                <!-- Nyhetsbild -->
                <div class="col-md-4">
                  <img class="nyhetsbild" src="img/t4nyhet.jpg" />
                </div>
                <!-- Nyhetstext -->
                <div class="col-md-8">
                  <h2>Välkommen till T4!</h2>
                  <p>
                    Den 28:e drog årets T4 igång med ett par nya ansikten bland eleverna!
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nulla rutrum,
                    fermentum velit quis, porta metus. Etiam efficitur nisl a eros gravida, non feugiat
                    lorem volutpat. Orci varius natoque penatibus et magnis dis parturient montes,
                    nascetur ridiculus mus. Maecenas metus tellus, fermentum placerat vulputate in,
                    feugiat eget nunc. Proin justo enim, consectetur vitae congue vel, commodo sed diam.
                    Phasellus sodales enim libero, eu auctor nisl aliquam ut. Nunc lobortis dictum quam,
                    vitae porta felis eleifend in.
                  </p>
                </div>
              </div>
            </div>
            <div class="container nyhet">
              <div class="row">
                <!-- Nyhetsbild -->
                <div class="col-md-4">
                  <img class="nyhetsbild" src="img/t4nyhet.jpg" />
                </div>
                <!-- Nyhetstext -->
                <div class="col-md-8">
                  <h2>Välkommen till T4!</h2>
                  <p>
                    Den 28:e augusti drog årets T4 igång med ett par nya ansikten bland eleverna!
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis nulla rutrum,
                    fermentum velit quis, porta metus. Etiam efficitur nisl a eros gravida, non feugiat
                    lorem volutpat. Orci varius natoque penatibus et magnis dis parturient montes,
                    nascetur ridiculus mus. Maecenas metus tellus, fermentum placerat vulputate in,
                    feugiat eget nunc. Proin justo enim, consectetur vitae congue vel, commodo sed diam.
                    Phasellus sodales enim libero, eu auctor nisl aliquam ut. Nunc lobortis dictum quam,
                    vitae porta felis eleifend in.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Högerkolumnen -->
        <div class="col-md-4">
          <!-- Länkbiblioteket -->
          <div class="row">
            <div id="links">
              <h3>Användbara länkar</h3>
              <ul>
                <li><a target="_blank" href="https://sms.schoolsoft.se/itg/jsp/Login.jsp">SchoolSoft</a></li>
                <li><a target="_blank" href="http://www.w3schools.com/">W3Schools Online</a></li>
                <li><a target="_blank" href="https://outlook.office365.com/owa/learnet.se/">Office 365</a></li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="block scheme"> <!-- Kalender för elev -->
              <h3>Kalender</h3>
              <table class="table table-bordered scheme_table">
                <!-- Kalenderns "header" -->
                <thead>
                  <h5>September</h5>
                  <tr>
                    <th>Måndag</th>
                    <th>Tisdag</th>
                    <th>Onsdag</th>
                    <th>Torsdag</th>
                    <th>Fredag</th>
                  </tr>
                </thead>
                <!-- Kalenderns innehåll -->
                <tbody>
                  <tr> <!-- Kalender-rad -->
                    <td>1</td> <!-- Kalenderkolumn -->
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td class="scheme_active">9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                    <td>19</td>
                  </tr>
                  <tr>
                    <td>22</td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="block contacts"> <!-- Kontaktinformation om handledare -->
              <h3>Kontaktlista - Handledare</h3>
              <!-- En "contacts_person"-klass för varje handledare -->
              <ul class="contacts_person">
                <li>Stefan Folkesson</li>
                <li><a href="mailto:stefan.folkesson@it-gymnasiet.se">stefan.folkesson@it-gymnasiet.se</a></li>
              </ul>
              <ul class="contacts_person">
                <li>Terese Kraft</li>
                <li><a href="mailto:terese.kraft@it-gymnasiet.se">terese.kraft@it-gymnasiet.se</a></li>
              </ul>
              <ul class="contacts_person">
                <li>Morgan Augustsson</li>
                <li><a href="mailto:morgan.augustsson@it-gymnasiet.se">morgan.augustsson@it-gymnasiet.se</a></li>
              </ul>
              <ul class="contacts_person">
                <li>Mattias Holm</li>
                <li><a href="mailto:mattias.holm@it-gymnasiet.se">mattias.holm@it-gymnasiet.se</a></li>
              </ul>
              <ul class="contacts_person">
                <li>Johan Ledell</li>
                <li><a href="mailto:johan.ledell@it-gymnasiet.se">johan.ledell@it-gymnasiet.se</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
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
