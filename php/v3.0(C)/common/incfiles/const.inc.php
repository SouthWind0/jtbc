<?php
ob_start();
session_start();
set_time_limit(1800);
ini_set('display_errors', '1');
//error_reporting(E_ALL ^ E_NOTICE);
define('APPNAME', 'jtbc_');
define('ASSETSPATH', 'common/assets');
define('BASEDIR', '');
define('CACHEDIR', 'cache');
define('CHARSET', 'utf-8');
define('CONSOLEDIR', 'console');
define('COOKIESPATH', '/');
define('DB', 'MySQL');
define('DB_HOST', '{$db_host}');
define('DB_USERNAME', '{$db_username}');
define('DB_PASSWORD', '{$db_password}');
define('DB_DATABASE', '{$db_database}');
define('LANGUAGE', 'zh-cn');
define('SEPARATOR', ' - ');
define('SITESTATUS', 0);
define('THEME', 'default');
define('TEMPLATE', 'default');
define('VERSION', '3.0.0.2');
define('WEBKEY', 'J1T2B3C4');
define('XMLSFX', '.jtbc');
?>