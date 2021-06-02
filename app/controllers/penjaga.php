<?php 

class Penjaga extends Controller {

    public function index()
    {
        $data['judul'] = 'Daftar Penjaga Parkiran';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['penjaga'] = $this->model('Penjaga_model')->getAllPenjaga();
        $this->view('templates/header', $data);
        $this->view('penjaga/index', $data);
        $this->view('templates/footer');
    }

    public function add()
    {
        $data['judul'] = 'Tambah Data Penjaga Parkiran';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('penjaga/add', $data);
        $this->view('templates/footer');
    }

    public function addData()
    {
        if( $this->model('Penjaga_model')->addDataPenjaga($_POST) > 0 ) {
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
            header('Location: ' . BASEURL . '/penjaga');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/penjaga');
            exit;
        }
    }

    public function delete($id)
    {
        if( $this->model('Penjaga_model')->deleteDataPenjaga($id) > 0 ) {
            Flasher::setFlash('Berhasil', 'Dihapus', 'success');
            header('Location: ' . BASEURL . '/penjaga');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . '/penjaga');
            exit;
        }
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Data Penjaga Parkiran';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['penjaga'] = $this->model('Penjaga_model')->getPenjagaById($id);
        $this->view('templates/header', $data);
        $this->view('penjaga/edit', $data);   
        $this->view('templates/footer');
    }

    public function updatePenjaga()
    {
        if( $this->model('Penjaga_model')->updateDataPenjaga($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'Diubah', 'success');
            header('Location: ' . BASEURL . '/penjaga');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Diubah', 'danger');
            header('Location: ' . BASEURL . '/penjaga');
            exit;
        }
    }
}