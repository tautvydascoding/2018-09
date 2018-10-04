console.log("labas");

// / 0. HTML faile  po H1 elementu  -  sukurti <aside> elementa


// / 1. naudojant javascript sukurti "header"  elementa  (document.createElment)
// nepamirskite patestuot ar pavyko
// console.log(  manoHeader );  // test

// 1.2. naudojant javascript sukurti (var manotekstas = "Antraste") kintamaji ir sukurti teksto Node : panaudojant js document.createTextNode(manotekstas)
var manoHeader = document.createElement("header");
console.log(manoHeader);

var manoTekstas = document.createTextNode("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.");
console.log(manoTekstas);

// / 2. i susikuta 'header' elemneta  ideti 'tekstas' elementas (Node)
// test
// console.log(  manoHeader );
manoHeader.appendChild(manoTekstas);

var h1 = document.querySelector("h1");
document.body.insertBefore(manoHeader, h1);
console.log(manoHeader);



// 3.1. headerio elementa ideti i <body> elementa
manoHeader.appendChild(body);
// 3.2 html
        // body
        // header       insertBefore
        // aside
//     headerio elementa ideti virs <aside> elementu
//      manoH1 tetis            kaIdeti  PriesKa
// document.body.insertBefore(  manoAside, manoH1 ); -->
