<?php
    class App{
        protected $controller = 'mahasiswa';
        protected $method = 'index';
        protected $params = [];

        public function __CONSTRUCT(){
            $url = $this->parseUrl();
            
            if(!empty($url)){    
                if( file_exists('../app/controllers/' . $url[0] . '.php')){
                    $this->controller = $url[0];
                }
            }
            unset($url[0]);
            
            require '../app/controllers/' . $this->controller . '.php';
            $class = $this->controller;
            $obj = new $class();

            if( isset($url[1]) && method_exists($obj, $url[1] )){
                $this->method = $url[1];
            }
            unset($url[1]);

            if( !empty($url) ){
                $this->params = array_values($url);
            }

            $method = $this->method;
            $params = $this->params;
            
            call_user_func_array([new $class(), $method], $params);
            
        }

        public function parseUrl(){
            if( isset($_GET['url'] )){

                $url = $_GET['url'];
                $url = rtrim($url, '/');
                $url = explode('/', $url);
                return $url;
            }
        }
    }