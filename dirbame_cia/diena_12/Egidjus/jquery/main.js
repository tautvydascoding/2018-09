console.log(  "Labas pasauli"  );


// 0. HTML faile  po H1 elementu  -  sukurti <aside> elementa

// 1. naudojant javascript sukurti "header"  elementa  (document.createElment)
// nepamirskite patestuot ar pavyko
// console.log(  manoHeader );  // test

var manoH = document.createElement("header");

var manotekstas = "Antraste";

var manotekstas = document.createTextNode(manotekstas);
manoH.appendChild(manotekstas);

console.log(manotekstas);
document.querySelector('body').appendChild(manotekstas);
document.body.insertBefore(aside, manoH); 

// 1.2. naudojant javascript sukurti (var manotekstas = "Antraste") kintamaji ir sukurti teksto Node : panaudojant js document.createTextNode(manotekstas)

// 2. i susikuta 'header' elemneta  ideti 'tekstas' elementas (Node)
// test
// console.log(  manoHeader );

// 3.1. headerio elementa ideti i <body> elementa

// 3.2 html
        // body
        // header       insertBefore
        // aside
//     headerio elementa ideti virs <aside> elementu
//      manoH1 tetis            kaIdeti  PriesKa
// document.body.insertBefore(  manoAside, manoH1 );
