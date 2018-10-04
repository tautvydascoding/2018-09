// console.log(  "Labas pasauli"  );
// $(document).ready(function functionName() {
//   // $("p").click(function(){
//   //        $(this).hide();
//   //    });
//      $("#show").click(function () {
//        $("p").show();
//      });
//
//      $("p.slideUp").click(function () {
//        $(this).slideUp();
//      });
//
//      $("p:not(.slideUp)").click(function () {
//        $(this).hide();
//      });
//
//
//
//
// });
console.log(  "Labas pasauli"  );
$(document).ready(function functionName() {
  // $("p").click(function(){
  //        $(this).hide();
  //    });
     $("#show").click(function () {
       $("p").fadeIn("slow");
     });

     $("p.slideUp").click(function () {
       $(this).slideUp();
     });

     $("p:not(.slideUp)").click(function () {
       $(this).hide();
     });

     /////////////////////////
      $("p").fadeIn();




});
