<?php 

class App{
    protected $controller = 'Login';
    protected $method = 'index';
    protected $params = [];

    public function __construct(){
        $url = $this->parseURL();


        $this->auth($url);

        if(file_exists('../app/controllers/' . $url[0] . '.php')){
            $this->controller = $url[0];
        }else{
            $this->controller = '_404';
        }
        
        unset($url[0]);

        if($url == NULL){
            $url[1] = $this->method;
        }
        
        
        


        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;
  
        //method
        
        if(method_exists($this->controller, $url[1])){
            $this->method = $url[1];
        
        }else{
            $this->method = 'notFoundPage';
        } 
        unset($url[1]);

        
        //params
        if(!empty($url)){
            $this->params = array_values($url);
        }
        
        
        call_user_func_array([$this->controller, $this->method], $this->params);
        
        
    }

    public function parseURL(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }else{
            return ["Home", "index"];
        }
    }

    public function auth($url){
        if($url[0] != 'login'){
            if(!isset($_SESSION['admin']))
                header('Location: ' . BASEURL . '/login');
        }
    
    }
}