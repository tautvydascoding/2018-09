$(document).ready(function() {

  $("button").click(function() {
    $("p").slideDown();
  });

  $("p.slideUp").click(function() {
    $(this).slideUp();
  });

  $("p:not(.slideUp)").click(function(){
    $(this).hide();
  });
});
