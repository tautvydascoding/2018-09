//-----Paspaudus ant zodelio jis dingsta
 $(document).ready(function() {
   function Zmogus (name,ugis,svoris) {
     this.name = name;
      this.ugis = ugis;
       this.svoris = svoris;
       this.eiti = function ( ) {
         console.log("Einu");
   };
 }
 var zmogus = new Zmogus ("Tomas", 180, 75 );
  var zmogus2 = new Zmogus ("Jonas", 150, 60 );
  var mas = [];
  mas.push (zmogus);
  mas.push (zmogus2);


 console.log(zmogus);
  console.log(zmogus2);
  zmogus2.eiti ();
  console.log(mas);


//    var zmogus = {
//      vardas : "Tomas",
//      ugis : 180,
//      svoris : 75,  //reikia kablelio, bet paskutiniam nededam
//      eiti : function ( ) {
//        console.log("Einu");
//      }
//    };
// console.log(zmogus);
// console.log(zmogus.ugis);
// zmogus.eiti ();






});
