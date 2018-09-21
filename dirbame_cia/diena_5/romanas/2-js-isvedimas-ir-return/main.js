// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================




//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:

// document.write(" <b class='bg-info'> Mano tekstas </b> ");
// window.alert("labas");
// alert("Viso");

// var ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);
// document.querySelector('h1').innerHTML = " <b>Antraste</b>";

//----Elemento duomenys--------
// auksto paemimas:
// var aukstis = document.getElementById('manoDiv').clientHeight;   // clientHeight includes the height and vertical padding.
// var aukstis = document.getElementById('manoDiv').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.getElementById("manoDiv").style.height = "500px"; 		// change the height of a <div> element:

//=====================PASIKARTOJIMAS==================

//  0 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,

function printKaina(x){
  //  kuri atspausdina i konsole "x" reiksme
  // document.write(x + "<br>");
  console.log(x);
  document.querySelector("h1").innerHTML += "<br>" + x;
};

//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas kainas:  999.00 , 13.49, 100.05
//  ir vietoj x irasyti, koki nors teksta pvz: printKaina( 999.00);
printKaina(999.00);
printKaina(13.49);
printKaina(100.05);


// 1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)
function pazymiuVidurkis() {
  var x1 = 5;
  var x2 = 10;
  var x3 = 8;
  var x4 = 6;
  var x5 = 8;
  console.log((x1 + x2 + x3 + x4 + x5) / 5);
  // document.write(((x1 + x2 + x3 + x4 + x5) / 5) + "<br>");
  document.querySelector("h1").innerHTML += "<br>" + ((x1 + x2 + x3 + x4 + x5) / 5);
}

pazymiuVidurkis();

// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu

function pazymiuVidurkis1(x1, x2, x3, x4, x5) {
  console.log((x1 + x2 + x3 + x4 + x5) / 5);
  // document.write(((x1 + x2 + x3 + x4 + x5) / 5) + "<br>");
  document.querySelector("h1").innerHTML += "<br>" + ((x1 + x2 + x3 + x4 + x5) / 5);
}

// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

pazymiuVidurkis1(5, 10, 8, 6, 8);

//=====================RETURN==================

// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
var name = "Tomas";

function getVardas(){
  return name;
}
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja

document.querySelector('h1').innerHTML += "<br>" + getVardas();


// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas, vardas - Antanas
// patikrinti ar veikia f-ja
var pavarde = "Tomauskas";
var vardas = "Antanas";


function getVardasPavarde(){
  var fullName = vardas + " " + pavarde;
  return fullName;
}

var pilnasVardas = getVardasPavarde();

document.querySelector('h1').innerHTML += "<br>" + pilnasVardas;


// 4 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

function getH1ElementoAukstis(){
  var aukstis = document.querySelector('h1').offsetHeight;
  console.log(aukstis);
}

function setH1ElementoAuksti(height) {
    var pakeistiAuksti = document.querySelector("h1").style.height = height + "px";
    getH1ElementoAukstis();
}




// 4.1 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")

function getPazymiuVidurkis3(x1, x2, x3, x4, x5) {
  var atsakymas = (x1 + x2 + x3 + x4 + x5) / 5;
  return atsakymas;
}

console.log(getPazymiuVidurkis3(5, 5, 7, 7, 6));


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
