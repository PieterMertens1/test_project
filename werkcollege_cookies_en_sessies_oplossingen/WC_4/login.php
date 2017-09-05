<?php
  session_start();
  if (isset($_SESSION["user"])) {
    header("location:geheim1.php");
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="dologin.php" method="POST">
          <div>
            <label for="username">Uw username:</label>
            <input type="text" name="username"/>
          </div>
          <div>
            <label for="password">Uw wachtwoord:</label>
            <input type="password" name="password"/>
          </div>
          <div>
            <input type="submit" value="Login">
          </div>
        </form>
    </body>
</html>
