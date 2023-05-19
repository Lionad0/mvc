<?php

class Reservation extends Controller{
    public function index(){
        $data['title'] = "Reservation";

        $this->view('template/header', $data);
        $this->view('reservation/index');
        $this->view('template/footer');
        
    }


}