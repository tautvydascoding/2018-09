console.log(  "Labas pasauli"  );


// ====================Scope====================
//   UZDUOTIS  A
// sukurti funkcija "printDuomenys()" ,
// funkcijoje sukurti kintamaji: var vardas = "Tomas"
// kuri  atspausdina i konsole  kintamaji "vardas"
// iskviesti f-ja
var vardas = "Jonas";
function myName() {
  console.log("vardas " + vardas);
  console.log("this.vardas - funkcijos viduje: ", this.vardas);
}
myname("petras");

//   UZDUOTIS  B
//  dabar, pabandykite po f-ja (uz jos ribu) i konsole atspausdinti kintamaji "vardas"
//  console.log( vardas) ;
// NOTE: gausite klaida ""is not defined""



//================local && global=========
// var x = "x -viesas ";   // global
// function testLocalVar() {
//    var y = "y -vietinis ";  // local
//    z = "z -viesas";        // global // nereiketu taip daryti
//    console.log("x", x);
//    console.log("y", y);
//    console.log("z", z);
// }
// testLocalVar();
// console.log("x", x);
// console.log("z", z);
// console.log("y", y);  // error - 1)   nes sukurtas f-jos viduje 2) sukurtas su "var"

//------
 // UZDUOTIS // UZDUOTIS
 // A) sukurti kintamaji var katinas = "juodas"
 // B) sukurti f-ja
 // C) sukurti f-jos viduje kintamaji var katinas = "baltas"
 // D) atspauzdinti abu f-jos viduje
 // E) atspauzdinti  uz f-jos

 // var katinas = "juodas";   //global
 //
 // function test2() {
 //     var katinas = "baltas";  // local
 //    console.log("1 katinas:", katinas);
 //    console.log("2 this.katinas - f-jos viduje: ",  this.katinas);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
 // }
 // test2();
 //
 // console.log("3 katinas:", katinas);

var katinas = "juodas";
 function testas() {
   var katinas = "baltas";
   console.log("1 katinas: ", katinas);
   console.log( "2 this.katinas funkcijos viduje: ", this.katinas);

 }
 testas();
 console.log("3 katinas:", katinas);









//==========================

 // var xx = 10; // global
 //
 // function isvesti( xx ) {  // xx - (local) naujas issigalvotas LAIKINAS  kintamasis
 //     xx = 20;  // local
 //     console.log( "1. xx:", xx);
 //     console.log( "2. this.xx:",   this.xx);
 // }
 // console.log( "3. xx:", xx);

var xx = 10;
function isvesti(xx){
  xx = 20;
  console.log("1. xx ", xx);
  console.log("2. this.xx:", this.xx );
}
isvesti();
console.log("3. xx: ", xx);







 //======================
 // var vardas = "Jonas";   // global - kintamasis
 // function myName ( vardas ) { //  vardas - local kintamasis
 //     console.log( " vardas" + vardas);
 //     console.log("this.vardas - f-jos viduje: ",  this.vardas);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
 // }
 // myName("PETRAS");
//======================TEKSTO ISVEDIMAS===============

var vardas = "Jonas";
function myName(vardas) {
  console.log("vardas " + vardas);
  console.log("this.vardas - f- viduje: ", this.vardas);
}
myName("petras");


//  1.1 UZDUOTIS
//  sukurti funkcija "printAntraste(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas antrastes:  "BMW pinga, nes daugeja", "Greik pageres orai", "Vasaros vis salteja"

function printAntraste(x) {
  document.querySelector('body').innerHTML += x;
  // document.write(x);
}
printAntraste("Bmw pinga, nes daugėja" + "<br>");
printAntraste("Greit pagerės orai" + "<br>");
printAntraste("Vasaros vis šaltėja");



//  1.2 UZDUOTIS
//  sukurti funkcija "printStraipsnis(x)"
//  kuri atspausdina i DOM-a (ekrana) "<p>" + x + "</p>" (paduota teksta tarp "p")


function printStraipsnis(x) {
  document.querySelector('body').innerHTML += "<p>" + x + "</p>";

}
printStraipsnis("labai trumpas straipsnis");

//  1.3 UZDUOTIS
//  iskviesti f-jaS 3 kartus, kad atspausdintu 3 skirtingas antrastes IR 3 straipnsnius:  "Lorem1 ....",   "Lorem2 ....",   "Lorem3 ....",

function printViskas() {
  printAntraste("Bmw pinga, nes daugėja" + "<br>");
  printStraipsnis("labai trumpas straipsnis");
  printAntraste("Greit pagerės orai" + "<br>");
  printStraipsnis("labai trumpas straipsnis");
  printAntraste("Vasaros vis šaltėja");
  printStraipsnis("labai trumpas straipsnis");


}
printViskas();
////////////////////////////////////////////////////////////////////////////

