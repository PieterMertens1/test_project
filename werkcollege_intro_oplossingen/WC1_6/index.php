<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
          $nummer = 30; //wijzig dit nummer om te testen
      
          if($nummer == 30) {
            echo "Nummer is gelijk aan 30";
          } elseif($nummer == 20) {
            echo "Nummer is gelijk aan 20";
          } elseif($nummer == 10) {
            echo "Nummer is gelijk aan 10";
          } else {
            echo "Nummer is niet gelijk aan 30, 20 of 10";
          }
      
          //je zou dit ook met een switch kunnen doen
          switch ($nummer) {
            case 30:
                echo "Nummer is gelijk aan 30";
                break;
            case 20:
                echo "Nummer is gelijk aan 20";
                break;
            case 10:
                echo "Nummer is gelijk aan 10";
                break;
            default:
                echo "Nummer is niet gelijk aan 30, 20 of 10";
          }
        ?>
    </body>
</html>
