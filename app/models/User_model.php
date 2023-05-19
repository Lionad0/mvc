<?php

class User_model{

    private $table = 'user';
    private $db;
    // private $username;

    public function __construct(){
        $this->db = new Database;

    }
    
    // public function getUsername(){
        
    //     return $this->username;
    // }

    public function getUserDatas($username){
        $this->db->query("SELECT * FROM $this->table WHERE username =:username");
        $this->db->bind('username', $username);
        // $this->execute();

        return $this->db->single();
    }

    public function user_auth($input){
        $this->db->query("SELECT * FROM $this->table WHERE username =:username");
        $this->db->bind('username', $input['username']);
        // $this->db->execute();
        // getUserDatas($input['username']);
        $user = $this->db->single();


        if($user){
            if($user['password'] == $input['password']){
                $_SESSION['username'] = $user['username'];
                if($user['status'] == 'admin')
                    $_SESSION['user_status'] = 'admin';
                else
                    $_SESSION['user_status'] = 'user';

                return true;
            }else{
                echo "password salah";
                return false;
            }
        }else{
            echo "username/password not found";
            return false;
        }
    }
    
}