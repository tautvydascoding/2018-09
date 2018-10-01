//-----Paspaudus ant zodelio jis dingsta
 $(document).ready(function() {
//-------------------------------------------------------------------------
// 1 UZDUOTIS:
// sukurti mokinio objekta: vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)
// (ir priskirti reiksmes pvz: 'Jurgis', "Jurgauskas", 7)
  function mokinioAnketa (vardas,pavarde,kelintokas,matematikosPazimiai) {
    this.vardas = vardas;
     this.pavarde = pavarde;
      this.kelintokas = kelintokas;
      this.matematikosPazimiai = matematikosPazimiai;
      this.begu = function () {
        console.log("begu, begu");
      };
}
var mokinys1 = new mokinioAnketa ("Tomas", "Jonaitis", 7, [6, 5, 9, 0, 8]);
var mokinys2 = new mokinioAnketa ("Andrius", "Andraitis", 7, [6, 5, 9, 10, 8]);


// 1.1 UZDUOTIS
// atspauzdinti visus duomenis
console.log(mokinys1);
 console.log(mokinys2);

// UZDUOTIS 1.2
// PAKEISTI : klase i sekancia
mokinys1.kelintokas++;
console.log(mokinys1);
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























//----------------------------------------------------------------------
 //   function Zmogus (name,ugis,svoris) {
 //     this.name = name;
 //      this.ugis = ugis;
 //       this.svoris = svoris;
 //       this.eiti = function ( ) {
 //         console.log("Einu");
 //   };
 // }
 // var zmogus = new Zmogus ("Tomas", 180, 75 );
 //  var zmogus2 = new Zmogus ("Jonas", 150, 60 );
 //  var mas = [];
 //  mas.push (zmogus);
 //  mas.push (zmogus2);
 //
 //
 // console.log(zmogus);
 //  console.log(zmogus2);
 //  zmogus2.eiti ();
 //  console.log(mas);


//    var zmogus = {
//      vardas : "Tomas",
//      ugis : 180,
//      svoris : 75,  //reikia kablelio, bet paskutiniam nededam
//      eiti : function ( ) {
//        console.log("Einu");
//      }
//    };
// console.log(zmogus);
// console.log(zmogus.ugis);
// zmogus.eiti ();






});
