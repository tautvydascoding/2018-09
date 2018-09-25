console.log(  "Labas pasauliss"  );
// // =================taisyklingas Array copy  =================
// var array = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
// var kopijaNEGERAI =  array; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
// var kopija1 = array.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
// var kopija2 = array.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy
// ================================================

var ieskomiZmones = [2, 16, 17, 18, 19, 25];
// arrray.indexof()
var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];


// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)

// var found = names.find(function(element) {
//   return element == "Rico";
// });
//
// console.log(found);
var name = "Rico";
var index = names.indexOf(name);
if (index != -1) {
  // vardas yra
  // index => rodys kurioje vietoje yra jeskotas vardas
  console.log("Yra jeskotas vardas ", names[index]);
  console.log("pozicija: ", index);
}
else {
  // vardo nerandalog
  console.log("jeskoto vardo nera, ", name);
}
console.log("");
// name.indexOF(name)

// A1 sunkesnis
// indexOf(x) -> x => elementas kurio jeskome
// indexOf (x,i) -> x => elementas kurio ieskom
// i => indeksas nuo kurio jeskoti

// funkcija kuri ras visu ieskomu elementu masyve indeksus
function rastiVisusVardus(arr, name) {
  //console.log("Jeskom vardo ", name);
  var indeksai = [];  // susikuriam tuscia masyva kuriame saugosim rezultata
  var paskutinisRastas = arr.indexOf (name); // jeskom pirmo elemento
  while (paskutinisRastas != -1) { // tikrinam ar radom dar viena indeksa?
    //Elementas yra!!
    indeksai.push(paskutinisRastas); //isidedam rasta indeksa i atsakymu masyva
  //  console.log(paskutinisRastas);
    paskutinisRastas = arr.indexOf(name, paskutinisRastas+1); // ieskom kito tokio elemento
  }
  return indeksai; // grazinam vissu atsakymus kurios radom (indeksus)
}
var rezultatas = rastiVisusVardus(names, "Rico");
if (rezultatas.length == 0) {
  console.log("neradom vardo!!!");
}
console.log(rezultatas);
console.log("===========1B===============");
// else {
//   console.log("jeskoto vardo nera, ", name);
// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"
console.log("===================2 uzd========");
// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)

function getStalciausNumeris (arr, ieskomasTekstas) {
  var jeskomasSkaicius = arr.indexOf(ieskomasTekstas);
  var index = [];
  while (jeskomasSkaicius != -1) {
    index.push(jeskomasSkaicius);
  //  console.log(jeskomasSkaicius);
    jeskomasSkaicius = arr.indexOf(ieskomasTekstas, jeskomasSkaicius + 1);
  }
  return index;
}
console.log(getStalciausNumeris (names, "Rico"));

console.log("=====================3uzd==========");
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)

var rezultatas = rastiVisusVardus(names, "Freida");
if (rezultatas.length == 0){
console.log("Nedandu vardo");
} else {
  for (var i= 0; i<rezultatas.length; i++) {
    console.log(names[rezultatas[i]] + " " + lastNames[rezultatas[i]]);
  }
}

console.log("==============4uzd=================");
// 4) rasti visu zmoniu vardu "Rico" pavardes
var rezultatas = rastiVisusVardus(names, "Rico");
if (rezultatas.length == 0){
console.log("Nedandu vardo");
} else {
  for (var i= 0; i<rezultatas.length; i++) {
    console.log(names[rezultatas[i]] + " " + lastNames[rezultatas[i]]);
  }
}
console.log("==============5uzd================");
// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius
// B) isvesti ju pavardes ir vardus
// a)
//console.log(ieskomiZmones); vienas is budu bet nelabai teisingas,reikia labai kreipti demesi i tai ka dabar rasom su for.
for (var i = 0; i<ieskomiZmones.length; i++) {
  // console.log(ieskomiZmones[i]);
  // // reikia gauti varda,jie yra masyve vardai
  // console.log(names[ieskomiZmones[i]]);
  // // dabar reikia pavardziu
  // console.log(lastNames[ieskomiZmones[i]]);
  // //padaryt i viena eilute
  console.log(ieskomiZmones[i] + " " + names[ieskomiZmones[i]]+ " " + lastNames[ieskomiZmones[i]] );
}
console.log("==========================");


var a = Math.random(); // 0 - 1
if ( a <= 0.1) {
    console.log("laimejai");
}

// random perkraut puslapi daug kartu ir iskrenta laimejimas
var a = Math. floor(Math.random()*10)+1; // 1-10
var c =0;
var l =0;
function naujasSK(sk) {

  if ( a == sk) {
      document.querySelector("h2").innerHTML = "Laimejote Iphone!!!!!";
      l++;
  }else {
    document.querySelector("h2").innerHTML = "Bandykite dar karta";
  }
  c++;
  document.querySelector("#count").innerHTML = l + " / " + c;
}
