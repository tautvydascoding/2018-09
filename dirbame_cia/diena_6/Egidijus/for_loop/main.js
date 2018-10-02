// console.log(  "Labas pasauli"  );
//
// var x =10;
// console.log("x yra " + x );
//
// x++;
//
// console.log("x++ yra " +x);
//
// x--;
// console.log("x-- yra " +x);
//
// x+= 50;
//
// console.log("x + 50 yra " +x );
//=============FOR   LOOP====================
// teo:  https://www.w3schools.com/js/js_loop_for.asp
//  https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration

// 1 UZDUOTIS
// isvesti 50 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)
// var tekstas = " ";
// for (var i = 0; i < 50; i++) {
  // document.write("Azuolas " + i);
  // tekstas = "<hr3> azuolas " + i + "</h3>";
  // document.querySelector("body").innerHTML += "<h3> azuolas </hr>" + i;
// }



// 1.1 UZDUOTIS
// isvesti i ekrana "<h3> Azuolas </h3>" su document.write arba innerHTML

// document.querySelector("article").innerHTML += "<article> </article>" + i;
//
// for (var i = 0; i<50 ; i++) {
//   document.querySelector("article").innerHTML += "<h3> azuolas </hr>" + i;
// }

// 1.2 UZDUOTIS
// isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba



// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)

// function printX(xx) {
//   for (var i = 0; i < 5; i++) {
//     document.write(xx);
//   }
// }
// printX(5);


// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu

// function printX(xx) {
//   for (var i = 0; i < 100; i++) {
//     document.write(xx);
//   }
// } printX(2);

// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// skirtingius paveikslelius

// function printX() {
//   for (var i = 0; i < 12; i++) {
//     document.querySelector("body").innerHTML += "<img src='http://www.clker.com/cliparts/3/m/v/Y/E/V/small-red-apple-hi.png'>" + i;
//   }
// }printX();


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

// function piestiEilute () {
//   function piestiStulpeli() {
//   }
//
// for (var i = 0; i < 30; i++) {
//  document.write("-");
// }
//
// }
// piestiEilute();




//

var eilute ="";
for (var i = 0; i < 30; i++) {
  eilute = eilute + "-";

}
document.write(eilute);      









//






// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur)
// var kiekMenesiu = 10 * 12;
// var menAtlyginimas = 680;
// var algosPokytis = 1;  // 1%
