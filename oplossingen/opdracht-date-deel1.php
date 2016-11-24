<?php 

	$timestamp	=	mktime(22, 35, 25, 01, 21, 1904);

	$date	=	date('d F Y, g:i:s A', $timestamp);
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Opdracht date</title>
    </head>
    <body>

		<h1>Opdracht date</h1>

		<p><?= $date ?></p>

    </body>
</html>