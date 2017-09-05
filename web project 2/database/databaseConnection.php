<?php
/**
 * Created by PhpStorm.
 * User: Pieter
 */

$mysqli = new mysqli("dt5.ehb.be","WDA078","61475283","WDA078");

if($mysqli->connect_error) {echo 'Connection Error (' . $mysqli->connect_errno . ') '. $mysqli->connect_error;}
$mysqli->host_info;


