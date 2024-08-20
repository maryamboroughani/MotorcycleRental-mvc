<?php
namespace App\Routes;

class Route {
    protected $routes = [];

    // Method to register GET routes
    public function get($uri, $action) {
        $this->routes['GET'][$uri] = $action;
    }

    // Method to register POST routes
    public function post($uri, $action) {
        $this->routes['POST'][$uri] = $action;
    }

    // Method to dispatch requests to the appropriate controller and method
    public function dispatch() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // Strip query string
        $method = $_SERVER['REQUEST_METHOD'];

        // Check if the route exists
        if (isset($this->routes[$method][$uri])) {
            $action = $this->routes[$method][$uri];
            list($controller, $method) = explode('@', $action);

            // Ensure the controller class exists and the method is callable
            if (class_exists($controller) && method_exists($controller, $method)) {
                (new $controller)->$method();
            } else {
                $this->handleError('Controller or method not found.');
            }
        } else {
            $this->handleError('Route not found.');
        }
    }

    // Method to handle errors and provide a user-friendly message
    protected function handleError($message) {
        http_response_code(404);
        include __DIR__ . '/../views/error.php';
        // Optionally, you can pass $message to the error view
        // include __DIR__ . '/../views/error.php';
    }
}
