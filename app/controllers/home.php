<?php
    class Home extends Controller{
        private $model = 'ContohModel';
        public function index(){
            $datas = ['Home', $this->model($this->model)->getAll()];
            $this->view('home/index', $datas);
        }

        public function detail($data){
            $model = $this->model($this->model)->getByID($data);
            $data = ['Detail', $model];
            $this->view('home/detail', $data);
        }

        public function insert(){
            $model = $this->model($this->model)->insert($_POST);
            if($model > 0){
                header('Location: ' . BASE_URL . '/home');
                exit;
            }
        }

        public function hapus($ID){
            $model = $this->model($this->model)->hapus($ID);
            if($model > 0){
                header('Location: ' . BASE_URL . '/home');
                exit;
            }
        }
    }