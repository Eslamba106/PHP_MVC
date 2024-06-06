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
}