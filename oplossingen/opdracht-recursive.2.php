<!DOCTYPE html>
<?php
        $startingMoney  =   100000;
        $interest       =   8;
        $time           =   10;
        $counter     =   1;
        $moneyArray  =   array();
    
        function calculateMoney( $dataArray)
        {
            
            
            if ( $dataArray['counter'] <= $dataArray['time'])
            {
                $currentInterest        =  floor($dataArray['money']*($dataArray['interest']/100));
                $dataArray['money']         +=  $currentInterest;
                $dataArray['money array'][$dataArray['counter']]  =  'You currently have €'.$dataArray['money'].' in your account, of which €'.$currentInterest.' is interest';
                ++$dataArray['counter'];
                return calculateMoney($dataArray);
            }
            else
            {
                return $dataArray;
            }
        }
        
        $totalInterestHans = calculateMoney(array('money'=>$startingMoney,
                                                    'interest'=>$interest,
                                                    'time'=>$time,
                                                    'counter'=>1,
                                                    'money array'=>array()));
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht recursive: deel2</title>
    </head>
    
    <body>
        <ul>
			<?php foreach($totalInterestHans as $value): ?>
				<li><?php echo $value ?></li>
			<?php endforeach ?>
		</ul>
    </body>
</html>