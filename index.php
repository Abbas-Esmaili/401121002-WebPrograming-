<?php
session_start();
define('ROOT_PATH',__DIR__);
require __DIR__.'/vendor/autoload.php';
require_once(__DIR__.'/helper/functions.php');

use App\Route;
use App\Controller\FrontController;
use App\Controller\AuthController;
use App\Controller\DashboardController;
use App\Controller\PostController;
use App\Controller\LogoutController;
use Illuminate\Database\Capsule\Manager as Capsule;

$config = require __DIR__.'/config/database.php';
$capsule = new Capsule;
$capsule->addConnection($config);
$capsule->setAsGlobal();
$capsule->bootEloquent();


$route = new Route();
$route->addRoute("GET","/webprogramming/",[FrontController::class, 'home']);
$route->addRoute("GET",'/webprogramming/about',[FrontController::class, 'about']);
$route->addRoute("GET",'/webprogramming/infs',[FrontController::class, 'infs']);
$route->addRoute("GET",'/webprogramming/login',[AuthController::class, 'login']);
$route->addRoute("POST",'/webprogramming/login',[AuthController::class, 'loginuser']);
$route->addRoute("GET",'/webprogramming/register',[AuthController::class, 'register']);
$route->addRoute("GET",'/webprogramming/dashboard',[DashboardController::class, 'index']);
$route->addRoute("POST",'/webprogramming/register',[AuthController::class, 'storeuser']);
$route->addRoute("POST", "/webprogramming/logout", [LogoutController::class, 'handle']);

// Routes of CRUD for Post Model
$route->addRoute("GET",'/webprogramming/post',[PostController::class, 'index']);
$route->addRoute("GET",'/webprogramming/post/show',[PostController::class, 'show']);
$route->addRoute("GET",'/webprogramming/post/edit',[PostController::class, 'edit']);
$route->addRoute("POST",'/webprogramming/post/update',[PostController::class, 'update']);
$route->addRoute("GET",'/webprogramming/post/create',[PostController::class, 'create']);
$route->addRoute("POST",'/webprogramming/post/create',[PostController::class, 'store']);
//test the relation of database
$route->addRoute("GET",'/webprogramming/test',function(){



    $id = $_GET['id'];
    $post = \App\Model\Post::find($id);
    $user = $post->user;
    var_dump($user);
});

$route->dispatch();
?>