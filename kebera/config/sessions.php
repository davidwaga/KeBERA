<?php 
session_start();
include_once "constants.php";
$_SESSION['CSRF']  = CSRF;
$csrf_token  = '<input type="hidden" id="csrf_token" name="csrf_token" value="'.CSRF.'"/>';
?>
