<div class="navbar">
	<a href="#">music</a>

	<a href="Php/edward.php">Edward</a>
	<a href="Php/From.php">Add File</a>
	<div class="dropdown">
    <button class="dropbtn">info
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">about</a>
      <a href="#">contact</a>
    </div>

  </div>
  <div class="slidecontainer">
  <input type="range" min="1" max="2" value="1" class="slider" id="myRange">
  <p>Value: <span id="demo"></span></p>
</div>

<script>

var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
if (slider.value == 1){
	output.innerHTML = "night";
}
else {
	output.innerHTML = "day";
}
}
</script>
</div>