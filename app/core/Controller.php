<?php 
    namespace app\core;
    session_start();
    // use app\core\View;

    abstract class Controller {
        protected $route;
        protected $view;
        protected $model;
        protected $user_id = 1;
        protected $count = 0;

        public function __construct($route) {
            if ($_GET['action'] == 'logout') {
                unset($_SESSION['auth_user']);
                header('location: ' . $_SERVER['HTTP_REFERER']);
            }
            // session_destroy();
            // debug($this->products);
            // echo $this->t;
            // echo $route;
            // echo 'CONTROLLER';
            $this->route = $route;
            // debug($route);
            $model_name = '\app\models\\' . ucfirst($route['controller']);
            if (class_exists($model_name)) {
                $this->model = new $model_name;
                // $this->model->getProducts();
            }            
            $this->view = new View($route);
            // debug($this->view->render());
            // echo $this->a;
            $arr = $this->model->getQtys($this->user_id);
            $this->count = array_reduce($arr,function($sum, $item) {
                return $sum+=$item->qty;
            },0);
            // echo $this->count;
        }

        public function isFetch()
        {
            return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest';
        }

     
    }
?>