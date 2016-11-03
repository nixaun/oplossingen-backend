<!DOCTYPE html>
<?php
        $fruit = 'kokosnoot';
        
?>

<html>
    <head>
        <h1>Opdracht Extra Functies: deel 1</h1>
    </head>
    
    <body>
        <p>kokosnoot bevat <?php echo strlen($fruit); ?> karakters</p>
        <p>de eerste 'o' staat op positie <?php echo strpos($fruit, 'o'); ?></p>
    </body>
</html>