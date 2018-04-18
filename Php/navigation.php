
<div class="navbar">
	<a href="Php/Music.php">music</a>
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
		
		<input type="checkbox" id="toggle" onclick="myFunction()" />
		<label for="toggle"></label>
	</div>
<script>
function myFunction() {
			var x = document.getElementById('pagestyle').getAttribute('href');
			if(x == "edward.css") {
				document.getElementById('pagestyle').setAttribute('href', 'day/mode.css');
				
			}else{
				document.getElementById('pagestyle').setAttribute('href', 'night/mode.css');
				
		}
 		}

</script>
	</div>
	