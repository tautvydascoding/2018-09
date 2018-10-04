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






//

var vardai = ["Jonas", "Petras", "Povilas", "Kestas", "Karolis"];

console.log(vardai);
vardai.shift();
console.log(vardai);
vardai[2] = "Marija";
console.log(vardai);

//////////////////////////////////////////////////////////
// 6. sukurti du masyvus (skirtingus)
// naudojant for cikla sujungti juos, kas antra elementa
// [pirmo masyvo, antro masyvo, pirmo masyvo, antro masyvo , ...]



var masA = [1,1,1,1,1,1,1,1,1,1];
var masB = [2,2,2,2,2,2,2,2,2,2];

var masC = [];
var j = 0;

for (var i = 0; i<masA.length && i < masB.length; i++ ){
  masC[j] = masA[i];
  j++;
  masC[j] = masB[i];
  j++;
}
console.log(masC);

//////////////////////////////////////////////////////////
// sunkesnis
// susikurti masyva su prekiu pavadinimais
// naudojant FOR  parasykite/pergrupuokite ji atvirksciai
// ! nenaudojant "reverse"

var prekes =["bulves", "morkos", "duona","agurkai","miltai"];
var reversed =[];
var to = prekes.length;
for (var i = 0; i < prekes.length; i++) {
  var t = prekes.shift();
  // prekes.push();
  reversed.unshift(t);
}
console.log(reversed);
// /////////////////////////////////////////////////////////

// var mas = [];
// mas [name] = "Tomas";
// mas [pavarde] = "Pavavardenis";
// console.log(mas);

function testas() {
  for (var i = 0; i < 15; i++) {
    document.write("bandymas" + "<br>")
  }
}
testas();
