$(document).ready(function() {
    var activeEl;
    $(".box").click(function() {
      
      // als er geen activeEl is dan voegen we de geklikte div er aan toe 
      if(!activeEl) {
        activeEl = $(this);
        //we geven de actieve div een klasse zodat het voor de gebruiker duidelijk is op welke hij geklikt heeft.
        activeEl.addClass("active");
      } else {
        //we animeren de 2e div naar de plaats van de actieve div
        $(this).animate({
          left: activeEl.position().left,
          top: activeEl.position().top
        }, {
          queue: false,
          duration: 500
        });
        
        // we animeren de actieve div naar de plaats van de 2e div
        activeEl.animate({
          left: $(this).position().left,
          top: $(this).position().top
        }, {
          queue: false,
          duration: 500
        });
        
        //we verwijderen de active klasse terug zodat de border verdwijnt
        activeEl.removeClass("active");
        // we zetten het activeEl terug op null, zodat een nieuw element kan gebruikt worden om van plaats te wissselen
        activeEl = null;
      }
    });
});