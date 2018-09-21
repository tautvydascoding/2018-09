console.log(  "Labas pasauli"  );

// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja
var vardas = "Tomas";
function getVardas(){

  return vardas + "<br>";
}
vardas= getVardas();
// getVardas() + "Pavarde"; (galima prideti)
// console.log("vardas yra" + vardas); arba
document.write(vardas);


// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas, vardas - Antanas
// patikrinti ar veikia f-ja

function getVardasPavarde(){
var vardas = "Tomauskas";
var pavarde = "Antanas";
x = vardas + pavarde;

return vardas + " " + pavarde + "<br>";
}
x = getVardasPavarde();
 document.write("Atsakymas yra: "  + x );

// 4 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

function getH1ElementoAukstis(){
var x = document.querySelector("h1").offsetHeight;
return x;
}
var aukstis = getH1ElementoAukstis();
// document.write( "aukstis yra: " + aukstis );
console.log(    "aukstis yra: "   +   aukstis);

// 4.1 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")
