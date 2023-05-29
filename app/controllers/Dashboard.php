<?php 

class Dashboard extends Controller{
    public function index(){
        $data['title'] = "Dashboard";
        $data['menu'] = $this->model('Menu_model')->getMenuNames();
        $data['reservation'] = $this->model('Reservation_model')->getAllReservationData();
        
        $this->view('template/header', $data);
        $this->view('dashboard/index', $data);
        $this->view('template/footer');
    }

    public function detail($id){
        $data['title'] = "Detail";
        $data['detail'] = $this->model('Menu_model')->getMenuDetails($id);
        $this->view('template/header', $data);
        $this->view('dashboard/detail', $data);
        $this->view('template/footer');    
    }

    public function add(){
        $data['title'] = "Detail Menu";
        if(isset($_POST['add'])){
            if($this->model('Menu_model')->insertMenu($_POST) > 0){
                Flasher::setFlash('berhasil', 'ditambahkan');
                header('Location: ' . BASEURL . '/dashboard');
                exit;
            }else{
                Flasher::setFlash('gagal', 'ditambahkan');
                header('Location: ' . BASEURL . '/dashboard');
                exit;
            }
        }


        
        $this->view('template/header', $data);
        $this->view('dashboard/add');
        $this->view('template/footer');    

    }

    public function delete($id){
        if($this->model('Menu_model')->deleteMenu($id) > 0){
            Flasher::setFlash('berhasil', 'dihapus');
            header('Location: ' . BASEURL . '/dashboard');
            exit;
        }else{
            Flasher::setFlash('gagal', 'dihapus');
            header('Location: ' . BASEURL . '/dashboard');
            exit;
        }
    }

    public function update($id){
        if(isset($_POST['update'])){
            if($this->model('Menu_model')->updateMenu($_POST, $id) > 0){
                Flasher::setFlash('berhasil', 'diubah');
                header('Location: ' . BASEURL . '/dashboard');
                exit;
            }else{
                Flasher::setFlash('gagal', 'diubah');
                header('Location: ' . BASEURL . '/dashboard');
                exit;
            }
        }

        $data['title'] = 'Ubah Data';
        $data['detail'] = $this->model('Menu_model')->getMenuDetails($id);
        $this->view('template/header', $data);
        $this->view('dashboard/update', $data);
        $this->view('template/footer');    
    }

    public function updateStatus($reserveID){
        if($this->model('Reservation_model')->updateReservationStatus($reserveID) > 0)
            header('Location: ' . BASEURL . '/dashboard');
    }



}
