<?php
  include_once './Database/CRUD/BoekDb.php';
  BoekDb::deleteById($_POST['boekId']);
  header("location:index.php");
?>