console.log("labas");

// =================taisyklingas Array copy  =================
var array = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
var kopijaNEGERAI =  array; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
var kopija1 = array.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
var kopija2 = array.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy

// ================= ========= ======== ========
 ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

console.log(names.indexOf("Rico"));
if (names.indexOf("Rico") != -1) {
    var x = "Rico";

  //vardas yra !
  //index => rodys kurioje vietoje yra ieskotas vardas
  console.log("Yra ieskotas vardas " + x);
  console.log("pozicija: " + names.indexOf("Rico") );
}
else {
  console.log("ieškoto vardo nėra", name);
}
// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)

console.log(names.indexOf("Rico", 25));

function rastiVisusVardus(arr, name) {
  console.log("Ieskom vardo ", name);
  var indeksai = [];
  var paskutinisRastas = arr.indexOf(name);
  while (paskutinisRastas != -1){
    indeksai.push(paskutinisRastas);
    console.log(paskutinisRastas);
    paskutinisRastas = arr.indexOf(name, paskutinisRastas +1);
  }
  return indeksai;
}
var rezultatas = rastiVisusVardus(names, "Freida");
console.log(rezultatas);

if (rezultatas.length == 0) {
  console.log("Nepavyko rasti.. Bandykite kitą žodį");
}


// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"




// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)

function rastiStalciu(x) {
  console.log(names.indexOf(x));
}
rastiStalciu("Norbert");




// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
// 4) rasti visu zmoniu vardu "Rico" pavardes
// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius
// B) isvesti ju pavardes ir vardus

function vardasPavarde() {
var a = names.indexOf("Freida");
console.log(lastNames[a]);
}
vardasPavarde();

///////////////////////////////////////////////



function rastiVisusVardus(arr, name) {
  console.log("Ieskom vardo ", name);
  var indeksai = [];
  var paskutinisRastas = arr.indexOf(name);
  while (paskutinisRastas != -1){
    indeksai.push(paskutinisRastas);
    console.log(paskutinisRastas);
    paskutinisRastas = arr.indexOf(name, paskutinisRastas +1);
  }
  return indeksai;
}
var rezultatas = rastiVisusVardus(names, "Rico");
console.log(rezultatas);

if (rezultatas.length == 0) {
  console.log("Nepavyko rasti.. Bandykite kitą žodį");
}
else {
  for (var i = 0; i < rezultatas.length; i++) {
    console.log(names[rezultatas[i]] + " " + lastNames[rezultatas[i]]);
  }
}





//---------------------------------------------------------
// function visiRikai() {
//   var b = names.indexOf("Rico");
//   while (b > -1) {
//     console.log("Rico" + lastNames[b]);
//   }
// }

///////////////////////////////////////////////////////////////
// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius
// B) isvesti ju pavardes ir vardus
var ieskomiZmones = [2, 16, 17, 18, 19, 25];
for (var i = 0; i < ieskomiZmones.length; i++){
  console.log(ieskomiZmones[i]);
}

// console.log(names.indexOf("Devora"));

for (var i = 0; i < ieskomiZmones.length; i++){
console.log(names[ieskomiZmones[i]] + " " + lastNames[ieskomiZmones[i]] );
}

function naujasSk() {
  var a = Math.random(); // 0 - 1
  if ( a <= 0.1) {
      console.log("laimejai");
  }
}
var c = 0;
var i = 0;


var a = Math.floor (Math.random() * 10)+1;
function naujasSk(){ // 0 - 1
if ( a <= 0.1) {
    document.querySelector("h2").innerHTML = "Laimėjote Iphone";
      i++;
  }
      else{
      document.querySelector("h2").innerHTML = "Bandykite dar kartą";
    c++;
    document.querySelector("#count").innerHTML = 1 + " / " + c;
}
}


// apsilimui

var masyvas = [];
var min = 10;
var max = 100;
// 0 UZDUOTIS - pasikartoti:
// skaicius, kurie yra lyginiai i pakeisti i zodi "lyginis"


// 1 UZDUOTIS:
// kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100.
// masyvo ilgis 60




// 2 UZDUOTIS:
// burtu keliu masyvo narius, su 10 % tikimybe paversti negiamais  ( padauginti is  -1)
// pvz:
// var a = Math.random(); // nuo 0 iki 1 (1- neiskaitant)
// if ( a <= 0.1) {
//     console.log( "laimejai" );
// }

// 3 UZDUOTIS:
// visus skaicius paversti teigiamas (is masyvo parts)
// 4 UZDUOTIS:
// surasti geriausia darbuotoja
// 5 UZDUOTIS:
//surasti blogiausia darbuotoja








//=======================================
