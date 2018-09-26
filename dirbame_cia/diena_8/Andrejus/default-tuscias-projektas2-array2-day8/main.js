console.log(  "Labas pasauliss"  );

var masyvas = [];
var min = 10;
var max = 100;
// 0 UZDUOTIS - pasikartoti:
// skaicius, kurie yra lyginiai i pakeisti i zodi "lyginis"



// 1 UZDUOTIS:
// kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100.
// masyvo ilgis 60


window.onload = function () {
var mas = [];
for (var i = 0; i<60; i++) {
  // mas[i] = Math.floor(Math.random ()*91)+10;
  mas[i] = atsitiktiniSK(10, 100);
  var a = Math.random(); // nuo 0 iki 1 (1- neiskaitant)
  if ( a <= 0.1){
  mas[i] *= -1;
  // i *= -1 -> i= i* -1;
  //paskaiciojame kad 10 proc tu skaiciu pavirstu negativiais
  }
}

console.log(mas); //sitam masive yra neigiamais skaiciais
for (var i = 0; i<mas.length; i++) {
  if (mas[i]<0) {
    mas[i] = Math.abs(mas[i]);
  }
}
  console.log(mas);

function atsitiktiniSK(min, max){
  return Math.floor(Math.random()*(max-min+1))+min;
}
};
console.log("");

// 2 UZDUOTIS:
// burtu keliu masyvo narius, su 10 % tikimybe paversti negiamais  ( padauginti is  -1)
// pvz:
// var a = Math.random(); // nuo 0 iki 1 (1- neiskaitant)
// if ( a <= 0.1) {
//     console.log( "laimejai" );
// }
// var a = Math.random(); // nuo 0 iki 1 (1- neiskaitant)
// if ( a <= 0.1) {
// console.log( "laimejai" );
// }

// rasom cikla
// for (var i = 0; i<mas.lenght; i++) {
//   if (mas[i] % 2 == 0) {
//     mas[i] = "lyginis";
//   }
// }
// console.log(mas);
// 3 UZDUOTIS:
// visus skaicius paversti teigiamas (is masyvo parts)


// 4 UZDUOTIS:
// surasti geriausia darbuotoja
// 5 UZDUOTIS:
//surasti blogiausia darbuotoja

// rasti maziausia ir didziausia skaicius

window.onload = function () {
  var masiv = [];
  for (i = 0; i<60; i++){
  masiv[i] = randomNom(10, 100);
  }
  console.log(masiv);
  var max = Math.max.apply (null, masiv);
  var max2 = Math.max(...masiv);
  var indeksai = rastiVisusVardus(masiv, max);
  console.log(max);
  console.log(indeksai);
// indexOf
// var max = 0;
// for (i = 0; i<masiv.length; i++){
//   if (max < masiv [i]) {
//     max = masiv[i];
//     indexMax = i;
//   }
// }
// console.log(max);
function randomNom(min, max){
  return Math.floor(Math.random()*(max-min+1))+min;
}
function rastiVisusVardus(arr, name) {
  //console.log("Jeskom vardo ", name);
  var indeksai = [];  // susikuriam tuscia masyva kuriame saugosim rezultata
  var paskutinisRastas = arr.indexOf (name); // jeskom pirmo elemento
  while (paskutinisRastas != -1) { // tikrinam ar radom dar viena indeksa?
    //Elementas yra!!
    indeksai.push(paskutinisRastas); //isidedam rasta indeksa i atsakymu masyva
  //  console.log(paskutinisRastas);
    paskutinisRastas = arr.indexOf(name, paskutinisRastas+1); // ieskom kito tokio elemento
  }
  return indeksai; // grazinam vissu atsakymus kurios radom (indeksus)
}


};
