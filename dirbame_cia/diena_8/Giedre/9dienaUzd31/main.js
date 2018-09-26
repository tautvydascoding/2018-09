console.log(  "Labas pasauli"  );


// UZDUOTIS // UZDUOTIS
 // A) sukurti kintamaji var katinas = "juodas"
 // B) sukurti f-ja
 // C) sukurti f-jos viduje kintamaji var katinas = "baltas"
 // D) atspauzdinti abu f-jos viduje
 // E) atspauzdinti  uz f-jos

 var katinas = "juodas";   //global
 
 function cat() {
    var katinas = "baltas"; //local
    console.log(this.katinas); //global
    console.log(katinas); //local
}
 cat();
 console.log(katinas);

//=====================


 function test2() {
     var katinas = "baltas";  // local
    console.log("1 katinas:", katinas);
    console.log("2 this.katinas - f-jos viduje: ",  this.katinas);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
 }
 test2();
 
 console.log("3 katinas:", katinas);

//==========================

 var xx = 10; // global
 
 function isvesti( xx ) {  // xx - (local) naujas issigalvotas LAIKINAS  kintamasis
     xx = 20;  // local
     console.log( "1. xx:", xx);
     console.log( "2. this.xx:",   this.xx);
 }
 isvesti(xx);
 console.log( "3. xx:", xx);


 //======================
 var vardas = "Jonas";   // global - kintamasis
 
 function myName ( vardas ) { //  vardas - local kintamasis
     console.log( " vardas " + vardas);
     console.log("this.vardas - f-jos viduje: ",  this.vardas);    // this - pasiekia ~global kintamuosius (tavo tecio kintamuosius)
 }
 myName("PETRAS");


//======================TEKSTO ISVEDIMAS===============


//  1.1 UZDUOTIS
//  sukurti funkcija "printAntraste(x)" ,
//  kuri atspausdina i DOM-a (ekrana) "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas antrastes:  "BMW pinga, nes daugeja", "Greik pageres orai", "Vasaros vis salteja"


function printAntraste(x) {
    document.querySelector('h1').innerHTML += x + "<br>";
}
printAntraste(5);
printAntraste("BMW pinga, nes daugeja");
printAntraste("Greik pageres orai");
printAntraste("Vasaros vis salteja");


//  1.2 UZDUOTIS
//  sukurti funkcija "printStraipsnis(x)"
//  kuri atspausdina i DOM-a (ekrana) "<p>" + x + "</p>" (paduota teksta tarp "p")

function printStraipsnis(x) {
    document.querySelector('h1').innerHTML += "<p>" + x + "</p>" + "<br>";
}
printStraipsnis("tekstastekstastekstas");


//  1.3 UZDUOTIS
//  iskviesti f-jaS 3 kartus, kad atspausdintu 3 skirtingas antrastes IR 3 straipnsnius:  "Lorem1 ....",   "Lorem2 ....",   "Lorem3 ....",

printAntraste("BMW pinga, nes daugeja");
printStraipsnis("Lorem1 ....");

printAntraste("Greik pageres orai");
printStraipsnis("Lorem2 ....");

printAntraste("Vasaros vis salteja");
printStraipsnis("Lorem3 ....");
