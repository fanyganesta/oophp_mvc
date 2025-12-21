<?php
    class MahasiswaSeeder{
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

            return "INSERT INTO mahasiswas VALUES " . $datas;
        }

        public static function seeder(){
            MahasiswaModel::checkTable();
            $datas = self::setDatas();
            $result = MahasiswaModel::insertSeeder($datas);

            return $result;
        }
    }