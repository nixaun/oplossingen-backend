<?php 

	// Voor windows
	setlocale( 'LC_ALL', 'nld_nld' );

	// Voor *nix (oa. mac)
	//setlocale( 'LC_ALL', 'nl_NL' );
	
	$timestamp	=	mktime( 22, 35, 25, 01, 21, 1904 );

	$date	=	strftime('%d %B %Y, %H:%M:%S %p', $timestamp);

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht date deel2</title>
    </head>
    <body>

		<h1>Opdracht date deel2</h1>

		<p><?= $date ?></p>

    </body>
</html>