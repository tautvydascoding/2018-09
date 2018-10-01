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
var x = mokinys1;
x.kelintokas = 9;
console.log(mokinys1);
// pakeisti: visus 6 pazymius
var y = mokinys1;
y.matematikosPazymiai = [2, 4, 6, 3, 5];
console.log(mokinys1);

// prideti nauja f-ja begu(), kuri isves i console 'bugu begu'
mokinys1.begu();

// prideti nauja kintamaji: miestas = 'kaunas'
mokinys1.miestas = "Kaunas";
console.log(mokinys1);
// UZDUOTIS 1.3
// isvesti pakeistus duomenis
// paleisti f-ja "begu()"


// 2 UZDUOTIS: sukurti 2-u objektus:
// 1) tevas : vardas, pavarde, vaikas
// 2) vaikas: klase, vardas
// 3) priskirti tevo objekui (kintamajam) vaika

function tevas(vardas, pavarde, vaikas){
  this.vardas = vardas;
  this.pavarde = pavarde;
  this.vaikas = vaikas;
}
var gimine = new tevas("Jurgis", "Jurgevicius", "Antanelis");

function vaikas(klase, vardas){
  this.klase = klase;
  this.vardas = vardas;
}
var giminaitis =new vaikas(5, "Domas");

console.log(gimine);
console.log(giminaitis);


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
