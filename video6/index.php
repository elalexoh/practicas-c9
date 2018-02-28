<?php
define('BASEPATH', true);

require 'system/config.php';
require 'system/core/autoload.php';

/**
 * nivel de erores notificados
 */
 error_reporting(ERROR_REPOSTING_LEVEL);
$router = new Router();

$controller = $router->getController();
$method = $router->getMethod();
$param = $router->getParam();

//validaciones e inclusion del controlador y el metodo
if (!CoreHelper::validateController($controller)) {
    $controller = 'ErrorPage';
}

require PATH_CONTROLLERS . "{$controller}/{$controller}Controller.php";
$controller .= 'Controller';

$controller = new $controller;

$controller->$method($param);