console.log(  "Labas pasauli"  );
// var vardas = "";    // inicialisation (kintamojo kurimo metu, reiksmes priskyrimas)
// var zmogus; // undefined
// console.log( mama );  // not defined

function Zmogus(name, ugis, svoris) {
    this.name = name;
    this.ugis = ugis;
    this.svoris = svoris;
    this.eiti = function() {
        console.log("einu!");
    };
}

var zmogus = new Zmogus("Tomas", 180, 75);
var zmogus2 = new Zmogus("Rico", 210, 90);
var mas = [];
mas.push(zmogus);
mas.push(zmogus2);
console.log(mas);

// var zmogus = {
//     name:"Tomas",
//     ugis:180,
//     svoris:75,
//     eiti:function() {
//         console.log("einu!");
//     }
// };
// console.log(zmogus);
// console.log(zmogus.ugis);
// zmogus.eiti();


//===========================================
// 1 UZDUOTIS:
// sukurti mokinio objekta: vardas, pavarde, kelintokas, mokinio matematikos pazymiai (6, 5, 9 , 10, 8)
// (ir priskirti reiksmes pvz: 'Jurgis', "Jurgauskas", 7)

function Vaikas(vardas, pavarde, kelintokas, pazymiai) { //rekomenduojama didziaja raide pradeti = Vaikas
    this.vardas = vardas;
    this.pavarde = pavarde;
    this.kelintokas = kelintokas;
    this.pazymiai = pazymiai;
    this.begu = function() {
        console.log("begu begu");
    }
    this.miestas = "Kaunas";
};
var jurgis = new Vaikas("Jurgis", "Jurgauskas", 7, [6, 5, 9 ,10, 8]);
var petras = new Vaikas("Petras", "Petrauskas", 4, [1, 2, 3, 4, 6, 6]);

// 1.1 UZDUOTIS
// atspauzdinti visus duomenis
// console.log(this.vardas, this.pavarde, this.kelintokas, this.pazymiai);
console.log(jurgis);

// UZDUOTIS 1.2
// PAKEISTI : klase i sekancia
// UZDUOTIS 1.2.1
// if patikrinimas: jei mokinys yra 13-tokas - isveskite teksta: "mokinys pabaige mokykla", jeigu mokinys yra penktokas  - "pabaige pradine mokykla"
function pakeltiKlase(mokinys) {
    mokinys.kelintokas++;
    if (mokinys.kelintokas == 13) {
        console.log("mokinys pabaige mokykla");
    } else if (mokinys.kelintokas == 5) {
        console.log("baige pradine mokykla");
    }
};


// pakeisti: visus 6 pazymius 
petras.pazymiai = [10, 6, 7, 8, 9, 7];
    for (var i = 0; i<petras.pazymiai.length; i++) {
        if (petras.pazymiai[i] < 6) {
            petras.pazymiai[i]++;
        }
    }
console.log(petras);

// prideti nauja f-ja begu(), kuri isves i console 'bugu begu'
// prideti nauja kintamaji: miestas = 'kaunas'


// UZDUOTIS 1.3
// isvesti pakeistus duomenis
// console.log(mokinys.vardas, mokinys.pavarde, mokinys.kelintokas, mokinys.mokinioMatematikosPazymiai, mokinys.begu, mokinys.miestas);
// paleisti f-ja "begu()"
// console.log(petras.begu()); ?

// 2 UZDUOTIS: sukurti 2-u atskirus  objektus:
// A) tevas : vardas(string), pavarde(string), vaikas(object)
function Tevas(vardas, pavarde, vaikas) {
    this.vardas = vardas;
    this.pavarde = pavarde;
    this.vaikas = vaikas;
}


// var tevas = {vardas: "Petras",
//     pavarde: "Petrauskas",
//     sunus: function () {
//         return sunus.vardas + sunus.pavarde
// }};


// for (var klase = petras.kelintokas; klase < 13; klase++) {
//     pakeltiKlase(petras);
// }
// console.log(jurgis);
// console.log(petras);


// B) vaikas:  vardas (string), klase(number)
function Vaikas(vardas, klase) {
    this.vardas = vardas;
    this.klase = klase;
}

var jonukas = new Vaikas("Jonas", 3);
var petras = new Tevas("Petras", "Petrauskas", "Jonas");

console.log(petras);

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


