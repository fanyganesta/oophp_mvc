<?php
    class Controller {
        public function view($path, $title = '', $params = []){
            $datas = $params[1] ?? null;
            require '../app/views/template/header.php';
            require '../app/views/' . $path . '.php';
            require '../app/views/template/footer.php';
        }

        public function model($model){
            require '../app/models/' . $model . '.php';
            return new $model();
        }
    }