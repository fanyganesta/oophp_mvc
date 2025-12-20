<?php 
    class ContohModel {
        private static $table = 'contoh_data', $db;

        public function __CONSTRUCT(){
            self::$db = new Database();
        }

        public function getAll(){
            $table = self::$table;
            $sql = "SELECT * FROM $table";
            $rows = self::$db->getAll($sql);
            return $rows;
        }

        public function getByID($ID){
            $table = self::$table;
            $stmt = "SELECT * FROM $table WHERE ID = ?";
            $params = [$ID];
            $row = self::$db->getOne($stmt, $params);
            return $row;
        }
    }