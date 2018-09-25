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
// function getH1ElementoAukstis() {
//   var x = document.querySelector("h1").offsetHeight;
//   return x;
//   // var x = document.querySelector("h1");
//   // return x.offsetHeight;
// }
// var aukstis = getH1ElementoAukstis();
// console.log("aukstis yra:" + aukstis);
// console.log("aukstis yra:" + getH1ElementoAukstis());
//////////////////////////////namu darbai 50 ///////////////////////////////////////////////////////
// UZDUOTIS =======ismokti f-jas 50x===============
// A) sukurti kintamaji "vardas" Tomas
// B) sukurti 50 f-ju.
// nelyginiu (1,3,5,...) funkciju pavadinimai getVardas1(), getVardas3(), ...
// nelygines f-jos turi "return" ir iskvietus turi grazinti varda ir jo skaiciu salia pvz: "Tomas1"
// lyginiu (2,4,6,8...) funkciju pavadinimai setVardas2(name), setVardas4(name), ...
// lygines f-jos turi pakeisti varda ir uzdeti skaiciu salia
// NOTE: visas f-jas iskviesti
// pvz.:
var vardas = "Tomas";
// 1
function getVardas1() {
  return vardas + "1";
}
var x = getVardas1();   // arba  console.log(  getVardas1() );
console.log(  x );

// 2
function setVardas2(name) {
   vardas = name + "2";
}
setVardas2("antanas"); // sugalvoti vis kita zodi

// 3
function getVardas3() {
  return vardas + "3";
}
x =  getVardas3();  // arba  console.log(  getVardas3() );
console.log(  x );

// 4
function setVardas4(name) {
   vardas = name + "4";
}
setVardas4("juozas"); // sugalvoti vis kita zodi

// 5
function getVardas5() {
  return vardas + "5";
}
x = getVardas5();
console.log(x);

//6
function setVardas6(name) {
  vardas = name + "6";
}
setVardas6("Nerijus");

//7
function getVardas7() {
  return vardas + "7";
}
getVardas7();
console.log(getVardas7());

//8
function setVardas8(name) {
  vardas = name + "8";
}
setVardas8("Armandas");

//9
function getVardas9() {
  return vardas + "9";
}
getVardas9();
console.log(getVardas9());

//10
function setVardas10(name) {
  vardas = name + "10";
}
setVardas10("Laura");

//11
function getVardas11() {
  return vardas + "11";
}
getVardas11();
console.log(getVardas11());

//12

function setVardas12(name) {
  vardas = name + "12";
}
setVardas12("Antanas");

//13

function getVardas13() {
  return vardas + "13";
}
getVardas13();
console.log(getVardas13());

//14
function setVardas14(name) {
  vardas = name + "14";
}
setVardas14("onute");

//15
function getVardas15() {
  return vardas + "15";
}
getVardas15();
console.log(getVardas15());

//16
function setVardas16(name) {
  vardas = name + "16";
}
setVardas16("alytis");

//17
function getVardas17() {
  return vardas + "17";
}
getVardas17();
console.log(getVardas17());

//18
function setVardas18(name) {
  vardas = name + "18";
}
setVardas18("algis");

//19
function getVardas19() {
  return vardas + "19";
}
getVardas19();
console.log(getVardas19());

//20
function setVardas20(name) {
  vardas = name + "20";
}
setVardas20("bronius");

//21
function getVardas21() {
  return vardas + "21";
}
getVardas21();
console.log(getVardas21());

//22
function setVardas22(name) {
  vardas = name + "22";
}
setVardas22("petras");

//23
function getVardas23() {
  return vardas + "23";
}
getVardas23();
console.log(getVardas23());

//24
function setVardas24(name) {
  vardas = name + "24";
}
setVardas24("bronius");

//25
function getVardas25() {
  return vardas + "25";
}
getVardas25();
console.log(getVardas25());

//26
function setVardas26(name) {
  vardas = name + "26";
}
setVardas26("kazys");

//27
function getVardas27() {
  return vardas + "27";
}
getVardas27();
console.log(getVardas27());

//28
function setVardas28(name) {
  vardas = name + "28";
}
setVardas28("alooyzas");

//29
function getVardas29() {
  return vardas + "29";
}
getVardas29();
console.log(getVardas29());

//30
function setVardas30(name) {
  vardas = name + "30";
}
setVardas30("kestas");

//31
function getVardas31() {
  return vardas + "31";
}
getVardas31();
console.log(getVardas31());

//32
function setVardas32(name) {
  vardas = name + "32";
}
setVardas32("daiva");

//33
function getVardas33() {
  return vardas + "33";
}
getVardas33();
console.log(getVardas33());
