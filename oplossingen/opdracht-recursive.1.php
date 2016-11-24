<!DOCTYPE html>
<?php
        $startingMoney  =   100000;
        $interest       =   8;
        $time           =   10;
    
        function calculateMoney( $startingMoney, $interest, $time)
        {
            static $counter     =   1;
            static $moneyArray  =   array();
            
            if ( $counter <= $time)
            {
                $currentInterest        =  floor($startingMoney*($interest/100));
                $currentMoney           =  $startingMoney + $currentInterest;
                $monneyArray[$counter]  =  'You currently have €'.$currentMoney.' in your account, of which €'.$currentInterest.' is interest';
                ++$counter;
                return calculateMoney($currentMoney, $interest, $time);
            }
            else
            {
                return $moneyArray;
            }
        }
        
        $totalInterestHans = calculateMoney($startingMoney, $interest, $time);
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht recursive: deel1</title>
    </head>
    
    <body>
        <ul>
			<?php foreach($totalInterestHans as $value): ?>
				<li><?php echo $value ?></li>
			<?php endforeach ?>
		</ul>
    </body>
</html>