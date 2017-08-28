<?php
session_start();

if(isset ( $_GET['session'])){
	if( $_GET['session'] == 'destroy'){
		session_destroy();
		header('location: opdracht-sessions.1.php');
	}
}

$email	=	(isset($_SESSION['registrationData']['1']['email'])) ? $_SESSION['registrationData']['1']['email'] : '';
$naam = (isset($_SESSION['registrationData']['1']['naam'])) ? $_SESSION['registrationData']['1']['naam'] : '';



?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>opdracht sessions - deel1</title>

    </head>
    <body>
		
		<h1>opdracht sessions - deel1</h1>

		<a href="opdracht-sessions.1.php?session=destroy">Vernietig sessie</a>
		
		<h2>Deel1: registratiegegevens</h2>

		<form action="opdracht-sessions.2.php" method="POST">
			
			<ul>
				<li>
					<label for="email">email</label>
					<input type="text" id="email" name="email" value="<?= $email ?>" placeholder="vul email in" <?= ( isset( $_GET['focus'] ) && $_GET['focus'] == "email" ) ? 'autofocus' : '' ?>>
				</li>
				<li>
					<label for="naam">naam</label>
					<input type="text" id="naam" name="naam" value="<?= $naam ?>" placeholder="vul naam in" <?= ( isset( $_GET['focus'] ) && $_GET['focus'] == "naam" ) ? 'autofocus' : '' ?>>
				</li>
			</ul>

			<input type="submit" name="submit">

		</form>

		
    </body>
</html>