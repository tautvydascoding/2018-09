



// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja

var vardas = "Tomas";
function getVardas () {
  return vardas;
}
getVardas ();
document.querySelector("p").innerHTML += ("Tai yra vardas:"  + vardas + "<br>"); "<br>"
console.log(  vardas );

// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas, vardas - Antanas
// patikrinti ar veikia f-ja
var x = "Antanas";
var y = "Tomauskas";
function getVardasPavarde () {
  return x + y;
}
getVardasPavarde ();
document.querySelector("p").innerHTML += ("Tai yra Atsakymas:" + " " + x + " " +   y +  "<br>"); "<br>"  //+ " " + tai tarpas
console.log(  x, y );

// 4 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia
var x = document.querySelector('h1');
function getH1ElementoAukstis () {
  return document.querySelector('h1');
}
console.log(  x.clientHeight );

// 4.1 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")



// 5 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia


//function getH1ElementoAukstis1 () {
//  var x = document.querySelector('h1');
//  return x.offsetHeight;
//}
//console.log(  x.offsetHeight );
//document.querySelector("p").innerHTML += ("Tai yra Atsakymas aukscio:" + " " + + x.offsetHeight + "<br>"); "<br>"
