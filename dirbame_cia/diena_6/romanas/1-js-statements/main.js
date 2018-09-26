console.log(  "Labas pasauli"  );

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
var vardas2 = "Tomas";

if (vardas1 == vardas2) {
  document.querySelector("h1").innerHTML += "<br> Vardai " + vardas1 + " ir " + vardas2 + " yra vienodi.";
} else {
  document.querySelector("h1").innerHTML += "<br> Vardai " + vardas1 + " ir " + vardas2 + " yra skirtingi.";
}

// B)
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo

if (vardas1 == "Tomas") {
  document.querySelector("h1").innerHTML += "<br> Sveikas!";
}

// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"

if (vardas1 == "Tomas" && vardas2 == "Karolis") {
  document.querySelector("h1").innerHTML += "<br> Vardai yra teisingi";
} else {
  document.querySelector("h1").innerHTML += "<br> Vardai yra neteisingi";
}

// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba

if (vardas1 == "Tomas" || vardas2 == "Tomas") {
  document.querySelector("h1").innerHTML += "<br> Tomas yra.";
} else {
  document.querySelector("h1").innerHTML += "<br> Tomo nėra.";
}


// 1 UZDUOTIS
// turesime vartotojo amziu
// var age = 24;
// gapal ji, turesiem isvesti tam tikra reklamos teksta

var age = 6;
var printText;

// Salygos:

paleistiReklama(age);

function paleistiReklama(age) {
  if (age < 7 || age >= 65) {
      printText = "Nuolaida 20%";
      document.querySelector("h1").innerHTML = "<br>" + printText;
      reklamaPagalAmziu(age);
      document.querySelector("h1").innerHTML += "<br>" + printText;
  } else {
      reklamaPagalAmziu(age);
      document.querySelector("h1").innerHTML = "<br>" + printText;
  }
}

function reklamaPagalAmziu(age) {
  if (age < 7) {
    printText = "Pliušinės varlės";
  } else if (age < 14) {
    printText = "Mini telefonai";
  } else if (age < 18) {
    printText = "new Music App";
  } else if (age < 24) {
    printText = "Stok į šaulių sąjungą";
  } else if (age < 65) {
    printText = "Pensijos kaupimas - užsiregistruok";
  } else if (age >= 65) {
    printText = "Keliauk į Bristoną";
  } else {
    printText = "Neteisingi duomenys";
  }
}

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

var vardas1 = "Tomas";
var vardas2 = "Paulius";
var vardas3 = "Airinas";
var nuolaidosTekstas;

function nuolaida(name) {
  if (name == vardas1) {
    nuolaidosTekstas = "Masinoms 10% nuolaida";
  } else if (name == vardas2) {
    nuolaidosTekstas = "Buitinei technikai 30% nuolaida";
  } else {
    nuolaidosTekstas = "5% nuolaida kelionems";
  }
  return nuolaidosTekstas;
}

// if (vardas1 == "Tomas") {
//   document.querySelector("h1").innerHTML += "<br> Masinoms 10% nuolaida";
// } else if (vardas)

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

var klientoTipas = "asf";


if (klientoTipas == tipas1) {
  document.querySelector("h1").innerHTML = "<br> 15% nuolaida";
} else if (klientoTipas == tipas2) {
  document.querySelector("h1").innerHTML = "<br> 30% nuolaida";
} else if (klientoTipas == tipas3) {
  document.querySelector("h1").innerHTML = "<br> 50% nuolaida";
} else {
  document.querySelector("h1").innerHTML = "<br> 5% nuolaida";
}
