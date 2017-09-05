<?php
$landen = array("Be&lgië", "Roemenië", "Slowakije", "Denemarken", "Verenigd Koninkrijk", "Portugal", "Finland", "Nederland", "Frankrijk", "Kroatië", "Hongarije", "Ierland", "Italië", "Zweden", "Litouwen", "Bulgarije", "Luxemburg", "Malta", "Duitsland", "Oostenrijk", "Polen", "Griekenland", "Estland", "Letland", "Cyprus", "Spanje", "Tsjechië", "Slovenië");
foreach($landen as $volgnummer => $naam ){
  if(substr(strtolower($naam),0,1) == "b") {
    unset($landen[$volgnummer]);
  }
}
sort($landen);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>De Europese Unie:</h3>
        <p>De Europese Unie telt sinds 2007 in totaal <?php echo count($landen); ?> lidstaten.</p>
        
        
        <h4>De volledige lijst van lidstaten, zonder landen die beginnen met de letter B</h4>
        
        <ol>
          <?php 
            foreach($landen as $volgnummer => $naam ){
          ?>
            <li><?php echo $naam; ?></li>
          <?php  
            }
           ?>
        </ol>
    </body>
</html>
