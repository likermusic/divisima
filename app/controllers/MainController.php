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
            header('Location:' . $_SERVER['HTTP_REFERER']);
        }

        

        // $users= [1,2,3];
        // echo $this->test;
        // debug($products);
        
        // $data = ['products'=> $products, 'categories'=>$categories];
        $data = compact('products','categories');
        $this->view->render($data);
        // debug($this->route);

    }

    public function requestHandlerAction()
    {
        // echo 'DELETE';
        // $data = $_POST['id'];
        // $id = file_get_contents("php://input");
        $id = $_POST['id'];
        $this->model->addProductIntoCart($id);
        // $data = json_decode($data,1);
        // echo 'requestHandlerAction';


    }
}


// $c = new MainController();
// $c->del();
?>
