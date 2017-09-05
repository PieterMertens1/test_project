<?php
  /*
    Aangezien we de ingevoerde gegevens niet willen valideren, kunnen we het formulier rechstreeks posten naar een andere pagina.
    We hebben er namelijk geen nood aan om het formulier dat we op deze pagina hebben opgebouwd te hergebruiken voor eventuele niet-gevalideerde gegevens te verbeteren.
  */
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Welkom</h1>
        <p>
            U kan op deze pagina een afbeelding in jpeg of png uploaden.
             Afhankelijk van de instellingen van de webserver moet uw afbeelding kleiner zijn dan 2MB.
        </p>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <label for="bestand">Te uploaden bestand:</label>
            <input type="file" name="bestand" id="bestand"/>
            <div>
                <input type="submit" value="Verstuur">
            </div>
        </form>

    </body>
</html>
