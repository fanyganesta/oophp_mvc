<?php
    class MahasiswaModel{
        protected static $table = 'mahasiswas', $db;

        public function __CONSTRUCT(){
            self::$db = new Database();
        }

        public static function checkTable(){
            $stmt = "SELECT table_name FROM information_schema.tables WHERE table_schema = 'oophp_mvc' AND table_name = 'mahasiswas'";
            $db = self::$db;

            /**  @var object $db */
            $db = Database::getInstance();
            $result = $db->getOne($stmt);

            if(!$result){
                $stmt = "CREATE TABLE mahasiswas (ID INT PRIMARY KEY AUTO_INCREMENT, nama VARCHAR(100), email VARCHAR(100), tanggalLahir date);";

                try{
                   $result = $db->run($stmt);
                }catch(PDOException $e){
                    echo $e;
                    exit;
                }
            }
            
            return count($result);
        }

        public static function insertSeeder($datas){
            /** @var object $db */
            $db = Database::getInstance();
            $result = $db->countRows($datas);

            return $result;
        }

        public function getAll(){
            $table = self::$table;
            $stmt = "SELECT * FROM $table";
            $result = self::$db->getAll($stmt);
            return $result;
        }
    }