<?php
  if(isset($_GET["name"])){
      if(!empty($_GET["name"])){
        $data["succes"] = "Welkom " . $_GET["name"];
      }
      else {
        $data["error"] = "Geen naam verstuurd via GET";
      }
  }
  else {
    $data["error"] = "Geen naam verstuurd via GET";
  }

  echo json_encode($data);
?>