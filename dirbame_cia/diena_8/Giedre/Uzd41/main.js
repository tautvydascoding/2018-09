console.log(  "Labas pasauli"  );

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

console.log(names.indexOf("Rico"));
console.log(names[25]);

// ==============


// yra lygiai tas pats:

var name = "Rico";
var index = names.indexOf(name);
if (index != -1) {
    //vardas yra!
    //index => rodys kurioje vietoje ieskotas vardas
    console.log("yra ieskotas vardas", name);
    console.log("pozicija", index);
}
else {
// vardo nera!
console.log("ieskoti vardo nera, ", name);
}

// 1A sunkesne
// indexOf(x, i) elementas kurio ieskom
// i indeksas nuo kurio ieskom
//===============================================================================
//FUNKCIJA SU KOMENTARAIS
function rastiVisusVardus(arr, name) {
    console.log("ieskom vardo", name);
    var indeksai = []; //susikuriam tuscia masyva, kur saugosim rezultata
    var paskutinisRastas = arr.indexOf(name); //ieskom pirmo elemento
    while (paskutinisRastas != -1) { //tikrinam ar rado dar viena indeksa
        //elementas yra
        indeksai.push(paskutinisRastas); //isidedam rasta indeksa i atsakymu masyva
        console.log(paskutinisRastas); //
        paskutinisRastas = arr.indexOf(name, paskutinisRastas+1);//ieskom kito tokio elemento
    }
    
    // //2 nuo cia
    // var rezultatas = rastiVisusVardus(names, "Vivan");
    // if (indeksai.length == 0) {
    //     console.log("Neranda vardo");
    // //2 iki cia
    // }
    return indeksai; //grazinam visus atsakymus kuriuos radom
}
//===============================================================================


// 1B) papildyti ^: jeigu tokio vardo neranda, isvesti VIENĄ pranesima "Nepavyko rasti...Bandykite kita zodi"





// 2 UZDUOTIS (f-ja iekom stalciaus)
// parasyti funkcija, kuriai davus iekoma zodi , ji suranda jo vieta masyve (stalciaus numeri) ir si   numeri grazina
// eg: getStalciausNumeris( ieskomasTekstas)
var arr = ieskomiZmones;

function getStalciausNumeris(ieskomasTekstas) {
    var vieta = arr.indexOf(ieskomasTekstas);
    console.log(vieta);
}
getStalciausNumeris(2);

// uzduotis:----------------------------
// 3) rasti pavarde, masyve esancio  zmogaus vardu "Freida" (pirmojo)
var numb = names.indexOf("Freida");
console.log(lastNames[numb]);

// 4) rasti visu zmoniu vardu "Rico" pavardes

function getPavarde(arr, parr, Rico) {
    var indeksai = [];
    var paskRastas = arr.indexOf(Rico);
    while (paskRastas != -1) {
        indeksai.push(parr[paskRastas]);
    paskRastas = arr.indexOf(Rico, paskRastas+1);
    }
    return indeksai;
    console.log(lastNames[i]);
}
console.log(getPavarde(names, lastNames, "Rico"));


// 5) Turime masyva su zmoniu nr.  

ieskomiZmones = [2, 16, 17, 18, 19, 25];

// A) atspausdinti visus numerius

console.log(ieskomiZmones.toString());

// gali buti = spausdina stulpeliu
// for (i = 0; i<ieskomiZmones.length; i++) {
//    console.log(ieskomiZmones[i]);
// }


// B) isvesti ju pavardes ir vardus

function vardasPav() {
    var nr = [];
    
    for (var i = 0; i < ieskomiZmones.length; i++) {
        var skaicius = ieskomiZmones[i];
        nr += lastNames[skaicius] + " " + names[skaicius] + ", ";
    }
    return nr;
}
vardasPav();
console.log(vardasPav());


// Gali buti:
for (i = 0; i<ieskomiZmones.length; i++) {
   console.log(ieskomiZmones[i] + " " + names[ieskomiZmones[i]] + " " + lastNames[ieskomiZmones[i]]);
};



//==================
var a = Math.random(); // 0 - 1
var c = 0;
var l = 0;
if ( a <= 0.1) {
    console.log("laimejai");
}
function naujasSk() {
   var a = Math.random(); // 0 - 1
if ( a <= 0.1) {
   document.querySelector('h2').innerHTML = "Laimejote"; 
l++;
} else {
    document.querySelector('h2').innerHTML = "Bandykite dar karta";
  
}
  c++;
  document.querySelector('#count').innerHTML = l + " // " + c;

}