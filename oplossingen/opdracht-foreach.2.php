<!DOCTYPE html>
<?php
        $text = file_get_contents("../cursus/public/cursus/opdrachten/opdracht-looping-statements-foreach/text-file.txt");
        $textAdapted = preg_replace("/[^a-zA-Z]/", "", $text);
        $textAdapted2 = strtolower($textAdapted);

        $textChars = str_split($textAdapted2);
        rsort($textChars);
        $textCharsRev   = array_reverse($textChars);
        $usedChars = array();
        foreach($textCharsRev as $value)
        {
            if(isset($usedChars[$value]))
            {
                ++$usedChars[$value];
            }
            else
            {
                $usedChars[$value] = 1;
            }
        }
?>

<html>
    <head>
        
    </head>
    
    <body>
        <p>alle letters</p>
        <p><?php var_dump($usedChars); ?></p>
    </body>
</html>