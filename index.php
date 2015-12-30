<?php

ini_set('display_errors', 0);
error_reporting(0);

define('APP_DIR', realpath('.'));

include_once APP_DIR . '/lib/lib.php';

$req = isset($_GET['p']) ? $_GET['p'] : 'home';

$className = ucfirst($req) . "Controller";

try {
    if (!class_exists($className))
        throw new Exception("Controller was not found.");

    $controller = new $className($twig);

    switch($req){
        case 'home':

            break;
        case 'question':

            break;

        case 'thanks':

            break;
    }

} catch (Exception $e) {
    $controller = new ErrorController($twig);
}

echo $controller->view();
