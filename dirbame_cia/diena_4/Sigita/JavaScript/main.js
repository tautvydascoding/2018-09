console.log(" labas pasauli");

//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas

// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
// console.log(    typeof(vardas)  );
// console.log(    typeof(amzius)  );
var vardas = "Martyna";
var pavarde = "Sokolnikova";
var amzius = 8;
var atlyginimas = 100;
console.log (vardas, pavarde, amzius, atlyginimas)

// matematiniai skaiciavimai
var x = 100;
var y = 1;
var z = 2;
z = x + y;
console.log("z = x + y yra", z); //ka parasysiu tarp kabuciu sklaiusteliuose  ta man ir rodys

y = x + 1 / z
console.log("y = x + 1 / z yra", y );

var arVedes = true;
console.log( "boolean kintamasis =", arVedes);

var orai;
console.log("orai bus", orai);

// funkcija

var k = 1000;
function spausdinti ( ) {console.log( k + 1);}
spausdinti ( );

 var s = 1;
 var z = 2;
function suma ( ) { console.log( s + z);}
suma ()


// /  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius
function printVardasPavardeAmzius () {console.log( vardas, pavarde, amzius);}
printVardasPavardeAmzius ()


///  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")
function printMetinisPajamuDydis() {console.log( "pajamos lygios", atlyginimas * 12);}
printMetinisPajamuDydis()


//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius
var salis = "Lietuva";
var miestas = "Kaunas";
var adresas = "Kreves pr";
var pastoKodas = 9999;
function printAddressData() { console.log( salis, miestas, adresas, pastoKodas);}
printAddressData()

function suma ( x, y) {
  var ats = x + y;
  console.log( "ats yra", ats);
}
suma ( 1, 9);
// laikini isgalvoti kintamieji, kurie veikia tik iki funkcijos pabaigos


// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");
function printTekstas(x) {
  console.log( x);}
printTekstas(x)

function printTekstas(x) {
  console.log(x)}
printTekstas ( "Jokubo istorijos")


// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"
function daugyba (x, y)
{ console.log( x * y );}
daugyba ( 2, 3)


// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y
function pitagoroTeorema ( x, y)
{ console.log( x * x + y * y);}
pitagoroTeorema ( 2, 3)
