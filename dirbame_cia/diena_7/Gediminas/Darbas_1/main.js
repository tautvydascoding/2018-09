// // // // console.log(  "Labas pasauli"  );
// // // //
// // // // // var a = [ ];
// // // // // a [0] = 1;
// // // // // a [1] = 2;
// // // // // a [2] = "studentas";
// // // // // a [3] = 3;
// // // // //
// // // // // var b = [1,2, "studentas", 3,4];
// // // // //
// // // // // for (var i = 0; i<a.length; i++){
// // // // // alert (a[i]);
// // // // // }
// // // // // UZDUOTIS
// // // // // 1.1 sukurti tuscia masyva "prekiautojai"
// // // // // 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
// // // // // 1.3 isvesti i console/ekrana "prekiautojai" masyva
// // // //
// // // // // 2 pervadinti pirma stalciu pvz + "ir KO"
// // // // // 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
// // // //   // !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)
// // // //
// // // // // 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)
// // // //
// // // // var prekiautojai = []; // empty array
// // // //
// // // // var prekiautojai = [ "Senukai", "Ermitazas",  "Maxima", "Rimi"];
// // // // for (var i = 0; i < prekiautojai.length; i++) {
// // // // console.log ( prekiautojai [i]);
// // // // }
// // // // prekiautojai [0] += " ir KO";
// // // // for (var i = 0; i < prekiautojai.length; i++) {
// // // // console.log ( prekiautojai [i]);
// // // // }
// // // //
// // // // var t = prekiautojai [2];
// // // // prekiautojai[2] = prekiautojai[3];
// // // // prekiautojai [3] = t;
// // // // for (var i = 0; i < prekiautojai.length; i++) {
// // // // console.log ( prekiautojai [i]);
// // // // }
// // // //
// // // // function sukeistiMasyvo2elementus(x, y){
// // // // var t = prekiautojai [x];
// // // // prekiautojai[x] = prekiautojai[y];
// // // // prekiautojai [y] = t;
// // // // }
// // // //
// // // // sukeistiMasyvo2elementus(2,3);
// // // //
// // // // for (var i = 0; i < prekiautojai.length; i++) {
// // // // console.log ( prekiautojai [i]);
// // // // }
// // //
// // //
// // //
// // //
// // //
// // //
// // //
// // // // UZDUOTIS: 2
// // // // sukurti vienos masinos duomenu masyva:
// // // //0 - pavadinimas
// // // //1 - Rida
// // // //2 - kaina
// // // var automobilis = ["Skoda", 13000, 2000];
// // // for (var i = 0; i < automobilis.length; i++) {
// // // console.log ( automobilis [i]);
// // // }
// // //
// // // //Didinama kaina 500
// // // automobilis [2] += 500;
// // // for (var i = 0; i < automobilis.length; i++) {
// // // console.log ( automobilis [i]);
// // //
// // // }
// // //
// // //
// // // //  pavadinimas, pravaziuota rida, kaina
// // // // 1. isvesti masyvo duomenis
// // // // 2. padidinti kaina: 100
// // // // 3. padidinti rida: -50000
// // // // 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
// // // // 4.1 atspausdinti visus pakeistus masyvo duomenis
// // // // 5. i masyva ideti papildomus duomenis: masinos metai "2004"
// // //
// // // // sunkesne:
// // // // html elementus: article, h2, ... susikurti su javascript/ innerHTML
// // // // 6. atspausdinti masyvo duomenis i ekrana:
// // // // <article>
// // // //      <h2> pavadinimas </h2>
// // // //      <div> savininko vardas: ...</div>
// // // //      <span> masinos metai: ...  Rida: ...</span>
// // // //      i mygtuka ideti: masinos kaina ....
// // // // </article>
// // //
// // // automobilis.push ("Tomas");
// // //
// // // document.querySelector("h2") .innerHTML = automobilis [0];
// // // document.querySelector("div") .innerHTML += automobilis [3];
// // // document.querySelector("span") .innerHTML = automobilis [1];
// // // document.querySelector("button") .innerHTML = automobilis [3];
// // //
// // // //document.querySelector("h2") .innerHTML = auto [0];
// // //_______________________________________________________________________________________
// //
// // // SAVARANKISKA UZDUOTIS  Array
// //   var  keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
// //     console.log (keliautojas);
// //
// //   for (var i = 0; i < keliautojas.length; i++) {
// //     console.log ( keliautojas [i]);
// //   }
// //   // 1. i masyvo gala ideti elmenta "butelis vandens"
// //    console.log ( keliautojas.join ());
// //   // 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
// // keliautojas.push ("zieptuvelis");
// //   console.log(keliautojas);
// //   // 3. istrinti 3-cia elmenta
// // console.log (keliautojas.splice (2));
// // console.log (keliautojas)
// //
// //
//
//
//
// //
// // // --------GERESNI UZDAVINIAI:
// // // 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");
// //  var skaiciai = [];
// //  for (var i = 0; i < 50; i++) {
// //  skaiciai [i] = 0;
// //  console.log (skaiciai)
// //  }
// //-------------------------------------------------------------------------------------------------------
// // // 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
// // var skaiciai = [];
// // var i = 0;
// // while (i < 50) {
// //     skaiciai [i] = 1;  i++;
// //   }
// //   console.log (skaiciai);
// //-----------------------------------------------------------------------------
// // // 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// // var skaiciai = [];
// // var i = 0;
// //  while (i < 50) {
// //    if (i % 2 == 1) {
// // skaiciai [i] = 3;
// // } else if (i % 5 == 4) {
// // skaiciai [i] = 9;
// // } else {
// //   skaiciai [i] = 1;
// // }
// // i++;}
// // console.log (skaiciai);
// //   console.log (skaiciai);
// // // [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// // // 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// // // [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....
// //______________________________________________________________________________________
// // 1) // sukurti kintamuosius:
//  // arRodyti =   (galimi variantai true/ false)
//  // vartotojoTipas =   "admin";
//  // userName = "Tomas";
//  var arRodyti = false;
//  var vartotojoTipas = "admin", "registratorius", "vartotojas";
//  var userName = "Tomas";
//  if (arRodyti)
// // 1.2) parasyti "if", kuris pagal kintamojo reiksme "arRodyti"  :  jeigu true isvestu : Labas Tomai
// // jeigu false isvestu : Sveiki
// {
// document.querySelector("h1").innerHTML = "Labas "+userName+" :)";
// if (vartotojoTipas == "admin") {
//   document.querySelector("h1").innerHTML = "Esate adminas";
// }
// if (vartotojoTipas == "vartotojas") {
//   document.querySelector("h1").innerHTML = "Esate ne adminas";
// }
//
//  else {
// document.querySelector("h1").innerHTML = "Sveiki";
// }
//
// //  1.3 Jeigu vartotojo tipas 'admin': isvesti ne tik pasisveikinima, bet ir koki nors paveiksliuka
