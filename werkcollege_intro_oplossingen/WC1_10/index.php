<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Splitsen</h1>
        <div><?php splitsNaam("Joske Vermeulen"); ?></div>
        
        <h1>Samenvoegen</h1>
        <p><?php echo voegNamenSamen("Joske", "Vermeulen"); ?></p>
    </body>
</html>

<?php

function splitsNaam($naam) {
    $index = strpos($naam, " ");
  
    if ($index < 0) {
        die("Geen spatie in naam teruggevonden");
    } else {
?>
        <ul>
            <li>
                Voornaam: <?php echo substr($naam, 0, $index); ?>
            </li>
            <li>
                Achternaam: <?php echo substr($naam, $index); ?>
            </li>
        </ul>
<?php
    }
}

function voegNamenSamen($voornaam, $achternaam) {
    return $voornaam . " " . $achternaam;
}
?>