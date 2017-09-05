<?php
/**
 * Created by PhpStorm.
 * User: Pieter
 * Date: 7/08/2017
 */
//https://www.tutorialspoint.com/php/php_mysql_login.htm
include("database/databaseConnection.php");
include ("header.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    $myemail = mysqli_real_escape_string($mysqli,$_POST['username']);
    $mypass = mysqli_real_escape_string($mysqli,$_POST['password']);

    $sql = "SELECT id FROM Gebruikers WHERE email = '$myemail' and wachtwoord = '$mypass'";
    $result = mysqli_query($mysqli,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myemail and $mypass, table row must be 1 row

    if($count == 1) {
        $_SESSION['login_user'] = $myemail;

        header("location: index.php");
    }else {
        $error = "Your Login Name or Password is invalid";
        $_SESSION['error'] = $error;
    }
}
?>
<html>

<head>
    <title>Login Page</title>

    <style type = "text/css">
        body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
        }

        label {
            font-weight:bold;
            width:100px;
            font-size:14px;
        }

        .box {
            border:#666666 solid 1px;
        }
    </style>

</head>

<body bgcolor = "#FFFFFF">

<div align = "center">
    <div style = "width:300px; border: solid 1px #333333; " align = "left">
        <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>

        <div style = "margin:30px">

            <form action = "" method = "post">
                <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                <input type = "submit" value = " Submit "/><br />
            </form>

            <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php if (isset($error)) { echo $error;} ?></div>


        </div>

    </div>

</div>

</body>
</html>