<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <table border = "5">
        
        <?php
        
        $numberRows = array(100);
        $count = 1;
        
            for ($i = 0; $i < 100; $i++){
                    
                $date = date('M d Y');
                
                    if ($count%2 === 0){
                        echo '<tr style = "background-color: silver";>';
                        echo "<td> $count</td>  <td>$date</td>";
                        echo '</tr>';
                       }
                    else 
                      {
                        echo '<tr>';
                        echo "<td> $count</td>  <td>$date</td>";
                        echo '</tr>';
                      }
        
                      $count++;
            }
        ?>
                      
        </table>
        
    </body>
</html>