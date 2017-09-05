<?php
/**
 * Created by PhpStorm.
 * User: Pieter
 * Date: 8/08/2017
 */

include('header.php');
include('php/detailPost.php');
include("database/databaseConnection.php");
$id = 1;
?>

<head>
    <title>Blogpost detail</title>
</head>

<div class="wrapper">

    <div id="sidebar-wrapper" class="side-nav well col">
        <h3 class="text-center">Uit dezelfde categorie</h3>
        <div id="zelfdeCategorie">
            <?php get_zelfdeCategorie($id, $mysqli); ?>

        </div>
    </div>

    <div class="container-fluid container" id="blogpostDetail">
    <?php get_details($id, $mysqli); ?>

    <?php get_comments($id, $mysqli); ?>
    </div>
    </br>
    <div class="container-fluid container" id="newBlogpost">
    <?php set_new_comment($mysqli) ?>

    </div>
</div>


</body>