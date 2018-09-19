console.log(  "Labas pasauli"  );
    
var vardas = "Giedre";
var pavarde = "Korsakaite";
var amzius = 34;
var atlyginimas = 100.51;

console.log(vardas, pavarde, amzius, atlyginimas);
console.log(vardas, atlyginimas);

var x = 100;
var y = 1;
var z = 2;

z = x + y;
console.log("z = x + y  yra", z);

// x + 10; // 110
// x = x + 10; // x=110

y = x + 1 / z;
console.log("y = ", y);

var arVedes = true;
console.log("boolean kintamasis", arVedes);

var orai;
console.log("orai bus", orai);

//2 sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius

function printVardasPavardeAmzius() {
    console.log(vardas, pavarde, amzius);
}
printVardasPavardeAmzius();


//3 sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

function printMetinisPajamuDydis() {
    var sumaAtlyginimu = atlyginimas * 12;
    console.log(sumaAtlyginimu);
}
printMetinisPajamuDydis();


// 4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

function printAddressData() {
    var salis = "Lietuva";
    var miestas = "Kaunas";
    var adresas = "Gatve";
    var pastoKodas = "LT12345";
    console.log(salis, miestas, adresas, pastoKodas)
}
printAddressData();

//pvz
function suma(x, y) {
    var ats = x + y;
    console.log("ats yra", ats);
}
suma(1, 9);

//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" , //  kuri atspausdina i konsole "x" reiksmes // iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");

function printTekstas(x) {
    var x = "Jokubo istorijos"
    console.log(x);
}
printTekstas(x);

// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"

function daugyba(x, y) {
    var x = 5;
    var y = 3;
    console.log(x * y)
}
daugyba(x, y);


// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y

function pitagoroTeorema(x, y) {
    var x = 1;
    var y = 1;
    console.log(Math.sqrt(x * x + y * y));
}
pitagoroTeorema(x, y);


//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
// ir panaudoti:
// console.log( vardas, pavarde);

var vardas = "Vardenis";
var pavarde = "Pavardenis";
var amzius = 99;
var atlyginimas = 1000;
console.log(vardas, pavarde);

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius

function printVardasPavardeAmzius() {
    console.log(vardas, pavarde, amzius, atlyginimas);
}
printVardasPavardeAmzius();

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

function printMetinisPajamuDydis() {
    var suma = 12 * atlyginimas;
    console.log(suma);
}
printMetinisPajamuDydis();

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius
function printAddressData() {
    var salis = "Vokietija";
    var miestas = "Berlynas";
    var adresas = "Gatve";
    var pastoKodas = "DE1234";
    console.log(salis, miestas, adresas, pastoKodas);
}
printAddressData();

// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");

function printTekstas(x) {
    var x = "Jokubo istorijos";
    console.log(x);
}
printTekstas( "Jokubo istorijos");

// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"

function daugyba(x, y) {
    var x = 5;
    var y = 10;
    var daugyba = x * y;
    console.log(daugyba);
}
daugyba(x, y);

// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y

function pitagoroTeorema(x, y) {
    var x = 3;
    var y = 4;
    var ilgojiKrastine = Math.sqrt(x * x + y * y);
console.log(ilgojiKrastine);
}
pitagoroTeorema(x, y);