// console.log(  "Labas pasauli"  );

// var x = 10;

// console.log("x yra " + x);
// x++;
// console.log("x yra " + x);
// x--;
// x--;
// x--;
// x--;
// console.log("x yra " + x);
// x += 50; // x = x+50
// console.log("x=x+50 yra " + x);
// x + 500;
// console.log("x+500 yra " + x);


// 1 UZDUOTIS
// isvesti 50 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)

// for (var i = 0; i < 50; i++) {
//     console.log("Azuolas" + i);
// }

// 1.1 UZDUOTIS
// isvesti i ekrana "<h3> Azuolas </h3>" su document.write arba innerHTML

// for (var i = 0; i < 50; i++) {
//     document.querySelector("h1").innerHTML += "<h3> Azuolas " + i + "</h3>";
// }

// 1.2 UZDUOTIS
// isvesti 50 kartu zodi "<h2> Juozas</h2> " i <article> elementa su  innerHTML pagalba

// document.querySelector("body").innerHTML += "<article></article>";
// for (var i = 0; i < 5; i++) {
//     document.querySelector("article").innerHTML += "<h2> Juozas</h2> ";
// }

// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)

var xx = 10;
function printX(xx) {
    return xx;
}
document.querySelector("h1").innerHTML += xx;


// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu

for (i = 0; i < 10; i++) {
    document.querySelector("h1").innerHTML += printX(xx) + "<br>";
}

// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
// skirtingius paveikslelius

for (i = 0; i < 12; i++) {
    document.querySelector("h1").innerHTML += printX(xx) + "<img src='https://image.flaticon.com/icons/png/128/184/184177.png'>" + "<br>";
}

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

var x = "";
for (i = 0; i < 30; i++) {
    x = x + "-";
}
document.querySelector('h2').innerHTML += "<br>" + x;
document.querySelector('h2').innerHTML += "<br>" + "vardas |  pavarde | amzius";
document.querySelector('h2').innerHTML += "<br>" + x;

var y = "";
for (i = 0; i < 5; i++) {
    y += "<br>" + "|";
}
document.querySelector('h2').innerHTML += y;

// advance
// 5 UZDUOTIS
// sukurti f-ja, kuri apskaiciuos kiek uzdirbsime po 10 metu , jei pradzioje uzdirbdami 680, ir kai alga i menesi pakyla 1% (~6.8eur)

    var kiekMenesiu = 0;
    var menAtlyginimas = 0;
    var algosPokytis = 0;  // 1%

function alga(kiekMenesiu, menAtlyginimas, algosPokytis) {
    var priedas = 0;

    for (m = 1; m <= kiekMenesiu; m++) {

        priedas += menAtlyginimas * algosPokytis / 100;
        var alga10m = menAtlyginimas + priedas; 
    }
      return alga10m;
}
document.querySelector('h3').innerHTML = "Atlyginimas po " + kiekMenesiu + " men, yra: " + alga(10 * 12, 680, 1);
