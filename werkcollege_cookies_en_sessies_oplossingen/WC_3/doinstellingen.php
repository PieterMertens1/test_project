<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      session_start();
      $naaminstelling = $_POST["naam"];
      $_SESSION["naam"] = $naaminstelling;
    
      $achtergrondkleurinstelling = $_POST["achtergrondkleur"];
      $_SESSION["achtergrondkleur"] = $achtergrondkleurinstelling;
    
      $taalinstelling = $_POST["taal"];
      $_SESSION["taal"] = $taalinstelling;
    
      $tijdszoneinstelling = $_POST["tijdszone"];
      $_SESSION["tijdszone"] = $tijdszoneinstelling;
  }
  header("location:instellingen.php");
?>