// patikra=========================================
console.log("Hello world");
// patikra=========================================
//  01 UZDUOTIS
// sukurti 3 Globalius kintamuosius:  vardas , pavarde, klase   (ir jiems priskirti reiksmes):
// atspausdinti visus kintamuosius
var vardas = "Emil";
var pavarde = "Hendriksen";
var klase = "12";
console.log(vardas, pavarde, klase);

//  02 UZDUOTIS
// sukurti funkcijas:
// printName()  printLastName(), printClass() ,
// kurios atspausdina i konsole pirmos uzduoties kintamuosius
function printName() {
  console.log(vardas);
}
printName();

function printLastName() {
  console.log(pavarde);
}
printLastName();

function printClass() {
  console.log(klase);
}
printClass();

//  03 UZDUOTIS
// parasyti f-ja printVardasPavardeKlase(name, lname, klase)
// kuria iskviesti 3 kartus su skirtingais zmoniu vardasi ir pavardem
function printVardasPavardeKlase(name, lname, klase) {
 console.log("Harry", "Potter", "10");
}
printVardasPavardeKlase();
// ============================================
function printVardasPavardeKlase1(name, lname, klase) {
 console.log("Andrejus", "Ivascenko", "10");
}
printVardasPavardeKlase1();
// ==============================================
function printVardasPavardeKlase2(name, lname, klase) {
 console.log("Vladas", "Petrovic", "10");
}
printVardasPavardeKlase2();
