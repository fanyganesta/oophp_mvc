<?php
    class Controller {
        public function view($path, $title = '', $params = []){
            extract($params);
            require '../app/views/template/header.php';
            require '../app/views/' . $path . '.php';
            require '../app/views/template/footer.php';
        }

        public function model($model){
            require '../app/models/' . $model . '.php';
            return new $model();
        }
    }