<?php 

class Penjaga_model {
    
    private $table = 'penjaga_parkiran';
    private $db;

    
    public function __construct()
    {   
        $this->db = new Database;
    }

    public function getAllPenjaga()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPenjagaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_penjaga = :id_penjaga');
        $this->db->bind('id_penjaga', $id);
        return $this->db->single();
    }

    public function addDataPenjaga($data)
    {
        $query = "INSERT INTO penjaga_parkiran
                    VALUES
                    (NULL, :nama_penjaga, :alamat_penjaga, :no_telepon)";
            
        $this->db->query($query);
        $this->db->bind('nama_penjaga', $data['nama']);
        $this->db->bind('alamat_penjaga', $data['alamat']);
        $this->db->bind('no_telepon', $data['telepon']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteDataPenjaga($id)
    {
        $query = "DELETE FROM penjaga_parkiran WHERE id_penjaga = :id_penjaga";
        $this->db->query($query);
        $this->db->bind('id_penjaga', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataPenjaga($data)
    {
        $query = "UPDATE penjaga_parkiran SET
                    nama_penjaga = :nama_penjaga,
                    alamat_penjaga = :alamat_penjaga,
                    no_telepon = :no_telepon
                WHERE id_penjaga = :id_penjaga";
            
        $this->db->query($query);
        $this->db->bind('id_penjaga', $data['id_penjaga']);
        $this->db->bind('nama_penjaga', $data['nama_penjaga']);
        $this->db->bind('alamat_penjaga', $data['alamat_penjaga']);
        $this->db->bind('no_telepon', $data['no_telepon']);

        $this->db->execute();
        
        return $this->db->rowCount();
    }
}