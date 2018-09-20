console.log(" Labas ");
// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================




//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:

document.write("Laba diena Lietuva")

document.write(" <b class='bg-info'> Mano tekstas </b>")
// galima nurodyti elementa su klase ir tektu ir t.t.ir viska atvaizduos ekrane. JS faile galima daryti viska ka galima daryti Html'e.
// alert("Ahoj") arba
// window.alert("labas"); Geriau sito nenaudoti, nebent labai reikia kazkuo ispeti arba prasitestuoti.

// var ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);

document.querySelector('h1').innerHTML = " <b>Antraste</b>";
// document.querySelector('h1' ieskos sito elemento).innerHTML (vidinis html failas) + = " <b>Antraste</b>"; jei nenorim jog isnyktu pries tai buves tekstas tai dedam pliusa prie lygybes zenklo. innerHTML yra kintamasis, kuris kinta.
// document.querySelector('h1') susiranda h1 elementa ekrane ir galime ji issisaugotri kaip kintamaji: var x = document.querySelector ('h1'). ir veliau as ji galiu naudoti tiesiog su kintamuoju x nekartojant viso to teksto document.query....ir t.t.

// console.log(window);cia ismeta consolej daug info is window


// console.log( document);
// ismeta musu dokumento info.

// NAUDOTI KUO DAUGIAU KINTAMUJU!!!!!!!

//----Elemento duomenys--------
// auksto paemimas:
// var aukstis = document.getElementById('manoDiv').clientHeight;   // clientHeight includes the height and vertical padding.
// var aukstis = document.getElementById('manoDiv').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.getElementById("manoDiv").style.height = "500px"; 		// change the height of a <div> element:

//=====================PASIKARTOJIMAS==================

//  0 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas kainas:  999.00 , 13.49, 100.05
//  ir vietoj x irasyti, koki nors teksta pvz: printKaina( 999.00);
var x = 100;
function printKaina(){
  console.log(x);
}
printKaina ();
document.write ( x + "</br>");
document.querySelector("h1").innerHTML += x + "</br>";


function printKaina(x){
  console.log( x);
}
printKaina( "999.00");
printKaina( "13.49");
printKaina( "100.05");
printKaina( "printKaina 9999");


// 1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
var y = 5;
var z = 10;
var c = 6;
var k = 8;
var vidurkis = (y + z + c + k * 2) / 5;

function pazymiuVidurkis (){
  console.log( (y + z + c + k * 2) / 5 );
}
pazymiuVidurkis ()

var tekstas = "Cia yra vidurkis" + vidurkis;
document.write ( tekstas + "</br>");






// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
var x1 = 5;
var x2 = 10;
var x3 = 6;
var x4 = 8;
function pazymiuVidurkis1 () {
  console.log( (x1 + x2 + x3 + x4 * 2) / 5);
}
pazymiuVidurkis1 ()

function pazymiuVidurkis2 (x1, x2, x3, x4, x5){
  document.write ( (x1 + x2 + x3 + x4 + x5) / 5 + "</br>" );
}
pazymiuVidurkis2 (2, 3, 4, 5, 6);  //Antanas
pazymiuVidurkis2 (6, 3, 4, 5, 2);  // Veronika
pazymiuVidurkis2 (3, 2, 4, 6, 7);  //Mantas
pazymiuVidurkis2 (3, 3, 3, 3, 3);  //Arunas

//=====================RETURN==================

// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja
var vardas = "Tomas"
function getVardas () {

}
getVardas ()
// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas, vardas - Antanas
// patikrinti ar veikia f-ja

// 4 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

// 4.1 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")



// 5 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

// =================FOR intro  ======================

// 1 UZDUOTIS
// naudojant FOR cikla, atspausdinti  "#" tiek, kad gautusi trikampio vaizdas
// #
// ##
// ###
// ####
// #####
// ######

//=========== =KOMANDINE (3-4h) Bootstrap && GIT=================
// ant lentos

//======= local/global or SCSS or IF or Bootstrap Layout or Frog/Garden ====
