<?php

  $titelVal = $uitgavedatumVal = $prijsExclBtwVal = $emailUitgeverijVal = "";
  $titelErr = $uitgavedatumErr = $prijsExclBtwErr = $emailUitgeverijErr = "";

  include_once './validatiebibliotheek.php';
  //We sturen de POST naar DEZE pagina, omdat we de gebruiker op deze pagina de kans willen geven om zijn ingevulde gegevens aan te passen wanneer deze niet gevalideerd kunnen worden

  if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
      //Dit wilt zeggen dat de gebruiker voor het eerst op deze pagina landt
      //=> we tonen het formulier en geven de gebruiker de kans om het formulier in te vullen
      //We kunnen eventueel een aantal default values voorzien voor de invulvelden
      include './insertformulier.php';
  } else {
      //De gebruiker heeft het formulier reeds ingevuld, en het formulier werd correct naar deze pagina gepost
      //We voeren de validatie van de velden uit
      $titelErr = errRequiredVeld("titel");
      $uitgavedatumErr = errVoegMeldingToe(errRequiredVeld("uitgavedatum"), errVeldHeeftDatumVorm("uitgavedatum"));
      $prijsExclBtwErr = errVoegMeldingToe(errRequiredVeld("prijsExclBtw"), errVeldIsGeheelGetalOfKommagetal("prijsExclBtw"));
      $emailUitgeverijErr = errVoegMeldingToe(errRequiredVeld("emailUitgeverij"), errVeldIsEmailAdres("emailUitgeverij"));
      if (isFormulierValid()) {
          //Het formulier werd valid ingevuld
          //We kunnen de data opslaan in de database en terug doorlinken naar de home pagina
          include_once './Database/CRUD/BoekDb.php';
          BoekDb::insert(new Boek(0, getVeldWaarde("titel"), getVeldWaarde("uitgavedatum"), getVeldWaarde("prijsExclBtw"), getVeldWaarde("emailUitgeverij")));
          header("location:index.php");
      } else {
          //Toon formulierpagina met eventuele feedbackvelden (err-velden)
          //Eventueel kan je ervoor zorgen dat foutief ingevulde waarden terug worden afgeprint in het formulier
          $titelVal = getVeldWaarde("titel");
          $uitgavedatumVal = getVeldWaarde("uitgavedatum");
          $prijsExclBtwVal = getVeldWaarde("prijsExclBtw");
          $emailUitgeverijVal = getVeldWaarde("emailUitgeverij");
          include './insertformulier.php';
      }
  }

  function isFormulierValid() {
      global $titelErr, $uitgavedatumErr, $prijsExclBtwErr, $emailUitgeverijErr;
      $allErr = $titelErr . $uitgavedatumErr . $prijsExclBtwErr . $emailUitgeverijErr;
      if (empty($allErr)) {
          //Formulier is valid
          return true;
      } else {
          return false;
      }
  }
?>

