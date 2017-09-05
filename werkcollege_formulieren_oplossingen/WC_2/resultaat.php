<h1>Resultaten</h1>

<p>Voornaam: <?php echo $values["voornaam"]; ?> </p>
<p>Achternaam: <?php echo $values["achternaam"]; ?> </p>
<p>Geboortedatum: <?php echo $values["dag"]; ?>/<?php echo $values["maand"]; ?>/<?php echo $values["jaar"]; ?> </p>
<p>Geslacht: <?php echo $values["geslacht"]; ?> </p>

<p>Adres: <?php echo $values["adres"]; ?></p>
<p>Telefoonnummer: <?php echo $values["telefoonnummer"]; ?></p>
<p>GSM nummer: <?php echo $values["gsmnummer"]; ?></p>

<p>Rijksregisternummer: <?php echo $values["rijksregisternummer"]; ?></p>
<p>Bankrekeningnummer: <?php echo $values["bankrekeningnummer"]; ?></p>
<p>Gewenste cursus: <?php echo $values["cursus"]; ?></p>

<p>In het verleden reeds ingeschreven? <?php echo empty($values["hogerOnderwijs"]) ? "nee" : $values["hogerOnderwijs"]; ?></p>