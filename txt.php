<?php
	// Start Session
	session_start();
	
	// Set nightmode css for the first time
	if(!isset($_SESSION['nightmode'])){
		$_SESSION['bookmarks'] = false;
	}
	
	// Set css-file based on nightmode
	if(isset($_SESSION['nightmode']) && $_SESSION['nightmode'] == true){
		$nightmode = "night.css";
	} else if(isset($_SESSION['nightmode']) && $_SESSION['nightmode'] == false) {
		$nightmode = "day.css";
	}
?>

<!DOCTYPE html>
<html>
<head lang="en" >
	
	<link rel="stylesheet" type="css/<?php echo nightmode ?>" href="theme.css">
    
	<title>Unicorn pasta</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="stylesheet" href="css/txt.css">
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