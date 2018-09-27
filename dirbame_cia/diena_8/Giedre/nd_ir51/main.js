console.log(  "Labas pasauli"  );

// UZDUOTIS is ND
//   sukurti nauja masyva: uzpildyta atsitiktiniais skaiciais nuo 50 - 200 (pagamintomis datalemis per diena)
var arr = [];

for (var i = 0; i < 10; i++) {

    function detales(min, max) {
        // min = 50;
        // max = 200;
    return Math.floor(Math.random() * (max - min + 1) ) + min;
    }
var x = detales(50, 200);
arr.push(x);
}
console.log(arr);


//=====================================
//Uzduotys is 5.1
// apsilimui


// 0 UZDUOTIS - pasikartoti:
// skaicius, kurie yra lyginiai i pakeisti i zodi "lyginis"
var mas = [];
for (var i = 0; i < mas.length; i++) {
    if (mas[i] % 2 == 0) {
        mas[i] = "lyginis";
    } 
}



// 1 UZDUOTIS:
// kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100.
// masyvo ilgis 60
var masy = [];
var min = 10;
var max = 100;

for (var i = 0; i < 60; i++) {
    masy[i] = Math.floor(Math.random() * 91) + 10;
    // jeigu funkcija naudojame
    // masy[i] = atsitiktinisSk(10, 100) 
}
// console.log(masy); //

function atsitiktinisSk(min, max) {  
    return Math.floor(Math.random()*(max - min+1))+min; 
}

console.log(masy);


// 2 UZDUOTIS:
// burtu keliu masyvo narius, su 10 % tikimybe paversti neigiamais  ( padauginti is  -1)
// pvz:
// var a = Math.random(); // nuo 0 iki 1 (1- neiskaitant)
// if ( a <= 0.1) {
//     console.log( "laimejai" );
// }

    
    var masy = [];
    for (var i = 0; i < 60; i++) {
        masy[i] = atsitiktinisSk(10, 100);
        var a = Math.random(); // nuo 0 iki 1 (1- neiskaitant)
        if ( a <= 0.1) {
            masy[i] *= -1;
        }
    }
console.log(masy);



// 3 UZDUOTIS:
// visus skaicius paversti teigiamas (is masyvo parts)

for (var i = 0; i < 60; i++) {
    if (masy[i] < 0) {
     masy[i] *= -1;
    }
//  vietoj if gali buti 
// masy[i] = Math.abs(masy[i]);

}
console.log(masy);

// 4 UZDUOTIS:
// surasti geriausia darbuotoja

//=rasti didziausia skaiciu masyve

// var geriausias = Math.max(...masy);
// console.log(geriausias);

var maxim = masy[0];
var indexMax = 0;
for (var i = 0; i < masy.length; i++) {
    if  (maxim < masy[i]) {
        maxim = masy[i];
        indexMax = i;
    }
}
console.log(maxim);
console.log(indexMax);


// 5 UZDUOTIS:
//surasti blogiausia darbuotoja

//=rasti maziausia skaiciu masyve

var blogiausias = Math.min(...masy);
console.log(blogiausias);


//==================================================
// rasti prekiu suma ir vidurki
var sum = 0;
for (var i = 0; i < masy.length; i++) {
    sum += masy[i];
}
console.log("suma yra: " + sum);

var vidurkis = sum / masy.length;
console.log("vidurkis yra: " + vidurkis);


//rasti visus sandelius (masyvo elemento reiksme), kuriuose prekiu skaicius mazesnis nei visu sandeliu vidurkis?
//masyvas? -> for ciklas
// mazesnis? -> if
// neaiskus kiekis? -> naujas masyvas

var maziauUzVid = []; 
for (var i = 0; i < masy.length; i++) {
    if (masy[i] < (sum / masy.length)) {
      maziauUzVid.push(masy[i]);
     
    }
}
console.log(maziauUzVid);

//=======================================GALI BUTI
var mazesniIndeksai = [];

for (var i = 0; i < masy.length; i++) {
    if (masy[i] < vidurkis) {
mazesniIndeksai.push(i);
    }
}
console.log(mazesniIndeksai);
