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
        // if ($_GET['id']) {
        //     $this->model->addProductIntoCart($_GET['id']);
        //     header('Location:' . $_SERVER['HTTP_REFERER']);
        // }

        

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
             // AJAX

            
            //Фикс проверить на то что запрос отправляется аяксом
            //htaccess
            //бд - https://translated.turbopages.org/proxy_u/en-ru.ru.d7442bf2-6403ae36-508cb5d6-74722d776562/https/stackoverflow.com/questions/49094502/im-getting-error-missing-index-on-columns-when-i-try-to-create-a-relationsh
            
           // сделать ключ Индекс у поля product_id затем они должны совпадать по структуре с id из другой тбл(unsigned)
        if ($this->isFetch()) {
            $product_id = $_POST['id'];
            $this->model->addProductIntoCart($this->user_id, $product_id);
            echo $this->user_id . '   ' .$product_id;
        } else {
            if (!PROD) {
                echo 'Страница не найдена (404)';
            } else {
                include 'app/views/404/index.php';
            }
        }
        // $this->model->addProductIntoCart($id);
        // $data = json_decode($data,1);


    }
}


// $c = new MainController();
// $c->del();
?>
