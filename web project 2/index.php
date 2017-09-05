<?php
/**
 * Created by PhpStorm.
 * User: Pieter
 * Date: 26/07/2017
 */

include('header.php');
include('php/randomBlogpost.php');
include('database/databaseConnection.php');
include ('php/detailPost.php');
?>

<head>
    <title>Homepage</title>
</head>

<script src="script.js" type="text/javascript"></script>


<script type="text/javascript">
    //randomBlogposts();
    popBlogPosts();
</script>


<div class="container-fluid container">
    <div class="text-center" id="popPosts">
        <h2>Populairste blogposts</h2>

    </div>


    <div class="text-center" id="wilPosts">
        <h2>Willekeurige blogposts</h2>
        <?php
        $id = "0";

        show_random($mysqli);

        $id = $_GET['detailId'];

        if ($id>0) {
            header('Location:blogpostDetail.php');
            get_details($id, $mysqli);
        }

        ?>
    </div>


</div>
<br>


</body>
