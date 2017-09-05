$(document).ready(function() {   
  $("form").submit(function(event) {
    event.preventDefault();
    uitvoeren();
  });
});


function uitvoeren() {
  var waarde = $("#invoerveld").val();
  $("body").append("<p>" + waarde + "</p>");
  $("#invoerveld").val("");
}