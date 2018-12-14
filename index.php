<?php

require_once('vendor/autoload.php');
require_once('Configuration.php');
require_once('helpers/helpers.php');
require_once('vendor/stripe/stripe-php/init.php');


use App\Core\DbConfiguration;
use App\Core\DbConnection;
use App\Core\Router;

session_start();

$dbConfiguration = new DbConfiguration(

    Configuration::DB_HOST,
    Configuration::DB_USER,
    Configuration::DB_PASS,
    Configuration::DB_NAME

);

$dbConnection = new DbConnection($dbConfiguration);

$httpMethod = strval(filter_input(INPUT_SERVER, 'REQUEST_METHOD'));
$url = strval(filter_input(INPUT_GET, 'URL'));

$router = new Router();
$routes = require_once 'Routes.php';
foreach($routes as $route){
        $router->add($route);
}

$route = $router->find($httpMethod, $url);
$arguments = $route->extractArguments($url);

$fullControllerName = "\\App\\Controllers\\" . $route->getControllerName() . 'Controller';
$controller = new $fullControllerName($dbConnection);

call_user_func_array([$controller, $route->getMethodName()], $arguments);

$data = $controller->getData();


$loader = new Twig_Loader_Filesystem("./Views");
$twig = new Twig_Environment($loader, [
    "cache"         => "./twig-cache",
    "auto_reload"   => true
]);

$data['BASE'] = Configuration::BASE;

echo $twig->render($route->getControllerName() . '/' . $route->getMethodName() . '.html', $data);




