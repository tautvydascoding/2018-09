console.log(  "Labas pasauli"  );




// 1 UZDUOTIS
// turesime vartotojo amziu
// var age = 24;
// gapal ji, turesiem isvesti tam tikra reklamos teksta

var age = 11;

if ( age < 7) {
    document.querySelector("h1").innerHTML = "pliusines varles";
} else if ( age <= 14) {
    document.querySelector("h1").innerHTML = "mini tel";
} else if (age <= 18) {
    document.querySelector("h1").innerHTML = "new Music App";
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
    console.log(  "Masinoms 10% nuolaida" );
} else if (klientas == "Pauliu") {
    console.log( "Buitinei technikai  30% nuolaida" );
} else {
    console.log( "5% nuolaida kelionems" );
}


// 3 UZDUOTIS
// sukurti 3 kintamuosius (klientu tipus) "bronze", "silver", "gold"
// susikurti kintamaji 'klietoTipas' - kurio reiksme lyginsime
// kai 'klietoTipas' yra "bronze" - isvesti " 15% nuolaida"
// kai 'klietoTipas' yra "silver" - isvesti " 30% nuolaida"
// kai 'klietoTipas' yra   bet koks kitas - isvesti " 5% nuolaida  "
var klientas = "bronze";

var tipas1 = "bronze";
var tipas2 = "silver";

//  ar klientas bronze?
if (klientas == tipas1) {
    console.log(  " 15% nuolaida"   );

    // tikrinu ar klientas silver
} else if ( klientas ==  tipas2) {
    console.log(  " 30% nuolaida"   );
} else  {
    console.log(  " 5% nuolaida"   );
}





//
