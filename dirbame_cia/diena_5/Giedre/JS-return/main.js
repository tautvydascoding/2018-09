console.log(  "Labas pasauli"  );

//=====================RETURN==================

// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja

var vardas = "Tomas";
function getVardas() {
    return vardas;
}
console.log( getVardas());
// galima isvesti ir taip:
// var x = vardas;
// console.log(x);

// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas, vardas - Antanas
// patikrinti ar veikia f-ja

var vardas = "Antanas";
var pavarde = "Tomauskas";
function getVardasPavarde() {
    return vardas + " " + pavarde;
}
console.log(getVardasPavarde());

// 4.1 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")

function getPazymiuVidurkis2(x1, x2, x3, x4, x5) {
   var atsakymas = (x1 + x2 + x3 + x4 + x5) / 5;
    return atsakymas;
}
console.log(getPazymiuVidurkis2(9, 9, 9, 9, 9)); 

// 5 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

function getH1ElementoAukstis() {
    var aukstis = document.getElementById("pirmas").clientHeight;
    return aukstis;


    //- gali buti:
    // var aukstis = document.getElementById("pirmas");
    // return aukstis.clientHeight;
}
console.log(getH1ElementoAukstis());
