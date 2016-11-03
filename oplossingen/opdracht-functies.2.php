<!DOCTYPE html>
<?php

        
        $deArray  = array('Dicks' => 'Harambe');
            
      function drukArrayAf($array)
      {
          $returnArray = array();
          
          end($GLOBALS);
          $naamArray = key($GLOBALS);
            
            foreach($array as $key => $value)
            {
                $returnArray[] = $naamArray . ' ' . $key . ' out for ' . $value;
            }
            
            return $returnArray;
      }
        
        $arrayRes = drukArrayAf($deArray);

        $deString = '<html><head><title>Dicks</title></head><body>out for Harambe</body></html>';

        function validateHtmlTag($html)
        {
            $openTag = "<html>";
            $closeTag = "</html>";
            
            $geldig = FALSE;
            
            if((substr($html, 0, 6) == $openTag) && (substr($html, strlen($html)-8, 7) == $closeTag))
            {
                $geldig = TRUE;
            }
            
            return $geldig;
        }

        
            $validated = validateHtmlTag($deString);
           
?>

<html>
    <head>
        
    </head>
    
    <body>
        <ul>
            <?php foreach ( $arrayRes as $value ): ?>
                <li><?= $value ?></li>
            <?php endforeach ?>
        </ul>
        <p>De string <code><?= htmlentities( $deString ) ?></code> is <?= ( $validated ) ? 'wel' : 'niet' ?> geldig.</p>
    </body>
</html>