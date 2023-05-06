<?php 
namespace app\controllers;
use app\core\Controller;

class LoginController extends Controller {

    public function indexAction()
    {
      if ($_SESSION['auth_user']) {
        header('location: /');
        die();
      }

      if ($_POST['login'] && $_POST['password']) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        // var_dump($login);
        // var_dump($password);
        // var_dump(password_hash($password,PASSWORD_DEFAULT));
        $isUser = $this->model->auth($login,$password);
        if ($isUser) {
          if (password_verify($password, $isUser->password)) {
            $_SESSION['auth_user'] = $isUser->id;
            header('Location: /');
            die();
          } else {
            //pass
            $_SESSION['auth_error'] = 'Password is not correct!';  
          }        
        } else {
          //user
          $_SESSION['auth_error'] = 'User is not found!';
        }    
        // var_dump($isUser);
      }

      
      $this->view->render(123);
    } 
}
?>