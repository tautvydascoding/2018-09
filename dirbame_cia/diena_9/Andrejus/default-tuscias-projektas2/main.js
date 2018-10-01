console.log(  "Labas pasauli"  );

window.onload = function () {
  var masiv = [];
  for (i = 0; i<60; i++){
  masiv[i] = randomNom(10, 100);
  }
  console.log(masiv);
var sum = 0;
for (var i = 0; i<masiv.length; i++) {
  sum += masiv[i];
}
console.log(sum);
console.log(sum / masiv.length);
console.log("");
// sum kintamasis yra musu visu sandeliu suma
// sum/masiv.length yra sandeliu prekiu vidurkis
// kaip rasti visus sandelius
// kuriu prekiu kiekis (masyvos elemento reiksme)
// yra mazesne nei rastas vidurkis?
// masyvas? -> for ciklas
// mazesnis? - > if <
// neaiskus kiekis? - > naujas masyvas

var prodVid = sum / masiv.length;
// aprasau kas yra produkto vidurkis
var lowerMid = [];
// sukuriu tuscia masyva kur diesim rezultatus
for (var i = 0; i < prodVid; i++) {
  // padarom for cikla
  if (masiv[i] < prodVid) {
    // idedam if nes reikia kad duotu rezultata su mintim kad jei maziau nei uz vidurki mum duos indexus
    lowerMid.push(i);
    // pushinam tada i buvusi tuscia masyva
  }
}
console.log(lowerMid);

  function randomNom(min, max){
    return Math.floor(Math.random()*(max-min+1))+min;
  }
};
