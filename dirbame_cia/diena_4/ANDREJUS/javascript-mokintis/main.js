console.log(  "hello world");
// uzduotis 1 is 5 dienos
//sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas

// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
// console.log(    typeof(vardas)  );
// console.log(    typeof(amzius)  );
var vardas = "Andrejus";
var pavarde = "savas";
var amzius = "26";
var atlyginimas = "10000";
console.log( vardas, pavarde, amzius, atlyginimas );

// uzduotis 2 diena 5
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius

console.log( vardas, pavarde, amzius );

// uzduotis 3 diena 5
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")
function MetinisPajamuDydis () {
  console.log( "atsakymas", atlyginimas * 12);
}
MetinisPajamuDydis ();

// uzduotis 4 diena 5
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

var salis = "slabotke";
var miestas = "kazkur";
var adresas = "anapus 12";
var pastoKodas = "LT-466564";
function printAddressData () {
  console.log(salis, miestas, adresas, pastoKodas);
}
printAddressData ();

// uzduotis 5 diena 5 advanced
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");


function printTekstas ( x ) {
console.log(x);
}
printTekstas ("Jokubo istorija")

// 6 uzduotis diena 5
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"


function skaiciusDaugyba (x, y) {
  console.log(x * y);
}
skaiciusDaugyba (5, 20);

// uzduotis 7 diena 7
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y


function pitagoroTeo (x, y) {
  console.log("Pitagoras buvo tiesus", x*x+y*y);
}
pitagoroTeo (5,6)

// ----------------------------------------------------

// pavizdziai
var x = 100;
var y = 1;
var z = 2;

z = x + y; // pvz

console.log( "z = x + y yra", z );

// pvz
y = x + 1 / z;

console.log( "y bus", y );

x + 10; //110

x = x + 10; //x=110;

var arVedes = true;
console.log( "boolean kintamasis =", arVedes);

var orai;
console.log( "orai bus :", orai);

// Klaidos !!!!!!!!!
var vardas = "tautvydas";
var pavardee;
console.log( vardas, pavardee );

// funkciju pavizdis!!!!!

var k = 1000;
function spauzdint () {
  console.log( k + 1);
}
spauzdint ();
