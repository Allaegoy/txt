<?php
// Start Session
session_start();
?>

<?php
$mode = "day";
if(isset($_GET['mode']) ){
	$_SESSION['mode'] = $_GET['mode'];
}
header( 'Location: ../sandbox.php' );
die();
?>