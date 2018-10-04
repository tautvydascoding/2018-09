// =================if  teorija====================
// if ( true ) {
//     console.log("labas");

console.log("Labas pasauli");

document.querySelector("h1").innerHTML = "Naujas tekstas";


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

//=============IF====================
// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai sutampa, i konsole pranesti apie tai
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"

var vardas1 = "Tomas";
var vardas2 = "Antanas";
if (vardas1 == vardas2) {
  console.log(vardas1 + vardas2 + "vardai sutampa");
} else {
  console.log(vardas1 + vardas2 + "vardas nesutampa");
}


// B)
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo

// if ( vardas == "Tomas"){
//   console.log( "Labas" + vardas1);



// }
// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"

var vardas1 = "Tomas";
var vardas2 = "Karolis"
if (vardas1 == "Tomas" && vardas2 == "Karolis") {
  console.log("abu vardai sutampa");
}
// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba

if (vardas1 == "Tomas" || vardas2 == "Tomas") {
  console.log("Ar vardas Tomas");
}


// 1 UZDUOTIS
// turesime vartotojo amziu
// var age = 24;
// gapal ji, turesiem isvesti tam tikra reklamos teksta

var age = 6;
if (age < 7 || age > 65) {
  console.log("Sokoladiniai zuikuciai 20% nuolaida");
  if (age < 7) {
    console.log("Pliusines varles");
  } else {
    console.log("kelione i Bristona");
  }
} else if (age >= 7 && age <= 13) {
  console.log("Mini telefonai");
} else if (age >= 14 && age <= 17) {
  console.log("new music app");
} else if (age >= 18 && age <= 24) {
  console.log("Stok i sauliu sajunga");
} else if (age >= 25 && age <= 65) {
  console.log("Pensijos kaupimas - zusiregistruok");
} else if (age > 65) {
  console.log("kelione i Bristona");
}

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


// 2 UZDUOTIS
// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// kai "if"-ui padauodame Toma - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame Pauliu - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"

var klientas = "Jonas";
if (klientas == "Tomas") {
  console.log("Masinoms 10% nuolaida");
} else if (klientas == "Paulius") {
  console.log("Buitinei technikai nulaida");
} else {
  console.log("5 % nuolaida");
}


// 3 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime
// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
//


var tipas1 = "bronze";
var tipas2 = "silver";
var tipas3 = "gold";

// ar klientas bronze?
if (klientas == tipas1) {
  console.log("15 % nuolaida");
  // ar klientas silver?
} else if (klientas == tipas2) {
  console.log("30 % nuolaida");
  // ar klientas gold?
} else if (klientas == tipas3) {
  console.log("5% nuolaida");
}

var str = "Topoliu";
for (var i = 0; i<9; i++){
  str = str + i + " ";
}
document.write(str);
