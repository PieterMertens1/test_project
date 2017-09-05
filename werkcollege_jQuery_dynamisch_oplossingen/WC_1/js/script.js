$(document).ready(function(e) {
  $(".box").on('mouseover', function(){
    $(this).animate({height: 500},200);
  });
  
  $(".box").on('mouseout', function(){
    $(this).animate({height: 100},200);
  });
});