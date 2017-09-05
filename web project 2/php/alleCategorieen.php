<?php
/**
 * Created by PhpStorm.
 * User: Pieter
 * Date: 1/08/2017
 */

//deze code zal alle categories ophalen en vervolgens echo'en
include '../database/databaseConnection.php';

$resultList = array();
if($result = $mysqli->query("SELECT * FROM Categorieen" ));

while ($row = mysqli_fetch_array($result)) {
    array_push($resultList, array(
        'id' => $row[0],
        'naam' => $row[1]));
}

echo json_encode(array("result" => $resultList));

$mysqli->close();