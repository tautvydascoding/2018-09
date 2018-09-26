// console.log(  "Labas pasauli"  );

// 3 UZDUOTIS

// sukurti kintamuosius "arPrisijunges" (prie puslapio) "vartotojoTipas" (moderator, admin, subscriber), "userName"

// parasyti koda, kuris patikris ar   vartotojas - sekmes atveju - pasisveikins su jo vardu.

// Jeigu vartotojas adminas isves ir paveiksliuka i ekrana, jeigu subscriber - isves  paveiksliuka

var arPrisijunges = true;
var vartotojoTipas = "subscriber";
var userName = "tomas";

if (arPrisijunges) {
  console.log("sveiki - " + userName);
  if (vartotojoTipas == "admin") {
    console.log("esate administratorius");
  }
  if (vartotojoTipas == "subscriber") {
    console.log("esate subscriberis");
  }
} else {
  console.log("esate neprisijunges");
}
