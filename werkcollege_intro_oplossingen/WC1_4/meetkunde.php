<?php
  $functieteller = 0;
  function berekenOppervlakteCirkel($straal) {
      global $functieteller;
      $functieteller++;
      return PI * $straal * $straal;
  }

  function berekenOppervlakteDriehoek($basis, $hoogte){
      global $functieteller;
      $functieteller++;
      return ($basis * $hoogte)/2;
  }

  function berekenOpperlakteVierkant($zijde){
      global $functieteller;
      $functieteller++;
      return berekenOppervlakteRechthoek($zijde, $zijde);
  }

  function berekenOppervlakteRechthoek($zijde1,$zijde2){
      global $functieteller;
      $functieteller++;
      return $zijde1 * $zijde2;
  }
?>