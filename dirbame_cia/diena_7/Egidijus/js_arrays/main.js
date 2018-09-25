console.log(  "Labas pasauli"  );

// var a= [];
// a[0] = 1;
// a[1] = 2;
// a[2] = "studentas";
// a[3] = 3;
//
// var b = [1, 2, "studentas", 3, 4];
//
// // document.write(b[2]);
//
// for (var i = 0; i < a.length;  i++ ){
//   alert(a[i]);
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
// prekiautojai[0] = "senukai";
// prekiautojai[1] = "maxima";
// prekiautojai[2] = "mega";
// prekiautojai[3] ="";
//
// console.log(prekiautojai);
//
// prekiautojai[0] = "senukai ir ko";
// console.log(prekiautojai);

var prekiautojai = ["senukai", "maxima", "rimi", "lemona"];

for (var i =0; i< prekiautojai.length; i++){
  console.log(prekiautojai[i]);
}

prekiautojai[0] += " ir ko";
console.log("");

for (var i=0; i<prekiautojai.length; i++){
  console.log(prekiautojai[i]);
}

var t = prekiautojai[2];
prekiautojai[2] = prekiautojai[3];
prekiautojai[3] = t;
for(var i = 0; i<prekiautojai.length; i++){
  console.log(prekiautojai[i]);
}


sukeistiMasyvo2elementus(2,3);
sukeistiMasyvo2elementus(1,0);
console.log("");
for (var i=0; i<prekiautojai.length; i++){
  console.log(prekiautojai[i]);
}

function sukeistiMasyvo2elementus(x,y) {
  var t = prekiautojai[x];
  prekiautojai[x] = prekiautojai[y];
  prekiautojai[y] = t;
  // console.log(x);
}sukeistiMasyvo2elementus();

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

var masina =["skoda", 63000, 70000];
for (var i=0; i<masina.length; i++){
  console.log(masina[i]);
}
console.log("");
masina[2] += 500;
masina[1] -= 50000;
console.log(masina);

masina.push("Tomas");
console.log(masina);

masina.push("2004");
console.log(masina);



// sunkesne:
// html elemnetus: article, h2, ... susikurti su javascript/ innerHTML
// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>//
//------------------------------------
// document.querySelect("body").innerHtml += "<article> "

document.querySelector("h2").innerHTML = masina[0];

// document.getElementsByTagName("h2")[1].innerHtml = auto[0];

document.querySelector("h2").innerHtml += "savininko vardas: " + masina[3];

document.getElementsByTagName("h2")[0].innerHtml = "masinos metai: " + masina[4];

document.querySelector("article").innerHTML += "<span> " + masina[3] + "</span>" + "<br>" +"<span>" + masina[2] + "</span>";

/////////////////////////////

var a = ["sveiki", "labas", "hola", "aloha"];
console.log(a);
var paskutinisElementas = a.pop();
console.log(paskutinisElementas);
console.log(a);

////////////////////////////
a.push("howdy");
console.log(a);

// -------- --Array / Masyvai  Methods (~2h)--------------------
names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

console.log(names);
// UZDUOTIS; panaudoti masyvu Methods:
// .length
// .join()
// .shift()
// .pop()
// ...
// pvz    names.shift();

// =========================================================
// SAVARANKISKA UZDUOTIS  Array
keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
keliautojas.push("butelis vandens");
console.log(keliautojas);
keliautojas.unshift("ziebtuvelis");
console.log(keliautojas);
keliautojas.splice(3,1);
console.log(keliautojas);


// 1. i masyvo gala ideti elmenta "butelis vandens"
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
// 3. istrinti 3-cia elmenta



// --------GERESNI UZDAVINIAI:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");
/////////////////////////////////////
// var a =[];
// for (var i = 0; i < 50; i++) {
//   a[i]=0;
//   console.log(a);
// }
//////////////

var mas = [];
for (var i = 0; i < 50; i++) {
  mas[i]=0;
}
console.log(mas);

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"

var i = 0;
while (i<50) {
mas[i] = 1;
i++;

}
console.log(mas);

 i= 0;
 while (i<50) {
   mas[i] = 3;
   i += 2;
 }

 /////////////////
 i= 0;
 while (i<50){
 if (i % 2 ==4) {
   mas[i] = 3;
 }
 if (i % 5 == 4) {
   mas[i] =9;
 } i++;


}console.log(mas);


// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....


// 3 UZDUOTIS

// sukurti kintamuosius "arPrisijunges" (prie puslapio) "vartotojoTipas" (moderator, admin, subscriber), "userName"

// parasyti koda, kuris patikris ar   vartotojas - sekmes atveju - pasisveikins su jo vardu.

// Jeigu vartotojas adminas isves ir paveiksliuka i ekrana, jeigu subscriber - isves  paveiksliuka

var arPrisijunges = true;
var vartotojoTipas = "admin" ;
var userName = "Tomas";

if (arPrisijunges == true) {
  if (vartotojoTipas == "admin" || "subscriber" || "moderator") {
    document.write("Sveiki " + userName);
  }
  else if (vartotojoTipas == "admin") {
      document.write("<img src:'image.jpg'");
  }



}


var friendsGroup = [
["Harry", "Ron", "Hermione"],
["Malfoy", "Crabbe", "Goyle"],
["Mooney", "Wormtail", "Prongs"]

];
console.log(friendsGroup [2][0]);










// if (arPrisijunges == true) {
//   if (vartotojoTipas == "adminas" || "moderatorius" || "subscriber")
//     if (vartotojoTipas == "admin") {
//       document.write("Sveiki " + userName);
//     }
//       if (vartotojoTipas == "admin") {
//         document.querySelector("body").innerHTML += "<img src: 'image.jpg'>";
//       }
//   {
//     document.write("Labas " + vartotojoTipas);
//
//   }
//
// }



















//=============bootstrap---sm-md-lg-xl (30-60m)==========
