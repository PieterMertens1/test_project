<?php
  include_once './Database/CRUD/BoekDb.php';
  if($gevondenBoek = BoekDb::getById($_GET['boekId'])){

  } else{
      header("location:index.php");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $gevondenBoek->titel; ?></title>
  </head>
  <body>
    <h1>Details</h1>
    <p>ID: <?php echo $gevondenBoek->boekId; ?></p>
    <p>Titel: <?php echo $gevondenBoek->titel; ?></p>
    <p>Datum van uitgave: <?php echo $gevondenBoek->uitgavedatum; ?></p>
    <p>Prijs excl. BTW: <?php echo $gevondenBoek->prijsExclBtw; ?></p>
    <p>Prijs incl. BTW: <?php echo $gevondenBoek->prijsExclBtw * 1.06; ?></p>
    <p>Emailadres uitgeverij: <?php echo $gevondenBoek->emailUitgeverij; ?></p>
    <a href="index.php">Terug naar overzicht</a>
  </body>
</html>

