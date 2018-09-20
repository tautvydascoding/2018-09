// patikra=========================================
console.log("Hello world");
// patikra=========================================

//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:

// document.write(" <b class='bg-info'> Mano tekstas </b> ");
// window.alert("labas");
// alert("Viso");
// var ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);
// document.querySelector('h1').innerHTML = " <b>Antraste</b>";
// =================================================
document.write("<b class= 'bg-info'> Labas rytas </b>");
document.write("labas rytas Lietuva!");
//window.alert("hello there");
//alert("bye bye");
//var ivestasTekstas = prompt("Andrejus");
//console.log(ivestasTekstas);
//document.querySelector('h1').innerHTML = "<b> Antraste </b>";
var x = document.querySelector ('h1');
console.log("mano h1 yra", x );
// += galima prideti abu dalykus,ne tik viena Antraste
console.log(window);
// =====================================================
//----Elemento duomenys--------
// auksto paemimas:
//var aukstis = document.getElementById('manoDiv').clientHeight;   // clientHeight includes the height and vertical padding.
//var aukstis = document.getElementById('manoDiv').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.getElementById("manoDiv").style.height = "500px"; 		// change the height of a <div> element:
// ==================================================
//  0 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas kainas:  999.00 , 13.49, 100.05
//  ir vietoj x irasyti, koki nors teksta pvz: printKaina( 999.00);
function printKaina(x) {
  console.log(x);
}
printKaina(999.000);
printKaina(13.49);
printKaina(100.05);


// 1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis() {
  console.log((5+10+8+6+8) / 5);
}
pazymiuVidurkis();

// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis1(x1, x2, x3, x4, x5) {
  console.log((x1+x2+x3+x4+x5) / 5 );
}
pazymiuVidurkis1( 5, 10, 8, 6, 8);

function pazymiuVidurkis2(y1, y2, y3, y4, y5) {
  var vidurkis = (y1 + y2 + y3 + y4 + y5) / 5;
  var tekstas = "pazymiu vidurkis" + vidurkis + "<br>";

  document.querySelector("h1").innerHTML += tekstas;
}
pazymiuVidurkis2 (5, 3, 6, 10, 5 ); //Maryte
pazymiuVidurkis2 (9, 9, 8, 4, 1); //Antanas
pazymiuVidurkis2 (9, 10, 5, 6, 5); //Antanelis
// ==================================================

//=====================RETURN==================

// 2 UZDUOTIS
// parasyti f-ja "getVardas()", kuri turi "return" zodeli ir grazina varda i iskveitimo vieta.
// sukurti kintamaji "vardas" Tomas
// patikrinti ar veikia f-ja

var vardas = "Tomas";
function getVardas() {
  return vardas;
}
getVardas();
console.log(vardas);

// 3 UZDUOTIS
// parasyti f-ja "getVardasPavarde()", kuri turi "return" zodeli ir grazina varda ir pavarde i iskveitimo vieta.
// sukurti kintamaji   "pavarde" Tomauskas, vardas - Antanas
// patikrinti ar veikia f-ja

var pavarde = "Tomauskas";
var vardas = "Antanas";
function getVardasPavarde () {
  return pavarde + vardas;
}
x = getVardasPavarde();
console.log(x);

// 4 UZDUOTIS
// parasyti f-ja, kuri turi "return" zodeli.
// "getPazymiuVidurkis2(x1, x2, x3, x4, x5)"  f-ja apskaiciuoja vidurki is paduotu 5 menesiu pazymiu (ir grazina atsakyma i iskvietimo vieta! "return atskymas;")

function getPazymiuVidurkis3(z1, z2, z3, z4, z5) {
var z = (z1+z2+z3+z4+z5) / 5;
return z;
}
console.log(getPazymiuVidurkis3(10, 8, 9, 10, 7));


// 5 UZDUOTIS
// A) sukurti h1 su tekstu viduje  (HTML faile)
// B) sukurti f-ja "getH1ElementoAukstis(), kuri su "return" grazina surenderinto h1 elemento auksti
// C) su CSS pakeisti h1 auksti, ir paziureti ar jusu f-ja veikia

var x = document.querySelector("h1");
function getH1ElementoAukstis(x) {
  // return x.offsetHeight (tinka ir mano varinatui.)
  // var x = document.querySelector("h1").offsetHeight (tinka kai turim return x paprastai)
  return x;
}
console.log(x.clientHeight);
// console.log("aukstis yra" + getH1ElementoAukstis)
// document.querySelector("h1").offsetHeight eller clientHeight
