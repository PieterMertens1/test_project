<?php 
  define("PI", 3.1415);

  function berekenOppervlakteCirkel($straal) {
      return PI * $straal * $straal;
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>De oppervlakte van een cirkel met straal van 2,2m is <?php echo berekenOppervlakteCirkel(2.2); ?> m2</p>
    </body>
</html>

