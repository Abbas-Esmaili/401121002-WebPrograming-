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
$route->addRoute("POST",'/webprogramming/processForm',[FrontController::class, 'process']);
$route->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));







// <?php
// define('ROOT_PATH',__DIR__);
// require_once(__DIR__.'/helper/functions.php');
// $method = $_SERVER['REQUEST_METHOD'];
// $uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

// if($uri == "/webprogramming/")
// {
//     view('home.php');

// }else if($uri == '/webprogramming/infs')
// {
//     view('infs.php');

// }else if($uri == '/webprogramming/about')
// {
//     view('about.php');

// }
// else if($uri == "/webprogramming/process-form")
// {
//     view('process-form.php');

// }
// else{
//     view('404.php');
    
// }

?>


