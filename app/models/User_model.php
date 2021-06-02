<?php 

class User_model {
    private $nama = 'M Ikhsan Hilmi',
            $pekerjaan = 'Programmer & Hacker',
            $umur = 20,
            $followers = 1206,
            $following = 1196;
    

    public function getUser()
    {
        return $this->nama;
    }

    public function getJobs()
    {
        return $this->pekerjaan;
    }

    public function getAge()
    {
        return $this->umur;
    }

    public function getFollower()
    {
        return $this->followers;
    }

    public function getFollowing()
    {
        return $this->following;
    }
}