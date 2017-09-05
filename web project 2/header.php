<?php
/**
 * Created by PhpStorm.
 * User: Pieter
 * Date: 26/07/2017
 */
?>

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/favicon.png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">


    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>

<div class="jumbotron text-center  navbar-top">
    <h1>PIETER'S SUMMER BLOG</h1> <br>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="blogpostDetail.php">BLOGPOST DETAIL</a></li>
                    <li><a href="blogpostAanmaken.php">BLOGPOST AANMAKEN</a></li>
                    <li>

                        <?php
                        if(isset($_SESSION['login_user'])){
                            echo "<a href='php/logOut.php'><span class='glyphicon glyphicon-log-out'></span> Log out</a>";
                        }
                        else {
                            echo "<a href='login.php'><span class='glyphicon glyphicon-log-in'></span> LOGIN</a>";
                        }
                        ?>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
