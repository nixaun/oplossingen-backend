<!DOCTYPE html>
<?php
        $md5HashKey = 'd1fa402db91a7a93c4f414b8278ce073';
        $char1			    =	"2";
	    $char2			    =	"8";
	    $char3			    =	"a";

        function bepaalProcent1($text, $char)
        {
            $textLength     = strlen($text);
            $charAantal     = substr_count($text, $char);
            $charProcent    = ($charAantal/$textLength)*100;
            
            return $charProcent;
        }

        function bepaalProcent2($char)
        {
            global $md5HashKey;
            $text = $md5HashKey;
            $textLength     = strlen($text);
            $charAantal     = substr_count($text, $char);
            $charProcent    = ($charAantal/$textLength)*100;
            
            return $charProcent;
            
        }

        function bepaalProcent3($char)
        {
            $text = $GLOBALS['md5HashKey'];
            $textLength     = strlen($text);
            $charAantal     = substr_count($text, $char);
            $charProcent    = ($charAantal/$textLength)*100;
            
            return $charProcent;
        }

        $eersteFunctie 	=	bepaalProcent1( $md5HashKey, $char1 );
	    $tweedeFunctie 	=	bepaalProcent2( $char2 );
	    $derdeFunctie 	=	bepaalProcent3( $char3 );
?>

<html>
    <head>
        
    </head>
    
    <body>
        <p>Het karakter "<?php echo $char1?>" komt <?php echo $eersteFunctie ?>% voor in de string "<?php echo $md5HashKey ?>"</p>
		<p>Het karakter "<?php echo $char2?>" komt <?php echo $tweedeFunctie ?>% voor in de string "<?php echo $md5HashKey ?>"</p>
		<p>Het karakter "<?php echo $char3?>" komt <?php echo $derdeFunctie ?>% voor in de string "<?php echo $md5HashKey ?>"</p>
    </body>
</html>