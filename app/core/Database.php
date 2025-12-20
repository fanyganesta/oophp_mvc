<?php 
    class Database{
        protected static $instance = [], $pdo;

        public function __CONSTRUCT(){
            $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
            $option = [
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ];

            try{
                self::$pdo = new \PDO($dsn, DB_USERNAME, DB_PASSWORD, $option);
            }catch(\PDOException $e){
                echo $e;
            }
        }

        public static function getInstance(){
            if(empty($instance)){
                self::$instance = new Database();
            }
            return self::$instance;
        }

        public static function run($sql, $params = []){
            $stmt = self::$pdo->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        }

        public static function getOne($sql, $params = []){
            $result = self::run($sql, $params);
            $row = $result->fetch();
            return $row;
        }

        public static function getAll($sql, $params = []){
            $result = self::run($sql, $params);
            $rows = $result->fetchAll();
            return $rows;
        }
    }