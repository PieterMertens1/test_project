$(document).ready(function() {
  var height = $("#list li").height();
  var max = ($("#list").children().length - 1) * height;
  var min = 0;
  
  // we gebruiken deze variabele om na te gaan of er momenteel nog een animatie aan de gang is
  // we willen geen volgende animatie starten  zolang er nog 1 bezig is.
  var animating = false;
  
  $("#up").click(function(){
   if(!animating && Math.round($("#list").position().top) > -max) {
      animating = true;
      $("#list").animate({top: "-=" + height}, {complete: function(){ animating = false; }});
   }
  });
  $("#down").click(function(){
    if(!animating && Math.round($("#list").position().top) < 0) {
      animating = true;
      $("#list").animate({top: "+=" + height}, {complete: function(){ animating = false; }});
    }
  });
});