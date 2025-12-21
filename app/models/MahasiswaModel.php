<?php
    class MahasiswaModel extends Database{

        public static function checkTable(){
            $stmt = "SELECT table_name FROM information_schema.tables WHERE table_schema = 'oophp_mvc' AND table_name = 'mahasiswas'";
            $db = self::getInstance();

            /**  @var object $db */
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
            $db = self::getInstance();
            $result = $db->countRows($datas);

            return $result;
        }
    }