console.log(  "Labas pasaulis"  );
// ==================================================
// UZDUOTIS
// 1.1 sukurti tuscia masyva "prekiautojai"
// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
// 1.3 isvesti i console/ekrana "prekiautojai" masyva
var prekiautojai = ["elektromarkt", "senukai", "topo-centras", "Jysk", "Maxima" ];

for (var i = 0; i<prekiautojai.length; i++){
  console.log(prekiautojai[i]);
}

prekiautojai[0] += " ir KO";
console.log("");

for (var i = 0; i<prekiautojai.length; i++){
  console.log(prekiautojai[i]);
}

var t = prekiautojai [2];
prekiautojai [2] = prekiautojai [3];
prekiautojai[3] = t;
console.log("");
for (var i = 0; i<prekiautojai.length; i++){
  console.log(prekiautojai[i]);
}
// t for temporary/kaip sukeisti 2 elementus
// ==================================================
// 2 pervadinti pirma stalciu pvz + "ir KO"
// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
  // !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)


// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)


function sukeistiMasyvo2elementus(x, y) {
  var t = prekiautojai [x];
  prekiautojai [x] = prekiautojai [y];
  prekiautojai[y] = t;
}
sukeistiMasyvo2elementus (2,3);
sukeistiMasyvo2elementus (1,0);
for (var i = 0; i<prekiautojai.length; i++){
  console.log(prekiautojai[i]);
}
// ===================================================

function goHello () {
  alert ("hi!!!");
}
var irankiai = ["peilis", "plaktukas", "atsuktuvas", goHello];

// ======================================================
// var a = [];
// a[0] = 1;
// a[1] = 2;
// a[2] = "studentas";
// for (var i = 0; i < 3; i++){
// alert (a[i]);
// } pvz

var a = [];
a[0] = 1;
a[1] = 2;
a[2] = "studentas";

var b = [1,2, "studentas", 3,4];

for (var i = 0; i<a.lenght; i++) {
  alert (a[i]);
}

document.getElementById("demo1").innerHTML = b;
document.getElementById("demo2").innerHTML = b[2];
//  turi buti demo html butinai!!!
