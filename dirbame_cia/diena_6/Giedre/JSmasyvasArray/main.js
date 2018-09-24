// 8diena

// console.log(  "Labas pasauli"  );

// var a = [];
// a[0] = 1;
// a[1] = 2;
// a[2] = "Studentas";
// // for (var i = 0; i < 3; i++) {
// // //     alert = a[i];
    
// // // }

// // console.log(a);
// // console.log(a[2]);

// // UZDUOTIS
// // 1.1 sukurti tuscia masyva "prekiautojai"
// // 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
// // 1.3 isvesti i console/ekrana "prekiautojai" masyva

// // 2 pervadinti pirma stalciu pvz + "ir KO"
// // 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
//     // !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

// // 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)

// var prekiautojai = []; // empty array
// prekiautojai[0] = "Senukai";
// prekiautojai[1] = "Senukai2";
// prekiautojai[2] = "Senukai3";
// prekiautojai[3] = "Senukai4";

// document.querySelector('h1').innerHTML = prekiautojai;
// // 2
// prekiautojai[0] += " ir KO";

// document.querySelector('h1').innerHTML = prekiautojai;

// // 3
// var t = prekiautojai[2];
// prekiautojai[2] = prekiautojai[3];
// prekiautojai[3] = t;

// console.log(prekiautojai);


// // 3.1
// function nauja(arr, x, y) {
// var temp = arr[x];
// arr[x] = arr[y];
// arr[y] = temp;

// document.querySelector('h1').innerHTML = prekiautojai;
// // per console, rasyti nauja(prekybininkai, 0, 3)
// }

// ------------------------------------------------------------


// UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
//  pavadinimas, pravaziuota rida, kaina
// 1. isvesti masyvo duomenis
// 2. padidinti kaina: 100
// 3. padidinti rida: -50000
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
// 4.1 atspausdinti visus pakeistus masyvo duomenis
// 5. i masyva ideti papildomus duomenis: masinos metai "2004"


// </article>

var masina = {
    pavadinimas: "audi", 
    rida: 100000, 
    kaina: 100
};

// document.querySelector('h1').innerHTML = masina.pavadinimas + "<br>";
// 2
masina.kaina += 100;
// document.querySelector('h1').innerHTML += masina.kaina + "<br>";
// 3
masina.rida += -50000;
// document.querySelector('h1').innerHTML += masina.rida + "<br>";

// 4


// document.querySelector('h1').innerHTML += masina + "<br>";


var masina = ["audi", 100000, 100];


masina[2] += 500;
masina[1] +=-50000;

// document.querySelector('h1').innerHTML += masina + "<br>";

// sunkesne:
// html elementus: article, h2, ... susikurti su javascript/ innerHTML
// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....


for (i  = 0; i < masina.length; i++) {
    console.log(masina[i]);
}
masina.push("Tomas");
masina.push(1997);
document.getElementsByTagName('h2')[0].innerHTML = masina[0];
document.getElementsByTagName('div')[0].innerHTML = "savininko vardas: " + masina[3] + "<br>";
document.getElementsByTagName('span')[0].innerHTML = "masinos metai: " + masina[4] + " Rida: " + masina[1] + "<br>";

