// $(document).ready(function() {
//   //kai doc bus paruostas vykdyti  

//     // $("p") .click(function() { 
//     //     $(this) .hide();
//     // });

// //paimti visus paragrafus ir jiems suteikti funkcionaluma click ir ji paslepti

// $("#show").click(function() {
//     $("p").slideDown();
// });

// $("p.slideUp") .click(function() {
//     $(this).slideUp();
// });

// $("p:not(.slideUp)").click(function() {
//     $(this).hide();
// });

// //tik kai krauna psl
// });
// //vykdo kai krauna JS

// =====================================
// A) visus h1 ir h2 pakeisti i melyna spalva (visur naudoti tik jQuery)
// A2) kas antra h2 pakeisti i raudona
// B) paskutinta "li" elemnta pakeisti i zalia (visur naudoti tik jQuery)
// C) visus 'li' elementus pakeisti i geltonus (isskyrus su klase 'reklama') pvz.: li:not('.reklama') {}

$(document).ready(function () {
    $("h1, h2").css("color", "blue");

    $("h2:odd").css("color", "red");

    $("li:not('.reklama')").css("color", "yellow");
    
    $("li:last").css("color", "green");
});


