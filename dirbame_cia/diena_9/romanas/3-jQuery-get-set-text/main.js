$(document).ready(function() {


  //  visur naudoti tik jQuery!!!!!!


  // UZDUOTIS 1
  // pakeisti visus h1 tekstus i "Antraste nr: XX" ( vietoj "xx" isvesti skaiciu, kelinta tai antrate)
  function keistiAntraste(num) {
    $("h1").text("Antraste nr: " + num);
  }

  keistiAntraste(3);



  //  UZDUOTIS 2
  // pakeisti visus h2 tekstus, kurie yra "section" elemente.
  // pakeisti i "Pakeista antraste "

  $("section>h2").text("Pakeista antraste");


  // UZDUOTIS 4
  // i console atspausdinti  visus "li" tekstus

  function atspausdintiVisusLi() {
    var liArray = [];
    var numItems = $('li').length;
    for (var i = 0; i <= numItems; i++) {
      liArray[i] = $("li:nth-of-type(" + i + ")");
      console.log(liArray[i].text());
    }
  }

  atspausdintiVisusLi();


  //-------advance --------

  // UZDUOTIS 5
  // sukeisti vietomis "li" elementu "about" ir "gallery" (naujant jQuery)


  var about = $("li:nth-of-type(2)");
  var gallery = $("li:nth-of-type(3)");
  var temp = about.text();
  about.text(gallery.text());
  gallery.text(temp);

  //------ atributes--------------------------
  // UZDUOTIS 6
  // surasti <li class='reklama'> ir jam ideti dar viena atributa: style='color: red'   (naujant jQuery)

  $("li.reklama").css("color", "red");

  // UZDUOTIS 7
  // A. visiems "li" elementams pridete atributa: class='nav-item '   (naujant jQuery)
  // B. pirmam "li" elementui uzddeti dar viena klase: "active"

  $("ul").addClass('nav');
  $("li").addClass('nav-item');
  $("li:first-of-type").addClass('active');

  // UZDUOTIS 8
  //   su jquery uzpildyti form'a uz vartotoja:
  //  visiems "input" elementams pridete atributa: value=' xxx '   (naujant jQuery)
  //  ivesti vardas: 'Tomas'
  //  ivesti pastas: 'a@a.lt'

  $("input").attr("value", "xxx");
  $("input[type='text']").attr("value", "Tomas");
  $("input[type='email']").attr("value", "a@a.lt");



});
