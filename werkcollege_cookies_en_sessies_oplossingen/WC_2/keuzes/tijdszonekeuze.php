<?php
  $tijdszone=0;
  if (isset($_COOKIE["tijdszone"])){
    $tijdszone = $_COOKIE["tijdszone"];
  }

  //Get tijdszone offset in seconden
  $tijdzoneOffsetInSeconden = date("Z");
  $utcTijd = time() - $tijdzoneOffsetInSeconden;
  $gecorrigeerdeTijd = $utcTijd + ($tijdszone * 3600);
  $tijd = date("H:i", $gecorrigeerdeTijd);
?>
