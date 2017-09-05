<?php
/**
 * Created by PhpStorm.
 * User: Pieter
 * Date: 3/08/2017
 */

include('header.php');

include('sessie.php');

?>

<head>
    <title>Blogpost aanmaken</title>
</head>

<script src="script.js" type="text/javascript"></script>


<div class="container-fluid container">
    <h1 class="text-center">Post Aanmaken</h1>
    <form name="aanmaakForm" method="post" action="php/aanmakenBlogpost.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="file">Foto: </label>
            <input type="file" name="file" id="file" accept="image/*" required>
        </div>
        <div class="form-group">
            <label for="titel">Titel: </label>
            <input type="text" class="form-control" name="titel" required>
        </div>
        <div class="form-group">
            <label for="tekst">Tekst: </label>
            <textarea class="form-control" name="tekst" rows="5" required></textarea>
        </div>

        <div class="form-group">
            <label for="categorie">Categorie: </label>
        <?php
        include 'database/databaseConnection.php';
        if($result = $mysqli->query("select id, naam from Categorieen" )); // haal de gevraagde elementen uit de database

        echo "<select name='categorie' class='form-control' required>";

        while ($row = $result->fetch_assoc()) {
            unset($id, $naam);
            $id = $row['id'];
            $naam = $row['naam'];
            echo '<option value="'.$id.'">'.$naam.'</option>';
        }
        echo "</select>";
        ?>
        </div>

        <button type="submit" class="btn btn-default">Posten op blog</button>
    </form>


</div>


</body>