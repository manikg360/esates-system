<?php

$isConsole = false;
$host = $_SERVER['SERVER_ADDR'];
define('BASE_PATH',$_SERVER['DOCUMENT_ROOT']);
define('BASE_DIR',basename(__DIR__));
define('PROJECT_PATH',BASE_PATH.DIRECTORY_SEPARATOR.BASE_DIR.DIRECTORY_SEPARATOR);
define('VENDOR_PATH',PROJECT_PATH.'vendor'.DIRECTORY_SEPARATOR);
define('YII_DEBUG', true);
