<?php
/**
 * Created by PhpStorm.
 * User: Pieter
 */

include('header.php');

?>

<head>
    <title>Blog pagina</title>
</head>

<script src="script.js" type="text/javascript"></script>


<script type="text/javascript">
    alleBlogPosts();
    popBlogPostsSideBar();
    filterCategorieen();
</script>


<div class="wrapper">

    <div id="sidebar-wrapper" class="side-nav well">
        <h3 class="text-center">Populairste posts</h3>
        <div id="popPosts-SideBar" >
        </div>
    </div>

    <div class="container-fluid">
        <div class="alle-categorieen-groot text-center"><h2>Alle categorieën</h2>
        <div  id="alleCategorieen">

        </div>
        </div></br>

        <div class="container text-center" id="allePosts">
            <h2>Alle blogposts</h2>
        </div>
    </div>
    </br>
</div>


</body>