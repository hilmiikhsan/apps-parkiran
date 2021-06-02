<?php 

class Tempat extends Controller {

    public function index()
    {
        $data['judul'] = 'Daftar Tempat Parkiran';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['tempat'] = $this->model('Tempat_model')->getAllTempat();
        $this->view('templates/header', $data);
        $this->view('tempat/index', $data);
        $this->view('templates/footer');
    }

    public function add()
    {
        $data['judul'] = 'Tambah Data Tempat Parkiran';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('tempat/add', $data);
        $this->view('templates/footer');
    }

    public function addData()
    {
        if( $this->model('Tempat_model')->addDataTempat($_POST) >0 ) {
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
            header('Location: ' . BASEURL . '/tempat');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/tempat');
            exit;
        }
    }

    public function delete($id)
    {
        if( $this->model('Tempat_model')->deleteDataTempat($id) > 0 ) {
            Flasher::setFlash('Berhasil', 'Dihapus', 'success');
            header('Location: ' . BASEURL . '/tempat');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . '/tempat');
            exit;
        }
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Data Tempat Parkiran';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['tempat'] = $this->model('Tempat_model')->getTempatById($id);
        $this->view('templates/header', $data);
        $this->view('tempat/edit', $data);   
        $this->view('templates/footer');
    }

    public function updateTempat()
    {
        if( $this->model('Tempat_model')->updateDataTempat($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'Diubah', 'success');
            header('Location: ' . BASEURL . '/tempat');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Diubah', 'danger');
            header('Location: ' . BASEURL . '/tempat');
            exit;
        }
    }
}