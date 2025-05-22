<?php
define('ROOT_PATH',__DIR__);
require __DIR__.'/vendor/autoload.php';
require_once(__DIR__.'/helper/functions.php');
// require_once(__DIR__.'/app/Route.php');
 
use App\Route;
use App\Controller\FrontController;

$route = new Route();
$route->addRoute("GET","/webprogramming/",[FrontController::class, 'home']);
$route->addRoute("GET",'/webprogramming/about',[FrontController::class, 'about']);
$route->addRoute("GET",'/webprogramming/infs',[FrontController::class, 'infs']);
$route->dispatch();
