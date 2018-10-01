console.log(  "Labas pasaulis"  );
var vardai = ["Jonas", "Petras", "Povilas", "Kestas", "Karolis"];
// ) sunaikinti pirma STALCIU VISA
console.log(vardai.join());
vardai.shift();
console.log(vardai.join());
// ) tarp Petras ir Povilas, iterpti Marija
vardai.splice(1, 0, "Marija");
// ) surikiuoti Masyva
console.log(vardai.join());
// ) sunaikinti Marijos stalciu
vardai.splice(1, 1);
console.log(vardai.join());
// ) sukeisti vietomis pirma ir paskutini stalciu
var tempLast = vardai.pop();
var tempFirst = vardai.shift();
vardai.unshift(tempLast);
vardai.push(tempFirst);
console.log(vardai.join());

// ) sukurti masyvo kopija

var naujasArray = vardai.slice();
console.log(naujasArray.join());
// ) kopijos masyve istrinti nuo 2 iki 4
naujasArray.splice(1, 2);
console.log(naujasArray.join());
// ) isisvesti orginalu masyva - ir pasitikrinti ar nesugadinom jo , keisdami kopija
console.log("Originalus masyvas: " + vardai.join());
// ) prijungti kopijos masyva prie orginalo masyvos galo

var treciasArray = vardai.concat(naujasArray);
console.log(treciasArray.join());

// 6. sukurti du masyvus (skirtingus)
var pirmasMasyvas = [1, 1, 1, 1, 1, 1, 1];
var antrasMasyvas = [2, 2, 2, 2, 2, 2, 2];
var sujungtasMasyvas = [];
// naudojant for cikla sujungti juos, kas antra elementa
function sujungtiMasyvus(arr1, arr2) {
  for (var i = 0; i < arr1.length; i++){
    sujungtasMasyvas[i*2] = arr1[i];
  }
  for (var j = 0; j < arr2.length; j++){
    sujungtasMasyvas[j*2+1] = arr2[j];
  }
  console.log(sujungtasMasyvas.join());
}
// [pirmo masyvo, antro masyvo, pirmo masyvo, antro masyvo , ...]
sujungtiMasyvus(pirmasMasyvas, antrasMasyvas);



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
