console.log(  "Labas pasauli"  );

var x = 10;

console.log( "x yra " + x );
x++;
console.log( "x++ yra " + x );
x--;
console.log( "x-- yra " + x );

x += 50;         //  x = x + 50;
console.log( "x+=50 yra " + x );
x + 50000;
console.log( "x + 50 yra " + x );

//
//


// 1 UZDUOTIS
// isvesti 50 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)
for (var i = 0; i < 50; i++) {
    console.log(  "Azuolas "  + i     );
}

// 1.1 UZDUOTIS
// isvesti i ekrana "<h3> Azuolas </h3>" su document.write arba innerHTML
// var tekstas = "";
// for (var i = 0; i < 50; i++) {
//     tekstas = "<h3> Azuolas " + i + "</h3>";
//
//     document.querySelector("h1").innerHTML +=  tekstas;
// }

// 1.2 UZDUOTIS
// isvesti 50 kartu zodi "<h2> Juozas </h2> " i <article> elementa su  innerHTML pagalba

document.querySelector("body").innerHTML += "<article> </article>";

for (var i = 0; i < 50; i++) {
    document.querySelector("article").innerHTML +=
        "<h2> Juozas </h2> ";
}


// 2.1 UZDUOTIS
// sukurti f-ja "printX(xx)", kuri  i browser langa atspausdins paduota "xx" teksta (panaudojanti document.write arba innerHTML)
function printX(xx) {
    document.querySelector("body").innerHTML += xx;
}
printX("Laba diena");

// 2.2 UZDUOTIS
// paleisti f-ja "printX(xx)" 100 kartu
for (var i = 0; i < 100; i++) {
        printX( "Labas rytas <br>");
}

// 2.3 UZDUOTIS
// paleisti f-ja "printX(xx)" 12 kartu ir atspausdinti <img ...
//
for (var i = 0; i < 12; i++) {
    printX( '<img src="" alt="nenurodytas pavisklelis">');
}
