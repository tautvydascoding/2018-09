// console.log(" Labas ");
//
// var x = 10;
// console.log( "x yra " + x );
// x++;
// console.log( "x-- yra" + x);
// x--;
// console.log( "x-- yra" + x);
//
// x += 50;
// console.log( "x+-50 yra " + x);
//
// //==============TEORIJA ++ / -- ==========
//     var x = 10;
//     x = x + 3;  // x = 13
//     x += 3;     // tas pats kad x = x + 3;
//     x++;       //  tas pats kas x = x + 1;
//

// document.querySelector("article").innerHTML += "<h3> juozas </h3>";
// }
// document.querySelector("body").innerHTML += "<article> </article>"sitas variantas butu surades <article> be html dokumento. (  document.querySelector("body").innerHTML += "<article> Juozukas </article>")

// 2) pasikartoti isvedima i ekrana ( document.write("Mano tekstas su js");

// var aukstis = document.getElementById('manoDiv').offsetHeight
// console.log(aukstis);

// var aukstis = document.querySelector('section').offsetHeight
// console.log(aukstis);
// var el = document.createElement('div');
// el.innerHTML = '<p>Hello World!</p>';
// var textnode = document.createTextNode('Hello World!');
// el.appendChild(textnode);
// document.body.appendChild(el);
// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================
// console.log("labas");
//
//
// var a = [];
// a[0] = 1;
// a[1] = 2;
// a[2] = "Studentas";
// a[3] = 3;
//
// var b = [1, 2, "Studentas", 3, 4];
// console.log(a);
// console.log(b);


// for (var i = 0; i<a.length; i++){
//   alert(a[i]);
// }
//a.leght grazina kiek elelmentu yra, kokio tu esi ilgio kad mes galetumem per visus elementus praeiti.
//1 2 5 3 4
//0 1 2 3 4

//uzduotis
//1.1sukurti tuscia masyva
//1.2uzpildyti masyva prekiaujamciomis imonemis pvz.senukai, ...
//isvesti i console/ekrana "prekiautojai' masyva'
//2.pervadinti pirma stalciu pvz + "ir KO"
//sukeisti antra ir trecio stalciu reiksmes vietomis
//negalima rasyti rankomis string nes duomenys kinta ir ju nezinote kokie duomenys bus po savaites
//3.padaryti uzdaviniui f-ja sukeisti masyvo 2elementus (x, y)
/*
var a = [];
a[0] = "Senukai" + " " + "Ir KO";
a[1] = "Ermitazas";
a[2] = "Ir KO";
console.log(a);

var prekybininkai = ["Senukai", "BCL", "Lemona", "Jysk", "Maxima"];
for (var i = 0; i<prekybininkai.length; i++){
  console.log(prekybininkai[i]);
}


prekybininkai[0] += "ir KO";
console.log("");

for (var i = 0; i<prekybininkai.length; i++)
console.log(prekybininkai[i]);


// function sukeistiMasyvo2elementus(x, y){
//   x = a[0];
//   y = a[1];
// }
// sukeistiMasyvo2elementus( "Jysk", "Bamama");

var t = prekybininkai[2];
prekybininkai[2] = prekybininkai[3];
prekybininkai[3] = t;
console.log("");
for (var i = 0; i<prekybininkai.length; i++){
console.log(prekybininkai[i]);
}

function sukeistiMasyvo2elementus(x, y){
var t = prekybininkai[x];
  prekybininkai[x] = prekybininkai[y];
  prekybininkai[y] = t;
}
sukeistiMasyvo2elementus(2, 3);
for (var i = 0; i<prekybininkai.length; i++){
console.log(prekybininkai[i]);

}


*/
// ========js best practice & common mistakes (~2h)

// UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
//  pavadinimas, pravaziuota rida, kaina
// 1. isvesti masyvo duomenis
// 2. padidinti kaina: 100
// 3. padidinti rida: -50000
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
// 4.1 atspausdinti visus pakeistus masyvo duomenis
// 5. i masyva ideti papildomus duomenis: masinos metai "2004"

// var automobilis = ["Volvo", "200000", "30000"];
// for (var i = 0; i<automobilis.length; i++){
// console.log(automobilis[i]);
// }
// console.log("");
// //2.didinam kaina 500
// automobilis[2] += 500;
// //3.mazina rida per 5000
// automobilis[1] -= 5000;

//4.i masyva ideti papildomus duomenis: savininko vardas "Tomas"
// automobilis.push("Tomas");
// for (var i = 0; i<automobilis.length; i++){
// console.log(automobilis[i]);
// }
//
// // sunkesne:
// // html elemnetus: article, h2, ... susikurti su javascript/ innerHTML
// // 6. atspausdinti masyvo duomenis i ekrana:
// // <article>
// //      <h2> pavadinimas </h2>
// //      <div> savininko vardas: ...</div>
// //      <span> masinos metai: ...  Rida: ...</span>
// //      i mygtuka ideti: masinos kaina ....
// // </article>
//
// //document.getElementsByTagName("h2")[0].innerHTML = automobilis [0];
// document.getElementsByTagName("h2")[0].innerHTML = "savininko vardas " + automobilis [0];
// document.getElementsByTagName("div")[0].innerHTML = "masinos metai " + automobilis [1];
//
// //document.getElementsByTagName("h2"[1]).innerHTML = automobilis [0];
// document.getElementsByTagName("h2")[1].innerHTML = automobilis [3];
//=============bootstrap---sm-md-lg-xl (30-60m)==========
///tagelement (h2)randa h2 html'e, o [0] randa pirmaji h2, jei noretumem antra h2 tai rasytutmem indeksa [1].

