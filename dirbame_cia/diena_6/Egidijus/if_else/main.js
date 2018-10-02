console.log(  "Labas pasauli"  );

// =================if  teorija====================
if ( true ) {
    console.log("labas");
}

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
if (vardas1 == vardas2){
  document.write("Vardai sutampa");
}
else if (true) {
  document.write("Vardai nesutampa");
}




// B)
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo

// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"

var vardas1 = "Tomas";
var vardas2 = "Karolsis";
if (vardas1 == "Tomas" && vardas2 == "Karolis") {
  document.write(" Vardai sutampa");
} else {
  document.write(" Vardai yra skirtingi");
}


// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba

var vardas1 = "Tomas";
var vardas2 = "Karolsis";
if (vardas1 == "Tomas" || vardas2 == "Karolis") {
  document.write(" Vardai sutampa");
} else {
  document.write(" Vardai yra skirtingi");
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

var age = 24;

if (age < 7) {
    if (age < 7 || age > 65){
      document.write("Sokoladiniai zuikuciai 20% nuolaida");
    }

  document.write("Pliusines varles");
}
else if (age >= 7 || age < 14)
{
   document.write("Mini telefonai");
}
else if (age >= 14 || age < 24 )
 {
  document.write("new music app");
}
else if (age >= 18 || age < 24) {
  document.write("stok į sauliu sajunga");
}else if (age >= 24 || age < 65) {
  document.write("pensijos kaupimas - uzsiregistruok");
}else if (age >= 65) {
  document.write("kelione į birštona");
}




// 2 UZDUOTIS
// sukurti 3 vardus "Tomas", "Paulius", "Airidas"
// kai "if"-ui padauodame Toma - isvesti "Masinoms 10% nuolaida"
// kai "if"-ui padauodame Pauliu - isvesti "Buitinei technikai  30% nuolaida"
// kai "if"-ui padauodame bet ka kita - isvesti "5% nuolaida kelionems"

var x = "Tomas";
var y = "Paulius";
var z = "Airidas";

if ("Tomas") {
  document.write("Masinoms 10% nuolaida");
}
else if ("Paulius") {
  document.write("Buitinei technikai 30% nuolaida");
}
else {
  document.write("5% nuolaida kelionėms")
}





// 3 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime
// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
//
var klientas ="gold";

var tipas1 = "bronze";
var tipas2 = "silver";
var tipas3 = "gold";

if (klientas == "bronze") {
  document.write("15% nuolaida");
}else if (klientas == "silver") {
  document.write("30% nuolaida");
  else {
    document.write("5% nuolaida")
  }
}
