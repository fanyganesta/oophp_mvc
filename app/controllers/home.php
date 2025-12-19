<?php
    class Home extends Controller{
        public function index(){
            $data = ['nama-user' => "Fany", 'title' => 'Home'];
            $this->view('home/index', $data);
        }
    }