<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>max</title>
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body>
    <table width="400px">
      <?php
        for($row = 0; $row < 9; $row ++) 
        {
            echo "<tr>";
              for($col = 1; $col < 9; col ++)
              {
                elseif ($row%2 != 0){
                    if ($col%2 != 0){
                      echo "<td width=50px height=50px bgcolor=#FFFFFF></td>";
                      } else {
                        echo "<td width=50px height=50px bgcolor=#000000>";
                      }
                  }
                elseif ($row%2 == 0){
                    if ($col%2 == 0){
                      echo "<td width=50px height=50px bgcolor=#FFFFFF></td>";
                    } else {
                      echo "<td width=50px height=50px bgcolor=#000000></td>";
                    }
                }  
              }
            echo "</tr>"        
        }



      ?>
    </table>

  </body>
</html>