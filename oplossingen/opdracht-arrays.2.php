<!DOCTYPE html>
<?php
          ;
            $numbers[0]     = 1;
            $numbers[1]     = 2;
            $numbers[2]     = 3;
            $numbers[3]     = 4;
            $numbers[4]     = 5;

            $totalNum       = $numbers[0] * $numbers[1] * $numbers[2] * $numbers[3] * $numbers[4];            

            $unevenNum;
            for($x=0; $x<count($numbers); $x++)
            {
                if($numbers[x] % 2 != 0)
                {
                    
                    array_push($unevenNum, $numbers[x]);
                }
            }
            
            $numbers2     = array (5, 4, 3, 2, 1);
            
            $totNum;
            for($i=0; $i<5; $i++)
            {
                $totNum[i]  = $numbers[i] + $numbers2[i];
            }

            
?>
<html>
    <head>
        <h1>Opdracht arrays basis: deel 2</h1>
    </head>
    
    <body>
          <p>Array 1<?php var_dump($numbers);?></p>
          <p>Array 2<?php var_dump($numbers2);?></p>
           <p>Het product van de getallen uit array 1 is <?php echo $totalNum; ?></p> 
            <p>De oneven getallen <?php var_dump($unevenNum);?></p>
            <p>De getallen van beide arrays met elkaar opgeteld <?php var_dump($totNum);?></p>
    </body>
</html>