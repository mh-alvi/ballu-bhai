<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('APP_ROOT', __DIR__);

require_once(APP_ROOT . '/vendor/autoload.php');

spl_autoload_register(function ($class) {
    $classFile = str_replace("\\", DIRECTORY_SEPARATOR, $class . '.php');
    $classPath = APP_ROOT . '/app/' . $classFile;
    if (class_exists($classPath)) {
        require_once($classPath);
    }
});

session_start();

use App\Services\Route;

$route = new Route;

require_once(APP_ROOT . '/Routes/web.php');
$route->handle();
