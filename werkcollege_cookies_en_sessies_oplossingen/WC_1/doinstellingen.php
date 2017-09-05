<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $taalinstelling = $_POST["taal"];
      setcookie("taal", $taalinstelling);
  }
  header("location:instellingen.php");
?>