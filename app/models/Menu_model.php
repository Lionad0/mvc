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

    public function uploadImg(){
        $namaFile = $_FILES['gambar_menu']['name'];
        $ukuranFile = $_FILES['gambar_menu']['size'];
        $error = $_FILES['gambar_menu']['error'];
        $tmpName = $_FILES['gambar_menu']['tmp_name'];
        var_dump($_FILES);

        if($error === 4){
            echo "<script>alert('pilih gambar terlebih dahulu')</script>";
            return false;
        }

        $allowedExtnc = ['png', 'jpg', 'jpeg', 'svg'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        // var_dump($ekstensiGambar);die();

        if(!in_array($ekstensiGambar, $allowedExtnc)){
            echo "<script>alert('Upload gambar!')</script>";
            return false;
        }

        if($ukuranFile > 3000000){
            echo "<script>alert('ukuran file terlalu besar (batas 3mb)')</script>";
            return false;
        }
        // echo $namaFile;
        // echo $_SERVER['DOCUMENT_ROOT'];
        
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        
        $uploadLocation = $_SERVER['DOCUMENT_ROOT'] . '/mvc/public/menuImg/' . $namaFileBaru;
        // echo $uploadLocation;
        move_uploaded_file($tmpName, $uploadLocation);

        return $namaFileBaru;
    }

    public function insertMenu($menu){
        $nama = htmlspecialchars($menu['nama_menu']);
        $harga = htmlspecialchars($menu['harga_menu']);
        $ketersediaan = htmlspecialchars($menu['ketersediaan']);
        // var_dump($_FILES);die();
        // $gambar = uploadImg();
        $gambar = $this->uploadImg();
        // echo $gambar; die();
        if(!$gambar){
            echo "<script>alert('gambar belum diupload)')</script>";
            return false;
        }
        
        $query = "INSERT INTO $this->table 
                    VALUES 
                  ('', :nama, :harga, :gambar_menu, :ketersediaan)";
    
        $this->db->query($query);
        $this->db->bind('nama', $nama);
        $this->db->bind('harga', $harga);
        $this->db->bind('ketersediaan', $ketersediaan);
        $this->db->bind('gambar_menu', $gambar);
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
        // var_dump($_FILES['gambar_menu']);
        // var_dump($datas);
        // die();
        // echo $datas['gambar_menu'];
        if($_FILES['gambar_menu']['error'] === 4){
            $gambar = $datas['gambar_lama'];
        }else{
            $gambar = $this->uploadImg();
        }

        // echo $gambar;
        // die();
        $query = "UPDATE $this->table SET nama_menu=:nama, harga_menu=:harga, gambar_menu= :gambar, ketersediaan=:sedia WHERE id_menu=:id";
        $this->db->query($query);
        $this->db->bind('nama', $datas['nama_menu']);
        $this->db->bind('harga', $datas['harga_menu']);
        $this->db->bind('gambar', $gambar);
        $this->db->bind('sedia', $datas['ketersediaan']);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }



}