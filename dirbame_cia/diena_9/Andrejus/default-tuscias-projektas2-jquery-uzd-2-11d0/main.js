$(document).ready(function() {
  // konstruktorius
function Zmogus(name, ugis, svoris){
  this.name = name;
  this.ugis = ugis;
  this.svoris = svoris;
  this.eiti = function() {
    console.log("EINA!!!");
  };
}
var zmogus = new Zmogus ("Thomas", 180, 75);
var zmogus2 = new Zmogus ("Rico", 160, 90);
console.log(zmogus);
var mas = [];
mas.push(zmogus);
mas.push(zmogus2);
console.log(mas);
// var zmogus = {
//   name : "Tomas",
//   ugis : 180,
//   svoris : 75,
//   eiti : function() {
//     console.log("EINA!!!");
//   }
// };
// console.log(zmogus);
//
// console.log(zmogus.name);
// zmogus.eiti();

// NOTE::: 11.1 10 dienoje uzduotis namose
// 2 gali buti sudetingesne uzduotis
// 3
console.log("=============uzduotis================");

function Mokinis(namen, surname, grade){
  this.namen = name;
  this.surname = surname;
  this.grade = svoris;
  this.mathGrade = mathGrade;
  function mathGrade () {
    console.log(6, 5, 9, 10, 8);
  }
}
var mokinis = new Zmogus ("Jurgis", "Jurgauskas", 7);
console.log(mokinis);
var mass = [];
mas.push(mokinis);
console.log(mass);
















});
