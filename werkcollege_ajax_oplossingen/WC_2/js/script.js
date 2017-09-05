$(document).ready(function () {
  $('#form').submit(function (e) {
    e.preventDefault(); //normaal gedrag van submit event tegenhouden (=versturen formulier)
    
    var form = $(this);
    
    $.ajax({
      url: form.attr("action"),
      type: "POST",
      dataType: "json",
      data: form.serialize(), // alle data van het formulier
      success: function (data) {
        form.remove(); //formulier verwijderen
        
        if(data.error) {
          $("body").append(data.error);
        }
        
        if(data.succes) {
          $("body").append(data.succes);
        }
        
      }
    });
  });
});