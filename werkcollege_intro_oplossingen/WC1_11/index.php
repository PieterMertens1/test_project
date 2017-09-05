<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      <?php
        $mail  = 'joske@ehb.com';
        $user = strstr($mail, '@', true);
        echo $user;
      ?>
    </body>
</html>