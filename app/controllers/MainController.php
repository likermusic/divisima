<?php 
namespace app\controllers;
use app\core\Controller;

class MainController extends Controller {
     // public $t = 'TEXTY';
    public function indexAction()
    {
        $products = $this->model->getProducts();
        // echo $this->test;
        // debug($products);

    }

    public function del()
    {
        # code...
    }
}
?>
