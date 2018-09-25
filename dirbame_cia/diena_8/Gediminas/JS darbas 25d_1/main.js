// Pirmas variantas sprendimo ( kad kas antrame butu 2 pvz 1,2,1,2,1,2) 6 pratimas is 8 d.
var masA = [1,1,1,1,1,1];
var masB = [2,2,2,2,2,2];

var masC = [];
var j = 0;
for (var i = 0; i < masA.length && i <masB.length; i++) {
  masC [j] = masA [i];
  j++;
  masC [j] = masB [i];
  j++;
}
console.log (masC);

//Antras variantas sprendimo
var masA = [1,1,1,1,1,1];
var masB = [2,2,2,2,2,2];

var masC = [];

for (var i = 0; i < masA.length;  i++) {
  masC [i*2+1] = masA [i];
}
for (var i = 0; i < masA.length;  i++) {
  masC [i*2+1] = masB [i];
}
console.log (masC);
// Sekantis pratimas sunkesnis reikia pasitaisyti neiki galo isprestas
var prekes = ["bulves", "morkos", "duona", "miltai", "agurkai" ];
var reserved = [];
var to = prekes.length;

//
for (var i = 0; i < to; i++) {
var t = prekes.pop ();
prekes.shift (t)

}
console.log (to);
