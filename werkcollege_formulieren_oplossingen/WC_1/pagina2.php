<?php
//Deze eerste if-structuur is eigenlijk al een vorm van validatie, we gaan na of er een GET is gebeurd.
// We checken of een gebruiker niet per ongeluk op deze pagina "landt" zonder dat hij het invulformulier heeft ingevuld.
if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    //Het formulier op de pagina "index.php" werd dus niet verstuurd.
    //We kunnen een foutmelding weergeven, of gewoon redirecten naar de invulpagina
    header("Location: ./index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>
           Uw zoekterm is:
        </h1>
        <div>
            <?php echo isset($_GET["zoekterm"]) ? $_GET["zoekterm"] : ''; ?>
        </div>
    </body>
</html>