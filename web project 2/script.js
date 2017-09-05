/**
 * Created by Pieter on 26/07/2017.
 */


 function randomBlogposts() {
    $.getJSON("php/randomBlogpost.php", function (data) {
        $.each(data.result, function ()  {
            document.getElementById("wilPosts").innerHTML +=

            //action='productDetails.php'
            "<a href=''>" +

            "<div class='col-sm-3'>" +
            "<h4>" + this['auteur'] + "</h4>" +
            "Schreef op " + this['datum'] + "</br>" +
            "<img class='img-responsive' src='" + this['foto'] + "' alt='img product'>" +
            "<div class='meer'>" +
            "<div class='tekst'>Klik hier voor meer</div>" +
            "</div>" +
            "<p>" + this['tekstje'] + "</p>" +


            "</div>" +
            "</div>" +
            "</a>";

            "</div>";
             ;
        });
     });
 }

 function popBlogPosts() {
     $.getJSON("php/popBlogpost.php", function (data) {
         $.each(data.result, function ()  {
             document.getElementById("popPosts").innerHTML +=
                 //action='productDetails.php'
                 "<a href=''>" +

                 "<div class='col-sm-3'>" +
                 "<h4>" + this['auteur'] + "</h4>" +
                 "Aantal comments: " + this['aantalComments'] + "</br>" +
                 "<img class='img-responsive' src='" + this['foto'] + "' alt='img product'>" +
                 "<div class='meer'>" +
                 "<div class='tekst'>Klik hier voor meer</div>" +
                 "</div>" +
                 "<p>" + this['tekstje'] + "</p>" +
                 "</div>" +
                 "</div>" +
                 "</a>";

             "</div>";
             ;
         });
     });
 }

 function popBlogPostsSideBar() {
     $.getJSON("php/popBlogpost.php", function (data) {
         $.each(data.result, function ()  {
             document.getElementById("popPosts-SideBar").innerHTML +=

             "<ul class='sidebar-nav'>" +
             "<li class='sidebar-brand'>" +
             "<h4>" + this['auteur'] + "</h4>" +
             "Aantal comments: " + this['aantalComments'] + "</br>" +
             "<img class='img-responsive' src='" + this['foto'] + "' alt='img product'>" +
             "<p>" + this['tekstje'] + "</p>" +
             "</li>";
         });
     });

 }



 function alleBlogPosts() {
     $.getJSON("php/alleBlogposts.php", function (data) {
         $.each(data.result, function ()  {
             document.getElementById("allePosts").innerHTML +=

                 //action='productDetails.php'
                 "<a href=''>" +

                 "<div class='col-sm-4' id='" + this['categorieId'] +"'>" +
                 "<h4>" + this['auteur'] + "</h4>" +
                 "Aantal comments: " + this['aantalComments'] + "</br>" +
                 "<img class='img-responsive' src='" + this['foto'] + "' alt='img product'>" +
                 "<p>" + this['tekstje'] + "</p>" +
                 "<input type='hidden' name='categorie' id='categorie' value='" + this['categorieId'] +"'>" +
                 "<button class='btn btn-default' type='submit' name='details'>Geef details weer</button>" +

                 "</div>" +
                 "</div>" +
                 "</a>";

             "</div>";
             ;
         });
     });
 }



 function filterCategorieen() {
     $.getJSON("php/alleCategorieen.php", function(data) {
         document.getElementById("alleCategorieen").innerHTML += "<div class='text-center'>" ;
         $.each(data.result, function(){


             categorieNaam = String(this['naam']);

             document.getElementById("alleCategorieen").innerHTML += "" +

                 "<label class='btn btn-success col-sm-2'>" +
                 this['naam'] +
                 "<input type='checkbox' checked id='" + this['naam'] +"' onchange= 'filterOpCategorie(\"" + categorieNaam + "\", " + this['id'] + ")' class='checkbox' value='" + this['id'] + "'>" +
                 "</label>";
             "</div>" ;
         });
     });
 }



 function filterOpCategorie(categorie, id) {
     $.getJSON("php/alleCategorieen.php", function(data) {
         $.getJSON("php/alleBlogPosts.php", function (data) {


             //deze waarden nog aanpassen
             if(document.getElementById(categorie).getAttribute("value") == document.getElementById("categorie").getAttribute("value").toString()) {

                 $.each(data.result, function() {
                    if(document.getElementById(id).style.visibility = 'visible') {
                        document.getElementById(id).style.visibility = 'hidden'
                    }
                    else {
                        document.getElementById(id).style.visibility = 'visible'
                    }


                     /*document.getElementById("allePosts").innerHTML += "" +

                         "<p>Test</p>"*/

                 });
             }

         });
     });


 }



 /*function filterOpCategorie() {
     $.getJSON("php/alleCategorieen.php", function(data) {
         $.getJSON("php/alleBlogPosts.php", function (data) {
             document.getElementById("allePosts").innerHTML = "<div class='text-center'>" ;
             $.each(categorie.result, function () {

                 if(document.getElementById(this['auteur']).checked){

                     $categorieId = this['id'];

                     $.each(data.result, function () {
                         if(this['categorieId'] == $categorieId) {
                             document.getElementById("allePosts").innerHTML += "" +
                                 //action='productDetails.php'
                                 "<a href=''>" +

                                 "<div class='col-sm-4'>" +
                                 "<h4>" + this['auteur'] + "</h4>" +
                                 "Aantal comments: " + this['aantalComments'] + "</br>" +
                                 "<img class='img-responsive' src='" + this['foto'] + "' alt='img product'>" +
                                 "<p>" + this['tekstje'] + "</p>" +
                                 "<button class='btn btn-default' type='submit' name='details'>Geef details weer</button>" +

                                 "</div>" +
                                 "</div>" +
                                 "</a>";

                             "</div>";
                             ;
                         }
                     });}

             });
         });
     });
 }*/