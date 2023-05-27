<?php

class Login extends Controller {
    public function index(){
        $data['title'] = "Login";

        // if(isset($_SESSION['admin']))
        //     header("Location: " . BASEURL);

        if(isset($_POST['login']) ){
            if($this->model('User_model')->user_auth($_POST)){
                header("Location: " . BASEURL);
                exit;
            }
        }
        $this->view('template/header', $data);
        $this->view('auth/login', $data);
        $this->view('template/footer');
        
    }

}