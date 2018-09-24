// console.log(  "Labas pasauli"  );
// 1) pasikartoti java script “return” zodeli
// 2 UZDUOTIS
// sukurti kintamuosius: alga = 500; pavarde=“Pietkus”;
// parasyti f-ja "getPavarde()”, kuri turi "return" zodeli ir grazina pavarde i iskveitimo vieta.
// patikrinti ar veikia f-ja
// function getPavarde() {
//   var alga = 500;
//   var pavarde = "pietkus";
//   return pavarde;
// }
// var y = getPavarde();
// console.log(y);
// 2) pasikartoti isvedima i ekrana ( document.write("Mano tekstas su js");
// sukurti f-ja, kuri i ekrana isveda “<h2> uz lango singa, kad ir kai pkeista </h2>”
// function functionName() {
  // document.write("Mano tekstas su js");
//   var el = document.createElement('h2').innerHTML = '<p>uz lango singa, kad ir kaip keista</p>';
//   // document.write(el);
//   return el;
// }
// var x = functionName();
// document.write(x);

// 3) pasikartoti elemento aukscio apemima ( var aukstis = document.getElementById('manoDiv').offsetHeight;)
// A) sukurti htm elementa “section” su css ji nudazyti raudonai, uzdeti auksti: 50hw, ploti 100vh
// B) su js paimti jo auksti ir atspausdinti
// C) sumazinkite ekrana ir perkraukite puslapi. Ar js isvedamas aukstis pasikeite?
//===================================================
function getElementoAukstis() {
  var x = document.querySelector("section").offsetHeight;
  console.log("aukstis yra", x);
}
getElementoAukstis();
//=====================================================
// 4) pasiskaityti ir pasidaryt (DOM manipuliavimas):
// plain js
// https://plainjs.com/javascript/manipulation/
