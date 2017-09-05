<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $naaminstelling = $_POST["naam"];
      setcookie("naam", $naaminstelling);
    
      $achtergrondkleurinstelling = $_POST["achtergrondkleur"];
      setcookie("achtergrondkleur", $achtergrondkleurinstelling, time() + 3600 * 24 * 7);
    
      $taalinstelling = $_POST["taal"];
      setcookie("taal", $taalinstelling);
    
      $tijdszoneinstelling = $_POST["tijdszone"];
      setcookie("tijdszone", $tijdszoneinstelling, mktime(23, 59, 0, 12, 31, 2017));
  }
  header("location:instellingen.php");
?>