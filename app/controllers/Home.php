<?php 

class Home extends Controller{
    // protected $data = [];

    public function index(){
        if(isset($_SESSION['username']))
            $user_details = $this->model('User_model')->getUserDatas($_SESSION['username']);
        else
            $user_details = NULL;
        $data['title'] = "Home";
        // var_dump($user_details);
        $this->view('template/header', $data);
        $this->view('home/index', $user_details);
        $this->view('template/footer');
    }


}