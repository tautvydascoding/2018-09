console.log(  "Labas pasauli"  );
$(document).ready(function() {

function Zmogus(name,ugis, svoris){
  this.name = name;
  this.ugis = ugis;
  this.svoris = svoris;
  this.eiti = function(){
    console.log("einu!");
  };
}
var zmogus = new Zmogus("Tomas", 180, 75);
var zmogus2 = new Zmogus("Rico", 210, 90);
var mas = [];
mas.push(zmogus);
mas.push(zmogus2);

console.log(zmogus2);
console.log(zmogus2.ugis);
zmogus2.eiti();
console.log(mas);




// var zmogus = {
//   mane : "Tomas",
//   ugis : 180,
//   svoris : 75,
//   eiti : function(){
//     console.log("einu!");
//   }
// };
// console.log(zmogus);
// console.log(zmogus.ugis);
// zmogus.eiti();




});
