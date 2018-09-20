console.log(  "Labas pasauli"  );
var vardas = "Jonas";
var pavarde = "Jonaitis";
var amzius = 21;
var atlyginimas = 1000;
console.log( vardas, pavarde, amzius, atlyginimas );

var x = 100;
var y = 1;
var z = 2;
console.log( "z= x + y ", z );

y = x + 1 / z;
console.log( " y lygu", y );
var arVedes = true;
console.log( "boolean kintamasis = ", arVedes);

var orai;
console.log(" orai bus: ", orai);
//
//
// Funkcijos //
var k = 1000;

function spausdinti() {
console.log( k + 1);
}
// funkcijos isvedimas i console//

spausdinti();

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius

function printVardasPavardeAmzius(){

console.log( vardas, pavarde, amzius);

}
printVardasPavardeAmzius();

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

function printMetinisPajamuDydis(){

  console.log( atlyginimas * 12);
}

printMetinisPajamuDydis();

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

var salis = "LT";
var miestas = "Kaunas";
var adresas = "Panemune";
var pastoKodas = "LT3008";

function printAddressData(){

  console.log( salis, miestas, adresas, pastoKodas);
}
printAddressData();

// 5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");

function printTekstas(x){

  console.log(x = "Jokubo istorijos" );
}
printTekstas(x);

// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"

function skaiciuSandauga( x, y){
console.log( x * y );

}
skaiciuSandauga(5,2);

// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y

function pitagoroTeorema( x, y){

console.log( "Trikampio ilgoji krastine lygi: ", x*x + y*y );

}
pitagoroTeorema( 2,3);

//  01 UZDUOTIS
// sukurti 3 Globalius kintamuosius:  vardas , pavarde, klase   (ir jiems priskirti reiksmes):
// atspausdinti visus kintamuosius

//  02 UZDUOTIS
// sukurti funkcijas:
// printName()  printLName(), printClass() ,
// kurios atspausdina i konsole pirmos uzduoties kintamuosius


//  03 UZDUOTIS
// parasyti f-ja printVardasPavardeKlase(name, lname, klase)
// kuria iskviesti 3 kartus su skirtingais zmoniu vardasi ir pavardem

var vardas = "Jonas";
var pavarde = "Jonaitis";
var amzius = 35;
console.log( vardas, pavarde, amzius );
