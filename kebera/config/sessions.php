<?php 

session_start();

$_SESSION['CSRF']  = uniqid();