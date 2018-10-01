// PRISIMINTI TEORIJA
var vardas = "";    // inicialisation (kintamojo kurimo metu, reiksmes priskyrimas)
var zmogus; // undefined
// console.log( mama );  // not defined

// CONSTRUCTOR

function Zmogus(name, ugis, svoris) {
  this.name = name;
  this.ugis = ugis;
  this.svoris = svoris;
}

var zmogus = new Zmogus("Tadas", 175, 60);
var zmogus2 = new Zmogus("Rico", 199, 80);
var zmones = [];
zmones.push(zmogus);
zmones.push(zmogus2);
console.log(zmones);


// var zmogus = {
//   name: "Tomas",
//   ugis: 180,
//   svoris: 75,
//   eiti: function() {
//     console.log("einu!");
//   }
// };
//
// zmogus.eiti();


//===========================================
// 1 UZDUOTIS:
// sukurti mokinio objekta: vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)
// (ir priskirti reiksmes pvz: 'Jurgis', "Jurgauskas", 7)

function Mokinys(vardas, pavarde, klase, pazymiai) {
  this.vardas = vardas;
  this.pavarde = pavarde;
  this.klase = klase;
  this.pazymiai = pazymiai;
}

var pazymiai = [6, 5, 9, 10, 8];


var mokinys1 = new Mokinys("Jurgis", "Jurgauskas", 7, pazymiai);
console.log(mokinys1);


// 1.1 UZDUOTIS
// atspauzdinti visus duomenis

// UZDUOTIS 1.2
// PAKEISTI : klase i sekancia

mokinys1.klase++;
console.log(mokinys1);

// UZDUOTIS 1.2.1
// if patikrinimas: jei mokinys yra 13-tokas - isveskite teksta: "mokinys pabaige mokykla", jeigu mokinys yra penktokas  - "pabaige pradine mokykla"

function tikrintiKelintokas(obj) {
  if (obj > 12) {
    console.log("Mokinys baige mokykla");
  } else if (obj === 5) {
    console.log("Mokinys yra penktokas");
  } else {
    console.log("Mokinys ne penktokas, bet ir nebaige mokyklos");
  }
}

tikrintiKelintokas(mokinys1.klase);
// pakeisti: visus 6 pazymius

function pakeistiVisusPazymius(arr, pazymys) {
  for (var i = 0; i < arr.length; i++) {
    arr[i] = pazymys;
  }
  console.log(arr);
}

pakeistiVisusPazymius(mokinys1.pazymiai, 6);
// prideti nauja f-ja begu(), kuri isves i console 'bugu begu'

mokinys1.begu = function begu(){console.log("Begu begu")};
// prideti nauja kintamaji: miestas = 'kaunas'



mokinys1.miestas = "Kaunas";
console.log(mokinys1.miestas);
// UZDUOTIS 1.3
// isvesti pakeistus duomenis
// paleisti f-ja "begu()"
console.log(mokinys1.begu());


// 2 UZDUOTIS: sukurti 2-u atskirus  objektus:
// A) tevas : vardas(string), pavarde(string), vaikas(object)
// B) vaikas:  vardas (string), klase(number)

function Tevas(vardas, pavarde, vaikas) {
  this.vardas = vardas;
  this.pavarde = pavarde;
  this.vaikas = vaikas;
}

function Vaikas(vardas, klase) {
  this.vardas = vardas;
  this.klase = klase;
}

var vaikas = new Vaikas("Tadas", 5);

var tevas = new Tevas("Jonas", "Jonaitis", vaikas);

console.log(vaikas);
console.log(tevas);

// 2.1) priskirti "vaikas" objekta - tevo kintamajam vaikas  (kintamajam)


// 3 UZDUOTIS
// sukurti  objekto "darbuotojas" construktoriu. Objektas darbuotojas: nr, vardas, pavarde, alga
// 3.1 sukurti pora darbuotoju ir atspausdinti ju duomenis

function Darbuotojas(nr, vardas, pavarde, alga) {
  this.nr = nr;
  this.vardas = vardas;
  this.pavarde = pavarde;
  this.alga = alga;
}

var darbuotojas1 = new Darbuotojas(15, "Jonas", "Jonaitis", 2000);
var darbuotojas2 = new Darbuotojas(23, "Petras", "Petraitis", 1200);

console.log(darbuotojas1);
console.log(darbuotojas2);


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
