<?php
// we gaan na of er effectief een post is gebeurd, indien niet redirecten we terug naar de 1e pagina
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <title></title>
  </head>
  <body>
    <div>
      <?php


        if ($_FILES["bestand"]["type"] == "image/jpeg" || $_FILES["bestand"]["type"] == "image/png"){
          $bestandsnaam = $_FILES["bestand"]["name"];
          move_uploaded_file($_FILES["bestand"]["tmp_name"], "./uploads/" . $bestandsnaam);

      ?>
          <p>Het geuploade bestand ziet er als volgt uit:</p>
          <img src="./uploads/<?php echo $bestandsnaam; ?>">
      <?php
        } else {
      ?>
          <p>Sorry, enkel jpeg of png files kunnen geupload worden.</p>
      <?php
        }
      ?>
    </div>
    <p><a href='index.php'>Ga terug naar de upload pagina</a></p>
  </body>
</html>
