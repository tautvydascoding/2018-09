// NUMBER. Skaicius su kableliu vadinamas float/double. Ir jis uzima dvigubau daugiau vietos, nei sveikas skaicius, kadangi atskirai saugo pilna skaiciaus dali ir dali uz kablelio.




//  1 UZDUOTIS
// sukurti kintamuosius (ir jiems priskirti reiksmes):
// vardas, pavarde, amzius, atlyginimas
var firstName = "John";
var lastName = "Doe";
var age = 23;
var salary = 300;


// teo:
//  typeof( k ); f-ja kuri isveda kintamojo tipa
// console.log(    typeof(vardas)  );
// console.log(    typeof(amzius)  );

console.log(typeof(firstName));
console.log(typeof(lastName));
console.log(typeof(age));
console.log(typeof(salary));
console.log("--------------------");

//  2 UZDUOTIS
// sukurti funkcija "printVardasPavardeAmzius()" , kuri atspausdina i konsole pirmos uzduoties kintamuosius

function printVardasPavardeAmzius() {
  console.log("First name: " + firstName);
  console.log("Last name: " + lastName);
  console.log("Age: " + age);
  console.log("--------------------");
}

printVardasPavardeAmzius();

//  3 UZDUOTIS
// sukurti funkcija "printMetinisPajamuDydis()" ,
// kuri  atspausdina i konsole suma 12 atlyginimu (vienas atlyginimas yra lygus "uzduotis 1" kintamajam - "atlyginimas")

function printMetinisPajamuDydis() {
  salary = salary * 12;
  console.log("Metinis pajamų dydis: " + salary + " €");
  console.log("--------------------");
}

printMetinisPajamuDydis();

//  4 UZDUOTIS
// A) sukurti kintamuosius:  salis, miestas, adresas, pastoKodas
// B) sukurti f-ja "printAddressData()",  kuri atspausdina i konsole visus siuos kintamuosius

var country = "Lietuva";
var city = "Kaunas";
var address = "Laisvės al.";
var postCode = "LT45645";

function printAddressData() {
  console.log("Šalis: " + country);
  console.log("Miestas: " + city);
  console.log("Adresas: " + address);
  console.log("Pašto kodas: " + postCode);
  console.log("--------------------");
}

printAddressData();


// ---- advance-----
//  5 UZDUOTIS
// sukurti funkcija "printTekstas(x)" ,
//  kuri atspausdina i konsole "x" reiksmes
// iskviesti f-ja ir vietoj x irasyti koki nors teksta pvz: printTekstas( "Jokubo istorijos");

function printTekstas(x) {
  console.log(x);
  console.log("--------------------");
}

printTekstas("Jokūbo istorijos");



// 6 UZDUOTIS
// sukurti f-ja, kuri sudaugina du  paduotus skaicius "daugyba(x, y)"

function daugyba(x, y) {
  var z = x * y;
  console.log(x + " * " + y + " = " + z);
  console.log("--------------------");
}

daugyba(3, 3);

// 7 UZDUOTIS
// F-ja kuri paskaiciuoja trikampio ilgaja krastine (Pitagoro teorema)
// pitagoroTeorema(x, y)      x*x + y*y

function pitagoroTeorema(x, y) {
  var z = x * x + y * y;
  console.log("Ilgoji trikampio kraštine yra " + z);
  console.log("--------------------");
}

pitagoroTeorema(3, 3);

//==========================KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos


var arVedes = true;

console.log(arVedes);
