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

    public function requestHandlerAction()
    {
        if ($this->isFetch()) {
            $product_id = $_POST['id'];
            $d = $this->model->changeProductCount($product_id);
            echo json_encode($d);
        } else {
            if (!PROD) {
                echo 'Страница не найдена (404)';
            } else {
                include 'app/views/404/index.php';
            }
        }
    }
}
?>