// sukurti masyva: Jonas, Petras, Povilas, Kestas, Karolis
var vardai = ["Jonas", "Petras", "Povilas", "Kestas", "Karolis"]
console.log(vardai);
// ) sunaikinti pirma STALCIU VISA
vardai.shift(vardai)
console.log(vardai);
// ) tarp Petras ir Povilas, iterpti Marija
vardai.splice (1, 0, "Marija")
console.log(vardai);
// ) surikiuoti Masyva
vardai.join(vardai);
console.log(vardai);
// ) sunaikinti Marijos stalciu
vardai.splice(1, 1)
console.log(vardai);
// ) sukeisti vietomis pirma ir paskutini stalciu
var t = vardai[0];
vardai[0] = vardai[3];
vardai[3] = t;
console.log(vardai);
// ) sukurti masyvo kojipa
var naujiVardai = vardai.slice();
console.log(naujiVardai);

// ) kopijos masyve istrinti nuo 2 iki 4
naujiVardai.splice(3, 3);
console.log(naujiVardai);

// ) isisvesti orginalu masyva - ir pasitikrinti ar nesugadinom jo , keisdami kopija
console.log(vardai);
// ) prijungti kopijos masyva prie orginalo masyvos galo
var naujas = vardai.concat(naujiVardai);
console.log(naujas);



// 6. sukurti du masyvus (skirtingus)
var mas1 = ["Birute", "Onute", "Zuikelis", "Puikelis"];
var mas2 = ["Petraitis", "Buitaitis", "Karkaitis", "Bukaitis"];

// naudojant for cikla sujungti juos, kas antra elementa
var masA = [1,1,1,1,1,1,1,1,1];
var masB = [2,2,2,2,2,2,2,2,2];
var masC =[];
var j =0;
for (var i = 0; i<masA.length && i<masB.length; i++){
  masC[j] = masA[i];
  j++;
  masC[j] = masB[i];
  j++;
}
console.log(masC);
// KITAS VARIANTAS SU MATEMATIKA:
// [pirmo masyvo, antro masyvo, pirmo masyvo, antro masyvo , ...]
// for var (i = 0; i < masA.length; i++){
//   masC[i*2] = masA[i];
// }
// for (var i = 0;i<masB.length; i++){
//   masC[i*2+1] = masB[i];
// }



// sunkesnis
// susikurti masyva su prekiu pavadinimais
var prekes = ["bulves", "morkos", "duona", "bulves"];
console.log(prekes);
//su REVERSE funkcija butu paprasta, bet nenaudokim si karta
prekes.reverse();
console.log(prekes);

// naudojant FOR  parasykite/pergrupuokite ji atvirksciai
// ! nenaudojant "reverse"

//pop.push

// for (var i = 0; i<prekes.length; i++);{
// var t = prekes.shift();
// prekes.unshift(t);
// }
// console.log(t);
