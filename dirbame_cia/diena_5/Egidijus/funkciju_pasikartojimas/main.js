console.log(  "Labas pasauli"  );
//==============TEKSTO ISVEDIMAS (tik susipazinti)=========
// UZDUOTIS
// Issimeginti komandas:

 document.write(" <b class='bg-info'> Mano tekstas </b> ");
 //window.alert("labas");
 //alert("Viso");
 //var ivestasTekstas = prompt("Ivestkite savo varda");
 //console.log(ivestasTekstas);
 document.querySelector('h1').innerHTML += " <b>Antraste</b>";

//----Elemento duomenys--------
// auksto paemimas:
// var aukstis = document.getElementById('manoDiv').clientHeight;   // clientHeight includes the height and vertical padding.
// var aukstis = document.getElementById('manoDiv').offsetHeight;  //  offsetHeight includes the height, vertical padding, and vertical borders.
// aukscio nustatymas:
// document.getElementById("manoDiv").style.height = "500px"; 		// change the height of a <div> element:


console.log(window);

//  0 UZDUOTIS
//  sukurti funkcija "printKaina(x)" ,
//  kuri atspausdina i konsole "x" reiksme
//  iskviesti f-ja 3 kartus, kad atspausdintu 3 skirtingas kainas:  999.00 , 13.49, 100.05
//  ir vietoj x irasyti, koki nors teksta pvz: printKaina( 999.00);

function printKaina (x) {
 document.write (x +"<br>");
}
printKaina(999.00 );
printKaina(13.49);
printKaina(100.05);



// 1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis()", kuri apskaiciuoja vidurki is  5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki (pazymius sukurti f-jos viduje) 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)


function pazymiuVidurkis () {
  var x = ((5 + 10 + 8 + 6 + 8) / 5);
  // var x = 5;
  // var y = 10;
  // var p = 8;
  // var t =6;
  // var z =8;
document.querySelector('h1').innerHTML += "<br>" + "pazymiu vidurkis " + x + "<br>";
  // document.write(x);

}
pazymiuVidurkis();

// 1.1 UZDUOTIS
// parasyti f-ja "pazymiuVidurkis1(x1, x2, x3, x4, x5)", kuriai galima paduoti 5 kintamuosius,
// kuri apskaiciuoja vidurki is paduotu 5 menesiu pazymiu
// suskaiciuoti pazymiu vidurki, 5, 10 , 8 , 6 , 8  (ir atspausdintu vidurki)

function pazymiuVidurkis1(x1, x2, x3, x4, x5) {
var vidurkis = ((x1 + x2 + x3 + x4 + x5) /5);
var tekstas = ("pazymiu vidurkis yra " + vidurkis + "<br>" );
document.querySelector('h1').innerHTML += tekstas +"<br>";
}
pazymiuVidurkis1(5, 10, 8, 6, 8);
