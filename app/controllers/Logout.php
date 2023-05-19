<?php

class Logout{
    public function index(){
        unset($_SESSION['user_status']);
        unset($_SESSION['username']);
        header('Location: ' . BASEURL);
    
    }
}