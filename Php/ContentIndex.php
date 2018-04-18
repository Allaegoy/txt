<div class="row">
    <div id="side" class="side">
		<div class="the-container">
			<input Checked="isNight()" type="checkbox" id="toggle"/ onclick="switchPageStyle()">
			<label for="toggle"></label>
		
			<div class="day-night-cont">
				<span class="the-sun"></span>
				<div class="the-moon">
					<span class="moon-inside"></span>
				</div>
			</div>
		  
			<div class="switch">
				<div class="button">
					<div class="b-inside">
					</div>
				</div>
			</div>
		</div>
		<script>
		function switchPageStyle() {
			var x = document.getElementById('pagestyle').getAttribute('href');
			if(x == "css/night/navbar.css") {
				document.getElementById('pagestyle').setAttribute('href', 'css/day/navbar.css');		
			}else{
				document.getElementById('pagestyle').setAttribute('href', 'css/night/navbar.css');		
			}
		}
		
		function isNight() {
			var x = document.getElementById('pagestyle').getAttribute('href');
			if(x == "css/night/navbar.css") {
				return true;		
			}else{
				return false;
			}
		}
		

		</script>
        <h2>About Us</h2>
        <h5>Photo of Us:</h5>
		<img id="kitten1" src="" border="3"/>
        <p>Some text about Us.</p>
		<p>We are 2 bord guys looking for a cool new project</p>
        <h3>Navigation</h3>
		<?php
		ECHO "Hello World!<br>";
		echo "Hello World!<br>";
		EcHo "Hello World!<br>";
		?>
        <p>Lorem ipsum dolor sit ame.</p>
		<img id="kitten2" src="" border="3"/>
		<img id="kitten3" src="" border="3"/>
		<img id="kitten4" src="" border="3"/>
        <div class="fakeimg" style="height:60px;">Image</div><br>
        <div class="fakeimg" style="height:60px;">Image</div><br>
        <div class="fakeimg" style="height:60px;">Image</div>
	</div>
    <div id="main" class="main">
        <h2>TITLE HEADING</h2>
        <h5>Title description, Dec 7, 2017</h5>
		<img id="kitten5" src="" border="3"/>
        <p>Some text..</p>
        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        <br>
        <h2>TITLE HEADING</h2>
        <h5>Title description, Sep 2, 2017</h5>
		<img id="kitten6" src="" border="3"/>
        <p>Some text..</p>
        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
		<h4>Tom Walker - Leave a Light On (Official Video)</h4>
		<audio controls>
			<source src="music/Tom Walker - Leave a Light On (Official Video).mp3" type="audio/mpeg">
			<source src="music/Welshly Arms - Legendary.mp3" type="audio/mpeg">
			Your browser does not support the audio element.
		</audio>
		<br>
		<h4>Welshly Arms - Legendary</h4>
		<audio controls>
			<source src="music/Welshly Arms - Legendary.mp3" type="audio/mpeg">
			Your browser does not support the audio element.
		</audio>
	</div>
</div>

<script>
		function myFunction() {
			var x = "http://placekitten.com/" + (document.getElementById("side").clientWidth-47-Math.floor((Math.random() * 10) + 1)).toString() + "/200";
			img1 = document.getElementById("kitten1");
			img1.src = x;
			var x = "http://placekitten.com/" + (document.getElementById("side").clientWidth-47-Math.floor((Math.random() * 10) + 1)).toString() + "/60";
			img2 = document.getElementById("kitten2");
			img2.src = x;
			var x = "http://placekitten.com/" + (document.getElementById("side").clientWidth-47-Math.floor((Math.random() * 10) + 1)).toString() + "/80";
			img3 = document.getElementById("kitten3");
			img3.src = x;
			var x = "http://placekitten.com/" + (document.getElementById("side").clientWidth-47-Math.floor((Math.random() * 10) + 1)).toString() + "/100";
			img4 = document.getElementById("kitten4");
			img4.src = x;
			var x = "http://placekitten.com/" + (document.getElementById("main").clientWidth-47-Math.floor((Math.random() * 10) + 1)).toString() + "/150";
			img5 = document.getElementById("kitten5");
			img5.src = x;
			var x = "http://placekitten.com/" + (document.getElementById("main").clientWidth-47).toString() + "/240";
			img6 = document.getElementById("kitten6");
			img6.src = x;
		}
		myFunction();
	</script>