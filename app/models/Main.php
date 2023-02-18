<?php 
    namespace app\models;
    use app\core\Model;

    class Main extends Model {
        public $test;
        public function getProducts()
        {
            echo $this->t;

            $this->test = $this->test;
            $stmt = "SELECT * FROM products";
            $query = $this->db->query($stmt,\PDO::FETCH_ASSOC);
            $data = $query->fetchAll();
            return $data;
        }


    }
?>
