// ========js best practice & common mistakes (~2h)

// UZDUOTIS:
// sukurti vienos masinos duomenu masyva:
//  pavadinimas, pravaziuota rida, kaina

var automobilis = ["Audi", 12000, 3000];

printApieAutomobili();

function printApieAutomobili() {
  document.querySelector("h1").innerHTML = "";
  for (var i = 0; i < automobilis.length; i++) {
    document.querySelector("h1").innerHTML += "<br>" + automobilis[i];
  }
}

function pakeistiKaina(kaina) {
  automobilis[2] += kaina;
  printApieAutomobili();
}

function pakeistiRida(rida) {
  automobilis[1] += rida;
  printApieAutomobili();
}

function papildomiElementai(x) {
  automobilis.push(x);
  printApieAutomobili();
}

papildomiElementai("Tomas");
papildomiElementai(2014);


// 1. isvesti masyvo duomenis
// 2. padidinti kaina: 100
// 3. padidinti rida: -50000
// 4. i masyva ideti papildomus duomenis: savininko vardas "Tomas"
// 4.1 atspausdinti visus pakeistus masyvo duomenis
// 5. i masyva ideti papildomus duomenis: masinos metai "2004"

function printAutomobilioArticle() {
  document.querySelector("body").innerHTML = "<article><h2>Automobilio pavadinimas: " + automobilis[0] + "</h2><br><div>Savininko vardas: " + automobilis[3] + "</div><br><span> Automobilio metai: " + automobilis[4] + "; Rida: " + automobilis[2] + "</span><br><button>Kaina: " + automobilis[1] + "</button></article>";
}

// sunkesne:
// html elemnetus: article, h2, ... susikurti su javascript/ innerHTML
// 6. atspausdinti masyvo duomenis i ekrana:
// <article>
//      <h2> pavadinimas </h2>
//      <div> savininko vardas: ...</div>
//      <span> masinos metai: ...  Rida: ...</span>
//      i mygtuka ideti: masinos kaina ....
// </article>

//=============bootstrap---sm-md-lg-xl (30-60m)==========
