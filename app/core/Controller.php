<?php 
    namespace app\core;
    // use app\core\View;

    abstract class Controller {
        public $route;
        public $view;
        public $model;

        public function __construct($route) {
            // echo $route;
            // echo 'CONTROLLER';
            $this->route = $route;
            $this->view = new View($route);
            $model_name = '\app\models\\' . ucfirst($route['controller']);
            if (class_exists($model_name)) {
                $this->model = new $model_name;
            }            
            // echo $this->a;
        }

     
    }
?>
