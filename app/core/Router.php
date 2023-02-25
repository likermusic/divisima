<?php 
namespace app\core;

class Router {
    private $routes = [];
    private $params = [];

    public function __construct() {
        $routes_arr = require_once "app/config/routes.php";
        foreach ($routes_arr as $route => $params) {
            $this->add($route,$params);
        }
    }

    private function add($route,$params)
    {
        $route = '#^' . trim($route,'/') . '$#';
        $this->routes[$route] = $params;
    }

    private function match()
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

    private function removeQueryString($url)
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
                include 'app/views/404/index.php';
            }    
        }

       }  else {
        if (!PROD) {
            echo 'Страница не найдена (404)';
        } else {
            include 'app/views/404/index.php';
        }
       }
    }

}
?>