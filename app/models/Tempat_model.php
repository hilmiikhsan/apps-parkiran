<?php 

class Tempat_model {

    private $table = 'tempat_parkiran';
    private $db;

    
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllTempat()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getTempatById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE no_urut = :no_urut');
        $this->db->bind('no_urut', $id);
        return $this->db->single();
    }

    public function addDataTempat($data)
    {
        $query = "INSERT INTO tempat_parkiran
                    VALUES
                    (NULL, :kode_blok, :jenis_kendaraan, :status_kendaraan)";
        
        $this->db->query($query);
        $this->db->bind('kode_blok', $data['kode']);
        $this->db->bind('jenis_kendaraan', $data['jenis']);
        $this->db->bind('status_kendaraan', $data['status']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteDataTempat($id)
    {
        $query = "DELETE FROM tempat_parkiran WHERE no_urut = :no_urut";
        $this->db->query($query);
        $this->db->bind('no_urut', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataTempat($data)
    {
        $query = "UPDATE tempat_parkiran SET
                    kode_blok = :kode_blok,
                    jenis_kendaraan = :jenis_kendaraan,
                    status_kendaraan = :status_kendaraan
                WHERE no_urut = :no_urut";
        
        $this->db->query($query);
        $this->db->bind('no_urut', $data['no_urut']);
        $this->db->bind('kode_blok', $data['kode_blok']);
        $this->db->bind('jenis_kendaraan', $data['jenis_kendaraan']);
        $this->db->bind('status_kendaraan', $data['status_kendaraan']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}