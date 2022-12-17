<?php 
namespace app\core;

class Router {
    public $routes = [];
    public $params = [];

    public function __construct() {
        $routes_arr = require_once "app/config/routes.php";
        foreach ($routes_arr as $route => $params) {
            $this->add($route,$params);
        }
    }

    public function add($route,$params)
    {
        $route = '#^' . $route . '$#';
        $this->routes[$route] = $params;
    }

    public function match()
    {
        # code...
    }
    public function run()
    {
       if ($this->match()) {

       }  else {
        echo 'Страница не найдена (404)';
       }
    }

}
?>

