<!DOCTYPE html>
<?php
    $FirstName      = "Lennert";
    $LastName       = "Peeters";
    $volledigeNaam  = $FirstName.' '.$LastName;
    $numChars       = strlen($volledigeNaam);
?>
<html>
    <head>
        <h1>Opdracht Concatenate</h1>
    </head>
    
    <body>
        <p>Mijn volledige naam is: <?php echo $volledigeNaam; ?></p>
        <p>Het aantal karakters in mijn naam is: <?php echo $numChars; ?>         </p>
    </body>
</html>