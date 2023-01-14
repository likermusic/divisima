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
        $url = trim($_SERVER['REQUEST_URI'],'/');
        $url = $this->removeQueryString($url);
        foreach ($this->routes as $route => $params) {
            if (preg_match($route,$url,$matches)) {
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    public function removeQueryString($url)
    {
        // 'catalogue?page=2'
        $params = explode('?',$url);
        return $params[0];
    }

    public function run()
    {
       if ($this->match()) {


        $controller_name = "\app\controllers\\" . ucfirst($this->params['controller'] . 'Controller');
        // echo $controller_name;
        if (class_exists($controller_name)) {
            // echo 'Yes';
            $controller = new $controller_name($this->params);
            $action_name = $this->params['action'] . 'Action';
            if (method_exists($controller,$action_name)) {
                $controller->$action_name();
            } else {
                if (!PROD) {
                    echo "Экшен {$action_name} не найден";
                } else {
                    echo '404';
                }    
            }
        } else {
            if (!PROD) {
             echo "Контроллер {$controller_name} не найден";
            } else {
            echo '404';
            }    
        }

       }  else {
        if (!PROD) {
            echo 'Страница не найдена (404)';
        } else {
            echo '404';
        }
       }
    }

}
?>