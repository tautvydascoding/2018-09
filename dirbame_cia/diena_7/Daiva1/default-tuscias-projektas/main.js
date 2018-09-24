console.log(  "Labas pasauli"  );

// var a = [ ];
// a [0] = 1;
// a [1] = 2;
// a [2] = "studentas";
// a [3] = 3;
//
// var b = [1,2, "studentas", 3,4];
//
// for (var i = 0; i<a.length; i++){
// alert (a[i]);
// }
// UZDUOTIS
// 1.1 sukurti tuscia masyva "prekiautojai"
// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
// 1.3 isvesti i console/ekrana "prekiautojai" masyva

// 2 pervadinti pirma stalciu pvz + "ir KO"
// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
  // !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)

var prekiautojai = []; // empty array

var prekiautojai = [ "Senukai", "Ermitazas",  "Maxima", "Rimi"];
for (var i = 0; i < prekiautojai.length; i++) {
console.log ( prekiautojai [i]);
}
prekiautojai [0] += " ir KO";
for (var i = 0; i < prekiautojai.length; i++) {
console.log ( prekiautojai [i]);
}

var t = prekiautojai [2];
prekiautojai[2] = prekiautojai[3];
prekiautojai [3] = t;
for (var i = 0; i < prekiautojai.length; i++) {
console.log ( prekiautojai [i]);
}

function sukeistiMasyvo2elementus(x, y){
var t = prekiautojai [x];
prekiautojai[x] = prekiautojai[y];
prekiautojai [y] = t;
}

sukeistiMasyvo2elementus(2,3);

for (var i = 0; i < prekiautojai.length; i++) {
console.log ( prekiautojai [i]);
}
