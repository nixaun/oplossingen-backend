<!DOCTYPE html>
<?php
            
            $dieren[0]     = 'slang';
            $dieren[1]     = 'luipaard';
            $dieren[2]     = 'koe';
            $dieren[3]     = 'os';
            $dieren[4]     = 'giraf';
            $dieren[5]     = 'nijlpaard';
            $dieren[6]     = 'leeuw';
            $dieren[7]     = 'panter';
            $dieren[8]     = 'adelaar';
            $dieren[9]     = 'haai';

            $dieren2[0]     = 'slang';
            $dieren2[1]     = 'luipaard';
            $dieren2[2]     = 'koe';
            $dieren2[3]     = 'os';
            $dieren2[4]     = 'giraf';
            $dieren2[5]     = 'nijlpaard';
            $dieren2[6]     = 'leeuw';
            $dieren2[7]     = 'panter';
            $dieren2[8]     = 'adelaar';
            $dieren2[9]     = 'haai';

            $teZoekenDier  = in_array('kikker', $dieren);
            if($teZoekenDier)
            {
                $Boodschap = 'Hoera, het dier "kikker" komt voor in de array';
            }
            else
            {
                $Boodschap = 'Helaas, het dier "kikker" komt niet voor in de array';
            }

           
            sort($dieren2);

            $zoogdieren[0]     = 'walvis';
            $zoogdieren[1]      = 'hond';
            $zoogdieren[2]      = 'kat';
            $dierenLijst    = array_merge($dieren, $zoogdieren);
            
            
?>
<html>
    <head>
        <h1>Opdracht arrays functies: deel 2</h1>
    </head>
    <body>
           <p>originele dieren array <?php var_dump($dieren);?></p>
           <p>gesorteerde dieren array <?php var_dump($dieren2);?></p> 
           <p>samengevoegde dieren array <?php var_dump($dierenLijst);?></p>
    </body>
</html>