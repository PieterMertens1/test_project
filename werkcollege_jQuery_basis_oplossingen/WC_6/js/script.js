$(document).ready(function() {
    $(".kleur").click(function() {
        var kleur = $(this).text();

        if (kleur == "rood") {
            $("#box").css("color", "red");
        } else if (kleur == "groen") {
            $("#box").css("color", "green");
        } else if (kleur == "blauw") {
            $("#box").css("color", "blue");
        }
    });

});