<?php 

define('BASE_URL', 'http://'.$_SERVER['HTTP_HOST']);
define('DBHOST', '127.0.0.1');
define('DBNAME','kebera');
define('DBPASS','');
define('DBUSER','root');
define('TOKEN', '');
define('CSRF',sha1(date('Y-m-d').rand(1000,9000000)));
// echo CSRF;
