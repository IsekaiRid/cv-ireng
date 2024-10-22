<?php
class RouteCore {
    
    private $routes = [];

    public function route($path, $controller, $methods) {
        list($controllerClass, $method) = explode('::', $controller);
        $controllerFile = "../controllers/" . basename($controllerClass) . ".php";
        if (file_exists($controllerFile)) {
            require_once $controllerFile;
        } else {
            echo "Controller file $controllerFile not found.";
            return;
        }

        $this->routes[$path] = [
            'controller' => $controllerClass . '::' . $method,
            'methods' => $methods
        ];

    }

    public function match($requestPath, $requestMethod) {
        foreach ($this->routes as $path => $route) {
            if ($path === $requestPath) {
                if (in_array($requestMethod, $route['methods'])) {
                    return $route['controller'];
                }
            }
        }
        return null; 
    }

    public function handleRequest() {
        $requestPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $requestMethod = $_SERVER['REQUEST_METHOD'];

        $controllerInfo = $this->match($requestPath, $requestMethod);
        if ($controllerInfo) {
            list($controllerClass, $method) = explode('::', $controllerInfo);
            if (class_exists($controllerClass)) {
                $controller = new $controllerClass();
                if (method_exists($controller, $method)) {
                    $controller->$method();
                } else {
                    echo "Method $method not found.";
                }
            } else {
                echo "Controller $controllerClass not found.";
            }
        } else {
            echo "No route found.";
        }
    }
}
