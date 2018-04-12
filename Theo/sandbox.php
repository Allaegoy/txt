
<?php
$mode = "day";
if(isset($_GET['mode']) ){
	$mode = $_GET['mode'];
}
?>

<!DOCTYPE html>
<html>
<head lang="en" >
    
	<title><?php echo $mode; ?> Unicorn pasta</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="stylesheet" href="css/<<?php echo $mode; ?>/txt.css">
	<link rel="stylesheet" href="css/<?php echo $mode; ?>/navbar.css">
	<link rel="stylesheet" href="css/<?php echo $mode; ?>/mode.css">
</head>
<body>
<?php echo $mode; ?>

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