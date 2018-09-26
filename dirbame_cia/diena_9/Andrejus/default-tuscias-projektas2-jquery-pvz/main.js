console.log("Labas pasauli");

$(document).ready(function() {
  // paimt visus paragrafus ir jimes suteiktu funkcionalumo.
  $("p.slideUp").click(function() {
    // suteikia kad paragrafas dingsta kurios paspaudziam
    $(this).fadeOut(2000);
    // greitis yra mili secundem
  });
$("#show").click(function(){
  $("p").slideDown();
});
$("p:not(.slideUp)").click(function(){
  $(this).hide();
});

$(".bum").click(function(){
    $(".animate").animate({
      right: '250px',
      height: 'toggle'
    });
    // if (a == "250px")
    //   a = "0px";
    // else {
    //   a = "250px"; vienas variantas kad toggle back and forth
    // }
    $(".animate").animate({
      left: '0px',
      height: 'toggle',

    });
});
});
