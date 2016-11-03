<!DOCTYPE html>
<?php
        function berekenSom($getal1, $getal2)
        {
            $som = $getal1 + $getal2;
            return $som;
        }

        function vermenigvuldig($getal1, $getal2)
        {
            $product = $getal1 * $getal2;
            return $product;
        }

        function isEven($getal)
        {
            if($getal % 2 == 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        $onevenGetal = 9;
        $evenheid    = isEven(9);

        function upperAndLength($text)
        {
            $textArray['upperString'] = strtoupper($text);
            $textArray['stringLength']= strlen($text);
            return $textArray;
            
        }

        $korteString = "dit is een korte string";
        $deString    = upperAndLength($korteString);
?>

<html>
    <head>
        
    </head>
    
    <body>
        <p>tel 5 en 4 op, dit geeft <?php echo berekenSom(5, 4); ?></p>
        <p>vermenigvuldig 8 en 9, dit geeft <?php echo vermenigvuldig(8, 9); ?></p>
        
        <?php if($evenheid): ?>
         <p>het Getal  <?php echo $onevenGetal; ?> is even</p>
        <?php else: ?>
         <p>Het getal <?php echo $onevenGetal; ?> is oneven</p>
        <?php endif ?>
        
        <p>De string "<?php echo $korteString; ?>" is in hoofdletters "<?php echo $deString['upperString']; ?> en deze is <?php echo $deString['stringLength']; ?> karakters lang</p>
        
    </body>
</html>