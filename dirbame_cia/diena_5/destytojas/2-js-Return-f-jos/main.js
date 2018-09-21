console.log(  "Labas pasauli"  );


// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja

var vardas = "Tomas";

function getVardas() {
    return vardas;
}
var x = getVardas();
console.log( "vardas yra"  +   x );

//     getVardas()  + " Tomauskis";
//    console.log(     getVardas()   );

// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas, vardas - Antanas
// patikrinti ar veikia f-ja


// 4.1 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")



// 5 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia


function getH1ElementoAukstis() {
    var x = document.querySelector("h1").offsetHeight;
    return   x;

    // var x = document.querySelector("h1");
    // return   x.offsetHeight;
}
 var aukstis = getH1ElementoAukstis();
console.log(    "auksti yra"  +  aukstis);

// console.log(    "auksti yra"  +   getH1ElementoAukstis());

//
