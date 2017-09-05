<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
 <?php
        //array met alle velden die required zijn
        $required = ["voornaam", "achternaam", "dag", "maand", "jaar", "geslacht", "adres"];
  
        $valid = true;
        
        //array waar alle errors in zullen komen
        $errors = [
          "voornaam" => "",
          "achternaam" => "",
          "dag" => "",
          "maand" => "",
          "jaar" => "",
          "geslacht" => "",
          "adres" => "",
          "telefoonnummer" => "",
          "gsmnummer" => "",
          "rijksregisternummer" => "",
          "bankrekeningnummer" => "",
          "cursus" => "",
          "hogerOnderwijs" => ""
        ];
  
        //array met alle default values van de input velden
        $values = [
          "voornaam" => "",
          "achternaam" => "",
          "dag" => "",
          "maand" => "",
          "jaar" => "",
          "geslacht" => "",
          "adres" => "",
          "telefoonnummer" => "",
          "gsmnummer" => "",
          "rijksregisternummer" => "",
          "bankrekeningnummer" => "",
          "cursus" => "",
          "hogerOnderwijs" => ""
        ];
      
        include_once './validatie.php';

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            /*
              Dit wilt zeggen dat de gebruiker voor het eerst op deze pagina landt. We tonen het formulier en geven de gebruiker de kans om het formulier in te vullen
            */
            include 'formulier.php';
        } else {
          /*
              De gebruiker heeft het formulier ingevuld, en het formulier werd correct naar deze pagina gepost. We voeren de validatie van de velden uit
          */
          
          // Required validatie
          checkRequired($required);
          
          // geboortedag validatie
          checkDateParts("dag", 1, 31);
          checkDateParts("maand", 1, 12);
          checkDateParts("jaar", 1851, date("Y"));
          
          // telefoon validatie
          checkTwoFields("telefoonnummer","gsmnummer") ;
          
          // rijkregisternummer validatie
          checkRijksregisternummer("rijksregisternummer");
          
          // bankrekeningnummer validatie
          checkBankrekeningnummer("bankrekeningnummer");
          
          /*
            we gaan na of er errors zijn, indien niet dan blijft valid op true staan en zullen de resultaten getoond worden
          */
          foreach($errors as $error) {
            if(!empty($error)) {
              $valid = false;
              break;
            }
          }
          
          // cursus veld een waarde geven
          if(isset($_POST["cursus"]))
              $values["cursus"] = $_POST["cursus"];

          // hogerOnderwijs veld een waarde geven
          if(isset($_POST["hogerOnderwijs"]))
            $values["hogerOnderwijs"] = $_POST["hogerOnderwijs"];

          // als formulier niet valid is wordt formulier terug getoond met foutboodschappen
          if(!$valid) {
            include 'formulier.php';
          } else {
            // anders wordt het resultaat getoond
            include 'resultaat.php';
          }
        }
  ?>
</body>
</html>