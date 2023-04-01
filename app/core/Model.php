<?php 
    namespace app\core;
    // use app\core\DB;

    abstract class Model {
        protected $db;
        // public $test;

        public function __construct() {
           $db_class = new DB();
           $this->db = $db_class->db;
        //    $this->test = $db_class->test;
        //    $stmt = "SELECT * FROM products";
        //    $query = $this->db->query($stmt,\PDO::FETCH_ASSOC);
        //    $data = $query->fetchAll();
        
        // $id = 1; 
        // $stmt = "SELECT * FROM products WHERE id = ?";
        // $query = $this->db->prepare($stmt);
        // $query->execute([$id]);
        // $data = $query->fetchAll(\PDO::FETCH_ASSOC);
        //    debug($data);
        }

        public function fetchAll($table)
        {
            $stmt = $this->db->prepare("SELECT * FROM {$table}");
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_OBJ);
        }

        public function fetchOne($id, $table)
        {
            $stmt = $this->db->prepare("SELECT * FROM {$table} WHERE id = {$id}");
            $stmt->execute();
            return $stmt->fetch(\PDO::FETCH_OBJ);
        }



    }
?>