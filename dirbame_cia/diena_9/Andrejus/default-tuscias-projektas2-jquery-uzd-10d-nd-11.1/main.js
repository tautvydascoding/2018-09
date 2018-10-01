// / 1 UZDUOTIS:
// sukurti mokinio objekta: vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9, 10, 8)
// (ir priskirti reiksmes pvz: 'Jurgis', "Jurgauskas", 7)

// 1.1 UZDUOTIS
// atspauzdinti visus duomenis
$(document).ready(function() {
// patartina kurti cia didziaja raide nes cia yra kuriantis objekta funkcija
  function Mokinis(name, surname, grade, mathGrade){
    this.name = name;
    this.surname = surname;
    this.grade = grade;
    this.mathGrade = mathGrade;
    this.begu = function (){
      console.log("bugu begu");
    }
    this.miestas = "Kaunas";
  }
  var jurgis = new Mokinis ("Jurgis", "Jurgauskas", 7, [6, 5, 9, 10, 8]);
  var petras = new Mokinis ("petras", "petrauskas", 4, [8, 5, 6, 9, 8])
  console.log(jurgis);
  // console.log(jurgis.name);
  // console.log(jurgis.surname);
  // console.log(jurgis.grade);
  // console.log(jurgis.mathGrade);
  // var mass = [];
  // mass.push(mokinis);
  // console.log(mass);
  console.log("============1.2===============");
  // UZDUOTIS 1.2
  // PAKEISTI : klase i sekancia
  jurgis.grade++;
console.log(jurgis);

console.log("============1.2.1===============");

function pakeltiklase(mokinis) {
  mokinis.grade++;
  if (mokinis.grade >= 13) {
    console.log(mokinis.name + " baige mokykla");
  }else if (mokinis.grade == 5) {
    console.log(mokinis.name + " baige pradine mokykla");
  }
}
pakeltiklase(jurgis);
// while(petras.grade<13){}
for (var klase = petras.grade; klase < 13; klase++){
  pakeltiklase(petras);
}
console.log("==============================");
petras.mathGrade = [4, 6, 3, 8, 7, 8]
for (var i = 0; i<petras.mathGrade.length; i++){
  if (petras.mathGrade[i] < 6) {
    petras.mathGrade[i]++;
  }
}
console.log(petras);
petras.begu();
// UZDUOTIS 1.2.1
// if patikrinimas: jei mokinys yra 13-tokas - isveskite teksta: "mokinys pabaige mokykla", jeigu mokinys yra penktokas  - "pabaige pradine mokykla"
// pakeisti: visus 6 pazymius
// prideti nauja f-ja begu(), kuri isves i console 'bugu begu'
// prideti nauja kintamaji: miestas = 'kaunas'
// UZDUOTIS 1.3
// isvesti pakeistus duomenis
// paleisti f-ja "begu()"

console.log("================2uzduotis===========");
// 2 UZDUOTIS: sukurti 2-u atskirus  objektus:
// A) tevas : vardas(string), pavarde(string), vaikas(object)
// B) vaikas:  vardas (string), klase(number)
// 2.1) priskirti "vaikas" objekta - tevo kintamajam vaikas  (kintamajam)

function Tevas (vardas, pavarde, vaikas) {
  this.vardas = vardas;
  this.pavarde = pavarde;
  this.vaikas = vaikas;
}
// function = reiksme irasyt
function Vaikas (vardas, klase) {
  this.vardas = vardas;
  this.klase = klase;
}
var jonukas = new Vaikas ("jonas", 3);
var petras = new Tevas ("petras", "petraitis", jonukas);
console.log(petras);

console.log("============uzd 3==================");


































});
