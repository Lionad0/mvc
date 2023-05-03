<?php

class Logout{
    public function index(){
        unset($_SESSION['admin']);
        header('Location: ' . BASEURL . '/login');
    
    }
}