
var names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// console.log(names);

// UZDUOTIS; panaudoti masyvu Methods:

// .length
document.querySelector('h1').innerHTML += names.length + "<br>";

// .join() sujungia visus masyvo elementus i eilutes tipo reiksme; atskirdama narius simboliais, pagal nutylejima ","
document.querySelector('h1').innerHTML += names.join(", * ") + "<br>";

// .shift()istrina pirma ir pastumia i kaire
names.shift();
document.querySelector('h1').innerHTML += names + "<br>";

// .pop() atiduoda pask elementa ir ji ismeta is masyvo
// console.log(names.pop());

// push() prideda elementa i masyvo gala
names.push("Labas");

// .unshift() prideda elemanta i pirma vieta = nuline pozicija
names.unshift("Pirmas");
document.querySelector('h1').innerHTML += names + "<br>";

// splice(1)  is orginalaus masyvo istrina tuos elementus mas=[1, 2, 3, 4, 5] mas.splice(3) --> [4, 5]; ==> mas=[1, 2, 3]

// splice(1, 2) 1 nurodo nuo kurio elemento iskirpti, 2 nurodo kiek elementu iskirpti 
var mas = [1, 2, 3, 4, 5, 6, 7]; 
mas.splice(3, 2);
// [4, 5];
mas = [1, 2, 3, 6, 7];

// concat() sudeda du masyvus ir grazina nauja masyva
var naujas = names.concat(mas);
console.log(names);
console.log(names);
console.log(mas);




// =========================================================
// SAVARANKISKA UZDUOTIS  Array
keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// 1. i masyvo gala ideti elmenta "butelis vandens"
keliautojas.push("butelis vandens");
console.log(keliautojas);

// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
keliautojas.unshift("ziebtuvelis");
console.log(keliautojas);

// 3. istrinti 3-cia elmenta
keliautojas.splice(2, 1);
console.log(keliautojas);

// --------GERESNI UZDAVINIAI:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

var masyvas = [];

for (var i = 0; i < 50; i++) {
    masyvas[i] = "0";
}
console.log(masyvas);

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;

var masWhile = [];
var i = 0;
while (i < 50) {
    masWhile[i] = 1;
    i++;



}
console.log(masWhile);

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"

var masyvas1 = [];

for (var i = 0; i < 50; i++) {
    
    if (i % 2 == 1) {
        masyvas1[i] = 3;
    } else {
        masyvas1[i] = 1;
    }

}
console.log(masyvas1);

// -------------------------
// GALI BUTI : IRGI TEISINGAI

// i = 1;
// while (i < 50) {
//     masyvas[i] = 3;
//     i += 2;
// }

// i = 1;
// while (i < 50) {
//     masyvas[i] = 9;
//     i += 5;
// }








// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....



// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....

var masyvas1 = [];

for (var i = 0; i < 50; i++) {
    
    if (i % 2 == 1) {
        masyvas1[i] = 3;
    } else if (i % 5 == 4) {
        masyvas1[i] = 9;
    }
    else {
        masyvas1[i] = 1;
    }

}
console.log(masyvas1);




// gali buti ir su funkcija:

// var masyvas1 = [];
// function vienas(arr, num, numToCh) {
//     for (var i = num - 1; i < 50; i += num) {
//         masyvas1[i] = numToCh;
//     }
//     console.log(arr.join());
// }

// vienas(masyvas1, 2, 3);
// vienas(masyvas1, 5, 9);









// 3 UZDUOTIS

// 1) // sukurti kintamuosius:
 arRodyti =   
//  (galimi variantai true/ false);
 vartotojoTipas = "admin";
 userName = "Tomas";

// 1.2) parasyti "if", kuris pagal kintamojo reiksme "arRodyti"  :  jeigu true isvestu : Labas Tomai 
// jeigu false isvestu : Sveiki

if (arRodyti == true) {
    console.log("Labas Tomai");
} else {
    console.log("Sveiki");
}

//  1.3 Jeigu vartotojo tipas 'admin': isvesti ne tik pasisveikinima, bet ir koki nors paveiksliuka 

if (arRodyti == true) {
    document.querySelector('h1').innerHTML = ("Labas Tomai");
} else {

    if (vartotojoTipas == "admin") {
    document.querySelector('h1').innerHTML = "Sveiki" + "<img src="#">";
    }
    else {
    document.querySelector('h1').innerHTML = "Sveiki"; 
    }
}