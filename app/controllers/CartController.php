<?php 
namespace app\controllers;
use app\core\Controller;

class CartController extends Controller {
    public function indexAction()
    {
        // $products = $this->model->getProducts('select');
        // var_dump($this->model);
       echo 'aasad'. $this->model->test();
    }
}
?>