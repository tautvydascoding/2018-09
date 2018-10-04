console.log("labas");
$ (document).ready(function(){

  $("#show").click(function(){
    $("p").slideDown(); //paspaudus mygtukas tekstas vel atsiranda nusirisdamas i apacia vel atsiranda
  });
  $("p.slideUp").click(function(){
    $(this).slideUp(); //uzrasas sulenda graziai i virsu ir dingsta
  });

$ ("p:not(.slideUp)").click(function(){
  $(this).hide(); //uzrasai tiesiog isnyksta
});
$("h1, h2").css({"color": "blue"});
$("h2:odd").css({"color": "red"});
$("li:last").css({"color": "green"});
$("li").css({"color": "green"});
$("li:not(.reklama)").css({"color": "yellow"}); //visus li isskyrus su klase reklama
});

//  visur naudoti tik jQuery!!!!!!

// UZDUOTIS 1

// .html kodas:
// <h1>Isijunk konsole</h1>
// <h1>Isijunk konsole</h1>
//
// <h2> 1. h2 Isijunk konsole</h2>
// <h2> 2. h2 Isijunk konsole</h2>
// <h2> 3. h2 Isijunk konsole</h2>
//
//  <section>
//      <h2> h2 Isijunk konsole</h2>
//      <h2> h2 Isijunk konsole</h2>
//      <h2> h2 Isijunk konsole</h2>
//      <h2> h2 Isijunk konsole</h2>
//  </section>
//
// <ul>
//     <li>Home</li>
//     <li>About</li>
//     <li classs='reklama'>Gallery</li>
//     <li>Contact</li>
// </ul>
//        <input type="text" name="vardas" value="">
//        <input type="email" name="pastas" value="">

// A) visus h1 ir h2 pakeisti i melyna spalva (visur naudoti tik jQuery)
// A2) kas antra h2 pakeisti i raudona
// B) paskutinta "li" elemnta pakeisti i zalia (visur naudoti tik jQuery)
// C) visus 'li' elementus pakeisti i geltonus (isskyrus su klase 'reklama') pvz.: li:not('.reklama') {}
