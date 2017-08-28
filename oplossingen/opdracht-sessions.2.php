<?php
	session_start();

	if(isset($_POST['submit'])){
		$_SESSION['registrationData'][ '1' ]['email']       =   $_POST[ 'email' ];
        $_SESSION['registrationData'][ '1' ]['naam']    =   $_POST[ 'naam' ];
	}


	$registrationData['1'] = $_SESSION['registrationData']['deel1'];

	 $straat      =   ( isset( $_SESSION[ 'registrationData' ][ '2' ][ 'straat'] ) ) ? $_SESSION[ 'registrationData' ][ '2' ][ 'straat'] : '';

    $nummer      =   ( isset( $_SESSION[ 'registrationData' ][ '2' ][ 'nummer'] ) ) ? $_SESSION[ 'registrationData' ][ '2' ][ 'nummer'] : '';

    $gemeente      =   ( isset( $_SESSION[ 'registrationData' ][ '2' ][ 'gemeente'] ) ) ? $_SESSION[ 'registrationData' ][ '2' ][ 'gemeente'] : '';

    $postcode      =   ( isset( $_SESSION[ 'registrationData' ][ '2' ][ 'postcode'] ) ) ? $_SESSION[ 'registrationData' ][ '2' ][ 'postcode'] : '';

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>opdracht sessions - deel2</title>

    </head>
    <body>
    	<h1>opdracht sessions - deel2</h1>
    	<a href="opdracht-sessions.1.php?session=destroy">

    	<h2> RegistratieGegevens</h2>
    	<ul>
    		<?php foreach($registrationData['1'] as $data => $value): ?>
    		<li><?= $data?>: <?= $value ?></li>
    		<?php endforeach ?>
    	</ul>

    	<h2> Deel 2: adres</h2>
    	<form action="opdracht-sessions.3.php" method="POST">
    	<ul>
    		<li>
    			<label for="straat">straat</label>
    			<input type="text" id="straat" name="straat" value="<?= $straat?>" placeholder="vul uw straat in" <?= (isset($_GET['focus']) && $_GET['focus'] === "straat") ? 'autofocus' : ''?>>	
    		</li>
    		<li>
                <label for="nummer">nummer</label>
                <input type="text" id="nummer" name="nummer" value="<?= $nummer ?>" placeholder="vul nummer in"  <?= ( isset( $_GET['focus'] ) && $_GET['focus'] == "nummer" ) ? 'autofocus' : '' ?>>
            </li>
            <li>
                <label for="gemeente">gemeente</label>
                <input type="text" id="gemeente" name="gemeente" value="<?= $gemeente ?>" placeholder="vul gemeente in"  <?= ( isset( $_GET['focus'] ) && $_GET['focus'] == "gemeente" ) ? 'autofocus' : '' ?>>
            </li>
            <li>
                <label for="postcode">postcode</label>
                <input type="text" id="postcode" name="postcode" value="<?= $postcode ?>" placeholder="vul postcode in"  <?= ( isset( $_GET['focus'] ) && $_GET['focus'] == "postcode" ) ? 'autofocus' : '' ?>>
            </li>
    	</ul>
    </body>
</html>