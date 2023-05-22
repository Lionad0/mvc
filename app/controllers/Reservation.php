<?php

class Reservation extends Controller{
    public function index(){

        if(isset($_POST['reservation'])){
            if($this->model('Reservation_model')->insertReservasi($_POST) > 0){
                $reserveID = $this->model('Reservation_model')->getMenuID();
                $orderDetails = [
                  "menu_id" => $_POST['menuID'],
                  "qty" => $_POST['qty'],
                  "harga_menu" => $_POST['price'],
                  "kode_reservasi" => $reserveID    
                ];
                
                var_dump($orderDetails);
                $this->model('Orders_model')->insertOrders($orderDetails);

            }

            // var_dump($orderDetails);
        }
        
        
            

        

        $data['title'] = "Reservation";
        $menu = $this->model('Menu_model')->getAllmenus();
        $this->view('template/header', $data);
        $this->view('reservation/index', $menu);
        $this->view('template/footer');
        
    }


}