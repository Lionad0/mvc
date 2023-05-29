<?php

class Reservation extends Controller{
    private $enc;


    public function __construct(){
        $this->enc = new Encryptor();
    }

    public function index(){
        if(isset($_SESSION['username'])){
            $user_details = $this->model('User_model')->getUserDatas($_SESSION['username']);
            $index['user_details'] = $user_details;
        }

        if(isset($_POST['reservation'])){
            if($this->model('Reservation_model')->insertReservasi($_POST) > 0){
                $reserveID = $this->model('Reservation_model')->getMenuID();
                $orderDetails = [
                  "menu_id" => $_POST['menuID'],
                  "qty" => $_POST['qty'],
                  "harga_menu" => $_POST['price'],
                  "kode_reservasi" => $reserveID    
                ];
                
                // $decryptedID = $this->enc->encrypt($reserveID);
                if($this->model('Orders_model')->insertOrders($orderDetails)){
                    $location = BASEURL . '/reservation/detail/' . $reserveID;
                    echo '<script type="text/javascript">
                            alert("RESERVASI BERHASIL!");
                            location="' . $location . '";
                          </script>';

                }

            }

            // var_dump($orderDetails);
        }
   
        $data['title'] = "Reservation";
        $index['menu'] = $this->model('Menu_model')->getAllmenus();
        $this->view('template/header', $data);
        $this->view('reservation/index', $index);
        $this->view('template/footer', $data);
        
    }



    public function detail($id){ 
        
        // $encryptedID = $enc->encrypt($id);
        // echo $encryptedID;        

        // echo $this->enc->encrypt($id);
        // echo $this->enc->decrypt($id);
        // $encryptedID = openssl_encrypt($id, $cipher, $key, $options, $encryption_iv, $tag);
        // $encryptedID = base64_encode($encryptedID);
        // echo $encryptedID;

        // $decrypted_id = base64_decode($id);
        // $original_plaintext = openssl_decrypt($decrypted_id, $cipher, $key, $options, $encryption_iv, null);
        // echo $original_plaintext;
        // $iv = openssl_random_pseudo_bytes($ivlen);
        // $key = hash('sha256', $secret_key);
        // $iv = substr(hash('sha256', $secret_iv), 0, 16);

        // if (in_array($cipher, openssl_get_cipher_methods()))
        // {
            //     $ciphertext = openssl_encrypt($id, $cipher, $key, 0, $iv);
            //     //store $cipher, $iv, and $tag for decryption later
        //     // $decrypted_id = openssl_decrypt($ciphertext, $cipher, $key, $options=0, $iv, $tag);
        //     echo $ciphertext."\n";
        // }
        // die();
                
        $data_reservation = $this->model('Reservation_model')->getReservasiInfo($id);
        // var_dump($data_reservation);
        $data['title'] = "Reservation Detail";
        $this->view('template/header', $data);
        $this->view('reservation/detail', $data_reservation);
        $this->view('template/footer', $data);

        // var_dump($data_reservation);
    }


}