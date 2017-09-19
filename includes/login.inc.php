<?php
/*

Description:    Här så loggas användaren in
In:						 $_POST, submit, id, pwd
Out: 					Eventuellt error eller hänvisning till rätt sida

*/
session_start(); // en session startas för att spara all information om användaren
if (isset($_POST['submit'])) {	//här låter vi användaren skriva in input som lagras i _post
	include 'dbh.inc.php';

	$id = mysqli_real_escape_string($conn, $_POST['id']);	// här är användarens input som är begränsad då mysqli_real_escape_string används och lagrar de i ID
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);	// här är användarens input som är begränsad då mysqli_real_escape_string används och lagrar de i ID

	//error handler
	if(empty($id) || empty($pwd)){ // Om formulärena är tomma så blir man omdirigerad till länken nedan
		header("Location: ../index.php?login=error=empty");
		exit();
	}
	else {
		$sql = "SELECT * FROM person WHERE user_id='$id'"; // Här väljer man vilka rader man vill ha från vilken tabell
		$result = mysqli_query($conn, $sql);	//Här utför man "frågan" i variabeln "sql" och läggar in data från tabellen i result
		$resultCheck = mysqli_num_rows($result);	//Här kollar vi hur många rader det är i result och lägger i det i resultCheck
		}
		if ($resultCheck < 1){	//om ingen rad i tabellen hittas så blir man skickad till länken nedan
			header("Location: ../index.php?login=erroror");
			exit();
		}
		else {
			if ($row = mysqli_fetch_assoc($result)){		//Datan i result hämtas och läggs in i row
				if ($row ['user_pwd'] == $pwd) {	//om lösenordet i row stämmer överens med pwd där användarens input ligger
					$_SESSION['u_id'] = $row['user_id'];	//här är en session med användarens ID
					$_SESSION['u_first'] = $row['user_firstname'];	//här är en session med användarens namn
					$_SESSION['u_email'] = $row['user_email'];	//här är en session med användarens mail
					$_SESSION['login'] = true;	//här sätter vi session "login" till true
					if ($conn->query($pwd) === true) {			// om allt stämmer överens med tabellen så blir man skickad till user.php
            			$row ['user_id'];
					}
					header("Location: ../user.php");
					exit();
				}
				else {		//om allt inte stämmer överens så skickas man nedan
					header("Location: ../index.php?login=error");
					exit();
				}
      		}
	  }
  }
session_destroy();	//session förstörs om man stänger ner sidan

?>
