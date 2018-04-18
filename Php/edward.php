<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link id="pagestyle" rel="stylesheet" type="text/css" href="edward.css">
    <title>Night / Day Mode</title>
	
	<script>
	function switch_style(sheet) {
		alert("Pagestyle is changed");
		document.getElementById('pagestyle').setAttribute('href', sheet);
	}
	</script>
	
</head>
<body id="body" class="c-window">
	<div class="the-container">
		<input type="checkbox" id="toggle" onclick="myFunction()" />
		<label for="toggle"></label>

		<script>
		function myFunction() {
			alert("The ontoggle event occured");
			var x = document.getElementById('pagestyle').getAttribute('href');
			if(x == "edward.css") {
				document.getElementById('pagestyle').setAttribute('href', 'dark.css');
			}else{
				document.getElementById('pagestyle').setAttribute('href', 'edward.css');
			}
		}
		</script>
		<div class="day-night-cont">
			<span class="the-sun"></span>
			<div class="the-moon"><span class="moon-inside"></span></div>
			</div>
		  
			<div class="switch">
			<div class="button">
			<div class="b-inside"></div>
		</div>
	</div>
  
  <!-- This is an HTML Comment
	<div class="c-window">
    <span class="the-sun"></span>
    <span class="the-moon"></span>
	</div>
   -->

	<div id="overlay" onclick="off()">
		<div id="text">Overlay Text</div>
	</div>

	<div style="padding:20px">
		<h2>Overlay with Text</h2>
		<button onclick="on()">Turn on overlay effect</button>
	</div>

	<script>
	function on() {
		document.getElementById("overlay").style.display = "block";
	}

	function off() {
		document.getElementById("overlay").style.display = "none";
	}
	</script>
	
	<link rel="alternate stylesheet" type="text/css" title="dark" href="dark.css">
	<input type="submit" onclick="switch_style('edward.css');" name="theme" value="edward Theme" id="edward">
	// <input type="submit" onclick="switch_style('dark.css');" name="theme" value="dark Theme" id="dark">

	</body>
</html>