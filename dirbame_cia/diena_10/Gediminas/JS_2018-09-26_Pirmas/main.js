//
// for (var i = 0; i < 10; i+=2) {
// document.querySelector('h1').innerHTML += "Namas" ;
// }
// //---------------------------------------------------
// for (var i = 0; i < 22; i+=6) {
// document.querySelector('h2').innerHTML += "Bandymas" ;
// }
// //------while
// var x = 0;
// while (x <4) {
// document.querySelector('h3').innerHTML += (x + "Bandymas" ); x++;
// }
// var x = 0;
// while (x<6) {
//   document.querySelector('h4').innerHTML += (x + "Bandymas") ; x++;
// }
//---------------------------------array

// var vardas = new Array("Gediminas", "Jonas", "Petras");
// document.querySelector('h1').innerHTML += ( vardas [1]);
//
// var vaisiai = new Array ("Bananas", "Abrikosas", "Apelsinas");
// document.querySelector('h2').innerHTML += ( vaisiai [2]);
//---------------------pop

// var vardas = new Array ("Jonas", "Petras", "Gediminas", "Mindaugas");
// document.querySelector('h1').innerHTML += ( vardas [3]);
// vardas.pop ();
// document.querySelector('h2').innerHTML += ( vardas [2]);

var vardas = new Array ("Jonas", "Petras", "Gediminas", "Mindaugas");
var rodyti = vardas.join (" - ");
document.querySelector('h1').innerHTML += (rodyti);
