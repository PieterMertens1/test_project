<?php include "taalkeuze.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $instellingentitel; ?></title>
    </head>
    <body>
        <h1>
            <?php echo $instellingentitel; ?>
        </h1>
        <div>
            <?php echo $instellingenuitleg; ?>
        </div>
        <form action="doinstellingen.php" method="post">
            <div>
                <input type="radio" name="taal" value="nl" <?php echo ($taal == "nl" ? "checked" : ""); ?>/>Nederlands<br>
                <input type="radio" name="taal" value="fr" <?php echo ($taal == "fr" ? "checked" : ""); ?> />Francais<br>
                <input type="radio" name="taal" value="en" <?php echo ($taal == "en" ? "checked" : ""); ?> />English<br>
                <input type="submit" value="<?php echo $instellingenopslaan; ?>">
            </div>
        </form>
        <a href="index.php"><?php echo $instellingenterug; ?></a>
    </body>
</html>
