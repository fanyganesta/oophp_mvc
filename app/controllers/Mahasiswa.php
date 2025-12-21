<?php 
    class Mahasiswa extends Controller{
        
        public function index(){
            $this->view('mahasiswa/index');
        }

        public function getAll(){
            $datas = $this->model('MahasiswaModel')->getAll();
            $this->view('mahasiswa/all-data','All Data', $datas);
        }

        public function seeder(){
            $result = MahasiswaSeeder::seeder();
            if($result > 0){
                Flasher::setFlash('seeder berhasil', 'ditambahkan', 'success');
                return redirect('/mahasiswa/getAll');
            }else{
                Flasher::setFlash('seeder gagal', 'ditambahkan', 'danger');
                return redirect('/mahasiswa/getAll');
            }
        }


    }