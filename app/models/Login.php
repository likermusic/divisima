<?php 
    namespace app\models;
    use app\core\Model;

    class Login extends Model {
      public function auth($login,$password)
      {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE login = :login");
        $stmt->execute([
          'login' => $login
        ]);
        return $stmt->fetch(\PDO::FETCH_OBJ);
      }
    }  
?>