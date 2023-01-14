<?php 
    namespace app\core;
    // use app\core\View;

    abstract class Controller {
        public $route;
        public $view;
        public $model;

        public function __construct($route) {
            // echo $route;
            echo 'CONTROLLER';
            $this->route = $route;
            $this->view = new View($route);

            // $this->model = 
            
            // echo $this->a;
        }

     
    }
?>
