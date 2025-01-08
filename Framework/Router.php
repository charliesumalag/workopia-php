<?php

namespace Framework;

class Router
{
    protected $routes = [];

    public function registerRoute($method, $uri, $action)
    {
        list($controller, $controllerMethod) = explode('@', $action);
        $this->routes[] = [
            'method' => $method,
            'uri' => $uri,
            'controller' => $controller,
            'controllerMethod' => $controllerMethod
        ];
    }

    /**
     * Add a GET routes
     *
     * @param string $uri
     * @param string $controller
     * @return void
     */
    public function get($uri, $controller)

    {

        $this->registerRoute('GET', $uri, $controller);
    }

    /**
     * Add a POST routes
     *
     * @param string $uri
     * @param string $controller
     * @return void
     */
    public function post($uri, $controller)
    {
        $this->registerRoute('POST', $uri, $controller);
    }

    /**
     * Add a PUT routes
     *
     * @param string $uri
     * @param string $controller
     * @return void
     */
    public function put($uri, $controller)
    {
        $this->registerRoute('PUT', $uri, $controller);
    }

    /**
     * Add a DELETE routes
     *
     * @param string $uri
     * @param string $controller
     * @return void
     */
    public function delete($uri, $controller)
    {
        $this->registerRoute('DELETE', $uri, $controller);
    }

    /**
     * Load error page
     *
     * @param int $httpCode
     * @return void
     */
    public function error($httpCode = 404)
    {
        http_response_code($httpCode);
        loadView("error/{$httpCode}");
        exit;
    }


    /**
     * Route the request
     *
     * @param string $uri
     * @param string $method
     * @return void
     */
    public function route($uri, $method)
    {
        // inspectAndDie($this->routes);
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === $method) {
                //Extract controller and controller method
                $controller = 'App\\Controllers\\' . $route['controller'];
                $contollerMethod = $route['controllerMethod'];

                //Instantiate controlelr and call the method
                $controllerInstance = new $controller();
                $controllerInstance->$contollerMethod();
                return;
            }
        }
        $this->error();
    }
}
