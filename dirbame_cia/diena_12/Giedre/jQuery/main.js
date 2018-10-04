console.log(  "Labas pasauli"  );



var manoHeader = document.createElement("header");
// nepamirskite patestuot ar pavyko
console.log(  manoHeader );  // test


// 1.2. naudojant javascript sukurti (var manotekstas = "Antraste") kintamaji ir sukurti teksto Node : panaudojant js document.createTextNode(manotekstas)

var manoTekstas = document.createTextNode("Antraste");

// 2. i susikuta 'header' elemneta  ideti 'tekstas' elementas (Node)

manoHeader.appendChild(manoTekstas);
// test
console.log(  manoHeader );

// 3.1. headerio elementa ideti i <body> elementa

document.querySelector('body').appendChild(manoHeader);

// 3.2 html
        // body
        // header       insertBefore
        // aside
//     headerio elementa ideti virs <aside> elementu

//      manoH1 tetis            kaIdeti  PriesKa
// document.body.insertBefore(  manoAside, manoH1 );

var manoAside = document.querySelector('aside');

document.body.insertBefore( manoHeader, manoAside);

