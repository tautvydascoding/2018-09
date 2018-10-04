

// console.log(  "Labas pasauli"  );
// window.onload = function () {
//   var mas =  [];
//   for (var i = 0; i < 60; i++) {
// mas[i] = atsistiktinisSk(10, 100);
// var a = Math.random();
//
//   }
// };

// console.log(mas);
function atsistiktinisSk(min, max) {
  return Math.floor(Math.random()*(max-min + 1))+ min;
}

// 2 UZDUOTIS:
// burtu keliu masyvo narius, su 10 % tikimybe paversti negiamais  ( padauginti is  -1)
// pvz:
// var a = Math.random(); // nuo 0 iki 1 (1- neiskaitant)
// if ( a <= 0.1) {
//     console.log( "laimejai" );
// }
var mas = [];
function skaiciai() {

  for (var i = 0; i < 60; i++) {
    mas[i] = atsistiktinisSk(10, 100);
    var a = Math.random();
    if (a <=0.1) {
      mas[i] = mas[i]* -1;
    }
  }console.log(mas);
}
skaiciai();

function atsistiktinisSk(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}
atsistiktinisSk();

///////////////////////////////////////////////////////////////////////////////////////////
// 3 UZDUOTIS:
// visus skaicius paversti teigiamas (is masyvo parts)
// 4 UZDUOTIS:
// surasti geriausia darbuotoja
// 5 UZDUOTIS:
//surasti blogiausia darbuotoja

for (var i = 0; i < mas.length; i++) {
  if (mas[i] < 0) {
    mas[i] = Math.abs(mas[i]);
  }
}
console.log(mas);

var max = Math.max.apply(null, mas);
console.log();



var min = Math.min.apply(null, mas);
console.log(min);
///////////////////////////////////////
// var indeksai = rastiVisusVardus(mas, max);
// console.log(max);
// console.log(indeksai);
/////////////////////////////////////////
var max = mas[0];
for (var i = 0; i < mas.length; i++) {
  if (max < mas[i]) {
    max = mas[i];
    indexMax = i;
  }
}
console.log(max);
/////////////////////////////////////////////////////////
var sum = 0;
for (var i = 0; i < mas.length; i++) {
  sum +=  mas[i];
}console.log(sum);
//////////////////////////////////////////////////////
var sum = 0;
for (var i = 0; i < mas.length; i++) {
  sum +=  mas[i];
}console.log(sum / mas.length);
////////////////////////////////////////////////////////
//Kaip rasti visus sandėlius kuriu prekiu kiekis yra mažesnis nei rastas vidurkis

var vidurkis =  sum / mas.length;
for (var i = 0; i < mas.length; i++) {
  if (mas[i] < vidurkis) {
    console.log([i]);
  }
}
/////////////////////////////////////////////////////////////
