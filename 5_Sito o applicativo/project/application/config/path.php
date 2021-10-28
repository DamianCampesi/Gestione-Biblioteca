<?php 
define('LOGINPAGE','login/index');
define('REGISTRATIONPAGE','registration/index');
define('HOMEPAGE','home/index');
define('ERRORPAGE','error/index');

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$documentRoot = $_SERVER['DOCUMENT_ROOT'];
$dir = str_replace('\\','/',getcwd().'/');
$final = $actual_link.str_replace($documentRoot,'',$dir);
define('URL', $final);
