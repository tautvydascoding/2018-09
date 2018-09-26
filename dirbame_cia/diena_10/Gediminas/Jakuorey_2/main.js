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

// // A) visus h1 ir h2 pakeisti i melyna spalva (visur naudoti tik jQuery)
// $(document).ready(function() {
//   $("h1,h2").css("color", "blue");
//
// // A2) kas antra h2 pakeisti i raudona
// $ ("h2:odd").css("color", "red");
//
// // B) paskutinta "li" elemnta pakeisti i zalia (visur naudoti tik jQuery)
// $ ("li:last").css("color", "green")
//
// // C) visus 'li' elementus pakeisti i geltonus (isskyrus su klase 'reklama') pvz.: li:not('.reklama') {}
// $("li").not( ".reklama" ).css("color", "yellow" );
//
// });
//---------------------------------------------------------------------12,5

// UZDUOTIS 1
// pakeisti visus h1 tekstus i "Antraste nr: XX" ( vietoj "xx" isvesti skaiciu, kelinta tai antrate)
$(document).ready(function(){
        $("h1").text(function( index ){
          return "Item number" + (index + 1);
        });

//  UZDUOTIS 2
// pakeisti visus h2 tekstus, kurie yra "section" elemente.
// pakeisti i "Pakeista antraste "
    $("section h2").replaceWith("<h2>Pakeista antrasre</h2>");

// UZDUOTIS 3
// i console atspausdinti "li" elemento, kurio klase "reklama" - teksta
  console.log($("li.reklama").text());

// UZDUOTIS 4
// i console atspausdinti  visus "li" tekstus
console.log($("li").text());

//-------advance --------

// UZDUOTIS 5
// sukeisti vietomis "li" elementu "about" ir "gallery" (naujant jQuery)
var about = $("li:nth-of-type(2)");
var gallery = $("li:nth-of-type(3)");
var t = about.text();
about.text(gallery.text());
gallery.text(t);


//------ atributes--------------------------
// UZDUOTIS 6
// surasti <li class='reklama'> ir jam ideti dar viena atributa: style='color: red'   (naujant jQuery)
$ (".reklama").css("color", "red")

// UZDUOTIS 7
// A. visiems "li" elementams pridete atributa: class='nav-item '   (naujant jQuery)
$( "li" ).addClass( "nav-item" );
// B. pirmam "li" elementui uzddeti dar viena klase: "active"
$( "li:first" ).addClass( "active" );

// UZDUOTIS 8
//   su jquery uzpildyti form'a uz vartotoja:
//  visiems "input" elementams pridete atributa: value=' xxx '   (naujant jQuery)
//  ivesti vardas: 'Tomas'
//  ivesti pastas: 'a@a.lt'
$("input[type=text]").val ("Gediminas")
$("input[type=email]").val ("Gediminas@mil.lt")

});