// ========js best practice & common mistakes (~2h)


// -------- --Array / Masyvai  Methods (~2h)--------------------
// names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
//
// console.log(names);
// // UZDUOTIS; panaudoti masyvu Methods:
// // .length tesiog ismeta visa masyva visu ilgiu
// // .join() sudeda visus elementus i vienos eilutes kintamaji/ visus masyvo elementus apjungia i eilutes tipo reikme.atskiria visus narius simboliai, t.y. kableliu.ajax
// console.log(a.join());
// console.log(a.join(" "));
// console.log(a.join ("//// ")); //isskirs butent tais simboliai kuriuos mes irasysim;
//
// // .shift() istrina viena elementa ir pastumia visus elementus i viena puse
// var pirmasisElementas = a.shift();
// console.log(pirmasisElementas);
// console.log(a);
// // .pop() atiduoda pakutini elementa ir ji ismeta is masyvo;
// var a = ["sveiki", "laba", "hello", "hola"];
// for (var i = 0; i<a.length; i++){
//   console.log(a[i]);
// }
// console.log("");
// var paskutinisElementas = a.pop();
// // console.log(paskutinisElementas);
// console.log(a);
//
// //.unshift() prideda reiksme i nulini indeksa ir visus pastumia
// a.unshift ("Sveikinimai");
// console.log(a);
//.splice(1) grazina viena masyva, kurio pradzia duotas vienas argumentas, pvz. mas = [1,2,3,4,5] tai mums grazins masyva mas.spilce(3) ===> [4,5]], zodziu sukuria nauja masyva ta sena istrina. musu reiksmes lieka mas = [1,2,3].
//.spilce (0, 1) pirmasis nurodo nuo kurio lemento iskirpti elementus, o antras nurodo KIEK elementu iskirpti. pvz. mas = [1, 2, 3, 4, 5, 6, 7], sakom mas.splice (3, 2) ===> [4,5]; gaunasi mas = [1, 2, 3, 6, 7]

var mas = [1,2,3,4,5,6,7];
console.log(mas);
console.log(mas.splice(3,2));
console.log(mas);
// ...
// pvz    names.shift();
//.concat () sudeda du masyvus ir grazina nauja Masyva
var keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
var naujas = keliautojas.concat(mas);
console.log(naujas);
console.log(keliautojas);
console.log(mas);
// =========================================================
// SAVARANKISKA UZDUOTIS  Array

console.log(keliautojas);
// 1. i masyvo gala ideti elmenta "butelis vandens"
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
// 3. istrinti 3-cia elmenta

keliautojas.push ( "BUtelis vandens"); //meta i gal uzrasa

keliautojas.unshift( "Ziebtuvelis"); //i prieki meta uzrasa
console.log(keliautojas);
console.log("");

keliautojas.splice(2, 1); //istrina trecia elementa
console.log(keliautojas);
console.log("");
// --------GERESNI UZDAVINIAI:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

var skaiciai = [];
for (i = 0; i < 50; i++){
  skaiciai [i] = 0;
}
console.log(skaiciai);
// for (i = 0; i < 50; i++){
// console.log(skaiciai [i]);
// }
// console.log("");

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....

// var skaiciai = [];
// var i = 0;
// while (i < 50){
// skaiciai [i] = 1;
//   i++;
// }
// console.log(skaiciai);
//
// for (i = 0; i < 50; i++)
//   if (i % 2 == 1)
//   skaiciai[i] = 3;
//   console.log(skaiciai);
//
//   // for (i = 0; i < 50; i++)
//     if (i % 5 == 4){
//     skaiciai[i] = 9;
//   }
//     i++;
//     console.log(skaiciai);
// i = 0;
// while(i < 50) {
// if (i % 2 == 1){
//   skaiciai[i] = 3;
// }
// if (i % 5 == 4){
//   skaiciai[i] = 9;
// }
// i++;}
// console.log(skaiciai);
// //=============bootstrap---sm-md-lg-xl (30-60m)==========
//
// // % ==> MOD
// for (i = 0; i < 50; i++){
//   if (i % 3 == 0){
    //i==> 0, 3, 6, 9, 12....
    // if ( i % 3 ==2)
    // i ==> 2, 5, 8, 11, 14 ....
    // if ( i % 2 == 0)
    //i ==> 0, 2, 4, 6, 8....
    //if ( i % 2 == 1)
    //i==> 1, 3, 5, 7, 9...



//PASIKARTOTI IF FUNKCIJA

// 3 UZDUOTIS

// sukurti kintamuosius "arPrisijunges" (prie puslapio) "vartotojoTipas" (moderator, admin, subscriber), "userName"

var arPrisijunges = "true";
if (arPrisijunges)
console.log("labas");

var vartotojoTipas1 = "moderator";
var vartotojoTipas2 = "admin";
var vartotojoTipas3 = "subscriber";
var userName = "Tomas";
if (vartotojoTipas2 || vartotojoTipas3){
  console.log("Ismeta paveiksliuka");
} else {
    console.log("Neismeta paveiksliuko");
  }

if (arPrisijunges) {
  console.log("Sveiki" + userName);
  if (vartotojoTipas2 == "admin"){
    console.log("Esate administratorius");
  }
  else {
    console.log("esate neprisijunges");
  }
}
//


// }

// parasyti koda, kuris patikris ar   vartotojas - sekmes atveju - pasisveikins su jo vardu.

// Jeigu vartotojas adminas isves ir paveiksliuka i ekrana, jeigu subscriber - isves  paveiksliuka
