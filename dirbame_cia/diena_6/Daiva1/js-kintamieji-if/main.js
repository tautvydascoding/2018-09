console.log(  "Labas pasauli"  );
// if ( true ) {
//     console.log("labas");
// }





// if (salyga) {
//     // jei true
//     //
//     //
// } else {
//     // jei false
// }


// if ( salyga ) {
//     // jei salyga tenkinama
// }
//
// if ( salyga ) {
//     // jei salyga tenkinama
// } else {
//     // jei salyga netenkinama  / priesingu atveju
// }
//
// if (salyga) {
//
// } else if (salyga) {
//
// } else {
//     // ?
// }

// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai sutampa, i konsole pranesti apie tai
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"

var vardas1 = "Tomas";
var vardas2 = "Antanas";
var vardas3 ="Petras";

if (vardas1 == vardas2){
  console.log("vardai sutampa");
} else {
  console.log(   "vardai  NESUTAMPA"    );
}

// B)
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo

if (vardas1 == "Tomas"){
console.log( "Labas Tomai");

}

// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"

if (vardas1 == "Tomas" && vardas3 == "Karolis"){
  console.log("sutampa")
} else {
  console.log( "NESUTAMPA")
}

// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba


// 1 UZDUOTIS
// turesime vartotojo amziu
// var age = 24;
// gapal ji, turesiem isvesti tam tikra reklamos teksta


// Salygos:

// iki 7 metu
//      "Pliusines varles"
// nuo 7 iki 14
//      "Mini telefonai"
// nuo 14 iki 18
//      "new Music App"
// nuo 18 iki 24
//      "Stok i sauliu sajunga"
// nuo 24 iki 65
//      "Pensijos kaupimas - zusiregistruok"
// nuo 65
//      "kelione i Bristona"
// sunkesne:
//      (i 'if' vidu ideti papildoma 'if')
//      iki 7 metu ir nuo 65 metu papildomai isvesti "Sokoladiniai zuikuciai 20% nuolaida"

var age = 39;
if (age < 7 ){
  console.log(" Pliusines varles");
} else if ( age <= 14) {
  console.log("Mini telefonai" );
} else if (age <= 15 ) {
  console.log("new Music App");
} else if (age <= 18) {
console.log ("new Music App");
} else if (age <= 24 ) {
  console.log("Stok i sauliu sajunga");
} else if (age <= 65) {
  console.log("Pensijos kaupimas - zusiregistruok");
} else if (age > 65 ) {
  console.log("kelione i Bristona");
}



// 2 UZDUOTIS
// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// kai "if"-ui padauodame Toma - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame Pauliu - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"

var klientas = "Jonas";
if (klientas == "Tomas"){
  console.log("Masinoms 10% nuolaida");
} else if (klientas == "Paulius") {
  console.log("Buitinei technikai  30% nuolaida");
} else {}  console.log("5% nuolaida kelionems");





// 3 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime
// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
//
var tipas1 = "bronze";
var tipas2 = "silver";
var klientas = "Jonas";

// ar klientas bronzinis?
if (klientas == tipas1){
  console.log(" 15% nuolaida");
} else if (klientas == tipas2){
  console.log( "30% nuolaida");
} else {

} console.log("5% nuolaida" );
