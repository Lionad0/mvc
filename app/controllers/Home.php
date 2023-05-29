<?php 

class Home extends Controller{
    // protected $data = [];

    public function index(){
        if(isset($_SESSION['username']))
            $data['user_details'] = $this->model('User_model')->getUserDatas($_SESSION['username']);
        else
            $data['user_details'] = NULL;
        
        
        $data['menu'] = $this->model('Menu_model')->getAllMenus();
        $data['title'] = "Home";
        // var_dump($user_details);
        $this->view('template/header', $data);
        $this->view('home/index', $data);
        $this->view('template/footer', $data);
    }

}