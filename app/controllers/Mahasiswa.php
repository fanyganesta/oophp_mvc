<?php 
    class Mahasiswa extends Controller{
        
        public function index(){
            $this->view('mahasiswa/index');
        }

        public function getAll(){
            $cari = $_GET['cari'] ?? '';

            $halamanAktif = max(1, (int)($_GET['halaman'] ?? 1));

            $model = $this->model('MahasiswaModel');

            $allDatas = $model->find($cari);
            
            $limit = 10;

            $jumlahHalaman = ceil(count($allDatas)/$limit);
            
            $datas = $model->getPagination($limit, $halamanAktif, $cari);
            $this->view('mahasiswa/all-data','All Data', compact('datas', 'jumlahHalaman', 'halamanAktif'));
        }

        public function seeder(){

            $result = $this->model('MahasiswaModel')->seeder();

            if($result){
                Flasher::setFlash('seeder berhasil', 'ditambahkan', 'success');
                return redirect('/mahasiswa/getAll');
            }else{
                Flasher::setFlash('seeder gagal', 'ditambahkan', 'danger');
                return redirect('/mahasiswa/getAll');
            }
        }


    }