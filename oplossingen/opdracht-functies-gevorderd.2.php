<!DOCTYPE html>
<?php
        $pigHealth          = 5;
        $maximumThrows      = 8;
        $spelverloop        = array();

        function calculateHit()
        {
            global $pighealth;
            $kans           = rand(0, 100);
            if($kans <= 40)
            {
                $pigHealth--;
                return "Raak! Er zijn nog maar ", pigHealth, " varkens over.";
            }
            else
            {
                return "Mis! Er zijn nog ", pigHealth, " varkens over.";
            }
        }

        function launchAngryBird()
        {
            global pigHealth;
            global maximumThrows;
            global spelverloop;
            
            if($maximumThrows != 0 && $pigHealth > 0)
            {
                --$maximumThrows;
                $spelverloop[]  = calculateHit();
                launchAngryBird();
            }
            else
            {
                if ($pigHealth > 0)
                {
                    $spelverloop[]   =   'Helaas, je hebt verloren.'; 
                }
                else
                {
                    $spelverloop[]   =   'Hoera! Hoera! Hoera! Je hebt gewonnen!';
                }
            }
        }
        
        launchAngryBird();
?>

<html>
    <head>
        
    </head>
    
    <body>
       <ul>
            <?php foreach( $spelverloop as $resultaat ): ?>
                <li><?= $resultaat ?></li>
            <?php endforeach ?>
        </ul>
    </body>
</html>