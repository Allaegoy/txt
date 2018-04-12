<?php
// Start Session
session_start();
?>


<!DOCTYPE html>
<html>
<head lang="en" >
    
	<title>Unicorn pasta</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<?php
	if(isset($_SESSION['mode']) ){
		$mode = $_SESSION['mode'];
	}else{
		$mode = "day";
	}
	?>
	
    <link rel="stylesheet" href="csss/txt.css">
	<link rel="stylesheet" href="css/<?php echo $mode; ?>/navbar.css">
	<link rel="stylesheet" href="css/<?php echo $mode; ?>/mode.css">
	
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