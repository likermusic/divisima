<?php 
namespace app\controllers;
use app\core\Controller;

class CartController extends Controller {
    public function indexAction()
    {
        if (!$_SESSION['auth_user']) {
            header('location: /');
            die();
        }
        $res = $this->model->getProducts($this->user_id);

        if ($_GET['action'] and $_GET['action'] == "clear_cart") {
            $this->model->clearCart($this->user_id);
            header('location: /cart');
            die;
        }
        // debug($products);
        // $products = $this->model->getProducts('select');
        // var_dump($this->model);
        $count = $this->count;
        $data = compact('res','count');
        //debug($data);
        $this->view->render($data);
    }

    public function requestHandlerAction()
    {
        if ($this->isFetch()) {
            $product_id = $_POST['id'];
            $action = $_POST['action'];
            $data = $this->model->changeProductCount($product_id,$action,$this->user_id);
            if ($action == 'inc') {
                $this->count += 1;
            } elseif ($action == 'dec') {
                $this->count -= 1;
            }
            $data['count'] = $this->count;
            echo json_encode($data);
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