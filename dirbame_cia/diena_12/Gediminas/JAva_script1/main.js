console.log(  "Labas pasauli"  );



// 1. naudojant javascript sukurti "header"  elementa  (document.createElment)
var manoHeader = document.createElement ("header");

// nepamirskite patestuot ar pavyko
console.log(  manoHeader );  // test

// 1.2. naudojant javascript sukurti (var manotekstas = "Antraste") kintamaji ir sukurti teksto Node : panaudojant js document.createTextNode(manotekstas)
var manoTekstas = document.createTextNode ("Antraste");


// 2. i susikuta 'header' elemneta  ideti 'tekstas' elementas (Node)
manoHeader.appendChild(manoTekstas);
// test
console.log(  manoHeader );
var elmH1 =  document.querySelector("aside");
// 3.1. headerio elementa ideti i <body> elementa
document.body.insertBefore(manoHeader, elmH1); //dar nebaiktas---
// 3.2 html
      // body
      // header       insertBefore
      // aside
//     headerio elementa ideti virs <aside> elementu
//      manoH1 tetis            kaIdeti  PriesKa
// document.body.insertBefore(  manoAside, manoH1 );
