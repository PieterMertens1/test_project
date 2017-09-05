<?php
  if(isset($_POST["name"])){
      if(!empty($_POST["name"])){
        $data["succes"] = "Welkom ".$_POST["name"];
      }
      else {
        $data["error"] = "Geen naam verstuurd via POST";
      }
  }
  else {
    $data["error"] = "Geen naam verstuurd via POST";
  }

  echo json_encode($data);  
?>