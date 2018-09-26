// // console.log(  "Labas pasauli"  );
// // ========js best practice & common mistakes (~2h)
//
// var x = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
// for (var i = 0; i < x.length; i++) {
//   console.log(x[i]);
// }
// console.log("");
// // -------- --Array / Masyvai  Methods (~2h)--------------------
// // names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
// //
// // console.log(names);
// // UZDUOTIS; panaudoti masyvu Methods:
// // .length
// // .join()  sudeda visus elementus i vienos eilutes kintamaji
// // .shift()
// // .pop() atiduoda paskutini elementa ir ji ismeta is masyvo
// var paskutinisElementas = a.pop();
// // .
// // ...
// // pvz    names.shift();
//
// // =========================================================
// // SAVARANKISKA UZDUOTIS  Array
// var keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// document.querySelector("h1").innerHTML = keliautojas;

// function myFunction() {
//     keliautojas.push("butelis vandens");
//     keliautojas.unshift("ziebtuvelis");
//     // 2 - nuo kurio elemento iskirpti / 1 - kiek norime elementu iskirpti
//     keliautojas.splice(2, 1);
//     document.querySelector("h1").innerHTML = keliautojas;
// }
// myFunction();
// function myFunction() {
//     keliautojas.unshift("ziebtuvelis");
//     // document.querySelector("h1").innerHTML += keliautojas;
// }
// myFunction();
//
// // 1. i masyvo gala ideti elmenta "butelis vandens"
// // 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
// // 3. istrinti 3-cia elmenta
//
// // --------GERESNI UZDAVINIAI:
// // 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");
// var x = [];
// for (var i = 0; i < 50; i++) {
//   x[i] = 0;
// }
// // 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;

// console.log(x, y);


// // 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// // [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
var y =[];
var i = 0;
while ( i < 50) {
  y[i] = 1;
  i++;
}
i = 0;
while (i < 50) {
  if (i % 2 == 1) {
    y[i] = 3;
  }
  if (i % 5 == 4) {
    y[i] = 9;
  }
  i++;
}
console.log(y);
// // 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// // [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....

//PAVYZDYS
// for (var i = 0; i < 50; i++) {
//   if (i % 2 == 0) {
//     //i => 0, 2, 4, 6, 8
//   }
//   if (i % 2 == 1) {
//     //i => 1, 3, 5, 7, 9
//   }
//   if (i % 3 == 0) {
//     //i => 0, 3, 6, 9, 12
//   }
//   if (i % 3 == 2) {
//     //i => 2, 5, 8, 11, 14
//   }
//   if (i % 7 == 3) {
//     //i => 3, 10, 17, 24, 31
//   }
// }
//
//
// //=============bootstrap---sm-md-lg-xl (30-60m)==========
