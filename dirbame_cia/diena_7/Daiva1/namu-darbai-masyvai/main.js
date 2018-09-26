console.log(  "Labas pasauli"  );


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

var mas = [];
mas [0] = "Jonas";
mas [1] = "Petras";
mas [2] = "Povilas";
mas [3]=  "Kestas";
mas [4] = "Karolis";

mas.shift();
console.log(mas);
mas.splice(1, 0,"Marija");
console.log(mas);
mas.join();
console.log(mas);
mas.splice( 1,1);
console.log(mas);
// sukeisti masyvo  elementus
var t = mas[0];
mas[0] = mas [3];
mas [3] = t;
console.log(mas);
//  sukurti masyvo kopija
var newMas = mas.slice ();
console.log(newMas);
// kopijos masyve istrinti 2 ir 4 elementus
newMas.splice(2,4);
console.log(newMas);
console.log(mas);
// sujungti masyvus
var twice = newMas.concat(mas);
console.log(twice);


// 6. sukurti du masyvus (skirtingus)
// naudojant for cikla sujungti juos, kas antra elementa
// [pirmo masyvo, antro masyvo, pirmo masyvo, antro masyvo , ...]
var menesiai = [ 1,1,1,1,1,1,1,1,1];
var skaiciai = [ 2,2,2,2,2,2,2,2,2];
var masC = [];
// var j = 0;
//
// for (var i = 0; i < menesiai.length && i<skaiciai.length; i++) {
// masC[j] = menesiai[i];
// j++;
// masC[j] = skaiciai[i];
// j++;
// }
// console.log(masC);

// ktas variantas
for (var i = 0; i < menesiai.length; i++) {
  masC[i*2] = menesiai[i];
}
for (var i = 0; i < skaiciai.length; i++) {
  masC[i*2+1] = skaiciai[i];
}
console.log(masC);



// sunkesnis
// susikurti masyva su prekiu pavadinimais
// naudojant FOR  parasykite/pergrupuokite ji atvirksciai
// ! nenaudojant "reverse"

var masinos = [ "Audi", "Opel", "BMW", "Ford", "MB"];
// galime naudoti funkcijas pop ir push
for (var i = 0; i < masinos.length/2; i++) {
  var t = masinos[i];
  // masinos[i]    pabaigti is FB
}
