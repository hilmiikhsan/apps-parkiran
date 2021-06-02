<?php 

class About extends Controller {
    public function index()
    {
        $data['judul'] = 'About Me';
        $data['nama'] = $this->model('User_model')->getUser();
        $data['pekerjaan'] = $this->model('User_model')->getJobs();
        $data['umur'] = $this->model('User_model')->getAge();
        $data['followers'] = $this->model('User_model')->getFollower();
        $data['following'] = $this->model('User_model')->getFollowing();
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    
    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}