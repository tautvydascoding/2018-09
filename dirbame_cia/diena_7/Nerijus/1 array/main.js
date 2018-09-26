// console.log(  "Labas pasauli"  );
// // ========js best practice & common mistakes (~2h)
//
// // -------- --Array / Masyvai  TEORIJA (~2h)--------------------
//
//
// 	// UZDUOTIS
// 	// 1.1 sukurti tuscia masyva "prekiautojai"
// 	// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
// 	// 1.3 isvesti i console/ekrana "prekiautojai" masyva
//
// 	// 2 pervadinti pirma stalciu pvz + "ir KO"
//  	// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
// 		// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)
//
// 	// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)
//
// 	var prekiautojai = ["senukai", "ikea", "jusk", "ermitazas"];
//
// function sukeisti(x, y) {
//   var t = prekiautojai[x];
//   prekiautojai[x] = prekiautojai[y];
//   prekiautojai[y] = t;
// }
// sukeisti(2 , 3);
//   // document.querySelector('h1').innerHTML += prekiautojai;
// for (var i = 0; i < prekiautojai.length; i++) {
//   console.log(prekiautojai[i]);
// }
// prekiautojai [0] += "ir ko";
// console.log("");
//
// for (var i = 0; i < prekiautojai.length; i++) {
//   console.log(prekiautojai[i]);
// }
//
// var x = prekiautojai[2];
// prekiautojai[2] = prekiautojai[3];
// prekiautojai[3] = x;
//
// for (var i = 0; i < prekiautojai.length; i++) {
//   console.log(prekiautojai[i]);
// }

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

// //1 - pavadinimas / 2 - rida / 3 - kaina
// var automobilis = ["volvo", 80000, 15000];
// for (var i = 0; i < automobilis.length; i++) {
//   console.log(automobilis[i]);
// }
// automobilis[2] += 500; // didinam kaina
// automobilis[1] -= 50000; // mazinam Rida
// automobilis.push("tomas"); // padeda elemenrta i masyvo gala
//
//
// //===================================================
// for (var i = 0; i < automobilis.length; i++) {
//   console.log(automobilis[i]);
// }


// sunkesne:
// html elemnetus: article, h2, ... susikurti su javascript/ innerHTML
// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>



//=============bootstrap---sm-md-lg-xl (30-60m)==========
