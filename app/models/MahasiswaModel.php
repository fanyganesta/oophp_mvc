<?php
    class MahasiswaModel{
        protected static $table = 'mahasiswas', $db;

        public function __CONSTRUCT(){
            self::$db = Database::getInstance();
        }

        public static function checkTable(){
            $stmt = "SELECT table_name FROM information_schema.tables WHERE table_schema = 'oophp_mvc' AND table_name = 'mahasiswas'";
            $db = self::$db;

            $result = $db->getOne($stmt);

            if(!$result){
                $table = MahasiswaSeeder::getTable();
                $sql = "CREATE TABLE mahasiswas " . $table;

                try{
                   $db->run($sql);
                   $result = $db->getOne($stmt);
                }catch(PDOException $e){
                    echo $e;
                    exit;
                }
            }
            
            return true;
        }

        public static function insertSeeder($datas){
            /** @var object $db */
            $db = Database::getInstance();
            $result = $db->countRows($datas);

            return $result;
        }

        public static function seeder(){
            self::checkTable();
            $seeder = MahasiswaSeeder::getSeeder();
            $sql = "INSERT INTO " . self::$table . " VALUES " . $seeder;
            $stmt = self::$db->run($sql);

            return true;
        }

        public function getPagination($limit, $halamanAktif, $cari){
            $table = self::$table;
            $index = $halamanAktif * $limit - $limit;
            $stmt = "SELECT * FROM $table WHERE nama LIKE ? OR email LIKE ? OR tanggalLahir LIKE ?  LIMIT $index, $limit";

            $cari = '%'.$cari.'%';
            $datas = [$cari, $cari, $cari];

            $result = self::$db->getAll($stmt, $datas);
            return $result;
        }

        public function find($cari){
            $table = self::$table;
            $stmt = "SELECT * FROM $table WHERE nama LIKE ? OR email LIKE ? OR tanggalLahir LIKE ?";
            $cari = '%'.$cari.'%';
            $datas = [$cari, $cari, $cari];

            $result = self::$db->getAll($stmt, $datas);
            return $result;
        }
    }