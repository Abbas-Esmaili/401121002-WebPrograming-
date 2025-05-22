<?php
namespace App;
 
class Route{
    private $routes=[];
    public function addRoute($method="GET",$path="/",$handle=null)
    {
        $this->routes[]=[
            'method' => $method,
            'path' => $path,
            'handle' => $handle
        ];
    }

    public function dispatch($requestMethod, $requestUri) {
        foreach ($this->routes as $route) {
            if ($route['method'] === $requestMethod && $route['path'] === $requestUri) {
                return call_user_func($route['handler']);
            }
        }
        http_response_code(404);
        return call_user_func([ \App\Controller\FrontController::class, 'notFound' ]);
    }
} 

?>