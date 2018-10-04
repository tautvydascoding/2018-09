console.log( "Labas");
// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)

// // var tekstas = "";
// // for (var i = 0; i < 100; i++ ) {
// //   tekstas = "<h3> nezinau" + i + "</h3>";
// //   document.querySelector("h1").innerHTML += tekstas;
// }

var tekstas = "Valio"
function printX() {
  document.write (tekstas)
}
printX()

// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu

for (var i = 0; i < 100; i++) {
  tekstas + i;
  document.querySelector("h1").innerHTML += tekstas;
}
// printX("valio <br>")



// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// skirtingius paveikslelius

for (var i = 0; i < 12; i++) {

  document.querySelector("article").innerHTML += "<img src='default-bootstrap-projectas/js/Retro-dviratis..png' alt='nnn'/>";
}

for (var i = 0; i < 15; i++){
  document.querySelector("article").innerHTML += "<img src='default-bootstrap-projectas/js/Retro-dviratis..png' alt='nnn'/>";
  }
// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)

var eilute = "";
for (var i = 0; i < 30; i++) {
  eilute = eilute + "-"   // eilute += "-"
}
console.log(eilute);

console.log( "vardas / pavarde / amzius");

var eilute = "";
for (var i = 0; i < 30; i++) {
  eilute = eilute + "-"   // eilute += "-"
}
console.log(eilute);


// ----------------------------
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |
//Galimas dr vienas sprendimas:
// function piestiEilute (x){
// var eilute = "";
// for (var i = 0; i < x; i++) {
//   eilute = eilute + "-"   // eilute += "-"
// }}
// piestiEilute (100);


// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur)
// var kiekMenesiu = 10 * 12;
// var menAtlyginimas = 680;
// var algosPokytis = 1;  // 1%

// ==============SCSS============================

//========= local/global or Frog/Garden =======
