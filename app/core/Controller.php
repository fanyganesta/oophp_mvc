<?php
    class Controller {
        public function view($path, $params = []){
            $data = $params;
            require '../app/views/template/header.php';
            require '../app/views/' . $path . '.php';
            require '../app/views/template/footer.php';
        }
    }