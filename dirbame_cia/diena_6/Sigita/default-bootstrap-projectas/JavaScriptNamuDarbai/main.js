// console.log(" Labas ");
//
// var x = 10;
// console.log( "x yra " + x );
// x++;
// console.log( "x-- yra" + x);
// x--;
// console.log( "x-- yra" + x);
//
// x += 50;
// console.log( "x+-50 yra " + x);
//
// //==============TEORIJA ++ / -- ==========
//     var x = 10;
//     x = x + 3;  // x = 13
//     x += 3;     // tas pats kad x = x + 3;
//     x++;       //  tas pats kas x = x + 1;
//
// //=============FOR   LOOP====================
// // teo:  https://www.w3schools.com/js/js_loop_for.asp
// //  https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration
//
// // 1 UZDUOTIS
// // isvesti 50 kartu zodi "Azuolas" i konsole  (! bandant tai padaryti, atsiras skaicius 50)
//
// for ( var i = 0; i < 50; i++) {
//   console.log("Azuolas" + i );
// }
//
// // 1.1 UZDUOTIS
// // isvesti i ekrana "<h3> Azuolas </h3>" su document.write arba innerHTML
//
// var tekstas = "";
// for ( var i = 0; i < 50; i++) {
//   tekstas = "<h3> Azuolas " + i + "</h3>"
//   document.querySelector("h1").innerHTML += tekstas;
// }
//
// // 1.2 UZDUOTIS
// // isvesti 50 kartu zodi "<h2> Azuolas</h2> " i <article> elementa su  innerHTML pagalba
//
// for (var i = 0; i < 50; i++) {
// document.querySelector("article").innerHTML += "<h3> juozas </h3>";
// }
// document.querySelector("body").innerHTML += "<article> </article>"sitas variantas butu surades <article> be html dokumento. (  document.querySelector("body").innerHTML += "<article> Juozukas </article>")


// 1) pasikartoti java script “return” zodeli
// // 2 UZDUOTIS
// // sukurti kintamuosius: alga = 500; pavarde=“Pietkus”;
// // parasyti f-ja "getPavarde()”, kuri turi "return" zodeli ir grazina pavarde i iskveitimo vieta.
// // patikrinti ar veikia f-ja
var alga = 500;
var pavarde = "Pietkus";
function getPavarde(){
  return pavarde
}
console.log(getPavarde());


// 2) pasikartoti isvedima i ekrana ( document.write("Mano tekstas su js");

document.write("Mano tekstas su js");
// // sukurti f-ja, kuri i ekrana isveda “<h2> uz lango singa, kad ir kai pkeista </h2>”
document.write('<h2>' + "uz lango sninga, kad ir kaip keista" + '</h2' );
// 3) pasikartoti elemento aukscio apemima ( var aukstis = document.getElementById('manoDiv').offsetHeight;)


var aukstis = document.getElementById('manoDiv').offsetHeight
console.log(aukstis);

// // A) sukurti htm elementa “section” su css ji nudazyti raudonai, uzdeti auksti: 50hw, ploti 100vh
// // B) su js paimti jo auksti ir atspausdinti
var aukstis = document.querySelector('section').offsetHeight
console.log(aukstis);

// // C) sumazinkite ekrana ir perkraukite puslapi. Ar js isvedamas aukstis pasikeite?

//
// 4) pasiskaityti ir pasidaryt (DOM manipuliavimas):
// plain js
// https://plainjs.com/javascript/manipulation/

var el = document.createElement('div');
el.innerHTML = '<p>Hello World!</p>';
var textnode = document.createTextNode('Hello World!');
el.appendChild(textnode);
document.body.appendChild(el);
// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================



//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:


//----Elemento duomenys--------
// auksto paemimas:
// var aukstis = document.querySelector('h1').clientHeight;   // clientHeight includes the height and vertical padding.
// var aukstis = document.querySelector('h1').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.querySelector("h1").style.height = "500px"; 		// change the height of a <div> element:

//=====================PASIKARTOJIMAS==================

//  1.1 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja print(15.99);

function printKaina(x){
  console.log(x);
}
printKaina("print kainas " + "15.99")
//  1.2 UZDUOTIS
// iskviesti f-ja print 3 kartus, kad atspausdintu 3 skirtingas kainas:  999 , 13.49, 100.05
//    vietoj x irasant, koki nors teksta pvz: printKaina( 999);

// 2.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
function pazymiuVidurkis(){
  var x= 5;
  var x1 = 10;
  var x2 = 8;
  var x3 = 6;
  var x4 = 8;
  console.log (z = (x + x1 + x2 + x3 + x4)/5)
}
pazymiuVidurkis()

// 2.2 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis1(x1, x2, x3, x4, x5){
  console.log (z = (x5 + x1 + x2 + x3 + x4)/5)
}
pazymiuVidurkis1(2, 3, 4, 5, 6);
//=====================RETURN==================

// 1 UZDUOTIS
// A) sukurti kintamaji "vardas" Tomas
// B) parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// C) patikrinti ar veikia f-ja
var vardas = "Tomas";
function getVardas(){
  return vardas
}
console.log(getVardas());

// 2 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
//  f-joje sukurti kintamaji   "pavarde" Tomauskas, "vardas" - Antanas
// patikrinti ar veikia f-ja
function getVardasPavarde(){
  var pavarde = "Tomauskas";
  var vardas = "Antanas";
  return vardas
}
console.log(getVardasPavarde());
// 3 UZDUOTIS
// A) parasyti f-ja "getPelnas()", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje sukurti kintamaji "pajamos" 12500
// B) f-joje sukurti kintamaji "islaidos" 7500
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - islaidos)
// C) patikrinti ar veikia f-ja
function getPelnas(){
  var pajamos = 12500;
  var islaidos = 7500;
  var pelnas = pajamos - islaidos;
  return pelnas;
}
console.log(getPelnas());
// 3.2 UZDUOTIS
// A) parasyti f-ja "getPelnas(pajamos, nuostoliai)", kuri turi "return" zodeli ir grazina apskaiciuota pelna
// B) f-joje apskaiciuoti pelna  ( pvz: pelnas = pajamos - nuostoliai)
// C) patikrinti ar veikia f-ja

function getPelnas(pajamos, nuostoliai){
var  pelnas = pajamos - nuostoliai;
  return pelnas;
}
console.log(getPelnas(10000, 3000));
// 4 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")



// 5 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia
var aukstis = document.querySelector('h1').clientHeight;
function getH1ElementoAukstis() {
return aukstis
}
console.log(aukstis);
// =================FOR intro  ======================

// 1 UZDUOTIS
// naudojant FOR cikla, atspausdinti  "#" tiek, kad gautusi trikampio vaizdas
// #
// ##
// ###
// ####
// #####
// ######

var eilute = ""
for (var i=0; i<1; i++){
eilute = eilute + "#" ;
}
console.log(eilute);

for (var i=0; i<2; i++){
eilute = eilute + "#" ;
}
console.log(eilute);
for (var i=0; i<3; i++){
eilute = eilute + "#" ;
}
console.log(eilute);
for (var i=0; i<4; i++){
eilute = eilute + "#" ;
}
console.log(eilute);
for (var i=0; i<5; i++){
eilute = eilute + "#" ;
}
console.log(eilute);
//=========== =KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos

//======= local/global or SCSS or IF or Bootstrap Layout or Frog/Garden ====
