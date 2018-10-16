
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>
<body>

<div class="container">
  <div id="myCarousel" class="carousel slide">
    <!-- indikatoriai -->
    <ol class="carousel-indicators">
      <li class="item1 active"></li>
      <li class="item2"></li>
      <li class="item3"></li>
      <li class="item4"></li>
      <li class="item5"></li>

    </ol>

    <!-- Wrapperiai skaidrem -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="../galerija/tlc-microblading.jpg" alt="foto" width="460" height="345">
        <div class="carousel-caption">
          <h3>Žvilgsnis</h3>
          <p>Grožis slypi paprastume</p>
        </div>
      </div>

      <div class="item">
        <img src="../galerija/Dainora.jpg" alt="Dainora" width="460" height="345">
        <div class="carousel-caption">
          <h3>......</h3>
          <p>.....</p>
        </div>
      </div>

      <div class="item">
        <img src="../galerija/karusele1.jpg" alt="antakiai" width="460" height="345">
        <div class="carousel-caption">
          <h3>Lūpų korekcija</h3>
          <p>Paprasta ir nebrangu</p>
        </div>
      </div>

      <div class="item">
        <img src="../galerija/karusele2.jpg" alt="antakiai" width="460" height="345">
        <div class="carousel-caption">
          <h3>Antakiai</h3>
          <p>.....</p>
        </div>
      </div>

      <div class="item">
        <img src="../galerija/karusele3.jpg" alt="antakiai" width="460" height="345">
        <div class="carousel-caption">
          <h3>Antakiai</h3>
          <p>.....</p>
        </div>
      </div>



    </div>

    <!-- kaires ir desines controle -->
    <a class="left carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span></span>
    </a>
  </div>
</div>

<script>
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel();

    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });
    $(".item5").click(function(){
        $("#myCarousel").carousel(4);
    });


    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});
</script>

</body>
