// UZDUOTIS 1
// pakeisti visus h1 tekstus i "Antraste nr: XX" ( vietoj "xx" isvesti skaiciu, kelinta tai antrate)

// $("h1").prepend("Some prepended text.");

//  UZDUOTIS 2
// pakeisti visus h2 tekstus, kurie yra "section" elemente.
// pakeisti i "Pakeista antraste "

// UZDUOTIS 3
// i console atspausdinti "li" elemento, kurio klase "reklama" - teksta

// UZDUOTIS 4
// i console atspausdinti  visus "li" tekstus

//-------advance --------

// UZDUOTIS 5
// sukeisti vietomis "li" elementu "about" ir "gallery" (naujant jQuery)
$(document).ready(function() {
// var about = $("li:nth-of-type(2)");
// var gallery = $("li:nth-of-type(3)");
// var t = about.text();
// about.text(gallery.text());
// gallery.text(t);
//
// $( "li.reklama" ).css("color", "red");
// $("li").addClass("nav-item");
// // $("input").val("labas");
//
// $("input[type=text]").val("tomas");
// $("input[type=email]").val("a@a.lt");
function zmogusConstructor(name, ugis, svoris) {
  this.name = name;
  this.ugis = ugis;
  this.svoris = svoris;
  this.eiti = function () {
    console.log("einu");
  };
}
var zmogus = new zmogus ("tomas", 180, 75);
var zmogus2 = new zmogus ("pranas", 90, 200);
var mas = [];
mas.push(zmogus);
mas.push(zmogus2);

// {
//   name : "tomas",
//   ugis : 180,
//   svoris : 75,
//   eiti : function () {
//     console.log("einu");
//   }
// };
console.log(zmogus);
zmogus.eiti();
});
//------ atributes--------------------------
// UZDUOTIS 6
// surasti <li class='reklama'> ir jam ideti dar viena atributa: style='color: red'   (naujant jQuery)


// UZDUOTIS 7
// A. visiems "li" elementams pridete atributa: class='nav-item '   (naujant jQuery)
// B. pirmam "li" elementui uzddeti dar viena klase: "active"

// UZDUOTIS 8
//   su jquery uzpildyti form'a uz vartotoja:
//  visiems "input" elementams pridete atributa: value=' xxx '   (naujant jQuery)
//  ivesti vardas: 'Tomas'
//  ivesti pastas: 'a@a.lt'
