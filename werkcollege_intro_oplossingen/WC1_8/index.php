<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      <?php
          $html = "<table border='1'>";
          for($i = 1; $i <= 5; $i++) {
            $html .= "<tr>";
            for($j = 0; $j <= 6; $j++) {
              $html .= "<td>";
              $html .= "$i * $j = " . ($i * $j);
              $html .= "<td>";
            }
            $html .= "</tr>";
          }
        $html .= "</table>";
        echo $html;
      ?>
    </body>
</html>
