console.log(  "Labas pasauli"  );

// var x = 10;
// console.log("x yra " + x );
// x++;
// console.log("x++ yra " + x);
// x--;
// console.log(" x-- yra " + x);
//
// x += 50; // x= x + 50;
//
// console.log( " x += 50 yra " + x );
//
// x + 50000;
// console.log("x + 50 yra " + x);

// 1 UZDUOTIS
// isvesti 50 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)

// for (var i = 0; i < 50; i++ ) {
//   console.log(" Azuolas" + i );
// }

// 1.1 UZDUOTIS
// isvesti i ekrana "<h3> Azuolas </h3>" su document.write arba innerHTML
 // var tekstas = "";
 //
 // for (var i = 0; i < 50; i++) {
 //  tekstas = "<h3> Azuolas " + i + "</h3>";
 //   document.querySelector("h1").innerHTML += tekstas;
 // }

// 1.2 UZDUOTIS
// isvesti 50 kartu zodi "<h2> Juozas</h2> " i <article> elementa su  innerHTML pagalba
// for (var i = 0; i < 50; i++) {
//
// document.querySelector("article").innerHTML += "<h2> Juozas</h2> ";
// }

// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)

// function printX(xx){
//   document.querySelector("h1").innerHTML = xx ;
// }
// printX( "Laba diena");

// consoleje - console.log ("pazimiu vidu


// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu
// function printX(xx){
//   document.querySelector("h1").innerHTML += xx;
// }
//
// for (var i = 0; i < 100; i++) {
// printX( "Laba diena");
//
// }
// //  pavyzdys kaip prideti po 1 vnt.
// var y=0;
// y += 1;
// y += 1;
// y += 1;
// y += 1;
// y += 1;
// console.log(y );



// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...


// function printX(xx){
// document.querySelector("h1").innerHTML += xx;
// }
//
// for (var i = 0; i < 12; i++){
// printX('  <img src="http://alkas.lt/wp-content/uploads/2014/05/aruno-eismanto-nuotrauka-skeciu-pardavejas-64908617.jpg   " alt="">' );
// }

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

var eilute = "";
for (var i = 0; i < 30; i++){
  eilute = eilute + "-";
}
 document.querySelector("h1").innerHTML += eilute + "<br>";
 document.querySelector("h1").innerHTML += "vardas |   " + "pavarde |  " + "amzius  " + "<br>";
 document.querySelector("h1").innerHTML += eilute + "<br>";
var stulpelis =  "";
for(var i = 0; i< 7; i++){

}


// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur)
// var kiekMenesiu = 10 * 12;
// var menAtlyginimas = 680;
// var algosPokytis = 1;  // 1%
