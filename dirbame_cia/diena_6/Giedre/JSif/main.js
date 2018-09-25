console.log(  "Labas pasauli"  );

document.querySelector("h1").innerHTML += "naujas tekstas";

// =================if  teorija====================
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
    console.log("Vardai sutampa");
} else {
    console.log(vardas1 + " " + vardas2 + " vardai yra skirtingi");
}

// B) 
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo

if (vardas1 = "Tomas") {
    console.log("Labas, Tomai");
}

// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"

if (vardas1 == "Tomas" && vardas2 == "Karolis") {
    console.log("Vardai " + vardas1 + " ir " + vardas2 + " sutampa");
} else {
    console.log("Vardai " + vardas1 + " ir " + vardas2 + " nesutampa");
}

// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba

if (vardas1 == "Tomas" || vardas2 == "Tomas") {
    console.log("Vardas Tomas yra.");
}

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

var amzius = 90;
if (amzius <= 7) {
      console.log("Pliusines varles" + " " + "Sokoladiniai zuikuciai 20% nuolaida");
} else if (amzius <= 14) {
    console.log("Mini telefonai");
} else if (amzius <= 18) {
    console.log("new Music App");
} else if (amzius <= 24) {
    console.log("Stok i sauliu sajunga");
} else if (amzius <= 65) {
    console.log("Pensijos kaupimas - uzsiregistruok");
} else {
    console.log("kelione i Bristona" + " " + "Sokoladiniai zuikuciai 20% nuolaida");
}

// 2 UZDUOTIS
// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// kai "if"-ui padauodame Toma - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame Pauliu - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"

var vardas1 = "Tomas";
var vardas2 = "Paulius";
var vardas3 = "Airidas";
var vardas = vardas3;

if (vardas == vardas1) {
    console.log("Masinoms 10% nuolaida");
} else if (vardas == vardas2) {
    console.log("Buitinei technikai  30% nuolaida");
} else {
    console.log("5% nuolaida kelionems");
}

// 3 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime
// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida"

var klientas1 = "bronze";
var klientas2 = "silver";
var klientas3 = "gold";

var klientoTipas = "silver";

//ar klientas bronze?
if (klientoTipas == klientas1) {
    console.log(klientas1 + " 15% nuolaida");
} else if (klientoTipas == klientas2) {
    console.log(klientas2 + " 30% nuolaida");
} else {
    console.log(klientas3 + " 5% nuolaida");
}
