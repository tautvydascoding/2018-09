console.log(  "Labas pasauli"  );
document.querySelector("h1").innerHTML = "Naujas tekstas";

if ( true ) {
console.log("labas");
}


// 0 UZDUOTIS
// A)
// susikurti : vardas1 = "Tomas", vardas2 = "Antanas"
// patikrinti:
// jeigu vardai sutampa, i konsole pranesti apie tai
// jeigu vardai nesutampa - parasysi "vardai yra skirtingi"

//var vardas1 = "Tomas";
//var vardas2 = "Antanas";
//if (vardas1 == vardas2) {
//  document.querySelector("h1").innerHTML = "Vardai sutampa";
//} else {
//  document.querySelector("h1").innerHTML = "Vardai nesutampa";
//}

// B)
// Jeigu vardas1 yra "Tomas" - pasisveikinti su juo

//var vardas1 = "Tomas";
//var vardas2 = "Tomas";
//if (vardas1 == vardas2) {
//document.querySelector("h1").innerHTML = "Laba diena Tomai :)";
//} else {
//document.querySelector("h1").innerHTML = "Vardai nesutampa";
//}

// C)
// Patikrinti ar varda1 yra "Tomas", IR butinai vardas2  yra "Karolis"

var vardas1 = "Tomas";
var vardas2 = "Karolis";
if (vardas1 == "Tomas" && vardas2 == "Karolis") {
document.querySelector("h1").innerHTML = "Vardai sutampa :)";
} else {
document.querySelector("h1").innerHTML = "Vardai Tomas ir Karolis nesutampa";
}




// D)
// Patikrinti ar bent vienas is vardu "Tomas"
// || - arba
