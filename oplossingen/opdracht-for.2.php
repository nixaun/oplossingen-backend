<!DOCTYPE html>
<?php
        $rijen = 11;
        $kolommen = 11;

        echo "<table><br />";
        for($i = 1; $i < $rijen; $i++)
        {
            echo "<tr>";
                for($x = 1; $x < $kolommen; $x++)
                {
                    if(($i*$x)%2 == 0)
                    {
                        echo "<td>", ($i * $x) ,"</td>";
                    }
                    else
                    {
                        echo '<td class="odd">', ($i * $x) ,"</td>";
                    }
                }
            echo "</tr>";
        }

        echo "</table>";
?>
<style>
    .odd{
        background-color: lawngreen;
    }
</style>



<html>
    <head>
        
    </head>
    
    <body>
   
    </body>
</html>