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
printVardasPavardeAmzius()


//3 sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

function printMetinisPajamuDydis() {
    var sumaAtlyginimu = atlyginimas * 12;
    console.log(sumaAtlyginimu);
}
printMetinisPajamuDydis()


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
printAddressData()

// 5 diena, namu darbai, pasikartoti funkcijas

//pvz
function suma(x, y) {
    var ats = x + y;
    console.log("ats yra", ats);
}
suma(1, 9);

//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");

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
daugyba(x, y)

