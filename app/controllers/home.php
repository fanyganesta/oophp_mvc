<?php
    class Home extends Controller{
        public function index(){
            $datas = ['Home', $this->model('ContohModel')->getAll()];
            $this->view('home/index', $datas);
        }

        public function detail($data){
            $model = $this->model('ContohModel')->getByID($data);
            $data = ['Detail', $model];
            $this->view('home/detail', $data);
        }
    }