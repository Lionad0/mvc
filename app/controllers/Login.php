<?php

class Login extends Controller {
    public function index(){
        $data['title'] = "Login";

        // if(isset($_SESSION['admin']))
        //     header("Location: " . BASEURL);

        if(isset($_POST['login']) ){
            if($this->model('User_model')->user_auth($_POST)){
                $location = $_SESSION['user_status'] == 'admin' ? '/dashboard' : '';
                header("Location: " . BASEURL . $location);
                exit;
            }
        }
        $this->view('template/header', $data);
        $this->view('auth/index', $data);
        $this->view('template/footer');
        
    }

}