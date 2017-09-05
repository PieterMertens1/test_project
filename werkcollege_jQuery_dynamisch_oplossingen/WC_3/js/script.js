$(document).ready(function() {
  //als een input focus verliest, valideren we het veld
  $("input").on("blur", function(){
    validateForm($(this));
  });
  
  $('form').on('submit', function(e){
    e.preventDefault(); //normale gedrag van submit event stoppen
    
    // we gaan elke input nog eens valideren
    // we doen dit, omdat het kan zijn dat er geen blur event heeft plaatsgevonden
    $('input:not(:submit)').each(function(){
      validateForm($(this));
    });
    
    // als er geen errors zijn
    if($("input.error").length == 0) {
      $(this).hide(); // verbergen we het formulier
      $('body').append($("<p></p>").text("registratie is voltooid")); // voegen we tekst toe aan de body
    }
  });
});

function validateForm(el) {
  el.removeClass("error"); // verwijder de klasse error van het veld
    
  // nagaan of het veld leeg is
  if(isEmpty(el)) {
    el.addClass("error");
  }

  // als het veld een type email veld is
  if(el.attr('type') == "email") {
    // gaan we na of er een geldig emailadres is ingegeven
    if(!isValidEmail(el)) {
      el.addClass("error");
    }
  }

  // als het veld een type password veld is
  if(el.attr('type') == "password") {
    // gaan we na of het een geldig paswoord is.
    if(!isValidPass(el)) {
      el.addClass("error");
    } else if(el.attr('name') == "herhPassword" && el.val() != $("#password").val()) {
      // als het type passwoord veld het herhPassword veld is dan ga we na of de value van dit veld overeen komt met de value van het andere pasword veld.
      el.addClass("error");
    }
  }
}

function isEmpty(el) {
  if(el.val().length == 0) {
    return true;
  }
  return false;
}

function isValidPass(el) {
  var pattern = new RegExp(/^[a-zA-Z].{6}[0-9]$/);
  return pattern.test(el.val());
}

function isValidEmail(el) {
  var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
  return pattern.test(el.val());
}