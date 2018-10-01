// console.log(  "Labas pasauli"  );

// $(document).ready(function() {
//   $("#show").click(function() {
//     $("p").slideDown();
//   });
//   $("p.slideUp").click (function() {
//     $(this).slideUp();
//   });
//   $("p:not(.slideUp)").click(function() {
//     $(this).hide();
//   });
//
// });
// A) visus h1 ir h2 pakeisti i melyna spalva (visur naudoti tik jQuery)
$("h1, h2").css("color", "blue");
// A2) kas antra h2 pakeisti i raudona
$("h2:odd").css("color", "red");
// B) paskutinta "li" elemnta pakeisti i zalia (visur naudoti tik jQuery)
$("li:last").css("color", "yellow");
// C) visus 'li' elementus pakeisti i geltonus (isskyrus su klase 'reklama') pvz.: li:not('.reklama') {}
$("li:not('.spalvaGeltona')").css("color", "pink");
