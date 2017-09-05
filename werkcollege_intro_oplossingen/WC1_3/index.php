<?php
  define("PI", 3.1415);
  include_once "meetkunde.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table>
            <tr>
                <td>
                    Cirkel, straal 2
                </td>
                <td>
                    <?php echo berekenOppervlakteCirkel(2); ?> 
                </td>
            </tr>
            <tr>
                <td>
                    Driehoek, basis 2, hoogte 1
                </td>
                <td>
                    <?php echo berekenOppervlakteDriehoek(2, 1); ?> 
                </td>
            </tr>
            <tr>
                <td>
                    Rechthoek 2x1
                </td>
                <td>
                    <?php echo berekenOppervlakteRechthoek(2, 1); ?> 
                </td>
            </tr>
            <tr>
                <td>
                    Vierkant 2x2
                </td>
                <td>
                    <?php echo berekenOpperlakteVierkant(2); ?> 
                </td>
            </tr>
        </table>
    </body>
</html>

