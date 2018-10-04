console.log(" Labas ");

var x = 10;
console.log( "x yra " + x );
x++;
console.log( "x-- yra" + x);
x--;
console.log( "x-- yra" + x);

x += 50;
console.log( "x+-50 yra " + x);

//==============TEORIJA ++ / -- ==========
    var x = 10;
    x = x + 3;  // x = 13
    x += 3;     // tas pats kad x = x + 3;
    x++;       //  tas pats kas x = x + 1;

//=============FOR   LOOP====================
// teo:  https://www.w3schools.com/js/js_loop_for.asp
//  https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration

// 1 UZDUOTIS
// isvesti 50 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)

for ( var i = 0; i < 50; i++) {
  console.log("Azuolas" + i );
}

// 1.1 UZDUOTIS
// isvesti i ekrana "<h3> Azuolas </h3>" su document.write arba innerHTML

var tekstas = "";
for ( var i = 0; i < 50; i++) {
  tekstas = "<h3> Azuolas " + i + "</h3>"
  document.querySelector("h1").innerHTML += tekstas;
}

// 1.2 UZDUOTIS
// isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba

for (var i = 0; i < 50; i++) {
document.querySelector("article").innerHTML += "<h3> juozas </h3>";
}
// document.querySelector("body").innerHTML += "<article> </article>"sitas variantas butu surades <article> be html dokumento. (  document.querySelector("body").innerHTML += "<article> Juozukas </article>")


// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)

// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu

// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// skirtingius paveikslelius

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


// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur)
// var kiekMenesiu = 10 * 12;
// var menAtlyginimas = 680;
// var algosPokytis = 1;  // 1%

// ==============SCSS============================

//========= local/global or Frog/Garden =======
