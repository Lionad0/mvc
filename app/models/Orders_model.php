<?php 

class Orders_model {
    private $table = 'order_details';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function insertOrders($data){
        $menu_id = $data['menu_id'];
        $qty = $data['qty'];
        $price = $data['harga_menu'];
        // $this->db->query("SELECT harga_menu FROM menu WHERE id")
        
        $query = "INSERT INTO $this->table VALUES 
        (:menu_id, :kode_reservasi, :hargaItem, :kuantitas)
        ";

        for($i = 0; $i < sizeof($menu_id); $i++){
            $this->db->query($query);
            $this->db->bind('menu_id', (int) $menu_id[$i]);
            $this->db->bind('kode_reservasi', (int) $data['kode_reservasi']);
            $this->db->bind('hargaItem', (int) $price[$i]);
            $this->db->bind('kuantitas', (int) $qty[$i]);

            $this->db->execute();

            if($this->db->rowCount() <= 0)
                break;
        }
        echo $this->db->rowCount();

        return $this->db->rowCount();
    }

    
}
