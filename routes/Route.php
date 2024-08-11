<?php
namespace App\Routes;

class Route {
    private static $routes = [];

    // Register a GET route
    public static function get($url, $controller) {
        self::$routes[] = ['url' => $url, 'controller' => $controller, 'method' => 'GET'];
    }

    // Register a POST route
    public static function post($url, $controller) {
        self::$routes[] = ['url' => $url, 'controller' => $controller, 'method' => 'POST'];
    }

    // Dispatch the request to the appropriate controller and method
    public static function dispatch() {
        $url = $_SERVER['REQUEST_URI'];
        $urlSegments = explode('?', $url);
        $urlPath = rtrim($urlSegments[0], '/');
        $method = $_SERVER['REQUEST_METHOD'];

        //echo 'Requested URL: ' . $urlPath . '<br>';

        
        foreach (self::$routes as $route) {
            if ($route['method'] === $method && self::matchRoute($route['url'], $urlPath)) {
                $controllerSegments = explode('@', $route['controller']);
                $controllerName = "App\\Controllers\\" . $controllerSegments[0];
                $methodName = $controllerSegments[1];

                if (!class_exists($controllerName) || !method_exists($controllerName, $methodName)) {
                    http_response_code(404);
                    echo "404 - Controller or Method not found";
                    return;
                }

                $controllerInstance = new $controllerName();

                $queryParams = [];
                if (isset($urlSegments[1])) {
                    parse_str($urlSegments[1], $queryParams);
                }

                if ($method === "GET") {
                    $controllerInstance->$methodName($queryParams);
                } elseif ($method === "POST") {
                    $controllerInstance->$methodName($_POST, $queryParams);
                }
                
                return;
            }
        }

        http_response_code(404);
        echo "404 - Page not found";
    }

    // Match the route using simple patterns
    private static function matchRoute($routeUrl, $requestUrl) {
        return $routeUrl === $requestUrl;
    }
}
