
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
        <img src="../galerija/noah-buscher-385639-unsplash.jpg" alt="foto"style="width:100%" >
        <div class="carousel-caption">
          <h3>Žvilgsnis</h3>
          <p>Grožis slypi paprastume</p>
        </div>
      </div>

      <div class="item">
        <img src="../galerija/raphael-lovaski-532696-unsplash.jpg" alt="Dainora" style="width:100%">
        <div class="carousel-caption">
          <h3>Tolerancija yra veikimas, o ne abejingumas.</h3>
          <p></p>
        </div>
      </div>

      <div class="item">
        <img src="../galerija/sarah-comeau-351935-unsplash.jpg" alt="antakiai" style="width:100%">
        <div class="carousel-caption">
          <h3>....Gyvenkite gamtos ritmu ...</h3>
          <p>......</p>
        </div>
      </div>

      <div class="item">
        <img src="../galerija/sam-manns-379040-unsplash.jpg" alt="antakiai" style="width:100%">
        <div class="carousel-caption">
          <h3>Mes esame verti tiek, kiek pasirengę dalintis su kitais</h3>
          <p>..........</p>
        </div>
      </div>

      <div class="item">
        <img src="../galerija/joanna-kosinska-346609-unsplash.jpg" alt="antakiai" style="width:100%">
        <div class="carousel-caption">
          <h3>Juk taip smagu daryti tai, kas neįmanoma :)</h3>
          <p>.....</p>
        </div>
      </div>

    </div>

    <!-- kaires ir desines controle -->
    <a class="left carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    </a>

    <a class="right carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    </a>
  </div>
</div>

<script>
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel();

    // // Enable Carousel Indicators
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
