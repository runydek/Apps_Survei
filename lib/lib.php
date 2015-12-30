<?php

require_once APP_DIR . '/vendor/autoload.php';

Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem(__DIR__ . '/../views');
$twig = new Twig_Environment($loader, array());

function autoloadController($className) {
    $file = APP_DIR . "/controllers/".$className.".php";
    if (is_readable($file))
        include $file;
}

spl_autoload_register("autoloadController");
