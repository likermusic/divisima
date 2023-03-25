<?php 
    namespace app\core;
    // use app\core\View;

    abstract class Controller {
        protected $route;
        protected $view;
        protected $model;
        protected $user_id = 1;

        public function __construct($route) {
            // debug($this->products);
            // echo $this->t;
            // echo $route;
            // echo 'CONTROLLER';
            $this->route = $route;
            $model_name = '\app\models\\' . ucfirst($route['controller']);
            if (class_exists($model_name)) {
                $this->model = new $model_name;
                // $this->model->getProducts();
            }            
            $this->view = new View($route);
            // debug($this->view->render());
            // echo $this->a;
        }

        public function isFetch()
        {
            return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
        }

     
    }
?>