console.log("labas");
// $ (document).ready(function(){
//
//   $("#show").click(function(){
//     $("p").slideDown(); //paspaudus mygtukas tekstas vel atsiranda nusirisdamas i apacia vel atsiranda
//   });
//   $("p.slideUp").click(function(){
//     $(this).slideUp(); //uzrasas sulenda graziai i virsu ir dingsta
//   });
//
// $ ("p:not(.slideUp)").click(function(){
//   $(this).hide(); //uzrasai tiesiog isnyksta
// });
// $("h1, h2").css({"color": "blue"});
// $("h2:odd").css({"color": "red"});
// $("li:last").css({"color": "green"});
// $("li").css({"color": "green"});
// $("li:not(.reklama)").css({"color": "yellow"}); //visus li isskyrus su klase reklama
// });

// .html kodas:


// UZDUOTIS 1
// pakeisti visus h1 tekstus i "Antraste nr: XX" ( vietoj "xx" isvesti skaiciu, kelinta tai antrate)
$("h1").text("Antraste nr: 1");
$("h1:last").text("Antraste nr: 2");
//jei butu daugiau h1 tai galima butu
$("h1").text(function(index){
  return "Antrastes numeris" + (index + 1);
});
// arba dar galimas variantas
// $("h1").text(function(index){
//   $(this).text("Antrastes numeris" + (index + 1));
// });
// =============
//  UZDUOTIS 2
// pakeisti visus h2 tekstus, kurie yra "section" elemente.
// pakeisti i "Pakeista antraste "
$("section h2").text("Pakeista antraste");
// UZDUOTIS 3
// i console atspausdinti "li" elemento, kurio klase "reklama" - teksta

console.log($("li.reklama").text());

// UZDUOTIS 4
// i console atspausdinti  visus "li" tekstus
console.log($("li").text());
//-------advance --------

// UZDUOTIS 5
// sukeisti vietomis "li" elementu "about" ir "gallery" (naujant jQuery)
var about = $("li:nth-of-type(2)"); //ul li:eq(1) tada galima kitaip paimt. dar vienas is variantu
var gallery = $("li:nth-of-type(3)");
var t = about.text();
about.text(gallery.text());
gallery.text(t); //galima butu is karto staytis i funkcija,bet issisaugojus juos i kintamuosius viskas aiskiau.


//------ atributes--------------------------
// UZDUOTIS 6
// surasti <li class='reklama'> ir jam ideti dar viena atributa: style='color: red'   (naujant jQuery)
$("li.reklama").css({"color" : "red"});
// UZDUOTIS 7
// A. visiems "li" elementams pridete atributa: class='nav-item '   (naujant jQuery)
// B. pirmam "li" elementui uzddeti dar viena klase: "active"
$("li").addClass("nav-item");
$("li:first").addClass("active");

// UZDUOTIS 8
//   su jquery uzpildyti form'a uz vartotoja:
//  visiems "input" elementams pridete atributa: value=' xxx '   (naujant jQuery)
//  ivesti vardas: 'Tomas'
//  ivesti pastas: 'a@a.lt'

$("input").val("xxx");
$("input[type=text]").val("Tomas");
$("input[type=email]").val("alfa@");
