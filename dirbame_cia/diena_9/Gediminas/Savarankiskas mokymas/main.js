

// UZDUOTIS is ND
//   sukurti nauja masyva: uzpildyta atsitiktiniais skaiciais nuo 50 - 200 (pagamintomis datalemis per diena)
var array = [];

for (var i = 0; i < 5; i++) {

    function skaiciai(min, max) {
        min = 50;
        max = 200;
    return Math.floor(Math.random() * (max - min + 1) ) + min;
    }
var x = skaiciai(min, max)
array.push(x);
}
document.querySelector('h1').innerHTML += array ;
console.log(array);


//=====================================
//Uzduotys is 5.1
// apsilimui


// 0 UZDUOTIS - pasikartoti:
// skaicius, kurie yra lyginiai i pakeisti i zodi "lyginis"
var skaicius;
if (skaicius % 2 == 0) {
    skaicius = "lyginis";
} else {
    skaicius = skaicius;
};

// 1 UZDUOTIS:
// kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100.
// masyvo ilgis 60
var masyvas = [];
var min = 10;
var max = 100;

for (i  = 0; i < 60; i++) {
    function array(min, max) {
    return Math.floor(Math.random() * (max - min + 1) ) + min;
    }
    array(min, max);
    masyvas.push(array(min, max));
}
console.log(masyvas);


// 2 UZDUOTIS:
// burtu keliu masyvo narius, su 10 % tikimybe paversti negiamais  ( padauginti is  -1)
// pvz:
// var a = Math.random(); // nuo 0 iki 1 (1- neiskaitant)
// if ( a <= 0.1) {
//     console.log( "laimejai" );
// }
function atsitiktinisSk (min, max) {
  return Math.floor (Math.random() * (max-min+1)) +min;
}
    var mas = [];
    for (var i = 0; i < 60; i++) {
    mas [i] = atsitiktinisSk (10,100);
    var a = Math.random ();
    if (a <= 0.1) {
      mas [i] *= -1;
    }
}
console.log(mas);




// 3 UZDUOTIS:
// visus skaicius paversti teigiamas (is masyvo parts)





// 4 UZDUOTIS:
// surasti geriausia darbuotoja
// 5 UZDUOTIS:
//surasti blogiausia darbuotojaconsole.log(  "Labas pasauli"  );

// Build an array of test data.
