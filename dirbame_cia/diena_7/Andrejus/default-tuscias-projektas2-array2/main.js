console.log(  "Labas pasauliss"  );
// ======================================================
// UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
//  pavadinimas, pravaziuota rida, kaina
// 1. isvesti masyvo duomenis
// 2. padidinti kaina: 100
// 3. padidinti rida: -50000
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
// 4.1 atspausdinti visus pakeistus masyvo duomenis
// 5. i masyva ideti papildomus duomenis: masinos metai "2004"
var bmw = ["krekzde", 200000, 5000];
// 0 pavadinimas, 1 ryda, 2 9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK
for (var i = 0; i<bmw.length; i++){
  console.log(bmw[i]);
}
console.log("");
// didinam kaina
bmw[2] += 500;
for (var i = 0; i<bmw.length; i++){
  console.log(bmw[i]);
}
console.log("");
// didinam rida
bmw[1] -= 5000;
for (var i = 0; i<bmw.length; i++){
  console.log(bmw[i]);
}
console.log("");

// savininko vardas pridedamas
bmw.push("Waits");

for (var i = 0; i<bmw.length; i++){
  console.log(bmw[i]);
}
console.log("");

// pridedame auto metus
bmw.push("2004");

for (var i = 0; i<bmw.length; i++){
  console.log(bmw[i]);
}
console.log("");

// ===================================================
// sunkesne:
// html elementus: article, h2, ... susikurti su javascript/ innerHTML
// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>

document.getElementsByTagName("h2")[0].innerHTML = bmw[0];
document.getElementsByTagName("div")[0].innerHTML = "savininko vardas:" + bmw[3];
document.getElementsByTagName("span")[0].innerHTML = "Masinos metai: " + bmw[4] +"Rida: " + bmw[1];
document.getElementsByTagName("button")[0].innerHTML = bmw[2];
