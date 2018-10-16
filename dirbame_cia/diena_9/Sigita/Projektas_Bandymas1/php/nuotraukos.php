<div class="main">

<h1>MYLOGO.COM</h1>
<hr>

<h2>PORTFOLIO</h2>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Rodyti visas </button>
  <button class="btn" onclick="filterSelection('antakiai')"> Antakiai </button>
  <button class="btn" onclick="filterSelection('lupos')"> Lupos </button>
  <button class="btn" onclick="filterSelection('ivairios')"> Ivairios </button>
</div>
<!-- nuotrauku galerijos konteineris -->

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column antakiai">
    <div class="content">
      <img src="../galerija/41680192_1706889262767857_3736735905319223296_n.jpg" alt="Mountains" style="width:100%">
      <h4>Mountains</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column antakiai">
    <div class="content">
    <img src="../galerija/41790381_311864902925830_4691595899309129728_n.jpg" alt="Lights" style="width:100%">
      <h4>Lights</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column antakiai">
    <div class="content">
    <img src="../galerija/41777870_260941704761399_3054270133175320576_n.jpg" alt="Nature" style="width:100%">
      <h4>Forest</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

  <div class="column lupos">
    <div class="content">
      <img src="../galerija/Dainora.jpg" alt="Car" style="width:100%">
      <h4>Retro</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column lupos">
    <div class="content">
    <img src="../galerija/ika-dam-528988-unsplash.jpg" alt="Car" style="width:100%">
      <h4>Fast</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column lupos">
    <div class="content">
    <img src="../galerija/tlc-microblading.jpg" alt="Car" style="width:100%">
      <h4>Classic</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>

  <div class="column ivairios">
    <div class="content">
      <img src="../galerija/ne41790381_311864902925830_4691595899309129728_n.jpg" alt="Car" style="width:100%">
      <h4>Girl</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column ivairios">
    <div class="content">
    <img src="../galerija/sakuros.jpg" alt="Car" style="width:100%">
      <h4>Man</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
  <div class="column ivairios">
    <div class="content">
    <img src="../galerija/pagrindine_nuotrauka.jpg" alt="Car" style="width:100%">
      <h4>Woman</h4>
      <p>Lorem ipsum dolor..</p>
    </div>
  </div>
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>
<!-- baigiasi nuotrauku konteineris -->
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12" style="height:30px;">
    </div>
  </div>
</div>
<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    galerijaRemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) galerijaAddClass(x[i], "show");
  }
}

function galerijaAddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function galerijaRemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
