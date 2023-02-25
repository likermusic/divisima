<?php 
namespace app\controllers;
use app\core\Controller;

class MainController extends Controller {
// class MainController  {

     // public $t = 'TEXTY';
    public function indexAction()
    {
        // $products = $this->model->getProducts('select');
        // $categories = $this->model->getCategories();
        $products = $this->model->fetchAll('products');
        $categories = $this->model->fetchAll('categories');
        if ($_GET['id']) {
            $this->model->addProductIntoCart($_GET['id']);
        }

        

        // $users= [1,2,3];
        // echo $this->test;
        // debug($products);
        
        $data = ['products'=> $products, 'categories'=>$categories];
        $this->view->render($data);
        // debug($this->route);

    }

    protected function del()
    {
        // echo 'DELETE';
    }
}


// $c = new MainController();
// $c->del();
?>