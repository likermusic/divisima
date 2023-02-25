<?php 
    namespace app\models;
    use app\core\Model;

    class Main extends Model {
        // public $test;



        // public function getProducts()
        // {
        //     /*
        //     $stmt = "SELECT * FROM products";
        //     $query = $this->db->query($stmt,\PDO::FETCH_ASSOC);
        //     $data = $query->fetchAll();
        //     return $data;
        //     */

        //     $stmt = $this->db->prepare("SELECT * FROM products");
        //     $stmt->execute();
        //     // return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        //     return $stmt->fetchAll(\PDO::FETCH_OBJ);
        // }
        
        // public function getCategories()
        // {
        //     $stmt = $this->db->prepare("SELECT * FROM categories");
        //     $stmt->execute();
        //     return $stmt->fetchAll(\PDO::FETCH_OBJ);
        // }

        public function addProductIntoCart($id) {  
            $stmt = $this->db->prepare("INSERT INTO carts SET id = ?");
            $stmt->execute([$id]);

            // debug($_SERVER['HTTP_REFERER']);
            // echo '12345';
            header('Location:' . $_SERVER['HTTP_REFERER']);
            // Проверять true/false запроса 
            //редирект


            // $stmt = $this->db->prepare("INSERT INTO carts SET id = ?, name=?");
            // $sth->execute(array('parent' => 1, 'name' => 'Виноград'));

            // $sth->execute(array('parent' => 1, 'name' => 'Виноград'));
        }
    }

// $sth = $dbh->prepare("SELECT * FROM `category` WHERE `id` = :id");
// $sth->execute(array('id' => '21'));
// $array = $sth->fetch(PDO::FETCH_ASSOC);
// print_r($array);

//     $sth = $dbh->prepare("SELECT * FROM `category` ORDER BY `name`");
// $sth->execute();
// $array = $sth->fetchAll(PDO::FETCH_ASSOC);
// print_r($array);


// $sth = $dbh->prepare("INSERT INTO `category` SET `parent` = :parent, `name` = :name");
// $sth->execute(array('parent' => 1, 'name' => 'Виноград'));

// $count = $dbh->exec("DELETE FROM `category` WHERE `parent` = 1");
// echo 'Удалено ' . $count . ' строк.';

// $sth = $dbh->prepare("INSERT INTO `category_new` SET `parent` = :parent, `name` = :name");
// $sth->execute(array('parent' => 1, 'name' => 'Виноград'));
 
// $info = $sth->errorInfo();
// print_r($info);


?>