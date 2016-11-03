<!DOCTYPE html>
<?php
        $rijen = 10;
        $kolommen = 10;
        $table;
        
        for($i = 0; $i<$rijen; $i++)
        {
           $table[$i] = array((0*$i), (1*$i), (2*$i), (3*$i), (4*$i), (5*$i), (6*$i), (7*$i), (8*$i), (9*$i));
            
        }

        echo "<table>";
        echo "<thead>";
            echo "<tr>";
                echo "<th>Tafel</th>";
                for($i = 0; $i <= $kolommen; $i++)
                {
                    echo "<th>", $i, "</th>";
                }
            echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        for($i = 0; $i <= $rijen; $i++)
        {
            echo "<tr>";
                for($x = 0; $x <= $kolommen; $x++)
                {
                    if($x == 0)
                    {
                        echo "<td>", $i, "</td>";
                    }
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
        echo "</tbody";
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