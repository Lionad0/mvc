<?php

class Reservation_model{
    private $table = 'reservasi';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getMenuID(){
        return $this->db->lastInsertID();
    }

    public function insertReservasi($data){
        $nama_depan = $data['firstname'];
        $nama_belakang = $data['lastname'];
        $no_telp = $data['phonenumber'] . ', '. $data['backup_num'];
        $tanggal_reservasi = $data['reservation_date'];

        
        $query = "INSERT INTO $this->table VALUES
            ('', :nama_depan, :nama_belakang, :no_telp, :tanggal_reservasi)     
        ";
        
        $this->db->query($query);
        $this->db->bind('nama_depan', $nama_depan);
        $this->db->bind('nama_belakang', $nama_belakang);
        $this->db->bind('no_telp', $no_telp);
        $this->db->bind('tanggal_reservasi', $tanggal_reservasi);
        $this->db->execute();

        return $this->db->rowCount();
    }




}