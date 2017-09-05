$(document).ready(function() {
  $("input[name=invoer]").keydown(function(event) {
    console.log(event.keyCode);
    
    if (event.keyCode === 13) {
      $("#wrapper").append("<div>" + $("input[name=invoer]").val() + "</div>");
      $("input[name=invoer]").val("");
    }
    
    if (event.keyCode === 8 && $("input[name=invoer]").val() === "") {
      $("#wrapper").children().last().remove();
    }
  });
});