<!DOCTYPE html>
<?php
        $fruit = 'ananas';
        
?>

<html>
    <head>
        <h1>Opdracht Extra Functies: deel 1</h1>
    </head>
    
    <body>
        <p>de derde 'a' staat op positie <?php echo strrpos($fruit, 'a', 3); ?></p>
        <p>het fruit in hoofdletters: <?php echo strtoupper($fruit); ?></p>
    </body>
</html>