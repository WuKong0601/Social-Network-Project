<?php
ob_start();

date_default_timezone_set("Asia/Ho_Chi_Minh");


session_start();
define("WW_ROOT","http://localhost//Instagram");

require_ONCE "config.php";
require_ONCE "functions.php";

spl_autoload_register(function($className){
    require_once "classes/" .$className.".php";

});

$account=new Account();
?>