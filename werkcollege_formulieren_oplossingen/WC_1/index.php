<?php
//Aangezien we de ingevoerde gegevens niet willen valideren, kunnen we het formulier rechstreeks posten naar een andere pagina
//We hebben er namelijk geen nood aan om het formulier dat we op deze pagina hebben opgebouwd te hergebruiken voor eventuele niet-gevalideerde gegevens te verbeteren.
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Welkom</h1>
        <form action="pagina2.php" method="GET">
          <div class="search">
            <label for="zoekterm">Uw zoekterm:</label>
            <input type="text" name="zoekterm"/>
          </div>
            
          <div>
            <input type="submit" value="Verstuur">
          </div>
        </form>
    </body>
</html>
