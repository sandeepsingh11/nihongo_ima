<?php

class Router {

    /** 
     * registered routes list 
    */
    public $routes = [
        'GET' => [],
        'POST' => []
    ];





    /**
     * registered routes list
     */
    public static function load($routesFile) {
        $router = new static;

        // populate $router vals
        require $routesFile;
        return $router;
    }

    /**
     * Register a GET route.
     */
    public function get($uri, $controller) {
        $this->routes['GET'][$uri] = $controller;
    }

    /**
     * Register a POST route.
     */
    public function post($uri, $controller) {
        $this->routes['POST'][$uri] = $controller;
    }


    /**
     * load uri's requested controller method
     */
    public function direct($uri, $requestType) {

        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }
        // else {
        //     return $this->callAction(
        //         ...explode('@', $this->routes[$requestType]['404'])
        //     );
        // }
    }


    
    /**
     * load and call the controller's action
     */
    public function callAction($controller, $action) {

        $controller = new $controller();

        if (! method_exists($controller, $action) ) {
            throw new Exception("{$controller} does not respond to the {$action} action.");
        }

        return $controller->$action();
    }
}