// ========js best practice & common mistakes (~2h)


// -------- --Array / Masyvai  Methods (~2h)--------------------
// names = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];
//
// console.log(names);
// UZDUOTIS; panaudoti masyvu Methods:
// .length
// .join()
// .shift()
// .pop()
// ...
// pvz    names.shift();

var arr = ["Orange", "Apple", "Banana", "Pear", "Tomato"];

// POP istrina paskutini elementa is array ir grazina ji pati.
console.log("Array pries pop metoda:");
console.log(arr);
arr.pop();
console.log("Array po pop metoda:");
console.log(arr);

// PUSH ideda elementa i paskutine ARRAY pozicija ir grazina ARRAY

console.log("Array pries push metoda:");
console.log(arr);
arr.push("Paprica");
console.log("Array po push metoda:");
console.log(arr);

// shift istrina pirma elementa is ARRAY pozicija ir grazina ji pati

console.log("Array pries shift metoda:");
console.log(arr);
arr.shift();
console.log("Array po shift metoda:");
console.log(arr);

// unshift ideda elementa i pirma ARRAY pozicija ir grazina ARRAY

console.log("Array pries unshift metoda:");
console.log(arr);
arr.unshift("Melon");
console.log("Array po unshift metoda:");
console.log(arr);

// JOIN sujungia array elementus i viena string
console.log(arr.join());
console.log(arr.join(''));
console.log(arr.join(','));
console.log(arr.join('-'));

// SPLICE su viena reiksme: grazina nauja ARRAY nuo indekso, kuri irasome. Is seno masyvo sias reiksmes istrina.

var spliceArr = ["Audi", "BMW", "MB", "Renault", "Skode"];

console.log(spliceArr);
console.log(spliceArr.splice(2));
console.log(spliceArr);

// SPLICE su dviem reiksmemis: pirmas skaicius nurodo nuo kurio indekso paimti, o antras nurodo kiek elementu nuo nurodyto indekso palikti. Grazina nauja masyva, o sename masyve sias reiksmes istrina.

var spliceArr2 = ["Audi", "BMW", "MB", "Renault", "Skode"];

console.log(spliceArr2);
console.log(spliceArr2.splice(1, 1));
console.log(spliceArr2);

// =========================================================
// SAVARANKISKA UZDUOTIS  Array
keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// 1. i masyvo gala ideti elmenta "butelis vandens"

console.log(keliautojas.join());
keliautojas.push("butelis vandens");
console.log(keliautojas.join());

// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
keliautojas.unshift("ziebtuvelis");
console.log(keliautojas.join());
// 3. istrinti 3-cia elmenta
keliautojas.splice(2, 1);
console.log(keliautojas.join());

// --------GERESNI UZDAVINIAI:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

var arrFor = [];

for (var i = 0; i < 50; i++) {
  arrFor.push(0);
}

console.log(arrFor.join());

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;

var arrWhile = [];

while (arrWhile.length < 50) {
  arrWhile.push(1);
}

console.log(arrWhile.join());

// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// function pakeistiKasKazkelintaSkaiciu(arr, num, numToChange) {
//   for (var i = num - 1; i < arr.length; i += num) {
//       arrWhile[i] = numToChange;
//     }
//     console.log(arrWhile.join());
// }


function pakeistiKasKazkelintaSkaiciu(arr, num, numToChange) {
  for (var i = num - 1; i < arr.length; i++) {
    if (i % num === 0) {
      arrWhile[i] = numToChange;
    }
  }
  console.log(arrWhile.join());
}

pakeistiKasKazkelintaSkaiciu(arrWhile, 2, 3);
pakeistiKasKazkelintaSkaiciu(arrWhile, 5, 9);



// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"

// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....


//=============bootstrap---sm-md-lg-xl (30-60m)==========
