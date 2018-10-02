console.log(  "Labas pasauli"  );

// UZDUOTIS 1
// pakeisti visus h1 tekstus i "Antraste nr: XX" ( vietoj "xx" isvesti skaiciu, kelinta tai antrate)

$(document).ready(function functionName(){
    $("h1").text("Antraštė nr:" );           //+("li.reklama").text()
    $("section").text("Pakeista antraštė");
///////////////////////////////////////////////////////////////////////////////////

var about =$("li:nth-of-type(2)");
var gallery = $("li:nth-of-type(3)");
var t = about.text();
about.text(gallery.text());
gallery.text(t);


console.log($('li').text());
console.log($('li.reklama').text());


$("li.reklama").css("color", "red");

$("li").addClass("nav-item");
$("ul").addClass("nav");

$("li:nth-of-type(1)").addClass("active");

$("input[type=text]").val (
  "Tomas"
);




});
/////////////////////////////////////////////////////////////////////

function Zmogus(name, ugis, svoris) {
  this.name = name;
  this.ugis = ugis;
  this.svoris = svoris;
  this.eiti  = function () {
    console.log("einu");
  };
}
Zmogus();
var zmogus = new Zmogus ("Tomas", 180, 75);
var zmogus2 = new Zmogus ("Rico", 210, 90);
var mas = [];
mas.push(zmogus);
mas.push(zmogus2);
console.log(mas);

// var zmogus = {
//   name:"Tomas",
//   ugis:180,
//   svoris: 75,
//   eiti : function () {
//     console.log("einu");
//   }
//
// };
// console.log(zmogus);
// console.log(zmogus.svoris);
// zmogus.eiti();



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
