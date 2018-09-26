//==============TEORIJA ++ / -- ==========
    // var x = 10;
    // x = x + 3;  // x = 13
    // x += 3;     // tas pats kad x = x + 3;
    // x++;       //  tas pats kas x = x + 1;

//=============FOR   LOOP====================
// teo:  https://www.w3schools.com/js/js_loop_for.asp
//  https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration

// 1 UZDUOTIS
// isvesti 50 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)

// for (var i = 0; i < 50; i++) {
//   console.log("Azuolas: " + i);
// }


// 1.1 UZDUOTIS
// isvesti i ekrana "<h3> Azuolas </h3>" su document.write arba innerHTML

// for (var i = 1; i <= 50; i++) {
//   document.querySelector("h1").innerHTML += "<br><h3> Azuolas: " + i + "</h3>";
// }

// 1.2 UZDUOTIS
// isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba

// document.querySelector("body").innerHTML = "<article> </article>";
//
//   for (var i = 1; i <= 50; i++) {
//     document.querySelector("article").innerHTML += "<h2>Azuolas</h2>";
//   }


// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)

var linkas = "<img src='https://vignette.wikia.nocookie.net/logopedia/images/a/ac/Google-app-icon-small.png'>";

function printX(text){
  document.querySelector("h1").innerHTML += "<br>" + text;
}

// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu

function printManyTimes(times, text) {
  for (var i = 0; i < times; i++) {
    printX(text);
  }
}


// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// skirtingius paveikslelius




// 4 UZDUOTIS
// A) sukurti f-jas piestiEilute(x); spausdintiStulpeli(x);
// B) nupiesti tuscia lentele paleidiznat f-jas (  antrastine eilute "vardas |  pavarde | amzius" - teks isvesti be f-jos)


function piestiEilute(length) {
  document.querySelector("h1").innerHTML += "<br>";
  for (var i = 0; i < length; i++) {
    document.querySelector("h1").innerHTML += "-";
  }
}


// ----------------------------
// vardas |  pavarde | amzius
// ----------------------------
// |
// |
// |
// |
// |


// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur)
// var kiekMenesiu = 10 * 12;
// var menAtlyginimas = 680;
// var algosPokytis = 1;  // 1%

// ==============SCSS============================

//========= local/global or Frog/Garden =======