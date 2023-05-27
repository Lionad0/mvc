<?php 

class About extends Controller{
    public function index(){
        $data['title'] = "About";
        $this->view("template/header", $data);
        $this->view("about/index");
        $this->view("template/footer", $data);

        
    }
}