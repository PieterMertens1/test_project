<?php
/**
 * Created by PhpStorm.
 * User: Pieter
 * Date: 26/07/2017
 */

function show_random($mysqli)
{
    if ($result = $mysqli->query("SELECT * FROM Blogposts  ORDER BY RAND() LIMIT 4")) ; // haal de gevraagde elementen uit de database

    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $categorieId = $row['categorieId'];
        $datum = $row['datum'];
        $auteur = $row['auteur'];
        $tekstje = $row['tekstje'];
        $aantalComments = $row['aantalComments'];
        $foto = $row['foto'];
        $titel = $row['titel'];

        echo "<a href='index.php?detailId=" . $id . "'>";

        echo "<div class='col-sm-3'>";
        echo "<h4>" . $auteur . "</h4>";
        echo "Schreef op" . $datum . "</br>";
        echo "<img class='img-responsive' src='" . $foto . "' alt='img product'>";
        echo "<div class='meer'>";
        echo "<div class='tekst'>Klik hier voor meer</div>";
        echo "</div>";
        echo "<p>" . $tekstje . "</p>";

        echo "</div>";
        echo "</a>";

    }
    echo "</div>";

    $mysqli->close();

}

