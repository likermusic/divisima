<?php 
    namespace app\core;
    // use app\core\View;

    abstract class Controller {
        public $route;
        public $view;
        public $model;

        public function __construct($route) {
            debug($this->products);
            // echo $this->t;
            // echo $route;
            // echo 'CONTROLLER';
            $this->route = $route;
            $model_name = '\app\models\\' . ucfirst($route['controller']);
            if (class_exists($model_name)) {
                $this->model = new $model_name;
                $this->test = $this->model->test;
                // $this->model->getProducts();
            }            
            $this->view = new View($route);
            // debug($this->view->render());
            // echo $this->a;
        }

     
    }
?>

