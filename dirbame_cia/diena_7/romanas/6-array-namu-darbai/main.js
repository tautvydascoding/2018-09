// sukurti masyva: Jonas, Petras, Povilas, Kestas, Karolis

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

// ) sukurti masyvo kojipa

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


// sunkesnis
// susikurti masyva su prekiu pavadinimais
var prekes = ["Bulves", "Morkos", "Duona", "Miltai", "Agurkas"];
// naudojant FOR  parasykite/pergrupuokite ji atvirksciai
// ! nenaudojant "reverse"

// console.log(prekes.join());
// for (var i = 0; i < prekes.length; i++) {
//   var temp = prekes.pop();
//   temp = prekes.unshift();
//   console.log(prekes.join());
// }



//
