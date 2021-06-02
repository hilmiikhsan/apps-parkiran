<?php 

class Tiket extends Controller {

    public function index()
    {
        $data['judul'] = 'Daftar Tiket Parkiran';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['tiket'] = $this->model('Tiket_model')->getAllTiket();
        $this->view('templates/header', $data);
        $this->view('tiket/index', $data);
        $this->view('templates/footer');
    }

    public function add()
    {
        $data['judul'] = 'Tambah Data Tiket Parkiran';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('tiket/add', $data);
        $this->view('templates/footer');
    }

    public function addData()
    {
        if( $this->model('Tiket_model')->addDataTiket($_POST) >0 ) {
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
            header('Location: ' . BASEURL . '/tiket');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/tiket');
            exit;
        }
    }

    public function delete($id)
    {
        if( $this->model('Tiket_model')->deleteDataTiket($id) > 0 ) {
            Flasher::setFlash('Berhasil', 'Dihapus', 'success');
            header('Location: ' . BASEURL . '/tiket');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . '/tiket');
            exit;
        }
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Data Tiket Parkiran';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['tiket'] = $this->model('Tiket_model')->getTiketById($id);
        $this->view('templates/header', $data);
        $this->view('tiket/edit', $data);
        $this->view('templates/footer');
    }

    public function updateTiket()
    {
        if( $this->model('Tiket_model')->updateDataTiket($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'Diubah', 'success');
            header('Location: ' . BASEURL . '/tiket');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Diubah', 'danger');
            header('Location: ' . BASEURL . '/tiket');
            exit;
        }
    }
}