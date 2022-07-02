<?php 
session_start();
include_once "./constants.php";
$_SESSION['CSRF']  = CSRF;
// $_SESSION['CSRF_TOKEN'] = '<input type="hidden" id="csrf_token" name="csrf_token" value="'.CSRF.'"/>'
$csrf_token  = '<input type="hidden" id="csrf_token" name="csrf_token" value="'.CSRF.'"/>';