console.log(  "Labas pasauli"  );
// PRISIMINTI TEORIJA
var vardas = "";    // inicialisation (kintamojo kurimo metu, reiksmes priskyrimas)
var zmogus; // undefined
// console.log( mama );  // not defined

//===========================================
// 1 UZDUOTIS:
// sukurti mokinio objekta: vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)
// (ir priskirti reiksmes pvz: 'Jurgis', "Jurgauskas", 7)
// function mokinys(vardas, pavarde, klase, pazymiai[6, 5, 9, 10, 8]) {
//
// }

var mokinys ={
vardas: "Tomas",
pavarde:"Tomauskas",
pazymiai:[6, 5, 9, 10, 8],
klase:"šeštokas"
};
console.log(mokinys);

mokinys.klase = "septintokas";
console.log(mokinys);

if (mokinys.klase == "tryliktokas") {
  console.log("mokinys pabaige mokyklą");
}else if (mokinys.klase == "penktokas") {
  console.log("mokinys pabaigė pradinę mokyklą");
}
mokinys.pazymiai = [9, 7, 8, 4, 10, 9];

 console.log(mokinys);
////////////////////////////////////////////
// mokinys:begu = function() {
//    console.log("bėgu bėgu");
//  };
//  begu();
//  mokinys.push(miestas = "Kaunas") ;
//
//  console.log(mokinys);

function Mokinys(vardas, pavarde, klase, pazymiai) {
  this.vardas = vardas;
  this.pavarde = pavarde;
  this.klase = klase;
  this.pazymiai = pazymiai;
  this.miestas = "Kaunas";
  this.begu = function () {
    console.log("begu begu");
  };

}
var Tomas = new Mokinys("Tomas", "Tomauskas", 7, [9, 7, 8, 4, 10, 9] );
console.log(Tomas);
var petras = new Mokinys("petras", "petrauskas", 4, [2, 5, 6, 2, 4, 8]);

function pakeltiklase(mokinys) {
  mokinys.klase++;
  if (mokinys.klase >=13) {
    console.log(mokinys.vardas + " baigė mokyklą");
  }else if (mokinys.kelintokas == 5) {
    console.log(mokinys.vardas + " baige pradin mokyklą");
  }
}

pakeltiklase(Tomas);
for(var klase = petras.kelintokas; klase < 13; klase++)
pakeltiklase(petras); pakeltiklase(petras); pakeltiklase(petras);
pakeltiklase(petras); pakeltiklase(petras); pakeltiklase(petras);
pakeltiklase(petras); pakeltiklase(petras); pakeltiklase(petras);

console.log(Tomas);
console.log(petras);

// pakeltiklase(Tomas);
// while (petras.kelintokas < 13) {
//   pakeltiklase(petras);
// }console.log("mokinys baige mokykla");

for (var i = 0; i < petras.pazymiai.length; i++) {
  if (petras.pazymiai[i]<6) {
    petras.pazymiai[i]++;
  }
}
console.log(petras);
// 1.1 UZDUOTIS
// atspauzdinti visus duomenis

// UZDUOTIS 1.2
// PAKEISTI : klase i sekancia
// UZDUOTIS 1.2.1
// if patikrinimas: jei mokinys yra 13-tokas - isveskite teksta: "mokinys pabaige mokykla", jeigu mokinys yra penktokas  - "pabaige pradine mokykla"
// pakeisti: visus 6 pazymius
// prideti nauja f-ja begu(), kuri isves i console 'bugu begu'
// prideti nauja kintamaji: miestas = 'kaunas'
// UZDUOTIS 1.3
// isvesti pakeistus duomenis
// paleisti f-ja "begu()"

// 2 UZDUOTIS: sukurti 2-u atskirus  objektus:
// A) tevas : vardas(string), pavarde(string), vaikas(object)
// B) vaikas:  vardas (string), klase(number)
// 2.1) priskirti "vaikas" objekta - tevo kintamajam vaikas  (kintamajam)


function Tevas(vardas, pavarde, vaikas) {
    this.vardas = vardas;
    this.pavarde = pavarde;
    this.vaikas = vaikas;
}

function Vaikas(vardas, klase) {
  this.vardas = vardas;
  this.klase = klase;
}

var jonukas = new Vaikas ("Jonas", 3);
var petras = new Tevas("Petras", "Petrauskas", jonukas);

console.log(petras);
// 3 UZDUOTIS
// sukurti  objekto "darbuotojas" construktoriu. Objektas darbuotojas: nr, vardas, pavarde, alga
// 3.1 sukurti pora darbuotoju ir atspausdinti ju duomenis

//============3=pvz: construktorius =====
// function Car(dSkaicius, spalva, greitis) {
//     this.numberOfDoors = dSkaicius;
//     this.color = spalva;
//     this.maxSpeed = greitis;
// }
//
// // objekto kurimas
// var AudiTT  = new Car(2, "red", 280);
// var Audi100 = new Car(5, "black", 200);
