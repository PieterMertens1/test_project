<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      <?php
        $sub_string = 'joske@';
        $str = 'joske@ehb.com';
      
        if (substr($str, 0, strlen($sub_string)) == $sub_string) {
          $str = substr($str, strlen($sub_string));
        }
      
        echo $str;
      ?>
    </body>
</html>