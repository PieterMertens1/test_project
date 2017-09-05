<?php
/**
 * Created by PhpStorm.
 * User: Pieter
 * Date: 7/08/2017
 */
   session_start();

   if(session_destroy()) {
       header("Location: ../index.php");
   }
