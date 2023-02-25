<?php 
    namespace app\core;

    class DB {
        // public $test = 'TEST';

        public $db;
      public function __construct() {

        $db_config_file = 'app/config/db_config.php';
        if (file_exists($db_config_file)) {
            $db_config = require $db_config_file;
        }
        try {
            $this->db = new \PDO("mysql:host={$db_config['host']};dbname={$db_config['dbname']}", $db_config['user'],$db_config['password']); 
        } catch (\PDOException $e) {
            if (PROD == true) {
                die('Подключиться к БД не удалось!');
            } else {
                die('Подключиться к БД не удалось! <br>Описание ошибки:' . $e->getMessage());
            }
        }
      }  
    }
?>
