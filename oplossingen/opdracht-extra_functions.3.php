<!DOCTYPE html>
<?php
        $lettertje      = 'e';
        $cijfertje      = 3;
        $langsteWoord   = 'zandzeepsodemineralenwatersteenstralen';

?>

<html>
    <head>
        
    </head>
    
    <body>
        <p>als we alle e's in het woord <?php echo $langsteWoord; ?> vervangen door 3's krijgen we <?php echo str_replace($lettertje, $cijfertje, $langsteWoord); ?></p>
    </body>
</html>