console.log("labas");

// =================taisyklingas Array copy  =================
var array = ['a', 'b', 'c'];  // Becomes arr1 = ['a', 'b', 'c']
var kopijaNEGERAI =  array; // !!! Blogi  - sukurs susietaja kopija ir redaguojant keisis abu masyvai
var kopija1 = array.slice(0);   // Becomes arr2a = ['a', 'b', 'c'] - deep copy
var kopija2 = array.concat(  );   // Becomes arr2b = ['a', 'b', 'c'] - deep copy

// ================= ========= ======== ========
 ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];



// 1A) surasti vardu masyve, kelintas zmogus yra "Rico" (surasti pirmaji; sunkes- surasti visus riko)

function rastiVisusVardus(arr, name) {
  var paskutinisRastas = arr.indexOf(name);
  var rastiVisiVardai = [];
  while (paskutinisRastas != -1) {
    rastiVisiVardai.push(paskutinisRastas);
    paskutinisRastas = arr.indexOf(name, paskutinisRastas + 1);
  }
  // console.log(rastiVisiVardai);
  return rastiVisiVardai;
}

function rastiVarda(arr, name) {
  var rastasVardas = arr.indexOf(name);
  if (rastasVardas >= 0){
    console.log(rastasVardas);
  } else {
    console.log("Nepavyko rasti... Bandykita kita zodi");
  }
}


// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"


// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)

function getStalciausNumeris(arr, ieskomasTekstas) {
  var rastasIndex = arr.indexOf(ieskomasTekstas);
  console.log(arr[rastasIndex]);
}

getStalciausNumeris(names, "Rico");

// uzduotis:----------------------------
// 3) rasti pavarde masyve esancio  zmogaus vardu "Freida" (pirmojo)

// function rastiPavarde()

function rastiPavarde(arrVardo, ieskomasTekstas, arrPavardes) {
  var rastiVardoIndex = arrVardo.indexOf(ieskomasTekstas);
  console.log(arrPavardes[rastiVardoIndex]);
}

// 4) rasti visu zmoniu vardu "Rico" pavardes

function rastiVisasPavardes(arrVardo, ieskomasTekstas, arrPavardes) {
  var visiRastiVardai = rastiVisusVardus(arrVardo, ieskomasTekstas);
  for (var i = 0; i < visiRastiVardai.length; i++) {
    rastiPavarde(arrVardo, ieskomasTekstas, arrPavardes);
  }
}

// 5) Turime masyva su zmoniu nr.  ieskomiZmones = [2, 16, 17, 18, 19, 25];

var ieskomiZmones = [2, 16, 17, 18, 19, 25];
// A) atspausdinti visus numerius

function spausdintiVisusNumerius(arr) {
  for (var i = 0; i < arr.length; i++){
    console.log(arr[i]);
  }
}

// B) isvesti ju pavardes ir vardus

function isvestiVardusIrPavardes(ieskomi, arrVardo, arrPavardes) {
  for (var i = 0; i < ieskomi.length; i++) {
    var index = ieskomi[i];
    console.log(arrVardo[index] + " " + arrPavardes[index]);
  }
}

// var a = Math.random(); // 0 - 1
// if ( a <= 0.1) {
//     console.log("laimejai");
// }

var wins = 0;
var loss = 0;

function zaidimas() {
  var a = Math.random();
  if (a <= 0.1) {
    document.querySelector("h2").innerHTML = "Laimėjai";
    wins++;
  } else {
    document.querySelector("h2").innerHTML = "Bandykite dar kartą";
    loss++;
  }
  document.querySelector("#count").innerHTML = wins + " / " + loss;
}
