console.log(  "Labas pasaulis"  );

// ====================Scope====================
//   UZDUOTIS  A
// sukurti funkcija "printDuomenys()" ,
// funkcijoje sukurti kintamaji: var vardas = "Tomas"
// kuri  atspausdina i konsole  kintamaji "vardas"
// iskviesti f-ja

// NOTE:
 // window.onload = function() {
//   spausdinti (2);
//   var a = 0;
//   var c = 5;
//   spausdinti (3);
//   function spausdinti (b) {
//     var c = 1;
//     console.log(a);
//     console.log(b);
//     console.log(c);
//   }
//   console.log(a);
//   //console.log(b);
//   console.log(c);
// }
console.log("================================");
// UZDUOTIS // UZDUOTIS
// A) sukurti kintamaji var katinas = "juodas"
// B) sukurti f-ja
// C) sukurti f-jos viduje kintamaji var katinas = "baltas"
// D) atspauzdinti abu f-jos viduje
// E) atspauzdinti  uz f-jos

// var katinas = "juodas";   //global
//
// function test2() {
//     var katinas = "baltas";  // local
//    console.log("1 katinas:", katinas);
//    console.log("2 this.katinas - f-jos viduje: ",  this.katinas);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
// }
// test2();
//
// console.log("3 katinas:", katinas);

//======================================

var katinas = "juodas";
function aboutCat () {
  var katinas = "baltas";
  console.log("1 katinas", katinas);
  console.log("2 this.katinas - f-jos viduje: ", this.katinas);
}
aboutCat ();
console.log("3 katinas:", katinas);
console.log("");
// ================================================
// var xx = 10; // global
//
// function isvesti( xx ) {  // xx - (local) naujas issigalvotas LAIKINAS  kintamasis
//     xx = 20;  // local
//     console.log( "1. xx:", xx);
//     console.log( "2. this.xx:",   this.xx);
// }
// console.log( "3. xx:", xx);
var xx = 10;

function isvesti (xx) {
  xx=20;
  console.log("1.xx: ", xx);
  console.log("2.this xx: ", this.xx );
}
isvesti(xx);
console.log("3.xx:", xx);
console.log("");
// ===================================================

// var vardas = "Jonas";   // global - kintamasis
// function myName ( vardas ) { //  vardas - local kintamasis
//     console.log( " vardas" + vardas);
//     console.log("this.vardas - f-jos viduje: ",  this.vardas);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
// }
// myName("PETRAS");

var vardes = "jonas";
function myName (vardes) {
  console.log("vardas " + vardes);
  console.log("this.vardas - f-jos viduje: ", this.vardes);
}
myName("PETRAS")
console.log("");
// ===================================================
console.log("==================uzduotis 1.1==============");
//  1.1 UZDUOTIS
//  sukurti funkcija "printAntraste(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas antrastes:  "BMW pinga, nes daugeja", "Greik pageres orai", "Vasaros vis salteja"
function printAntraste(x) {
document.querySelector("body").innerHTML += "<h2>" + x + "</h2>";
}
function printStraipsnis(x) {
document.querySelector("body").innerHTML += "<p>" + x + "<p>";
}
printAntraste("BMW pinga, nes daugeja");
printStraipsnis("lorem......1");
printAntraste("Greik pageres orai");
printStraipsnis("lorem......2");
printAntraste("Vasaros vis salteja");
printStraipsnis("lorem......3");
