<?php 

class About extends Controller{
    public function index(){
        $data['title'] = "About";
        $this->view("template/header", $data);
        $this->view("about/index");
        $this->view("template/footer");

        
    }

    public function page($buku = 'untitled', $hal = 0){
        $data['title'] = "About | Page";
        $this->view("template/header", $data);
        $this->view("about/page");
        echo "$buku halaman ke-$hal";
        $this->view("template/footer");

    }

}