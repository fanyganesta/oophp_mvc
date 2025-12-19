<?php
    class Home extends Controller{
        public function index(){
            $data = ['nama-user' => "Fany"];
            $this->view('home/index', $data);
        }
    }