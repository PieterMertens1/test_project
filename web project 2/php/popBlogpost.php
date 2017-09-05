<?php
/**
 * Created by PhpStorm.
 * User: Pieter
 * Date: 28/07/2017
 */

include '../database/databaseConnection.php';
$blogLijst = array();


if($result = $mysqli->query("SELECT * FROM Blogposts ORDER BY  CAST(`aantalComments` AS UNSIGNED) DESC LIMIT 4" )); // haal alle elementen uit de database

while ($row = mysqli_fetch_array($result)) {
    array_push($blogLijst, array(
        'id' => $row[0],
        'categorieId' => $row[1],
        'datum' => $row[2],
        'auteur' => $row[3],
        'tekstje' => $row[4],
        'aantalComments' => $row[5],
        'foto' => $row[6],
        'titel' => $row[7]
    ));

}
asort($blogLijst);

echo json_encode(array("result" => $blogLijst));

$mysqli->close();