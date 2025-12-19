<?php
    class Controller {
        public function view($path, $params = []){
            $data = $params;
            require '../app/views/' . $path . '.php';
        }
    }