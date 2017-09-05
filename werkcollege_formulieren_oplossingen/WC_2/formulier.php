<h1>Formulier</h1>
<!-- We sturen de POST naar DEZE pagina, omdat we de gebruiker op deze pagina de kans willen geven om zijn ingevulde gegevens aan te passen wanneer deze niet gevalideerd kunnen worden, en om de foutboodschappen onder elk inputveld te kunnen tonen -->
<form action="index.php" method="POST">
    <div class="input">
      <label for="voornaam">Uw voornaam:</label>
        <input type="text" name="voornaam" value="<?php echo $values["voornaam"]; ?>"/>
      <div><?php echo $errors["voornaam"]; ?></div>
    </div>
   
    <div class="input">
      <label for="achternaam">Uw achternaam:</label> 
      <input type="text" name="achternaam" value="<?php echo $values["achternaam"]; ?>"/> 
      <div><?php echo $errors["achternaam"]; ?></div>
    </div>
    
    <div class="input">
      <label for="dag">Dag:</label> 
      <input type="text" name="dag" value="<?php echo $values["dag"]; ?>"/> 
      <div><?php echo $errors["dag"]; ?></div>
    </div>
    <div class="input">
      <label for="maand">Maand:</label> 
      <input type="text" name="maand" value="<?php echo $values["maand"]; ?>"/> 
      <div><?php echo $errors["maand"]; ?></div>
    </div>
    <div class="input">
      <label for="jaar">Jaar:</label> 
      <input type="text" name="jaar" value="<?php echo $values["jaar"]; ?>"/> 
      <div><?php echo $errors["jaar"]; ?></div>
    </div>
    
    <div class="input">
      <label for="geslacht">Uw geslacht:</label> 
      <input type="radio" name="geslacht" value="Man" <?php echo ($values["geslacht"]=="Man"?"checked":""); ?>/>Man 
      <input type="radio" name="geslacht" value="Vrouw" <?php echo ($values["geslacht"]=="Vrouw"?"checked":""); ?> />Vrouw 
      <div><?php echo $errors["geslacht"]; ?></div>
    </div>
    
    <div class="input">
      <label for="adres">Uw adres:</label> 
      <input type="text" name="adres" value="<?php echo $values["adres"]; ?>"/> 
      <div><?php echo $errors["adres"]; ?></div>
    </div>
     
    <div class="input">
      <label for="telefoonnummer">Uw telefoonnummer:</label> 
      <input type="text" name="telefoonnummer" value="<?php echo $values["telefoonnummer"]; ?>"/> 
      <div><?php echo $errors["telefoonnummer"]; ?></div>
    </div>
     
    <div class="input">
      <label for="gsmnummer">Uw GSM nummer:</label> 
      <input type="text" name="gsmnummer" value="<?php echo $values["gsmnummer"]; ?>"/> 
      <div><?php echo $errors["gsmnummer"]; ?></div>
    </div>
    
    <div class="input">
      <label for="rijksregisternummer">Uw rijksregisternummer:</label> 
      <input type="text" name="rijksregisternummer" value="<?php echo $values["rijksregisternummer"]; ?>"/> 
      <div><?php echo $errors["rijksregisternummer"]; ?></div>
    </div>
    
    <div class="input">
      <label for="bankrekeningnummer">Uw bankrekeningnummer:</label> 
      BE<input type="text" name="bankrekeningnummer" value="<?php echo $values["bankrekeningnummer"]; ?>"/> 
      <div><?php echo $errors["bankrekeningnummer"]; ?></div>
    </div>
    
    <div class="input">
      <label for="gewensteCursus">De cursus waarvoor u zicht wilt inschrijven:</label>
      <select name="cursus">
          <option value="Dig-X" <?php echo ($values["cursus"]=="Dig-X"?"selected":"");?>>Dig-X</option>
          <option value="Multec" <?php echo ($values["cursus"]=="Multec"?"selected":"");?>>Multec</option>
      </select>
    </div>
    
    <div class="input">
      <label for="hogerOnderwijs">Heeft u in het verleden reeds hoger onderwijs genoten?</label> 
      <input type="checkbox" name="hogerOnderwijs" value="ja" <?php echo ($values["hogerOnderwijs"]=="ja"?"checked":"");?>/> 
    </div>
    
    <div class="input">
        <input type="submit" value="Inschrijven">
    </div>
</form>