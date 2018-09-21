var vardas = "Egidijus ";
var pavarde = "Nekliajevas ";
var amzius = "32 metai ";
var atlyginimas =1000;
console.log(vardas + pavarde + amzius + atlyginimas);

// var x = 100;
// var y = 1;
// var z = 2;

// z = x + y;
// console.log("z yra ", z);
//
//
// y = x +1 / z;
// console.log("y yra ", y);
//
// var arVedes = true;
// console.log("boolean kintamasis = ", arVedes);
// var orai;
// console.log(orai);

// var k = 1000;
// function spausdinti () {
//   console.log(k + 1);
// }
// spausdinti();
//
// function suma () {
//   var s = 1;
//   var z = 2;
//
//   console.log(s + z);
// }
// suma();
////////////////////////////////
function printVardasPavardeAmzius () {
  console.log("VARDAS: " + vardas + " " + pavarde + amzius + ".");
}
printVardasPavardeAmzius();



function printMetinisPajamuDydis () {
  console.log(atlyginimas * 12);
}
printMetinisPajamuDydis();

var salis = "Lietuva";
var miestas = "Kaunas";
var adresas = "Basanavičiaus al.";
var pastoKodas = 50149;

function printAddressData () {
  console.log(salis + " " + miestas + " " + adresas + " " + pastoKodas + ".");
}
printAddressData();

///////////////////////////

function daugyba (a, b) {
var ats = a*b;
  console.log("atsakymas yra ", ats);
}

daugyba(5, 15);
/////////////////////////////////
function pitagoroTeorema(x, y) {
  console.log ("Kraštinės ilgis yra ", x*x + y*y);
}
pitagoroTeorema(5, 15);
////////////////////////////////////
