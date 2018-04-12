<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="edward.css">
    <title>Night / Day Mode</title>
  
</head>
<body id="body" class="c-window">
<div class="the-container">
  
  <input type="checkbox" id="toggle" />
  <label for="toggle"></label>
  
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
    
   -->
    
  </div>
  

  

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
     </body>
</html>