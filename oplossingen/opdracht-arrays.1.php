<!DOCTYPE html>
<?php
            $dieren1        = array('slang', 'luipaard', 'koe', 'os', 'giraf', 'nijlpaard', 'leeuw', 'panter', 'adelaar', 'haai');
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

            $voertuigen     = array('landvoertuigen' => array('vespa', 'fiets'), 'watervoertuigen' => array('surfplank', 'vlot', 'schoener', 'driemaster'), 'luchtvoertuigen' => array('luchtballon', 'helicopter', 'B52'));



            
?>
<html>
    <head>
        <h1>Opdracht arrays basis: deel 1</h1>
    </head>
    <body>
        <p><?php var_dump($voertuigen); ?></p>
        <p><?php var_dump($dieren1); ?></p>
    </body>
</html>