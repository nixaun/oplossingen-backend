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

            $teZoekenDier  = in_array('kikker', $dieren);
            if($teZoekenDier)
            {
                $Boodschap = 'Hoera, het dier "kikker" komt voor in de array';
            }
            else
            {
                $Boodschap = 'Helaas, het dier "kikker" komt niet voor in de array';
            }


            
?>
<html>
    <head>
        <h1>Opdracht arrays functies: deel 1</h1>
    </head>
    <body>
           <p><?php var_dump($dieren);?></p>
            <p>Er zitten <?php echo count($dieren);?> dieren in de array</p>
            <p><?php echo $Boodschap;?></p>
    </body>
</html>