<!DOCTYPE html>
<?php
        echo "Getallenreeks1: ";
        $i = 0;
        while($i <=100)
        {
            echo $i;
            echo ", ";
            $i++;
        }
        
          echo "\n";

        echo "Getallenreeks2: ";
        $i = 0;
        while($i <=100)
        {
            while($i>40 && $i<80 && $i % 3 == 0)
            {
                        echo $i;
                        echo ", ";
                $i++;

            }
            $i++;
        }
        

?>

<html>
    <head>
        
    </head>
    
    <body>
        <p></p>
    </body>
</html>