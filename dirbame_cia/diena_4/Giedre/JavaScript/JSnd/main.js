console.log(  "Labas pasauli"  );


//  01 UZDUOTIS
// sukurti 3 Globalius kintamuosius:  vardas , pavarde, klase   (ir jiems priskirti reiksmes):
// atspausdinti visus kintamuosius

var vardas = "Vardenis";
var pavarde = "Pavardenis";
var klase = "penkta";
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
// kuria iskviesti 3 kartus su skirtingais zmoniu vardais ir pavardem

function printVardasPavardeKlase(name, lname, klase) {
    var name;
    var lname;
    var klase;
    console.log(name, lname);
}
printVardasPavardeKlase("Gied", "Kor", 6);
printVardasPavardeKlase("Gied2", "Kor2", 2);
printVardasPavardeKlase("Gied3", "Kor3", 3);
