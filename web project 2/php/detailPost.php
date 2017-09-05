<?php
/**
 * Created by PhpStorm.
 * User: Pieter
 * Date: 8/08/2017
 */

function get_zelfdeCategorie($id, $mysqli)
{
    if($result = $mysqli->query("SELECT categorieId FROM Blogposts WHERE id = $id"));

    while ($row = $result->fetch_assoc()) {
        $categorieId = $row['categorieId'];

        if($result = $mysqli->query("SELECT id, categorieId, datum, auteur, tekstje, aantalComments, foto, titel FROM Blogposts WHERE categorieId = $categorieId LIMIT 3")); // haal alle elementen uit de database

        while ($row = $result->fetch_assoc()) {

            $id = $row['id'];
            $categorieId = $row['categorieId'];
            $datum = $row['datum'];
            $auteur = $row['auteur'];
            $tekstje = $row['tekstje'];
            $aantalComments = $row['aantalComments'];
            $foto = $row['foto'];
            $titel = $row['titel'];

            echo '<ul class="sidebar-nav">';
            echo '<li class="sidebar-brand">';
            echo '<h4>' . $auteur . '</h4>';
            echo 'Aantal comments: ' . $aantalComments . '</br>';
            echo '<img class="img-responsive" src="' .$foto . '" alt= "img product"';
            echo '<p>' . $tekstje . '</p>';
            echo '</li>';
            echo '</ul>';
        }

    }
    //$mysqli->close(); mag blijkbaar enkel in laatste opgeroepen functie

}

function get_details($id, $mysqli)
{

    if($result = $mysqli->query("SELECT id, categorieId, datum, auteur, tekstje, aantalComments, foto, titel FROM Blogposts WHERE id = $id"));

    while ($row = $result->fetch_assoc()) {

        $id = $row['id'];
        $categorieId = $row['categorieId'];
        $datum = $row['datum'];
        $auteur = $row['auteur'];
        $tekstje = $row['tekstje'];
        $aantalComments = $row['aantalComments'];
        $foto = $row['foto'];
        $titel = $row['titel'];


        echo("<h1 class=\"text-center\">Details van blogpost \"" . $titel. "\" van " . $datum . "</h1>");

        echo '<div class="col-lg-12 col-sm-8 col-md-10 text-center" id="' . $id . '">';
        echo '<h4>' . $auteur . '</h4>';
        echo 'Aantal comments: ' . $aantalComments . '</br>';
        echo '<img class="img-responsive" id="fotoDetails" src="' . $foto . '" alt="img product">';
        echo '</br>';
        echo '<p class="tekstje">' . $tekstje . '</p>';
        echo '<input type="hidden" name="categorie" id="categorie" value="' . $categorieId . '">';
        echo '</div>';
        echo '</br>';
    }

    //$mysqli->close();
}

function get_comments($id, $mysqli) {

    echo("<h1 class=\"text-center\">Comments op deze post</h1>");

    if($result = $mysqli->query("SELECT * FROM Comments WHERE blogpostId = $id"));

    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $blogpostId = $row['blogpostId'];
        $gebruikerId = $row['gebruikerId'];
        $titel = $row['titel'];
        $tekst = $row['tekst'];
        $datum = $row['datum'];

        echo '<div class="col-lg-12 col-sm-8 col-md-10 text-center" id="' . $id . '">';

        echo '<div class="comment">';

        if($result = $mysqli->query("SELECT email FROM Gebruikers WHERE id = $gebruikerId")); // haal alle elementen uit de database

        while ($row = $result->fetch_assoc()) {
            $gebruiker = $row['email'];

            echo '<h4 class="user">' . $gebruiker . '</h4>';
            echo '<p class="comment-text">' . $tekst . '</p>';
        }

        echo '</div>';
        echo '</div>';
    }

    //$mysqli->close();
}

function set_new_comment($mysqli) {

    echo '<div class="login_comment text-center">';
    if(!isset($_SESSION['login_user'])) {
        echo '<p class="btn-info btn-lg active text-center"> <span class="glyphicon glyphicon-exclamation-sign"></span> Je moet ingelogd zijn om een comment te kunnen plaatsen <a href="login.php">Log hier in</a></p>';
        //header("location:login.php");
    }
    else {
        echo '<form name="commentForm" method="post" action="aanmakenComment.php" class="col-lg-12 col-sm-8 col-md-10">';
        echo '<h2>Plaats een nieuwe comment</h2>';
        echo '<div class="form-group comment">';
            echo '<label for="titel">Titel: </label> </br>';
            echo '<input type="text" name="titel" class="comment-text" id="titel" size="60" required> </br>';
            echo '<label for="tekst">Tekst: </label></br>';
            echo '<textarea name="tekst" class = "comment-text" id="tekst" rows="5" cols="90" required> </textarea>';
        echo '</div>';

        echo '<button type="submit" class="btn btn-default">Comment plaatsen</button>';

        echo '</form>';
    }
    echo '</div>';

    $mysqli->close();
}


