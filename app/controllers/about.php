<?php
    class About extends Controller {
        public function index(){
            $datas = ['About'];
            $this->view('about/index', $datas);
        }
    }