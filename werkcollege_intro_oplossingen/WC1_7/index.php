<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      <?php
          $sum = 0;
          for($i = 1; $i <= 30; $i++) {
            $sum += $i;
          }
      
          echo $sum;
      ?>
    </body>
</html>
