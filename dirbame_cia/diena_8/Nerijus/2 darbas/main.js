// console.log("labas");

// // =================taisyklingas Array copy  =================
// var array = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
// var kopijaNEGERAI =  array; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
// var kopija1 = array.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
// var kopija2 = array.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy
//
// // ================= ========= ======== ========
//  ieskomiZmones = [2, 16, 17, 18, 19, 25];
//
// var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];
//
// var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];



// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
// var index = names.indexOf("Rico");
// if (index != -1) {
//   console.log("yra ieksotas vardas", names[index]);
//   console.log("pozicija", index);
// } else {
//   console.log("ieskoto vardo nera", name);
// } for (var i = 0; i < names.length; i++) {
//   if (names[i] == name) {
//     break;
//   }
// }
//
// function rastiVisusVardus(arr, name) {
//   console.log("ieskom vardo", name);
//   var indeksai = [];
//   var paskutinisRastas = arr.indexOf(name);
//   while (paskutinisRastas != -1) {
//     indeksai.push(paskutinisRastas);
//     console.log(paskutinisRastas);
//     paskutinisRastas = arr.indexOf(name, paskutinisRastas + 1);
//   }
//   return indeksai;
// }
// var rezultas = rastiVisusVardus(names, "Vivan");
// console.log(rezultas);
// function ieskom(vardai) {
//     return vardai.name === "Rico";
// }
//
// console.log(names.find(ieskom));

// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"


// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)
//
// function getStalciausNumeris(ieskomasTekstas) {
//   console.log("ieskom vardo: ", name);
//   var indeksai = [];
//   var paskutinisRastas = arr.indexOf(name);
//   while (paskutinisRastas != -1) {
//
// }
// return indeksai;
// }
// getStalciausNumeris();
// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
// 4) rasti visu zmoniu vardu "Rico" pavardes
// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius
// B) isvesti ju pavardes ir vardus

// var rezultatas = rastiVisusVardus(names, "Sybil");
// if (rezultatas.length == 0) {
//   console.log("neradom vardo");
// } else {
//   for (var i = 0; i < rezultas.length; i++) {
//     console.log(names[rezultas[i]] + " " + lastNames[rezultas[i]]);
//   }
//
// }
// console.log(lastNames);

// var ieskomiZmones = [2, 16, 17, 18, 19, 25];
// for (var i = 0; i < ieskomiZmones.length; i++) {
//   console.log(ieskomiZmones[i] + " " + names[ieskomiZmones[i]] + " " + lastNames[ieskomiZmones[i]]);
//
// }





function naujasSk() {
  var a = Math.random();
  if ( a <= 0.1) {
      document.querySelector("h1").innerHTML = "laimejote iphone";
} else {
      document.querySelector("h1").innerHTML = "bandykite dar karta";
}
}
