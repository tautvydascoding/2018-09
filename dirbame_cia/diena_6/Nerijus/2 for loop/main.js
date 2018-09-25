// console.log(  "Labas pasauli"  );

// var x = 10;
// console.log("x yra: " + x);
// x++;
// console.log("x++ yra: " + x);
// x--;
//
// console.log("x-- yra: " + x);
//
// x += 50;      // x = x + 50
// console.log("x+= 50: " + x);
// x + 50000;
// console.log("x+50: " + x);
//================================================
// 1 UZDUOTIS
// isvesti 50 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)
// 1.1 UZDUOTIS
// isvesti i ekrana "<h3> Azuolas </h3>" su document.write arba innerHTML
// 1.2 UZDUOTIS
// isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba
// var tekstas = "";
// for (var i = 0; i < 50; i++) {
//   tekstas = "<h3> azuolas" + i + "</h3>";
//   document.querySelector("body").innerHTML += tekstas;
// }


// for (var i = 0; i < 50; i++) {
//
//   document.querySelector("article").innerHTML += "<h2>azuolas</h2>";
// }

//===================================================
// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)
// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu
// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// skirtingius paveikslelius
//
// function printX() {
//   for (var i = 0; i < 12; i++) {
//   document.querySelector("body").innerHTML += "<img src='' alt='foto'>";
//   }
// }
// printX();

// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)

// ----------------------------
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |
//=====================================================================
function piestiEilute(x, y) {
  for (var i = 0; i < 50; i++) {

    document.querySelector("body").innerHTML += x;
    }
}
piestiEilute("-", "|");
