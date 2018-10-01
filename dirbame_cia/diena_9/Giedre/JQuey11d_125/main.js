
// UZDUOTIS 1
// pakeisti visus h1 tekstus i "Antraste nr: XX" ( vietoj "xx" isvesti skaiciu, kelinta tai antrate)

//  UZDUOTIS 2
// pakeisti visus h2 tekstus, kurie yra "section" elemente.
// pakeisti i "Pakeista antraste "

// UZDUOTIS 3
// i console atspausdinti "li" elemento, kurio klase "reklama" - teksta

// UZDUOTIS 4
// i console atspausdinti  visus "li" tekstus

//-------advance --------

// UZDUOTIS 5
// sukeisti vietomis "li" elementu "about" ir "gallery" (naujant jQuery)

$(document).ready(function(){

    // $("button").click(function(){
    //     $("p").hide();
    // });

// UZDUOTIS 1
    $("h1").text(function(index) {
        $(this).text("Antraste nr: "+ (index + 1));
    });

//  UZDUOTIS 2
    $("section > h2").text(function() {
        $(this).text("Pakeista antraste");
    });

//  UZDUOTIS 3
    console.log($("li.reklama").text());
       
//  UZDUOTIS 4
    console.log($("li").text());

//  UZDUOTIS 5
// "li:nth-of-type(2)" == "ul li:eq(1)"

var about = $("li:nth-of-type(2)");
var gallery = $("li:nth-of-type(3)");

var t = about.text();

about.text(gallery.text());
gallery.text(t);

//------ atributes--------------------------
// UZDUOTIS 6
// surasti <li class='reklama'> ir jam ideti dar viena atributa: style='color: red'   (naujant jQuery)

$("li.reklama").css("color", "red");


    
  
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

$("input[type=email]").val("a@a.lt");
$("input[type=text]").val("Tomas");

});

