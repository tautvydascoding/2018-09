console.log(  "Labas pasauli"  );

// ========js best practice & common mistakes (~2h)

// -------- --Array / Masyvai  TEORIJA (~2h)--------------------


	// UZDUOTIS
	// 1.1 sukurti tuscia masyva "prekiautojai"

  var prekiautojai = ["Rimi", "Maxima", "Lidl", "Norfa"];
	// 1.2 uzpildyti masyva prekiaujanciomis imonemis pvz: senukai, ...
	// 1.3 isvesti i console/ekrana "prekiautojai" masyva
  function printVisusPrekiautojus() {
    document.querySelector("h1").innerHTML = "";
    for (var i = 0; i < prekiautojai.length; i++) {
      document.querySelector("h1").innerHTML += "<br>" + prekiautojai[i];
    }
  }


	// 2 pervadinti pirma stalciu pvz + "ir KO"

  function pervadintiStalciu(index, str) {
    prekiautojai[index] += str;
    printVisusPrekiautojus();
  }
 	// 3 sukeisti antro ir trecio stalciu reiksmes vietomis.
		// !negalima rasyti rankomis String (nes duomenys kinta, ir jus nezinote koki duomenys bus po savaites)

  function sukeistiMasyvo2elementus(arr, x, y) {
    var temp = arr[x];
    arr[x] = arr[y];
    arr[y] = temp;
    printVisusPrekiautojus();
  }

	// 3.1  padaryti 3) uzdaviniui f-ja sukeistiMasyvo2elementus(x, y)

	// var prekiautojai = []; // empty array
