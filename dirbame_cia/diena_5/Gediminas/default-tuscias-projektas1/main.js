console.log(  "Labas pasauli"  );

var vardas = "jonas";
var pavarde = "pavarde";
var amzius = 21;
var atlyginimas = 500;
console.log( "vardas, pavarde, amzius, atlyginimas"  );
var x = 100;
var y = 50;
var z = 20;
z = x * y; //komentasras lygtis
console.log ( "z = x * y yra", z );
y = x + 1 / z;
console.log ( "y = x + 1 / z yra", y );

console.log ( "boolean kintamasis = ", vardas );
var oras = ("amzius")
console.log ( "orasbus ",  vardas );

function printVarPavAm() {
console.log (  vardas, pavarde, amzius  );
}
printVarPavAm ();

function printMetinisPajamuDydis() {
  console.log (atlyginimas * 12)
}
printMetinisPajamuDydis();

var salis = "Lietuva";
var miestas = "Kaunas"
var adresas = "pievu g 15"
var pastoKodas = 458800;

function printAddressData() {
  console.log ( salis, miestas, adresas, pastoKodas )
}
printAddressData ();



function sum  ( x, y) {
  var ats = x * y;
  console.log ("atsakymas yra", ats);
}
sum (3, 25)

function printTekstas  ( x) {
  var printTekstas = ("Jokubo istorija");
  console.log ("atsakymas yra", printTekstas);
}
printTekstas ()


function pitagoroTeorema  ( x, y) {
  var pitagoroTeorema = x * x + y * y;
  console.log ("atsakymas yra", pitagoroTeorema);
}
pitagoroTeorema (2, 1)
