//-----Paspaudus ant zodelio jis dingsta
// $(document).ready(function() {
//   $("p").click(function() {
//     $(this).hide();
// });
//
//   //----Mygtukas grazina viska atgal
//   $(".show").click(function() { // tai yra .show klase zalia
//     $("p").show(); //"p"---tai  kam o .show rodyti
//   });
//
// });

// A) visus h1 ir h2 pakeisti i melyna spalva (visur naudoti tik jQuery)
$(document).ready(function() {
  $("h1,h2").css("color", "blue");

// A2) kas antra h2 pakeisti i raudona
$ ("h2:odd").css("color", "red");

// B) paskutinta "li" elemnta pakeisti i zalia (visur naudoti tik jQuery)
$ ("li:last").css("color", "green")

// C) visus 'li' elementus pakeisti i geltonus (isskyrus su klase 'reklama') pvz.: li:not('.reklama') {}
$("li").not( ".reklama" ).css("color", "yellow" );


});
