<!DOCTYPE html>
<?php
        $boodschappenlijstje        = array('kaas', 'hesp', 'boter', 'brood');


?>

<html>
    <head>
        
    </head>
    
    <body>
       <p>boodschappenlijstje</p>
        <ul>
            <li><?php echo $boodschappenlijstje[0]; ?></li>
            <li><?php echo $boodschappenlijstje[1]; ?></li>
            <li><?php echo $boodschappenlijstje[2]; ?></li>
            <li><?php echo $boodschappenlijstje[3]; ?></li>
            
        </ul>
    </body>
</html>