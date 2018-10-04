console.log(" Labas ");
    // 1. naudojant javascript sukurti "header"  elementa  (document.createElment)
var manoHeader = document.createElement("header");
console.log(manoHeader);

// console.log(  manoHeader );  // test

// 1.2. naudojant javascript sukurti (var manotekstas = "Antraste") kintamaji ir sukurti teksto Node : panaudojant js document.createTextNode(manotekstas)
var manoTekstas = document.createTextNode("Antraste");
console.log(manoTekstas);

// 2. i susikuta 'header' elemneta  ideti 'tekstas' elementas (Node)
manoHeader.appendChild(manoTekstas);
var x = document.querySelector("aside");

document.body.insertBefore(manoHeader,x);
