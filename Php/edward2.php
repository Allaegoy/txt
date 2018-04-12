<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#overlay {
    position: fixed;
    display: none;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0,0,0,0.5);
    z-index: 2;
    cursor: pointer;
}

#text{
    position: absolute;
    top: 50%;
    left: 50%;
    font-size: 50px;
    color: white;
    transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);

}
#loginbox{
	
	font-size: 60%;
}
</style>
</head>
<body>

<div id="overlay" onclick="off()">


<div id="text">
 <form action="welcome.php" method="post">
Name: <input id="loginbox" type="text" name="name"><br>
password: <input id="loginbox" type="password" name="email"><br>
<input type="submit">
</form>


</div>
</div>

<div style="padding:20px">
  <h2>Overlay with Text</h2>
  <button onclick="on()">Turn on overlay effect</button>
</div>

<script>
function on() {
    document.getElementById("overlay").style.display = "block";
}


</script>
     
</body>
</html> 
