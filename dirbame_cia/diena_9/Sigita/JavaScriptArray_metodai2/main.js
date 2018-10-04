console.log("labas");

// =================taisyklingas Array copy  =================
var array = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
var kopijaNEGERAI =  array; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
var kopija1 = array.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
var kopija2 = array.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy

// ================= ========= ======== ========
 var ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];



// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)
console.log(names.indexOf("Rico")); //suranda varda rico
console.log((names[25])); //parodo kas yra po indeksu 25


var index = names.indexOf("Rico");
if (index != -1){
  console.log("vardas yra", names[index]);
  console.log("pozicija",index);
}
else {
  console.log("ieskoti vardo nera", name);
}

//indexOf(x) ==> elementas kurio ieskom;
//indexOf(x, i) ==> elementas kurio ieskom;
//i ==> indeksas nuo kurio ieskom;

function rastiVisusVardus (arr, name){
  // console.log("Iekomi vardai", name);
  var indeksai = [];
  var paskutinisRastas = arr.indexOf(name);
  while (paskutinisRastas != -1){
  indeksai.push(paskutinisRastas);
  // console.log(paskutinisRastas);
  paskutinisRastas = arr.indexOf(name, paskutinisRastas + 1);
}
return indeksai;
}
var rezultatas = rastiVisusVardus(names, "Rico");
console.log(rezultatas);
// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"
if (rezultatas.length == 0){
  console.log("neranda vardo");
} else {
  console.log( "Pavyko");
}

// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg getStalciausNumeris( ieskomasTekstas)
var name = "Rico";
var index = names.indexOf(name);
function getStalciausNumeris(arr, Tekstas){
  // console.log("Iekomi vardai", name);
var indeksai = [];
var Skaicius = arr.indexOf(Tekstas);
while (Skaicius != -1){
indeksai.push(Skaicius);
console.log(Skaicius);
Skaicius = arr.indexOf(Tekstas, Skaicius + 1);
}
return indeksai;
}
var gautasRezultatas = getStalciausNumeris(names, "Tena");
console.log(gautasRezultatas);




// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)
console.log(names.indexOf("Freida"));
console.log(lastNames[37]);
// 4) rasti visu zmoniu vardu "Rico" pavardes 25, 28, 47
console.log(lastNames[25]);
console.log(lastNames[28]);
console.log(lastNames[47]);

var gautasRezultatas = getStalciausNumeris(names, "Rico");
if (gautasRezultatas.length == 0){
  console.log("Neradom vardo");
}
else {
  for (var i = 0; i<gautasRezultatas.length; i++){
    console.log(names[gautasRezultatas[i]] +" " + lastNames[gautasRezultatas[i]]);
  }
}
// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius
// B) isvesti ju pavardes ir vardus
// var ieskomiZmones = [2, 16, 17, 18, 19, 25];
// console.log(ieskomiZmones);
// if (gautasRezultatas.length == 0){
//   console.log("Neradom nei vardo nei pavardes");
// }
// else {
//   for (var i = 0; i<gautasRezultatas.length; i++){
//     console.log(ieskomiZmones[gautasRezultatas[i]]) + " " + names[ieskomiZmones[i]] + " " + lastNames[ieskomiZmones[i]]
//   }
// }

for (var i = 0; i<ieskomiZmones.length; i++){
  // console.log(ieskomiZmones[i]);
  // console.log(names[ieskomiZmones[i]])
  // console.log(lastNames[ieskomiZmones[i]]);
  console.log(ieskomiZmones[i] + " " + names[ieskomiZmones[i]] + " " + lastNames[ieskomiZmones[i]]);
}

// var a = Math.random(); // 0 - 1 sugeneruoja skaicius nnuo 0 iki 1;
// if ( a <= 0.1)   //klausiam jei maziau nei 0,1 tai ismes konsolej "laimejau"
// {console.log("laimejai")};
// // }



//MYGTUKO SUJUNGIMAS SU JAVASCRIPTU
function naujasSk(){
  var c = 0;
  var l = 0;
  var a = Math.floor(Math.random()*10)+1; //0-1
  if (a == sk){
    document.querySelector("h2").innerHTML = "Laimejai Iphone";
     console.log("Laimejai Iphone");
   l++;
 }
  else {
    document.querySelector("h2").innerHTML = "Nelaimejai Iphone";
    console.log("neLaimejai Iphone");
  }
  c++;
  document.querySelector("#count").innerHTML = l + " / " + c;
}
