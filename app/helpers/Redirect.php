<?php
    function redirect($path){
        $path = trim($path, '/');
        header("Location: " . BASE_URL . "/" . $path);
        exit;
    }