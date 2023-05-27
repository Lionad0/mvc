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
        $email = $data['email'];

        
        $query = "INSERT INTO $this->table VALUES
            ('', :nama_depan, :nama_belakang, :no_telp, :email, :tanggal_reservasi, 0)     
        ";
        
        $this->db->query($query);
        $this->db->bind('nama_depan', $nama_depan);
        $this->db->bind('nama_belakang', $nama_belakang);
        $this->db->bind('no_telp', $no_telp);
        $this->db->bind('email', $email);
        $this->db->bind('tanggal_reservasi', $tanggal_reservasi);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getReservasiInfo($id){
        $query = "SELECT * FROM $this->table WHERE kode_reservasi = :kode_reservasi";
        $this->db->query($query);
        $this->db->bind('kode_reservasi', $id);
    
        return $this->db->single();

    }

    public function getAllReservationData(){
        $query = "SELECT * FROM $this->table";

    }



}