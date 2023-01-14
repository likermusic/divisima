<?php 
namespace app\controllers;

class MainController {
    public function __construct() {
        echo 'mainC';
    }

    public function indexAction()
    {
        echo 'indexAction';

    }


    public function del(Type $var = null)
    {
        # code...
    }
}
?>
