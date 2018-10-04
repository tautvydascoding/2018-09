console.log("labas");

// =================taisyklingas Array copy  =================
$ (document).ready(function(){
  function Zmogus(name, ugis, svoris){
    this.name = name;
    this.ugis = ugis;
    this.svoris = svoris;
    this.eiti = function(){
      console.log("einu");
    };

  }
  var zmogus = new Zmogus("Tomas", 180, 75);
  var zmogus1 = new Zmogus("Ricon", 210, 90);
  var mas = [];
  mas.push(zmogus);
  mas.push(zmogus1); //sumeta zmones i masyva mas = []
// var zmogus = {
//   vardas : "Tomas",
//   ugis : 180,
//   svoris : 75,
//   eiti : function(){
//   console.log("einu");
console.log(zmogus);
console.log(mas);
// / 1 UZDUOTIS:
// sukurti mokinio objekta: vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)
// (ir priskirti reiksmes pvz: 'Jurgis', "Jurgauskas", 7)
function mokinys(vardas, pavarde, kelintokas, matemPazymiai){
  this.vardas = vardas;
  this.pavarde = pavarde;
  this.kelintokas = kelintokas;
  this.matemPazymiai = matemPazymiai;
  this.begti = function (){
  console.log("Begu begu vel");
};

}
var Mokinys = new mokinys ("Jurgis", "Jurgauskas", 7, [6, 5, 9, 10, 8]);
var petras = new mokinys ("Petras", "Petrassss", 5, [5, 2, 3, 9, 4]);
console.log(Mokinys.begti());
console.log(Mokinys.vardas); // // 1.1 UZDUOTIS
// // atspauzdinti visus duomenis
console.log(Mokinys.pavarde);
console.log(Mokinys.kelintokas);
console.log(Mokinys.matemPazymiai);
Mokinys.kelintokas++; // PAKEISTI : klase i sekancia
// var mass = [];
// mass.push(Mokinys);
// console.log(Mokinys);
// console.log(mass);

function pekeltiKlase(mokinys){
  mokinys.kelintokas++;
  if (Mokinys.kelintokas >= 13){
    console.log(Mokinys.vardas + "baige mokykla");
  } else if (Mokinys.kelintokas == 5){
    console.log(Mokinys.vardas + "baige pradine mokykla");
  }
}
pekeltiKlase(Mokinys);
// pekeltiKlase(petras);
while(petras.kelintokas < 13){
  pekeltiKlase(petras);
}

// UZDUOTIS 1.2
petras.pazymiai = [7, 8, 9, 5, 2];
for (var i =0; i < petras.pazymiai.length; i++){
  if (petras.pazymiai[i] < 6){
    petras.pazymiai[i]++;
  }
}
// pakeisti: visus 6 pazymius
// prideti nauja f-ja begu(), kuri isves i console 'bugu begu'


// prideti nauja kintamaji: miestas = 'kaunas'
// UZDUOTIS 1.3
// isvesti pakeistus duomenis
// paleisti f-ja "begu()"

// var car = {type:"Fiat", model:"500", color:"white"};
// console.log(car);
// });



//===========================================



// 2 UZDUOTIS: sukurti 2-u objektus:
// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas: klase, vardas
// 3) priskirti tevo objekui (kintamajam) vaika
function tevas(vardas, pavarde, vaikas){
  this.vardas = vardas;
  this.pavarde = pavarde;
  this.vaikas = vaikas;
}
console.log(tevas);

function Vaikas(vardas, klase){
  this.vardas = vardas;
  this.klase = klase;

var jonukas = new Vaikas("Jonas", 3);
var petras = new tevas("Petras", "Petraukas", jonukas)
console.log(Vaikas);



// 3 UZDUOTIS
// sukurti  objekto "darbuotojas" construktoriu. Objektas darbuotojas: nr, vardas, pavarde, alga
var darbuotojas = {
  nr: 222,
  vardasD: "Algis",
  pavardeD: "Sumauskas",
  alga: 300,
};
};

//============3=pvz: construktorius =====
// function Car(nr, c, ms) {
//     this.numberOfDoors = nr;
//     this.color = c;
//     this.maxSpeed = ms;
// }
//
// // objekto kurimas
// var AudiTT = new Car(2, "red", 280);
