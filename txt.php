<?php
	// Start Session
	session_start();
	
	// Set nightmode css for the first time
	if(!isset($_SESSION['nightmode'])){
		$message = "first time session set";
		echo "<script type='text/javascript'>alert('$message');</script>";
		$_SESSION['nightmode'] = 0;
		$nightmode = "day.css";
	}else{
		// Set css-file based on nightmode for subsequent times
		if($_SESSION['nightmode'] == 1){
			$nightmode = "night.css";
		} else if($_SESSION['nightmode'] == 0) {
			$nightmode = "day.css";
		}
	}
	echo $nightmode;
	$temp = $_SESSION['nightmode'];
	echo "<script type='text/javascript'>alert('value SESSION at the very start: $temp');</script>";
?>

<!DOCTYPE html>
<html>
<head lang="en" >
	
	<link rel="stylesheet" type="css/<?php echo nightmode ?>" href="theme.css">
    
	<title>Unicorn pasta</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="stylesheet" href="css/txt.css">
	<link rel="stylesheet" href="css/navbar.css">
	<link rel="stylesheet" href="css/slider.css">
</head>
<body>

<!-- Header -->
<?php
include "Php\\HeaderIndex.php";
?>

<!-- Navigation Bar -->
<?php
include "Php\\navigation.php";
?>

<!-- The flexible grid (content) -->
<?php
include "Php\\ContentIndex.php";
?>

<!-- Footer -->
<?php
include "Php\\FooterIndex.php";
?>


</body>
</html>