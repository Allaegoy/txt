<?php
// Start Session
session_start();

$nightmode = $_POST['nightslider'];
$_SESSION['nightmode'] = $nightmode;
?>