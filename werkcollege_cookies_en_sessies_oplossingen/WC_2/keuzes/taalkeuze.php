<?php
  $taal="nl";
  if (isset($_COOKIE["taal"])){
    $taal = $_COOKIE["taal"];
  }
  include "talen/" . $taal . ".php";
?>