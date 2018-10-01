console.log(  "Labas pasauli"  );
$(document).ready(function() {
// 1 UZDUOTIS:
// sukurti mokinio objekta: vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)
// (ir priskirti reiksmes pvz: 'Jurgis', "Jurgauskas", 7)
function mokinioAnketa(vardas, pavarde, kelintokas, matematikosPazymiai){
this.vardas = vardas;
this.pavarde = pavarde;
this.kelintokas = kelintokas;
this.matematikosPazymiai = matematikosPazymiai;
this.begu = function(){
  console.log("begu, begu!");
};
}

var mokinys1 = new mokinioAnketa("Jurgis", "Jurgauskas", 7,[6, 5, 9, 10, 8]);
var mokinys2 = new mokinioAnketa("Antanas", "Anulis", 8, [2, 4, 6, 3, 5]);

// 1.1 UZDUOTIS
// atspauzdinti visus duomenis
console.log(mokinys1);
console.log(mokinys2);

// UZDUOTIS 1.2
// PAKEISTI : klase i sekancia
// var x = mokinys1;
// x.kelintokas = 9;
// console.log(mokinys1);
mokinys1.kelintokas++; // arba +=5 didiname penkiomis klasemis

// pakeisti: visus 6 pazymius
var y = mokinys1;
y.matematikosPazymiai = [2, 4, 6, 3, 5];
console.log(mokinys1);

// mokinys1.pazymiai = [2,3,7,4,1,6];
// for (var i = 0; i < mokinys1.pazymiai.length; i++) {
//   if(mokinys1.pazymiai[i] < 6){
//     mokinys1.pazymiai[i]++;
//   }
// }
// console.log(mokinys1);  jeigu pazymiai yra mazesni uz 6, pakeliame po viena bala

// prideti nauja f-ja begu(), kuri isves i console 'bugu begu'
mokinys1.begu();

// if patikrinimas: jei mokinys yra 13-tokas - isveskite teksta: "mokinys pabaige mokykla", jeigu mokinys yra penktokas  - "pabaige pradine mokykla"
if (mokinys1.kelintokas == 13 ){
  console.log(" Mokinys pabaige mokykla");
} else if(mokinys1.kelintokas == 5){
  console.log("Pabaige pradine mokykla");
}
console.log(mokinys1);

// prideti nauja kintamaji: miestas = 'kaunas'
mokinys1.miestas = "Kaunas";
console.log(mokinys1);
// arba this.miestas ="Kaunas"  arba priskirti

// UZDUOTIS 1.3
// isvesti pakeistus duomenis
// paleisti f-ja "begu()"


// 2 UZDUOTIS: sukurti 2-u objektus:
// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas: klase, vardas
// 3) priskirti tevo objekui (kintamajam) vaika

function Tevas(vardas, pavarde, vaikas){
  this.vardas = vardas;
  this.pavarde = pavarde;
  this.vaikas = vaikas;
}


function Vaikas(klase, vardas){
  this.klase = klase;
  this.vardas = vardas;
}
var jonukas =new Vaikas(5, "Domas");
var petras = new Tevas("Jurgis", "Jurgevicius", jonukas);
console.log(jonukas);
console.log(petras);


// 3 UZDUOTIS
// sukurti  objekto "darbuotojas" construktoriu. Objektas darbuotojas: nr, vardas, pavarde, alga

function darbuotojas(nr, vardas, pavarde, alga){
  this.nr = nr;
  this.vardas = vardas;
  this.pavarde = pavarde;
  this.alga = alga;
}
var asmuo1 = new darbuotojas(1, "Ugne", "Ugniene", 1200);
console.log(asmuo1);

//============3=pvz: construktorius =====
// function Car(nr, c, ms) {
//     this.numberOfDoors = nr;
//     this.color = c;
//     this.maxSpeed = ms;
// }
//
// // objekto kurimas
// var AudiTT = new Car(2, "red", 280);



});
