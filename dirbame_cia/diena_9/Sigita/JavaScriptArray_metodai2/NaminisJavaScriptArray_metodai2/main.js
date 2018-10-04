console.log("labas");

// =================taisyklingas Array copy  =================
var array = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
var kopijaNEGERAI =  array; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
var kopija1 = array.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
var kopija2 = array.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy

// ================= ========= ======== ========
 var ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];



// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
console.log(names.indexOf("Rico"));
//indexOf(x) ==> elementas kurio ieskom;
//indexOf(x, i) ==> elementas kurio ieskom;
//i ==> indeksas nuo kurio ieskom;
var vardas = names.indexOf("Rico");
if (vardas != 0) {
  console.log("vardas yra", names[vardas]);
  console.log("pozicija", vardas);
}

function surastiVisusRico (arr, vardo){
  var stalcius = [];
  var rastasVardas = arr.indexOf(vardo);
  while (rastasVardas != -1){
    stalcius.push(rastasVardas);
    rastasVardas = arr.indexOf(name, rastasVardas + 1);
  }
  return stalcius;
  }
  var rezultatas = surastiVisusRico (names, "Rico");
  console.log(rezultatas);

  // UZDUOTIS
  //   sukurti nauja masyva: uzpildyta atsitiktiniais skaiciais nuo 50 - 200 (pagamintomis datalemis per diena)


var detales = [ 9, 11, 14, 15,19, 25, 63 ];
console.log(detales);
  //======================TEKSTO ISVEDIMAS i DOM===============

  //  1.1 UZDUOTIS
  //  sukurti funkcija "printAntraste(x)" ,
  function printAntraste(x){
    document.querySelector("h2").innerHTML = x;
  }
  printAntraste("BMW pinga, nes daugeja");
  var uzrasas = printAntraste("BMW pinga, nes daugeja");
  var uzrasai = ["BMW pinga, nes daugeja", "Greik pageres orai","Vasaros vis salteja" ];
  console.log(uzrasai);
  function printAntrastes(){

  }
  //  kuri atspausdina i DOM-a (ekrana) "x" reiksme
  //  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas antrastes:  "BMW pinga, nes daugeja", "Greik pageres orai", "Vasaros vis salteja"

  //  1.2 UZDUOTIS
  //  sukurti funkcija "printStraipsnis(x)" ,
  //  kuri atspausdina i DOM-a (ekrana) "x" reiksme

  //  1.3 UZDUOTIS
  //  iskviesti f-jaS 3 kartus, kad atspausdintu 3 skirtingas antrastes IR 3 straipnsnius:  "Lorem1 ....",   "Lorem2 ....",   "Lorem3 ....",


  //=======================================
  // apsilimui

  var mas = [];

  // 0 UZDUOTIS - pasikartoti:
  // skaicius, kurie yra lyginiai i pakeisti i zodi "lyginis"
for (var i = 0; i < mas.length; i++){
  if (mas[i] % 2 == 0) {
    mas[i] == "lyginis";
  }
}
console.log(mas);

  // 1 UZDUOTIS:
  // kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100.
  // masyvo ilgis 60
var mas = [];
for (var i = 0; i < 60; i++){
  mas[i] = Math.floor(Math.random()*91)+10;
  var a = Math.random(); // nuo 0 iki 1 (1- neiskaitant)
if ( a <= 0.1) {
  mas[i] *= -1; //i += -1 --> i = i * -1;
}
}
console.log(mas);
// 3 UZDUOTIS ==========//
//NEIGIAMI IR TADA TEIGIAMI
// for (var i = 0; i <mas.length; i++){
//   var b = mas[i]; // sitas nebutinass buvo, galima buvo is karto "if (mas[i] <= 0) ir mas[i] *- -1;
//   if (b <= 0){
//     mas[i] *= -1;
//   }
// }
// console.log(mas);
// =========================//
//mas[i] = Math.abs(mas[i]) kitas variantas = abs tame masyve randa neigiamus ksiacius ir pavercia juos teigiamais.
// =========================//

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
// function geriausiaDarbuotojas(){
// for (var i = 0; i <mas.length; i++){
// var a = mas.length;
// if ( a == 0) {
//     console.log("geriausias darbuotojas");
//   }
// }
// }
// geriausiaDarbuotojas();
// var geriausias = geriausiaDarbuotojas();
// console.log(geriausias);
  // 5 UZDUOTIS:
  //surasti blogiausia darbuotoja

//galima su indexOf()
  var max = Math.max.apply(null, mas);
  var max2 = Math.max(...mas);
  console.log(max);
// dar vienas variantas
//var max = mas[0];
//for (var i = 0; i <mas.length; i++){
//   if (max < mas[i]){
// max = mas[i];
//   }
// // }

var sum = 0; //saugo reiksme masyve
for (i = 0; i<mas.length; i++){
  sum += mas[i];
}
console.log(sum); //reikia surasti suma/visu sandeliu suma
console.log(sum / mas.length); //reikia surasti vidurki/sandeliu prekiu vidurkis
//kaip rasti visus sandelius kuriu prekiu kiekis (masyvo elemento reiksme)yra mazesne nei  rastas vidurkis;
// Masyvas? -> For ciklas
// mazesnis? -> if
// neaiskus kiekis? -> naujas Masyvas
var vidurkis = sum / mas.length;
var mazesnisNeiVidurkis = [];
 for (i = 0; i < vidurkis; i++){
   if (mas[i] < vidurkis){
     mazesnisNeiVidurkis.push(i); //jei butu mazesnisNeiVidurkis.push(mas[i]); tai ieskotu reiksmes tuose indeksuose;
   }
 }
 console.log(mazesnisNeiVidurkis);
