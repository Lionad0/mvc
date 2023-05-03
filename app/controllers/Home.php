<?php 

class Home extends Controller{
    // protected $data = [];

    public function index(){
       

        $data['title'] = "Home";
        $this->view('template/header', $data);
        $this->view('home/index');
        $this->view('template/footer');
    }


}