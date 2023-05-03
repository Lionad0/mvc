<?php

class User_model{

    private $table = 'user';
    private $db;

    public function __construct(){
        $this->db = new Database;

    }

    public function user_auth($input){
        $this->db->query("SELECT * FROM $this->table WHERE username =:username");
        $this->db->bind('username', $input['username']);
        $this->db->execute();


        $user = $this->db->single();

        if($user){
            if($user['password'] == $input['password']){
                $_SESSION['admin'] = true;
            }

            return true;
        }else{
            echo "username/password not found";
            return false;
        }
    }
    
}