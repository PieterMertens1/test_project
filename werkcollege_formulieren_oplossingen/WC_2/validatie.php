<?php

  function checkRequired($fields) {
    foreach($fields as $name) {
      if(required($name)) {
        global $values;
        $values[$name] = $_POST[$name];
      } else {
        global $errors;
        $errors[$name] = "Dit veld is verplicht in te vullen";
      }
    }
  }

  function required($name) {
    if(isset($_POST[$name]) && !empty($_POST[$name])) {
      return true;
    } else {
      return false;
    }
  }

  function checkDateParts($name, $from, $to) {
    global $errors;
    global $values;
    if(!required($name)) {
      $errors[$name] = "Dit veld is verplicht in te vullen";
    } elseif(!betweenNumbers($_POST[$name], $from, $to)) {
      $errors[$name] = "De waarde moet tussen $from en $to liggen.";
      $values[$name] = $_POST[$name];
    } else {
      $values[$name] = $_POST[$name];
    }
  }

  function betweenNumbers($value, $from, $to) {
    if($value >= $from && $value <= $to) {
      return true;
    } else {
      return false;
    }
  }

  function checkTwoFields($field1, $field2) {
    global $errors;
    global $values;
    if(!required($field1) && !required($field2)) {
      $errors[$field1] = "Eén van de telefoonvelden moet ingevuld worden.";
      $errors[$field2] = "Eén van de telefoonvelden moet ingevuld worden.";
    } else {
      $values[$field1] = $_POST[$field1];
      $values[$field2] = $_POST[$field2];
    }
  }

  function checkRijksregisternummer($name){
    global $errors;
    global $values;
    if(!required($name)) {
      $errors[$name] = "Dit veld is verplicht";
    } elseif(!validRijksregisternummer($_POST[$name])) {
      $errors[$name] = "Dit is geen geldig rijksregisternummer";
      $values[$name] = $_POST[$name];
    } else {
      $values[$name] = $_POST[$name];
    }
  }

  function validRijksregisternummer($value) {
    $value = preg_replace("/(\.|-)/", "", $value); // verwijder de . en - tekens in het rijksregisternummer
    $eersteDeel = substr($value, 0,9);
    $restEersteDeel = $eersteDeel % 97;
    $berekendControleGetal = 97 - $restEersteDeel;
    $gelezenControleGetal = substr($value, 9, 2);
    return ($berekendControleGetal == $gelezenControleGetal);
  }

  function checkBankrekeningnummer($name) {
    global $errors;
    global $values;
    if(!required($name)) {
      $errors[$name] = "Dit veld is verplicht";
    } elseif(!validBankrekeningnummer($_POST[$name])) {
      $errors[$name] = "Dit is geen geldig bankrekeningrnummer";
      $values[$name] = $_POST[$name];
    } else {
      $values[$name] = $_POST[$name];
    }
  }

  function validBankrekeningnummer($value) {
    $value = preg_replace("/( )/", "", $value); // verwijder de spaties in het bankregeingnummer
    $eersteDeel = substr($value, 2,10);
    $berekendControleGetal = $eersteDeel % 97;
    $gelezenControleGetal = substr($value, 12, 2);
    return ($berekendControleGetal == $gelezenControleGetal && strlen($value) == 14);
  }
?>
