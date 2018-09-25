console.log(  "Labas pasauli"  );

// var a = [ ];
// a [0] = 1;
// a [1] = 2;
// a [2] = "studentas";
// a [3] = 3;
//
// var b = [1,2, "studentas", 3,4];
//
// for (var i = 0; i<a.length; i++){
// alert (a[i]);
// }
// UZDUOTIS
// 1.1 sukurti tuscia masyva "prekiautojai"
// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
// 1.3 isvesti i console/ekrana "prekiautojai" masyva

// 2 pervadinti pirma stalciu pvz + "ir KO"
// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
  // !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)

// var prekiautojai = []; // empty array
//
// var prekiautojai = [ "Senukai", "Ermitazas",  "Maxima", "Rimi"];
// for (var i = 0; i < prekiautojai.length; i++) {
// console.log ( prekiautojai [i]);
// }
// prekiautojai [0] += " ir KO";
// for (var i = 0; i < prekiautojai.length; i++) {
// console.log ( prekiautojai [i]);
// }
//
// var t = prekiautojai [2];
// prekiautojai[2] = prekiautojai[3];
// prekiautojai [3] = t;
// for (var i = 0; i < prekiautojai.length; i++) {
// console.log ( prekiautojai [i]);
// }
//
// function sukeistiMasyvo2elementus(x, y){
// var t = prekiautojai [x];
// prekiautojai[x] = prekiautojai[y];
// prekiautojai [y] = t;
// }
//
// // sukeistiMasyvo2elementus(2,3);
//
// for (var i = 0; i < prekiautojai.length; i++) {
// console.log ( prekiautojai [i]);
// }
// / UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
//  pavadinimas, pravaziuota rida, kaina
// 1. isvesti masyvo duomenis
// 2. padidinti kaina: 100
// 3. padidinti rida: -50000
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
// 4.1 atspausdinti visus pakeistus masyvo duomenis
// 5. i masyva ideti papildomus duomenis: masinos metai "2004"

// var automobilis = [];
// // automobilis [0] = "Skoda";
// // automobilis [1] = "rida";
// // automobilis [2] = "kaina";
// var automobilis = [ "Skoda" , 90000, 70000];
// for (var i = 0; i < automobilis.length; i++) {
// console.log (  automobilis[i]);
// }
// automobilis[1] += 100;
// automobilis[2] -= 50000;
// for (var i = 0; i < automobilis.length; i++) {
// console.log (  automobilis[i]);
// }
// automobilis.push(" Tomas ");
// automobilis.push(" 2004 m.");
//
// for (var i = 0; i < automobilis.length; i++) {
// console.log (  automobilis[i]);
// }
// document.querySelector("h2").innerHTML += automobilis [0] + "<br>";
// document.querySelector("div").innerHTML = " automobilio kaina:" + automobilis[2] + "<br>";
// document.querySelector("span").innerHTML =  "savininko vardas: Tomas  "  + "<br>" + " auto metai: 2004 m." + "<br>";
// document.querySelector("button").innerHTML += automobilis[2] + "<br>";
//
// // sunkesne:
// // html elementus: article, h2, ... susikurti su javascript/ innerHTML
// // 6. atspausdinti masyvo duomenis i ekrana:
// // <article>
// //      <h2> pavadinimas </h2>
// //      <div> savininko vardas: ...</div>
// //      <span> masinos metai: ...  Rida: ...</span>
// //      i mygtuka ideti: masinos kaina ....
// // </article>
//
// // .pop[]- paima paskutini elementa, grazina ir ismeta is masyvo;
// var a = ["labas", "sveikas" , "vakaras", "aloha"];
// console.log (a);
// var paskutiniselementas = a.pop();
// console.log( paskutiniselementas);
// console.log(a);
//
//
// // ==============================
// // push[] - prideda elementa i masyvo gala
// // shift[] - atiduota pirma elementa ir ji isstumia is masyvo . Kitus elementus pastumia i kaire.
// var pirmasElementas = a.shift();
//
//
// // .join() - visus elementus apjungia i eilutes tipo reiksme
// // atskirdama narius simboliais
// console.log(a.join());
// console.log (a);
//

// // splice(1) - jeigu nurodai viene elementa, grazina nauja masyva, is originalasumasymo elemenrus istrina
// var mas = [1,2,3,4,5,6,7];
// console.log (mas);
// console.log (mas.splice(2,3));
// console.log(mas);
//
//
// //  concat() - sudeda du masyvus ir grazina nauja masyva;
// var naujas = a.concat(mas);
// console.log (naujas);
// console.log (a);

// console.log (mas);
// SAVARANKISKA UZDUOTIS  Array

// names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
// console.log(names);
//
// // .length
// // .join()
// // .shift()
// // .pop()
// // ...
// // pvz    names.shift();
// for (var i = 0; i < names.length; i++) {
// console.log ( names [i]);
// }
// console.log(names.join());
// console.log(names.shift());
// console.log(names);
// console.log(names.unshift());
// console.log(names);
// console.log(names.pop());
// console.log(names);
// names.push("Kaunas");
// console.log(names);
//
// var likutis = names.splice(1);
// console.log(likutis);
//
// console.log(names.concat(likutis + names));

//  keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
//
// // 1. i masyvo gala ideti elmenta "butelis vandens"
// // 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
// // 3. istrinti 3-cia elmenta
//
// keliautojas.push ("butelis vandens");
// console.log(keliautojas);
// console.log(keliautojas.unshift("ziebtuvelis"));
// console.log(keliautojas);
//
// console.log (keliautojas.splice(2,1));
// console.log(keliautojas);
//

// --------GERESNI UZDAVINIAI:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");
// var mas = [];
//
// for (var i = 0; i < 50; i++) {
//   mas [i] = 0 ;
// }
// console.log(mas);

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;

//  var mas = [];
//  var i = 0;
//  while( i < 50){
//   mas [i] = 1;
//  i++;
// //  // arba su for ciklu
// // // for (var i = 0; i < 50; i++) {
// // //   mas [i] = 1 ;
//  }
//  console.log(mas);

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// var mas = [];
// var i = 0;
// while( i < 50){
// if (i % 2 == 1){
// mas [i] = 3;
// } else {
//   mas [i] = 1;
// }
//
// i++;
// }
// console.log(mas);

// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....

// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// var mas = [];
// var i = 0;
//
// while(i < 50){
//   if ( i % 2 == 1){
//     mas [i] = 3;
//   }
//    else if (i % 5 == 4) { // (4 kas ketvirta elementa)
//     mas [i] = 9;
//   } else {
//     mas[i] = 1;
//   }
//   i ++;
// }
// console.log(mas);
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....
// ==================================================
 // 3 UZDUOTIS

// 1) // sukurti kintamuosius:
 // arRodyti =   (galimi variantai true/ false)
 // vartotojoTipas =   "admin";
 // userName = "Tomas";
// var arPrisijunges = true;
// var vartotojoTipas = "admin";
// var userName = "Tomas ";
//
//
// if ( arPrisijunges){
// console.log("sveiki" + userName);
// }  if (vartotojoTipas == "admin" ) {
//   console.log("esate administartorius");
// }
// else {
//   console.log ( "esate neprisijunges");
// }
// 1.2) parasyti "if", kuris pagal kintamojo reiksme "arRodyti"  :  jeigu true isvestu : Labas Tomai
// jeigu false isvestu : Sveiki



//  1.3 Jeigu vartotojo tipas 'admin': isvesti ne tik pasisveikinima, bet ir koki nors paveiksliuka
