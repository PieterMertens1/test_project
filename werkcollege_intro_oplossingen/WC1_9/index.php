<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Huidig tijdstip</h1>
        <p><?php echo date("l d/m/Y, H:i");?></p>
        
        <h1>Huidig seizoen</h1>
        <?php echo vindSeizoen(date("n")); ?>
    </body>
</html>

<?php
  function vindSeizoen($maandNummer) {
    if ($maandNummer >= 12 || $maandNummer <= 2) {
?>
    <h2>Winter</h2>
    <div>De winter is een van de vier seizoenen in de gematigde en polaire streken. Het afwisselen van de winter met de andere seizoenen wordt veroorzaakt door de schuine stand van de aardas. In de winter staat op het noordelijk halfrond de aardas van de zon af gewend en in de zomer juist naar de zon toe gericht. Op het zuidelijk halfrond is dit omgekeerd, zodat de winter zich daar juist afspeelt tijdens de zomer van het noordelijk halfrond. Het meest kenmerkend aan de winter is hierdoor behalve de in vergelijking met andere seizoenen lage temperaturen de korte dagduur. Er wordt onderscheid gemaakt tussen de astronomische winter en de meteorologische winter. http://nl.wikipedia.org/wiki/Winter)</div>
  <?php
    }
    if ($maandNummer >= 3 && $maandNummer <= 5) {
  ?>
    <h2>Lente</h2>
    <div>Lente of voorjaar is een van de vier seizoenen. De lente volgt op de winter en wordt gevolgd door de zomer. De lente begint op het noordelijk halfrond (meestal) op 20 maart en eindigt (meestal) op 21 juni. Op het zuidelijk halfrond begint de lente meestal op 22 september. Tijdens de lente worden in de noordelijker streken van het noordelijk halfrond de bomen veel groener en gaan veel planten bloeien; geleidelijk wordt het warmer en wordt de kans op vorst kleiner.(http://nl.wikipedia.org/wiki/Lente)</div>
<?php
  }
  if ($maandNummer >= 6 && $maandNummer <= 8) {
?>
    <h2>Zomer</h2>
    <div>De zomer is een van de vier seizoenen, door de meteorologie gedefinieerd als de maanden juni, juli en augustus op het noordelijk halfrond, en december, januari en februari op het zuidelijk halfrond.(http://nl.wikipedia.org/wiki/Zomer)</div>
<?php
  }
  if ($maandNummer >= 9 && $maandNummer <= 11) {
?>
    <h2>Herfst</h2>
    <div>Herfst of najaar is een van de vier seizoenen.(http://nl.wikipedia.org/wiki/Herfst)</div>
<?php
  }
}
?>