
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
	<div class="dropdown">
		<button class="dropbtn"> Styles Settings
		<i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-content">
			<a href="Php/stylemode.php?mode=night">Night-mode</a>
			<a href="Php/stylemode.php?mode=day">Day-mode</a>
			<a href="Php/stylemode.php?mode=rainbow">Rainbow-mode</a>
		</div>
	</div>

	<div class="slidecontainer">
		
		<input type="range" min="0" max="2" value="0" class="slider" id="myRange" name="nightslider">
		</form> 
		<p><span class="rainbow">Value: <span id="demo"></span></span></p>
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
			output.innerHTML = "rainbow mode";
		}
	}
	}

	slider.oninput = showNightmodeSliderText;
	showNightmodeSliderText();
</script>
	</div>
	