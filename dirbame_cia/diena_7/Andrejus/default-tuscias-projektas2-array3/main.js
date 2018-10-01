console.log(  "Labas pasaulis"  );
// ===========================================================
var names = ["Tomas", "Waits", 25, "VDU - inzinerija"];

for (var i = 0; i<names.length; i++){
  console.log(names[i]);
}
console.log("============================");
// ========================================== lenght
names.lenght;
for (var i = 0; i<names.length; i++){
  console.log(names[i]);
}
console.log("============================== shift");
// ===============================================shift - paima pirma elementa ir ji ismeta is masyvo/ kitus elementus pastumia i kaire ( sumazina ju indeksus)
var pirmasElementas = names.shift();
console.log(pirmasElementas);
console.log("");
for (var i = 0; i<names.length; i++){
  console.log(names[i]);
}
console.log("================================ pop");
// ================================================pop - atiduoda paskutini elementa ir ismeta ji is masyvo.
var paskutinisElementas = names.pop();
console.log(paskutinisElementas);
console.log("");
for (var i = 0; i<names.length; i++){
  console.log(names[i]);
}
console.log("=============================== unshift");
// ==============================================unjoin prideda elementa i masyvo pradzia
names.unshift("Vardeniai");
console.log(names);
console.log("=====================================push");
// ================================================push - pridedamas elementas i masyvo gala
names.push("tomazas");
console.log(names);

console.log("====================================join");
// ==============================================join - visus masyvo elementus apjungia i eilutes tipo reiksme/ atskirdama narius simboliais, pagal nutylejima ","
console.log(names.join());
console.log(names.join(""));
console.log(names.join(", "));
console.log("====================================splice");
// ============================================ splice - (1) grazina nauja masyva kurie pradzia yra duodtas argumentas/ jeigu turim pasyva [1,2,3,4,5...] mas.splice (3) => [4,5]; mas => [1,2,3]/// is origanalaus masyvo tuos elementus istrina
console.log(names.splice(2));
console.log(names);
console.log("");

// splice (0,1) tai pirmas nurodo nuo kurio elemento iskirtpti elementus o antras nurodo kiek elementu iskirpt
// mas = [1,2,3,4,5,6,7] / mas.splice (3,2) => [4,5]; mas => [1,2,3,6,7]/ index 0 1 2 3 4 5 6 // is originalas masyvo tuos elementus istrina

var mas = [1,2,3,4,5,6,7];
console.log(mas);;
console.log(mas.splice(3,2));
console.log(mas);
console.log("===========================concat");
// ===========================================concat - sudeda du masyvus ir grazina nauja Masyva
var naujas = names.concat(mas);
console.log(naujas);
console.log(names);
console.log(mas);
console.log("");

console.log("========================uzduotis======================");
// SAVARANKISKA UZDUOTIS  Array
// keliautojas = ["Tomas", "Pietkus", 25, "VDU - inzinerija"];

// 1. i masyvo gala ideti elmenta "butelis vandens"
// 2. i masyvo pradzia ideti elmenta "ziebtuvelis"
// 3. istrinti 3-cia elmenta

// --------GERESNI UZDAVINIAI:
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....

var keliautojas = ["Anna", "Svetlova", 25, "KTU - IT"];
keliautojas.push("butelis vandens");
console.log(keliautojas);
console.log("=====1=====");

keliautojas.unshift("ziebtuvelis");
console.log(keliautojas);
console.log("======2======");

console.log(keliautojas.splice(2,1));
console.log(keliautojas);
console.log("=====3========");

console.log("=========================smagesni uzdaviniai=========");
// 4. sukurti masyva (50 ilgumo) naudojant FOR ir uzpildyti visa skaiciais "0" (kiekvienas stalcius turi but lygus "0");

var skaiciai = [];
for (var i = 0; i<50; i++){
  skaiciai [i]=0;
}
for (var i = 0; i<50; i++){
  console.log(skaiciai[i]);
}
console.log("");

// 5.1  sukurti masyva naudojant WHILE (50 ilgumo) ir uzpildyti visa skaiciumi 1;
// 5.2: kas antra ^ masyvo elementa pakeisti i "3"
// [1, 3, 1, 3, 1, 3, 1, 3, 1, 3, ....
// 5.3: kas 5-ta ^ masyvo elementa pakeisti i "9"
// [1, 3, 1, 3, 9, 3, 1, 3, 1, 9, ....

var skaicia = [];
var i = 0;
while (i<50) {
  skaicia[i] = 1;
  i++;
}
console.log(skaiciai);
console.log("========5.1=======");

for (var i = 0; i<50; i++) {
  if (i % 2 == 1){
    skaicia[i] = 3;
  }
}
console.log(skaicia);
console.log("======5.2=======");

for (var i = 0; i<50; i++) {
  if (i % 5 == 4){
    skaicia[i] = 9;
  }
}
console.log(skaicia);
console.log("=======5.3========");
// ================================
// i = 0;
// while (i <50) {
//
// if (i % 2 == 1);{
//   skaicia [i] = 3;
//   }
//   if (i % 5 == 4){
//     skaicia [i] = 9;
//   }
//   i++;
// }
// console.log(skaicia);
// console.log("=====pvz=====");
// ==========================================
// for (var i = 0; i<50; i++) {
//   if (i % 3 == 0){
//     // i=>0, 3, 6, 9, 12......
//   }
//   if (i % 3 == 2){
//     // i => 2, 5, 8.....
//   }
//   if (i % 7 == 3) {
//     // i => 3, 10, 17
//   }
// }
