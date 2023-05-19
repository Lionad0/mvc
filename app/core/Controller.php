<?php

class Controller{
    public function view($view, $data = []){
        require_once '../app/views/' . $view . '.php';
    }

    public function model($modelName){
        require_once '../app/models/' . $modelName . '.php';
        return new $modelName;
    }

    public function notFoundPage(){
        $this->view('notFound/404');
    }
    
    public function dd($var){
        echo "<pre>";
        var_dump($var);
        echo "</pre>";

        die();
    }

}