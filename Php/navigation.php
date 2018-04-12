<div class="navbar">
	<a href="#">music</a>
	<a href="Php/edward.php">Edward</a>
	<a href="Theo/sandbox.php">Theo</a>
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
		<input type="range" min="0" max="1" value="0" class="slider" id="myRange" name="nightslider">
		</form> 
		<p>Value: <span id="demo"></span></p>
	</div>
	
	<script>


	var slider = document.getElementById("myRange");
	var output = document.getElementById("demo");

	slider.value = 0;

	function showNightmodeSliderText() {
	if (slider.value == 0){
		output.innerHTML = "day";
	} else {
		if(slider.value == 1) {
			output.innerHTML = "night";
		}else{
			output.innerHTML = "error: nightmode not found";
		}
	}
	}

	slider.oninput = showNightmodeSliderText;
	showNightmodeSliderText();

	</script>
</div>