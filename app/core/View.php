<?php 
    namespace app\core;

    class View  {
        public $route;
        public $view;
        public $layout = 'default';
        public function __construct($route) {
            $this->route = $route;
            $this->view = 'app/views/' . $route['controller'] . '/index.php';
            $this->render();
        }
        
        public function render()
        {
            $layout = 'app/views/layouts/' . $this->layout . '.php';
            if (file_exists($this->view)) {
                ob_start();
                require_once $this->view;
                $content = ob_get_clean();
            }

            if (file_exists($layout)) {
                require_once $layout;
            }
        }


    }
?>

