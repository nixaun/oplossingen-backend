<!DOCTYPE html>
<?php
            
            $numbers[0]     = 8;
            $numbers[1]     = 7;
            $numbers[2]     = 8;
            $numbers[3]     = 7;
            $numbers[4]     = 3;
            $numbers[5]     = 2;
            $numbers[6]     = 1;
            $numbers[7]     = 2;
            $numbers[8]     = 4;

            $numbers2[0]     = 8;
            $numbers2[1]     = 7;
            $numbers2[2]     = 8;
            $numbers2[3]     = 7;
            $numbers2[4]     = 3;
            $numbers2[5]     = 2;
            $numbers2[6]     = 1;
            $numbers2[7]     = 2;
            $numbers2[8]     = 4;
           
            $num = array_unique($numbers);
            rsort($numbers2);
            
            
?>
<html>
    <head>
        <h1>Opdracht arrays functies: deel 3</h1>
    </head>
    <body>
           <p>originele getallen array <?php var_dump($numbers);?></p>
           <p>gesorteerde dieren array <?php var_dump($num);?></p> 
           <p>samengevoegde dieren array <?php var_dump($numbers2);?></p>
    </body>
</html>