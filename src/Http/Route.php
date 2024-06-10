<?php

namespace SecTheater\Http;

class Route 
{

    protected Request $request ;
    protected Response $response ;
 
    public function __construct($request , $response)
    {
        $this->request = $request;
        $this->response = $response;
    }
    public static array $routes = [];

    public static function get($route , $action){
        // callable|array|string
        self::$routes['get'][$route] = $action;
        
    } 
    public static function post($route , $action){
        // callable|array|string
        self::$routes['post'][$route] = $action;

    } 
    public function resolve()
    {

        $path   = $this->request->path();
        $method = $this->request->method();
        $action = self::$routes[$method][$path] ?? false ;

        if(!$action){
            return ;
        }
        // 404 handling

        if(is_callable($action)){
            call_user_func_array($action , []);
            
        }
        
        if(is_array($action)){
            // $controller = new $action[0];
            call_user_func_array([new $action[0] , $action[1]],[]);
        }
    }
}