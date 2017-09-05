<?php
$landen = array("Italië"=>"Rome", "Luxemburg"=>"Luxemburg", "België"=> "Brussel",
"Denenmarken"=>"Kopenhagen", "Finland"=>"Helsinki", "Frankrijk" => "Parijs",
"Duitsland" => "Berlijn", "Griekenland" => "Athene", "Ierland"=>"Dublin",
"Nederland"=>"Amsterdam", "Portugal"=>"Lissabon", "Spanje"=>"Madrid",
"Zweden"=>"Stockholm", "Verenigd Koninkrijk"=>"Londen") ;


asort($landen);
//hier moet je de functie asort gebruiken, indien je de functie sort gebruikt zal hij de keys van de array omzetten naar cijfers.
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
          <?php 
            foreach($landen as $land => $hoofdstad ){
          ?>
            <p>De hoofdstad van <?php echo $land; ?> is <?php echo $hoofdstad; ?></p>
          <?php  
            }
           ?>
    </body>
</html>
