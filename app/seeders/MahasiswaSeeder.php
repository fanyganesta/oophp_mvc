<?php
    class MahasiswaSeeder extends Controller{
        protected $datas;
        
        protected static function setDatas(){
            $datas = null;
            for($i = 1; $i != 11; $i++){
                if($i != 10){
                    $delimit = ',';
                }else{
                    $delimit = ';';
                }
                $datas .= "('', 'Nama Mahasiswa Ke-$i', 'mahasiswake-$i@email.com', '2000-10-$i')$delimit"; 
            }

            return $datas;
        }

        public static function getSeeder(){
            return self::setDatas();
        }

        protected static function setTable(){
            $mahasiswasTable = "(ID INT PRIMARY KEY AUTO_INCREMENT, nama VARCHAR(100), email VARCHAR(100), tanggalLahir date);";

            return $mahasiswasTable;
        }

        protected static function getTable(){
            return self::setTable();
        }
    }