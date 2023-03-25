<?php 
namespace app\controllers;
use app\core\Controller;

class CartController extends Controller {
    public function indexAction()
    {
        $res = $this->model->getProducts($this->user_id);

        // debug($products);
        // $products = $this->model->getProducts('select');
        // var_dump($this->model);
        $data = compact('res');
        $this->view->render($data);
    }
}
?>