<?php 
namespace app\controllers;
use app\core\Controller;

class MainController extends Controller {
 
    public function indexAction()
    {
        $this->model->getProducts();
        view($data)
                // echo 'indexAction';
                // debug($this->route);
    }

    public function del()
    {
        # code...
    }
}
?>
