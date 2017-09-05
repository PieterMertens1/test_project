<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Boek toevoegen</title>
  </head>
  <body>
    <h1>Nieuw boek</h1>
    <form action="insert.php" method="POST">
      <div>
        <label for="titel">Titel:</label>
        <input type="text" name="titel" value="<?php echo $titelVal; ?>"/>
        <div><?php echo $titelErr; ?></div>
      </div>
      <div>
        <label for="uitgavedatum">Datum van uitgave (DD/MM/YYYY):</label>
        <input type="text" name="uitgavedatum" value="<?php echo $uitgavedatumVal; ?>"/>
        <div><?php echo $uitgavedatumErr; ?></div>
      </div>
      <div>
        <label for="prijsExclBtw">Prijs excl. BTW (geheel getal of kommagetal met max 2 decimalen):</label>
        <input type="text" name="prijsExclBtw" value="<?php echo $prijsExclBtwVal; ?>"/>
        <div><?php echo $prijsExclBtwErr; ?></div>
      </div>
      <div>
        <label for="emailUitgeverij">Email uitgeverij (valid emailadres):</label>
        <input type="text" name="emailUitgeverij" value="<?php echo $emailUitgeverijVal; ?>"/>
        <div><?php echo $emailUitgeverijErr; ?></div>
      </div>
      <div>
        <input type="submit" value="Aanmaken">
      </div>
    </form>
    <a href="index.php">Terug naar overzicht</a>
  </body>
</html>