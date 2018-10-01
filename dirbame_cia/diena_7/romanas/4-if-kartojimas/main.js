

// 3 UZDUOTIS

// sukurti kintamuosius "arPrisijunges" (prie puslapio) "vartotojoTipas" (moderator, admin, subscriber), "userName"

var arPrisijunges = true;
var vartotojoTipas = "subscriber";
var userName = "Tomas";

// parasyti koda, kuris patikris ar   vartotojas - sekmes atveju - pasisveikins su jo vardu.

if (arPrisijunges === true && vartotojoTipas === "admin") {
    document.querySelector("body").innerHTML = "Sveikas, " + userName + "<br><img src='https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg' width='300px'/> " ;
} else if (arPrisijunges === true) {
    document.querySelector("body").innerHTML = "Sveikas, " + userName;
} else if (vartotojoTipas === "subscriber") {
    document.querySelector("body").innerHTML = "<br><img src='https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg' width='300px' /> " ;
} else {
  document.querySelector("body").innerHTML = "Do nothing" ;
}


// Jeigu vartotojas adminas isves ir paveiksliuka i ekrana, jeigu subscriber - isves  paveiksliuka
