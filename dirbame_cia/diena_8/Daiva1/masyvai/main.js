console.log(  "Labas pasauli"  );
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

var katinas1 = "juodas";
function spausdinti(){
  var katinas2 = "baltas";
  console.log(katinas1);
  console.log(katinas2);
}
spausdinti();
// console.log(katinas1);
// console.log(katinas2);

var vardas = "Jonas";   // global - kintamasis
function myName ( vardas ) { //  vardas - local kintamasis
    console.log( " vardas" + vardas);
    console.log("this.vardas - f-jos viduje: ",  this.vardas);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
}
myName("PETRAS");

//  1.1 UZDUOTIS
//  sukurti funkcija "printAntraste(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas antrastes:  "BMW pinga, nes daugeja", "BMW pinga, nes daugeja","Greik pageres orai", "Vasaros vis salteja"

// function printAntraste(x){
// document.querySelector("h1").innerHTML += "<br>" +  x +  "<br>";
// }
// printAntraste( "BMW pinga, nes daugeja" );
// printAntraste("Greit pageres orai");
// printAntraste("Vasaros vis salteja");
//
// //  1.2 UZDUOTIS
// //  sukurti funkcija "printStraipsnis(x)"
// //  kuri atspausdina i DOM-a (ekrana) "<p>" + x + "</p>" (paduota teksta tarp "p")
// function printStraipsnis(x){
// document.querySelector("body").innerHTML +=  "<p>" + x + "</p>" +  "<br>";
// }
// printStraipsnis( "BMW pinga, nes daugeja" );
// printStraipsnis("Greit pageres orai");
// printStraipsnis("Vasaros vis salteja");



//  1.3 UZDUOTIS
//  iskviesti f-jaS 3 kartus, kad atspausdintu 3 skirtingas antrastes IR 3 straipnsnius:  "Lorem1 ....",   "Lorem2 ....",   "Lorem3 ....",

// function printTeksta(x, y){
// document.querySelector("body").innerHTML += "<h1>" + x + "</h1>" + "<p>" + y + "</p>" +  "<br>";
//   }
//   printTeksta("BMW pinga, nes daugeja", "Lorem1 ...." );
//   printTeksta("Greik pageres orai", "Lorem2 ...." );
//   printTeksta("Greik pageres orai","Lorem3 ...." );

  ieskomiZmones = [2, 16, 17, 18, 19, 25];

 var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

 var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];



 // 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
console.log(names.indexOf("Rico"));
console.log(names[25]);

// surasti visus Rico is saraso

function rastiVisusVardus(arr, name){
  console.log("ieskome vardo", name);
  var indeksai = [];
  var paskutinisRastas = arr.indexOf(name);
  while (paskutinisRastas != -1) {
    // vardas yra
    indeksai.push(paskutinisRastas);
    console.log(paskutinisRastas);
    paskutinisRastas = arr.indexOf(name, paskutinisRastas + 1);
  }
  return indeksai;
}
var rezultatas = rastiVisusVardus(names, "Rico");
console.log(rezultatas);

// 3 UZDUOTIS rasti visu Rico pavardes
// function rastiPavardes(pavm, indexmas){
// for (var i = 0; i < array.length; i++) {
//   array[i]
// }
//   console.log("ieskome pavardes", indexmas);
//
// }
// return indexmas;
// var rezultatas = rastiPavardes(lastNames, );

 // 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"

 console.log(names.indexOf("tadas"));
if (names.indexOf("tadas") == -1) {
  console.log("Nepavyko rasti...Bandykite kita zodi");
}

 // 2 UZDUOTIS (f-ja iekom stalciaus)
 // parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
 // eg: getStalciausNumeris( ieskomasTekstas)
function ieskomStalciaus(arr, zodis){
  var indeksai = [];
  var ieskomeZodzio = arr.indexOf(zodis); //ieskoma pirmo zodzio pasikartojimo
 while (ieskomeZodzio != -1){
   indeksai.push(ieskomeZodzio);// isimena surastas vietas masyve
   ieskomeZodzio = arr.indexOf(zodis, ieskomeZodzio + 1); // iesko visu kitu zodziu
 }
 return indeksai; //atiduoda visas vietas masyve
}
var rezultatas = ieskomStalciaus(names, "Rico");
console.log(rezultatas);


 // uzduotis:----------------------------
 // 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
// padaryti

 // 4) rasti visu zmoniu vardu "Rico" pavardes
// padaryti




 // 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
 // A) atspausdinti visus numerius
 // B) isvesti ju pavardes ir vardus
