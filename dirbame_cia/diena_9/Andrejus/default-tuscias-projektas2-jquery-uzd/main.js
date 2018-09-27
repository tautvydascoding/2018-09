console.log("Labas pasauli");

$(document).ready(function() {
// A1
$("h1, h2").css("color", "blue");
// A2
$("h2:odd").css("color", "red");
// B
$("li:last").css("color", "green");
// C
$("li:not(.reklama)li").css("color", "yellow");


// A) visus h1 ir h2 pakeisti i melyna spalva (visur naudoti tik jQuery)
// A2) kas antra h2 pakeisti i raudona
// B) paskutinta "li" elemnta pakeisti i zalia (visur naudoti tik jQuery)
// C) visus 'li' elementus pakeisti i geltonus (isskyrus su klase 'reklama') pvz.: li:not('.reklama') {}

});
