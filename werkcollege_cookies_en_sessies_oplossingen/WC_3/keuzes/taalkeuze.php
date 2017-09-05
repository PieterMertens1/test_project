<?php
  $taal="nl";
  if (isset($_SESSION["taal"])){
    $taal = $_SESSION["taal"];
  }
  include "talen/" . $taal . ".php";
?>