<?php
	session_start();

    if ( isset( $_POST[ 'submit' ] ) )
    {
        $_SESSION['registrationData'][ '2' ]['straat']  =   $_POST[ 'straat' ];
        $_SESSION['registrationData'][ '2' ]['nummer']  =   $_POST[ 'nummer' ];
        $_SESSION['registrationData'][ '2' ]['gemeente']  =   $_POST[ 'gemeente' ];
        $_SESSION['registrationData'][ '2' ]['postcode']  =   $_POST[ 'postcode' ];
    }

    $registrationData    =   $_SESSION['registrationData'];
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>opdracht sessions - deel3</title>
    </head>
    <body>
        <h1>opdracht sessions - deel3</h1>
        <a href="opdracht-sessions.1.php?session=destroy">Vernietig sessie</a>

        <h2>Overzicht</h2>
        <ul>
            <?php foreach( $registrationData as $numKey => $numArray ):  ?>
                <?php foreach( $numArray as $data => $value ):  ?>
                <li>
                    <?= $data ?>: <?= $value ?>
                    <p><a href="opdracht-sessions.<?= $numKey ?>.php?focus=<?= $data ?>">edit/a></p>
                </li>
                <?php endforeach ?>
            <?php endforeach ?>
        </ul>

        
    </body>