<?php
  function berekenOppervlakteCirkel($straal) {
      return PI * $straal * $straal;
  }

  function berekenOppervlakteDriehoek($basis, $hoogte){
      return ($basis * $hoogte)/2;
  }

  function berekenOpperlakteVierkant($zijde){
      return berekenOppervlakteRechthoek($zijde, $zijde);
  }

  function berekenOppervlakteRechthoek($zijde1,$zijde2){
      return $zijde1 * $zijde2;
  }
?>