<?php

class Menu extends Controller{
    public function index(){
        $data['title'] = "Menu";
        $data['menu'] = $this->model('Menu_model')->getMenuNames();
        $this->view('template/header', $data);
        $this->view('menu/index', $data);
        $this->view('template/footer');
    }

    public function detail($id){
        $data['title'] = "Detail Menu";
        $data['detail'] = $this->model('Menu_model')->getMenuDetails($id);
        $this->view('template/header', $data);
        $this->view('menu/detail', $data);
        $this->view('template/footer');    
    }

    public function add(){
        $data['title'] = "Detail Menu";
        if(isset($_POST['add'])){
            if($this->model('Menu_model')->insertMenu($_POST) > 0){
                Flasher::setFlash('berhasil', 'ditambahkan');
                header('Location: ' . BASEURL . '/menu');
                exit;
            }else{
                Flasher::setFlash('gagal', 'ditambahkan');
                header('Location: ' . BASEURL . '/menu');
                exit;
            }
        }


        
        $this->view('template/header', $data);
        $this->view('menu/add');
        $this->view('template/footer');    

    }

    public function delete($id){
        if($this->model('Menu_model')->deleteMenu($id) > 0){
            Flasher::setFlash('berhasil', 'dihapus');
            header('Location: ' . BASEURL . '/menu');
            exit;
        }else{
            Flasher::setFlash('gagal', 'dihapus');
            header('Location: ' . BASEURL . '/menu');
            exit;
        }
    }

    public function update($id){
        if(isset($_POST['update'])){
            if($this->model('Menu_model')->updateMenu($_POST, $id) > 0){
                Flasher::setFlash('berhasil', 'diubah');
                header('Location: ' . BASEURL . '/menu');
                exit;
            }else{
                Flasher::setFlash('gagal', 'diubah');
                header('Location: ' . BASEURL . '/menu');
                exit;
            }
        }

        $data['title'] = 'Ubah Data';
        $data['detail'] = $this->model('Menu_model')->getMenuDetails($id);
        $this->view('template/header', $data);
        $this->view('menu/update', $data);
        $this->view('template/footer');    


    }
}