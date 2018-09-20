console.log(  "Labas pasauli"  );
// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja

function getVardas () {
  var vardas="Tomas";
  return vardas;
}
var x = getVardas();
console.log(x);
console.log(    getVardas()  );



// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas, vardas - Antanas
// patikrinti ar veikia f-ja

function getVardasPavarde () {
  var vardas = "Tomas";
  var pavarde = "Tomauskas";
  // var pilnasVardas = vardas + " " + pavarde;
  return vardas + " " + pavarde;

}
getVardasPavarde();
console.log(  getVardasPavarde() );



// 4.1 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")

function getPazymiuVidurkis2 (x1, x2, x3, x4, x5) {
  var vidurkis = ((x1 + x2 + x3 + x4 + x5) /5);
  return vidurkis;
}

getPazymiuVidurkis2(4, 8, 9, 5, 10);
console.log( getPazymiuVidurkis2());
