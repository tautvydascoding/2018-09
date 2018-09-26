// apsilimui

var masyvas = [];
var min = 10;
var max = 100;
// 0 UZDUOTIS - pasikartoti:
// skaicius, kurie yra lyginiai i pakeisti i zodi "lyginis"

function lyginiai(min, max) {
  for (var i = min; i <= max; i++) {
    if (i % 2 === 0) {
      masyvas.push("lyginis");
    } else {
      masyvas.push(i);
    }
  }
  console.log(masyvas.join());
}

// lyginiai(min, max);

// 1 UZDUOTIS:
// kursime nauja masyva uzpildyta, atsitiktiniais skaiciais nuo 10 - 100.
// masyvo ilgis 60

var min = 10;
var max = 100;
var ilgis = 60;

function randomNumber(min, max) {
  var randomNumber = Math.floor((Math.random() * (max - min + 1)) + min);
  return randomNumber;
}

function setRandomArray(min, max, ilgis) {
  var arr = [];
  for (var i = 0; i < ilgis; i++) {
    arr[i] = randomNumber(min, max);
  }
  // console.log(arr.join());
  return arr;
}

// 2 UZDUOTIS:
// burtu keliu masyvo narius, su 10 % tikimybe paversti negiamais  ( padauginti is  -1)
// pvz:
// var a = Math.random(); // nuo 0 iki 1 (1- neiskaitant)
// if ( a <= 0.1) {
//     console.log( "laimejai" );
// }

function randomTikimybe(min, max, ilgis) {
  var arr = setRandomArray(min, max, ilgis);
  var neg = 0;
  var pos = 0;
  for (var i = 0; i <= arr.length; i++) {
    var a = Math.random();
    if (a <= 0.1) {
      arr[i] = arr[i] * -1;
      neg++;
    } else {
      pos++;
    }
  }
  // console.log(arr);
  // console.log("Neigiamų skaičių: " + neg);
  // console.log("Teigiamų skaičių: " + pos);
  return arr;
}


// randomTikimybe(min, max, ilgis);


// 3 UZDUOTIS:
// visus skaicius paversti teigiamas (is masyvo parts)

function negativesToPositives(min, max, ilgis) {
  var arr = randomTikimybe(min, max, ilgis);
  console.log("Masyvas su neigiamais skaičiais:");
  console.log(arr.join());
  for (var i = 0; i < arr.length; i++) {
    // // arba naudoti absolute funkcija - ji visus skaicius pakeicia i teigiamus (iskaitant ir teigiamus)
    // arr[i] = Math.abs(arr[i]);
    // // arba naudoti absolute + if
    // if (arr[i] < 0) {
    //   arr[i] = Math.abs(arr[i]);
    // }
    if (arr[i] < 0) {
      arr[i] *= -1;
    }
  }
  console.log("Masyvas be neigiamų skaičių:");
  console.log(arr.join());
}

//Sugeneruoti atsitiktiniu skaiciu masyva ir jame rasti didziausia ir maziausia skaiciu.

function arrayMinMax(min, max, ilgis) {
  var arr = setRandomArray(min, max, ilgis);
  var currentMin = max;
  var currentMax = min;
  var minIndex;
  var maxIndex;
  for (var i = 0; i < arr.length; i++) {
    if (currentMin > arr[i]) {
      currentMin = arr[i];
      minIndex = i;
    } else if (currentMax < arr[i]) {
      currentMax = arr[i];
      maxIndex = i;
    }
  }
  console.log(arr.join());
  console.log("Minimalus skaicius: " + currentMin);
  console.log("Maksimalus skaicius: " + currentMax);
  console.log("Minimalaus indeksas: " + minIndex);
  console.log("Maksimalaus indeksas: " + maxIndex);
}

function arrayMinMaxSuFunkcijom(min, max, ilgis){
  var arr = setRandomArray(min, max, ilgis);
  console.log(arr.join());
  console.log("Minimalus skaičius: " + Math.min(...arr));
  console.log("Maksimalus skaičius: " + Math.max(...arr));
}

function generuotiVarduArray(ilgis) {
  var arr = [];
  var vardas;
  for (var i = 1; i <= ilgis; i++) {
    vardas = "Vardas" + i;
    arr.push(vardas);
  }
  console.log(arr);
  return arr;
}

// Set random array, kurie atspindes skirtingu sandeliu likucius
// rasti sandeliu likuciu vidurki
// rasti visus sandelius, kuriu likuciu vidurkis yra mazesnis uz vidurki

function setSandelius(min, max, ilgis) {
  var likuciaiSandeliuose = setRandomArray(1, 100, 60);
  var sandeliuPavadinimai = [];
  var sum = 0;
  for (var i = 0; i < likuciaiSandeliuose.length; i++) {
    sum += likuciaiSandeliuose[i];
    sandeliuPavadinimai.push("Sandelys nr." + (i+1));
  }
  var vidurkis = sum / likuciaiSandeliuose.length;

  console.log("Sandeliu pavadinimai:");
  console.log(sandeliuPavadinimai.join());
  console.log("Likuciai sandeliuose:");
  console.log(likuciaiSandeliuose.join());
  console.log("Sandeliu likuciu suma:");
  console.log(sum);
  console.log("Sandeliu vidurkis");
  console.log(vidurkis);

  for (var i = 0; i < likuciaiSandeliuose.length; i++) {
    if (likuciaiSandeliuose[i] < vidurkis) {
      console.log(sandeliuPavadinimai[i] + "(" + likuciaiSandeliuose[i] + ")");
    }
  }
}





// 4 UZDUOTIS:
// surasti geriausia darbuotoja
// 5 UZDUOTIS:
//surasti blogiausia darbuotoja
