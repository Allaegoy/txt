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
  <?php
	$temp = $_SESSION['nightmode'];
	echo "<script type='text/javascript'>alert('Value of SESSION in nav: $temp');</script>";
  ?>
  
   <form method="POST" action="/nightmode.php>
  <input type="range" min="0" max="1" <?php echo 'value="$temp"';?> class="slider" id="myRange" name="nightslider">
</form> 
  
  <p>Value: <span id="demo"></span></p>
</div>

<script>



var slider = document.getElementById("myRange");
var output = document.getElementById("demo");

function showNightmodeSliderText() {
	if (slider.value == 0){
		output.innerHTML = "day";
	} else {
		alert('begin first else statement');
		if(slider.value == 1) {
			output.innerHTML = "night";
		}else{
			output.innerHTML = "error: nightmode not found";
		}
	}
	<?php $_SESSION['nightmode'] = slider.value ?>
}

slider.oninput = showNightmodeSliderText;

showNightmodeSliderText();
alert('end of loading script');

</script>
</div>