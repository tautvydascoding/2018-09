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
mas [3]= "Kestas";
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
//  sukurti masyvo kojipa








// 6. sukurti du masyvus (skirtingus)
// naudojant for cikla sujungti juos, kas antra elementa
// [pirmo masyvo, antro masyvo, pirmo masyvo, antro masyvo , ...]
// var menesiai = [ "sausis", "vasaris", "kovas", "balandis"];
// var skaiciai = [ "pirma", "antras", "trecias", "ketvirtas"];



// sunkesnis
// susikurti masyva su prekiu pavadinimais
// naudojant FOR  parasykite/pergrupuokite ji atvirksciai
// ! nenaudojant "reverse"

var masinos = [ "Audi", "Opel", "BMW", "Ford", "MB"];
