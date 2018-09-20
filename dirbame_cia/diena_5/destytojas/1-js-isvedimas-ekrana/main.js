console.log(  "Labas pasauli"  );


// ==============patarimai==========
// reiksme  - kintamasis  / variable
// "reiksme" - tekstas/ reiksme/ value
// reiksme() - f-jos paleidimas
// =============================




//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:

// document.write(" Laba diena Lietuva ");
// document.write(" <b class='bg-info'> Mano tekstas </b> ");


// window.alert("labas");
// alert("Viso");
// var ivestasTekstas = prompt("Ivestkite savo varda");
// console.log(ivestasTekstas);


// document.querySelector('h1').innerHTML  = " <b>Antraste 333333</b>";

var x = document.querySelector('h1');  // suranda h1 elementa ekrane
console.log(  "mano h1 yra:",  x     );


//----Elemento duomenys--------
// auksto paemimas:
// var aukstis = document.getElementById('manoDiv').clientHeight;   // clientHeight includes the height and vertical padding.
// var aukstis = document.getElementById('manoDiv').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.getElementById("manoDiv").style.height = "500px"; 		// change the height of a <div> element:




//  0 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas kainas:  999.00 , 13.49, 100.05
//  ir vietoj x irasyti, koki nors teksta pvz: printKaina( 999.00);


function printKaina( x ) {
    // document.write( x  + "<br>");

    document.querySelector( "h1").innerHTML  +=    ( x + "<br>");
}
printKaina(999.00);
printKaina(13.49);
printKaina(900.05);



// 1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis() {
    var vidurkis = (5 + 10 + 8 + 6 + 8) / 5;
    var tekstas =   "pazymiu vidurkis" + vidurkis + "<br>";

     document.querySelector( "h1").innerHTML  +=    tekstas;
}
var tekstas = "Labas" + " " + " keliautojai." + " Kur keliaujate?";

pazymiuVidurkis();
pazymiuVidurkis();
pazymiuVidurkis();

// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis1 (x1, x2, x3, x4, x5) {
    var vidurkis = (x1 + x2 + x3 + x4 + x5) / 5;
    var tekstas =   "pazymiu vidurkis" + vidurkis + "<br>";

     document.querySelector( "h1").innerHTML  +=    tekstas;
}
pazymiuVidurkis1 (5, 3, 6, 10, 5); // Maryte
pazymiuVidurkis1 (9, 9 , 8, 4, 1); // Antanas
pazymiuVidurkis1 (9, 10, 5, 6, 5); // Antano brolis
pazymiuVidurkis1 (9, 9, 9, 9, 9); // Antano brolis
pazymiuVidurkis1 (9, 9, 10, 10, 10); // Antano brolis

//