// var ieskomiZmones = [2, 16, 17, 18, 19, 25];
// console.log(ieskomiZmones);
// // indexOf(x) -> x -=>elementas kutio ieskome,
// // indexOf(x, i ) -> x +> elementas kurio ieskome
// for (var i = 0; i < ieskomiZmones.length; i++) {
//
// console.log(ieskomiZmones[i] + " " + names[ieskomiZmones[i]] + " " + lastNames[ieskomiZmones[i]]);
// }
//
//  var a = Math.random(); // 0 - 1
//  if ( a <= 0.1) {
//      console.log("laimejai");
//  }
//  var c = 0;
//  var l = 0;
// function naujasSkaicius(){
// var a = Math.random(); //0-1
//   if (a <= 0,1) {
//     document.querySelector("h2").innerHTML = "Laimejote iPHONE";
//     l++;
//   }else{document.querySelector("h2").innerHTML = "Bandykite dar karta";
//
//   }
//   c++;
//   document.querySelector("#count").innerHTML = 1 + " / " + c;
// }

// ---------------------------------------------------
// ----------------------------------------------------
// N.D.
// / 1 UZDUOTIS:
// kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100.
// masyvo ilgis 60

//   var mas = [];
//  for (var i = 0; i < 60; i++) {
//   mas[i] = atsitiktinisSk(10,100);
//   }
//   console.log(mas);
//
// function atsitiktinisSk(min,max){
//   return Math.floor(Math.random() * (max - min + 1)) + min;
// }

// // 2 UZDUOTIS:
// // burtu keliu masyvo narius, su 10 % tikimybe paversti negiamais  ( padauginti is  -1)
// // pvz:
// // var a = Math.random(); // nuo 0 iki 1 (1- neiskaitant)
// // if ( a <= 0.1) {
// //     console.log( "laimejai" );
// // }
// -----sprendimas-------
// var mas = [];
// for (var i = 0; i < 60; i++) {
// mas[i] = atsitiktinisSk(10,100);
// var a = Math.random(); // nuo 0 iki 1 (1- neiskaitant)
// if ( a <= 0.1) {
// mas[i] *= -1;
// }
// }
// console.log(mas);
// function atsitiktinisSk(min,max){
// return Math.floor(Math.random() * (max - min + 1)) + min;
// }

// / 3 UZDUOTIS:
// visus skaicius paversti teigiamais (is masyvo parts)
// var mas = [];
// for (var i = 0; i < 60; i++) {
// mas[i] = atsitiktinisSk(10,100);
// var a = Math.random(); // nuo 0 iki 1 (1- neiskaitant)
// if ( a <= 0.1) {
// mas[i] *= -1;
// }
// }
// console.log(mas);
// for (var i = 0; i < mas.length; i++) {
//   if (mas[i] < 0){
//     mas[i] = Math.abs(mas[i]);
//   }
// }
// console.log(mas);
 // function atsitiktinisSk(min,max){
 // return Math.floor(Math.random() * (max - min + 1)) + min;
 // }

// 4 -5 UZDUOTIS:
// surasti geriausia darbuotoja
//surasti blogiausia darbuotoja


// function atsitiktinisSk(min,max){
// return Math.floor(Math.random() * (max - min + 1)) + min;
// }
// var mas = [];
// for (var i = 0; i < 60; i++) {
//  mas[i] = atsitiktinisSk(10,100);
// }
//  console.log(mas);
// // rasti didziausia ir maziausia skaiciu
// var max = mas[0];
// var indexMax = 0; //ieskome geriausio darbuotojo nario
//
// for (var i = 0; i < mas.length; i++) {
//   if (max < mas [i]){
//     max = mas[i];
//     indexMax = i;
//   }
// }
//  console.log(indexMax);
//  console.log(max);

 // +++++++++++++++++++++++++++++++++++++++++++
 function atsitiktinisSk(min,max){
 return Math.floor(Math.random() * (max - min + 1)) + min;
 }
 var mas = [];
 for (var i = 0; i < 60; i++) {
  mas[i] = atsitiktinisSk(10,100);
 }
  console.log(mas);

var sum = 0;
for (var i = 0; i < mas.length; i++) {
  sum += mas[i];
}
console.log(sum); //visu sandeliu suma
console.log(sum / mas.length); //sandeliu prekiu vidurkis
// kaip rasti visus sandelius,kuriu prekiu kiekis (masyvo elemento reiksme)
// yra mazesne nei rastas vidurkis?
// Masyvas? -> For ciklas
// mazesnis? -> if <
// neaiskus kiekis? -> naujas masyvas
var vidurkis = sum / mas.length;
console.log(vidurkis);
var mazesnisVidurkis = []; // susidedame atsakymus i nauja masyva narius,kurie yra mazesni uz vidurki
for (var i = 0; i < mas.length; i++) {
  if( mas[i] < vidurkis)
  {
    mazesnisVidurkis.push(i); // rodo kuris narys yra mezesnis uz vidurki
  }
}
console.log(mazesnisVidurkis);
