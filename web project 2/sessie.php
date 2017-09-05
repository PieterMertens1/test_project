<?php
/**
 * Created by PhpStorm.
 * User: Pieter
 * Date: 7/08/2017
 */
   include('database/databaseConnection.php');

   $user_check = $_SESSION['login_user'];

   $ses_sql = mysqli_query($mysqli,"select email from Gebruikers where email = '$user_check' ");

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['email'];

   if(!isset($_SESSION['login_user'])){
       header("location:login.php");
   }

