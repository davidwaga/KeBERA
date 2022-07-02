<?php 

// var_dump($_SERVER);

$p  = explode('/', $_SERVER['REQUEST_URI']);

echo $p[2];

