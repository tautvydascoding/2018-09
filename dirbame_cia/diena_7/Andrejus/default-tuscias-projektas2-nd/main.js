console.log(  "Labas pasaulis"  );
// ========================================
// sukurti masyva: Jonas, Petras, Povilas, Kestas, Karolis
// ) sunaikinti pirma STALCIU VISA
// ) tarp Petras ir Povilas, iterpti Marija
// ) surikiuoti Masyva
// ) sunaikinti Marijos stalciu
// ) sukeisti vietomis pirma ir paskutini stalciu
// ) sukurti masyvo kojipa
// ) kopijos masyve istrinti nuo 2 iki 4
// ) isisvesti orginalu masyva - ir pasitikrinti ar nesugadinom jo , keisdami kopija
// ) prijungti kopijos masyva prie orginalo masyvos galo





var vardai = ["Jonas", "Petras", "Povilas", "Kestas", "Karolis"];

// ==================================================


// 6. sukurti du masyvus (skirtingus)
// naudojant for cikla sujungti juos, kas antra elementa
// [pirmo masyvo, antro masyvo, pirmo masyvo, antro masyvo , ...]

// sunkesnis
// susikurti masyva su prekiu pavadinimais
// naudojant FOR  parasykite/pergrupuokite ji atvirksciai
// ! nenaudojant "reverse"

// ===========================================

var masA = [1,1,1,1,1,1,1,1,1,1];
var masB = [2,2,2,2,2,2,2,2,2,2];

var masC = [];
// var j = 0;
// for (var i = 0; i<masA.length && i<masB.length; i++) {
//   masC[j] = masA[i];
//   j++;
//   masC[j] = masB[i];
//   j++
// }
// console.log(masC);
// ==========================arba====================

for (var i = 0; i<masA.length; i++) {
  masC[i*2] = masA[i];
}
for (var i = 0; i<masB.length; i++) {
  masC[i*2+1] = masB[i];
}
console.log(masC);
// ===============================================


// ===================sunkesnis======================

var prekes = ["bulves", "morkis", "duona", "Miltai", "agurkai"];
// pop, push;

for (var i = 0; i < prekes.length/2; i++) {
  var t = prekes[i];
  prekes[i] = prekes[prekes.length-i-1];
  prekes[prekes.length-i-1] = t;
}
console.log(prekes);
