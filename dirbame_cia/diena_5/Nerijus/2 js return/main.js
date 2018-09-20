// console.log(  "Labas pasauli"  );
//=====================RETURN==================

// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja
//  var vardas = "tomas";
// function getVardas() {
//   return vardas;
// }
// // getVardas() + "tomaskis";
// // console.log(getVardas());
// var x = getVardas();
// console.log("vardas yra " + x);

// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas, vardas - Antanas
// patikrinti ar veikia f-ja
//////////////////////////////////////////////////
// var vardas = "Antanas";
// var pavarde = "Tomauskas";
// var x = vardas + pavarde;
// function getVardasPavarde() {
//   return x;
// }
// getVardasPavarde();
// console.log("vardas pavarde: ", getVardasPavarde());
// var y = getVardasPavarde();
// console.log("vardas ir pavarde: " + y);
///////////////////////////////////////////////////////
// 4.1 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
///////////////////////////////////////////////////
// function getPazymiuVidurkis2(x1, x2, x3, x4, x5) {
//   var suma = (x1 + x2 + x3 + x4 + x5) / 5;
//   return suma;
// }
// // var y = getPazymiuVidurkis2(5, 8, 5, 6, 4);
// // document.querySelector("h1").innerHTML += ("vidurkis yra: " + y);
// getPazymiuVidurkis2(5, 8, 5, 6, 4);
// console.log("vidurkis yra: ", getPazymiuVidurkis2(5, 8, 5, 6, 4));
///////////////////////////////////////////////////////
// 5 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia
///mano neveikiantis
// var aukstis = document.querySelector("h1").clientHeight;
// function getH1ElementoAukstis() {
//   return aukstis;
// }
// var x = getH1ElementoAukstis();
// document.querySelector("h1").style.height = "800px";
// console.log(getH1ElementoAukstis());
//geras budas
function getH1ElementoAukstis() {
  var x = document.querySelector("h1").offsetHeight;
  return x;
  // var x = document.querySelector("h1");
  // return x.offsetHeight;
}
var aukstis = getH1ElementoAukstis();
console.log("aukstis yra:" + aukstis);
// console.log("aukstis yra:" + getH1ElementoAukstis());
