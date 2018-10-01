console.log(  "Labas pasauli"  );

// sukurti masyva: Jonas, Petras, Povilas, Kestas, Karolis
var array = ["Jonas", "Petras", "Povilas", "Kestas", "Karolis"];

// ) sunaikinti pirma STALCIU VISA
array.shift();
document.querySelector('h1').innerHTML += array + "<br>";

// ) tarp Petras ir Povilas, iterpti Marija
array.splice(1, 0, "Marija");
document.querySelector('h1').innerHTML += array + "<br>";

// ) surikiuoti Masyva
array.sort();
document.querySelector('h1').innerHTML += array + "<br>";

// ) sunaikinti Marijos stalciu
array.splice(2,1);
document.querySelector('h1').innerHTML += array + "<br>";

// ) sukeisti vietomis pirma ir paskutini stalciu
var t = array[0];
array[0] = array[3];
array[3] = t;
document.querySelector('h1').innerHTML += array + "<br>";

// ) sukurti masyvo kojipa
var copyArray = array.slice();
document.querySelector('h1').innerHTML += copyArray + "<br>";

// ) kopijos masyve istrinti nuo 2 iki 4
copyArray.splice(1, 3);
document.querySelector('h1').innerHTML += copyArray + "<br>";

// ) isisvesti orginalu masyva - ir pasitikrinti ar nesugadinom jo , keisdami kopija
document.querySelector('h1').innerHTML += array + "<br>";

// ) prijungti kopijos masyva prie orginalo masyvos galo
var newArray = array.concat(copyArray);
document.querySelector('h1').innerHTML += newArray + "<br>";




// 6. sukurti du masyvus (skirtingus)
// naudojant for cikla sujungti juos, kas antra elementa
// [pirmo masyvo, antro masyvo, pirmo masyvo, antro masyvo , ...]
var masyvas1 = [10, 11, 12, 13, 14, 15];
var masyvas2 = [20, 21, 22, 23, 24];
var masyvas3 =[];
var mLen = Math.max(masyvas1.length, masyvas2.length);

for (var i = 0; i < mLen; i++) {
    masyvas3 += [masyvas1[i], masyvas2[i]] + ",";

}
document.querySelector('h1').innerHTML += masyvas3 + "<br>";



// ************************************************************

// // Gali buti ir taip:
// masC[j] = masA[i];
// j++;
// masC[j] = masB[i];
// j++;
// // --------------
// ARBA:

// for (i = 0; index < masA.length; i++) {
//     masC[i*2] = masA[i];
// }
// for (i = 0; index < masA.length; i++) {
//     masC[i*2+1] = masB[i];
// }


// sunkesnis
// susikurti masyva su prekiu pavadinimais
// naudojant FOR  parasykite/pergrupuokite ji atvirksciai
// ! nenaudojant "reverse"

var prekes = ["A", "B", "C", "D", "E", "F", "G"];
var newPrekes = [];
var len = prekes.length;

for (var i = 0; i < len; i++) {
    var t = prekes.shift();
    newPrekes.unshift(t);
}
document.querySelector('h1').innerHTML += newPrekes;


// // Gali buti ir taip:

