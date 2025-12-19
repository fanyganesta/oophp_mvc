<?php
    class Home extends Controller{
        public function index(){
            $datas = ['Home', $this->model('ContohModel')->getAll()];
            $this->view('home/index', $datas);
        }
    }