console.log(  "Labas pasauli"  );
// 0. HTML faile  po H1 elementu  -  sukurti <aside> elementa

// 1. naudojant javascript sukurti "header"  elementa  (document.createElment)
// nepamirskite patestuot ar pavyko
// console.log(  manoHeader );  // test

var manoHeader = document.createElement("header");
var manoText = document.createTextNode("Awesome Header");
manoHeader.appendChild(manoText);
console.log(manoHeader);
var headOne = document.querySelector("aside");
document.body.insertBefore(manoHeader, headOne);



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
// <aside>  elemento objekto (Node) kurimas
// var elmAside = document.createElement("header");
// var elmAside = document.createElement("nav");
// var elmAside = document.createElement("main");
// var elmAside = document.createElement("main");
// var elmAside = document.createElement("aside");
// // var elmAside = document.createElement("section");
// // var elmAside = document.createElement("div");
// // var elmAside = document.createElement("article");
// // var elmAside = document.createElement("span");
// // var elmAside = document.createElement("footer");
//
var elmAside = document.createElement("aside");  // !!! neatsiras ekrane (nes neidetas i puslapi, tai tik kintamasis)
console.log(  elmAside  );  // <aside></aside>

// paprasto teksto rasymas
var elmText = document.createTextNode("lorem lorem lorem");
// or
//elmAside.innerHTML += "lorem lorem lorem2";

console.log(elmText);

// elemento idejimas i kita elementa
elmAside.appendChild(elmText);
//console.log(elmAside);

// ! sukurti elementai - buna dar neideti i window  document html puslapi

//=============
//  objekto (Node) idejimas i HTML
var elmH1 =  document.querySelector("h1");
//       kur                kaIdeti  PriesKa
document.body.insertBefore(elmAside, elmH1);
//ARBA
document.body.appendChild(elmAside);
document.body.appendChild("<h2>aaa</h2>"); /// !! NEVEIKS (nes veikia tik su DOM objektais / Node)


//==============
//==============SHORT VERSION==========
var manoDiv = document.createElement("div");  //  ! ne ekrane!!!
manoDiv.innerHTML += "BMW greita"; //idedam teksta "BMW greita"
document.querySelector('body').appendChild(manoDiv); // idejimas i ekrana (i DOM'a)

var manoDiv = document.createElement("div");  // sukuriam objekta
var tekstas = document.createTextNode( "BMW greita");
manoDiv.appendChild(tekstas); // elemento ideijimas i kita elementa
document.querySelector('body').appendChild(manoDiv); // idejimas i ekrana (i DOM'a)
//
