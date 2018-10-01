// console.log(  "Labas pasauli"  );
// var mas = [];
// for (var i = 0; i < 60; i++) {
//   mas[i] = atsitiktinisSk(10, 100);
//   var a = Math.random();
//   if (a <= 0.1) {
//     mas[i] *= -1;
//   }
// }
// for (var i = 0; i < mas.length; i++) {
//   if (mas[i] < 0) {
//   mas[i] = Math.abs(mas[i]);
//   }
// }
// console.log(mas);
var mas = [];
for (var i = 0; i < 60; i++) {
  mas[i] = atsitiktinisSk(10, 100);
}
console.log(mas);
var sum = 0;
for (var i = 0; i < mas.length; i++) {
  sum +=  mas[i];
}
console.log(sum);
console.log(sum / mas.length);
var vid = sum / mas.length;
for (var i = 0; i < mas.length; i++) {
  if (mas[i] < vid) {
    mazesniIdeksai.push(i);
  }
}
// var largest = mas[0];
// var indexLargest = 0;
// var smallest = mas[0];
// var indexSmallest = 0;
// for (var i = 0; i < mas.length; i++) {
//   if (mas[i] > largest) {
//     largest = mas[i];
//     indexLargest = i;
//   } else if (mas[i] < smallest) {
//     smallest = mas[i];
//     indexSmallest = i;
//   }
// }
// console.log(mas);
// console.log("didziauisas sk ", largest);
// console.log("didziausio sk vieta ", indexLargest);
// console.log("maziausias sk ", smallest);
// console.log("maziausio sk vieta ", indexSmallest);

function atsitiktinisSk(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}


// for (var i = 0; i < mas.length; i++) {
//   if (mas[i] % 2 == 0) {
//       mas[i] = "lyginis";
//   }
// }
