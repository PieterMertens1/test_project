$(document).ready(function() {
  $("p.contentTxt:odd").css("background-color", "#eee");
  
  $("#active>a").css({
    "color": "#5c2",
    "background-color": "#ce4"
  }).attr("href", "#hello");

  $("section p:last").html("<strong>Lorem</strong> Ipsum");
});