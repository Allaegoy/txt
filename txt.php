<!DOCTYPE html>
<html>
<head lang="en" >
    <title>Page Title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="stylesheet" href="css/txt.css">
</head>
<body>

<!-- Header -->
<div class="header">
    <h1>Project Alfa ( TXT )</h1>
    <p>The new way to store your files</p>
</div>

<!-- Navigation Bar -->
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
  output.innerHTML = this.value;
if (slider.value = 1){
	output.innerHTML = night;
}
else {
	output.innerHTML = day;
}
}
</script>
</div>

<!-- The flexible grid (content) -->
<div class="row">
    <div class="side">
        <h2>About Us</h2>
        <h5>Photo of Us:</h5>
        <div class="fakeimg" style="height:200px;">Image</div>
        <p>Some text about Us.</p>
		<p>We are 2 bord guys looking for a cool new project</p>
        <h3>Navigation</h3>
		<?php
		ECHO "Hello World!<br>";
		echo "Hello World!<br>";
		EcHo "Hello World!<br>";
		?>
        <p>Lorem ipsum dolor sit ame.</p>
        <div class="fakeimg" style="height:60px;">Image</div><br>
        <div class="fakeimg" style="height:60px;">Image</div><br>
        <div class="fakeimg" style="height:60px;">Image</div>
    </div>
    <div class="main">
        <h2>TITLE HEADING</h2>
        <h5>Title description, Dec 7, 2017</h5>
        <div class="fakeimg" style="height:200px;">Image</div>
        <p>Some text..</p>
        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        <br>
        <h2>TITLE HEADING</h2>
        <h5>Title description, Sep 2, 2017</h5>
        <div class="fakeimg" style="height:200px;">Image</div>
        <p>Some text..</p>
        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    <h2>Made by Theo and Droplet</h2>
</div>

</body>
</html>
