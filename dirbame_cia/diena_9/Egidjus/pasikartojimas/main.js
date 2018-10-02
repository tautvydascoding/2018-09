console.log(  "Labas pasauli"  );


ieskomiZmones = [2, 16, 17, 18, 19, 25];

var names = ["Enriqueta", "Sybil", "Piper", "Anh", "Carmelo", "Regan", "Synthia", "Newton", "Norbert", "Krystyna", "Fidelia", "Christoper", "Lewis", "Jeromy", "Joy", "Lorri", "Owen", "Rosenda", "Devora", "Treva", "Leanora", "Meghann", "Jacqueline", "Bunny", "Tenisha", "Rico", "Clementina", "Samella", "Rico", "Sandi", "Efrain", "Tena", "Vivan", "Hiedi", "Naida", "Evette", "Shane", "Freida", "Marielle", "Wynona", "Cheree", "Gaston", "Aja", "Timika", "Jude", "Griselda", "Luise", "Rico", "Minh", "Warren"];

var lastNames = ["Mcdowell", "Gates", "Mccall", "Cisneros", "Hancock", "Gaines", "Juarez", "Nolan", "Barajas", "Ware", "Orr", "Bell", "Donovan", "Rojas", "Stevenson", "Long", "Hays", "Gibson", "Meyer", "Sims", "Mcintosh", "Craig", "Haney", "Cunningham", "Hunt", "Montgomery", "Spears", "Cooke", "Gregory", "Mcknight", "Fernandez", "Hendrix", "Patton", "Bond", "Skinner", "Randolph", "Montes", "Guerra", "Bowen", "Potts", "Dyer", "Riley", "Rodgers", "Schroeder", "Ferguson", "Garrett", "Rush", "Moon", "Whitney", "Mcdaniel"];

function rastiVisusVardus(arr, name) {
  console.log("ieškom vardo: ", name);
  var indeksai = [];
  var paskutinisRastas = arr.indexOf(name);
  while (paskutinisRastas != -1){
    indeksai.push(paskutinisRastas);
    console.log(paskutinisRastas);
    paskutinisRastas = arr.indexOf(name, paskutinisRastas +1);
  }
  return indeksai;

}
var rezultatas = rastiVisusVardus(names, "Freida");
console.log(rezultatas);
if (rezultatas.length == 0) {
  console.log("Nepavyko nieko rasti, pabandykite kitą žodį");
}
//////////////////////////////////////////////
var array = [2, 9, 9];
document.write(array.indexOf(2));
//////////////////////////////////
var array =[2, 98, 12, 45];
document.write(array.indexOf(45, 2));

///////////////////////////////////////////////////////////////////////////
var eilute = [2, 12, 45, 98];
document.write(eilute.indexOf(98, 4));
/////////////////////////////////////////////////////////////////////

function func () {
  var eilute = [2,9,9];
  console.log(eilute.indexOf(2));
}
func();
////////////////////////////////////////////////////
var a = 2;
var b = 2;
var c = 3;
var atsakymas;
if (a == b){
  if (a == c) {
    atsakymas = "viskas yra lygu";
  }else {
    atsakymas = "a ir b yra lygu";
  }
}else {
  if (a == c) {
    atsakymas = "a ir c yra lygu";
  }else {
    if (b == c){
      atsakymas = "b ir c yra lygu";
    }else {
      atsakymas = "visi elementai yra skirtingi";
    }
  }
}console.log(atsakymas);

////////////////////////////////////////////////////////////////////////////

// Pataisyti kodą, pirma eilutė rodo nulius

var rows = prompt("Kiek eilucių daugybai norėtumėte?");
var cols = prompt("Kiek stulpelių daugybai norėtumėte?");

if ( rows == "" || rows == null)
      rows = 10;
if (cols == "" || cols == null)
      cols = 10;
createTable(rows, cols);
function createTable(rows, cols) {
  var j = 1;
  var output = "<table border='1' width='500' cellspacing = '0' cellpadding ='5'>";
  for (var i = 0; i < rows; i++) {
    while (j <= cols) {
      output = output + "<td>" + i*j + "</td>";
      j = j+1;
    }
    output = output + "</tr>";
    j = 1;
  }
  output = output + "</table>";
  document.write(output);


}
/////////////////////////////////////////////////////////////////////////
