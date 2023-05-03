<?php

class Flasher{

    public static function setFlash($status, $message){
        $_SESSION['flash'] = [
            'status' => $status,
            'message' => $message
        ];     
    }

    public static function flash(){
        if(isset($_SESSION['flash'])){
            // $temp = $_SESSION['flash'];
            echo 'menu ' . $_SESSION['flash']['status'] . ' ' . $_SESSION['flash']['message'] . '!';
            // echo 'menu ' . $_SESSION['flash']['message'];
            unset($_SESSION['flash']);
        }
    }

}