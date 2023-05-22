<?php 

class Menu_model{
    private $table = 'menu';
    private $db;

    public function __construct(){
        $this->db = new Database;

    }

    public function getMenuNames(){
        $this->db->query("SELECT nama_menu, id_menu FROM $this->table");
        return $this->db->resultSet();
    }

    public function getAllMenus(){
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->resultSet();
    }

    public function getMenuDetails($id){
        $this->db->query("SELECT * FROM $this->table WHERE id_menu=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function insertMenu($menu){
        $nama = htmlspecialchars($menu['nama_menu']);
        $harga = htmlspecialchars($menu['harga_menu']);
        $ketersediaan = htmlspecialchars($menu['ketersediaan']);

        $query = "INSERT INTO $this->table 
                    VALUES 
                  ('', :nama, :harga, :ketersediaan)";


        $this->db->query($query);
        $this->db->bind('nama', $nama);
        $this->db->bind('harga', $harga);
        $this->db->bind('ketersediaan', $ketersediaan);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteMenu($id){
        $query = "DELETE FROM $this->table WHERE id_menu=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateMenu($datas, $id){
        $query = "UPDATE $this->table SET nama_menu=:nama, harga_menu=:harga, ketersediaan=:sedia WHERE id_menu=:id";
        $this->db->query($query);
        $this->db->bind('nama', $datas['nama_menu']);
        $this->db->bind('harga', $datas['harga_menu']);
        $this->db->bind('sedia', $datas['ketersediaan']);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }



}