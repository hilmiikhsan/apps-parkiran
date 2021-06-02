<?php 

class Tiket_model {

    private $table = 'tiket_parkiran';
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllTiket()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getTiketById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_penjaga = :id_penjaga');
        $this->db->bind('id_penjaga', $id);
        return $this->db->single();
    }

    public function addDataTiket($data)
    {
        $query = "INSERT INTO tiket_parkiran
                    VALUES
                    (NULL, :kd_tiket, :nama_penjaga, :tempat_parkiran, :waktu_masuk, :jenis_kendaraan, :waktu_keluar, :tarif_parkiran)";
        
        $this->db->query($query);
        $this->db->bind('kd_tiket', $data['kode']);
        $this->db->bind('nama_penjaga', $data['nama']);
        $this->db->bind('tempat_parkiran', $data['tempat']);
        $this->db->bind('waktu_masuk', $data['masuk']);
        $this->db->bind('jenis_kendaraan', $data['jenis']);
        $this->db->bind('waktu_keluar', $data['keluar']);
        $this->db->bind('tarif_parkiran', $data['tarif']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteDataTiket($id)
    {
        $query = "DELETE FROM tiket_parkiran WHERE id_penjaga = :id_penjaga";
        $this->db->query($query);
        $this->db->bind('id_penjaga', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataTiket($data)
    {
        $query = "UPDATE tiket_parkiran SET
                    kd_tiket = :kd_tiket,
                    nama_penjaga = :nama_penjaga,
                    tempat_parkiran = :tempat_parkiran,
                    waktu_masuk = :waktu_masuk,
                    jenis_kendaraan = :jenis_kendaraan,
                    waktu_keluar = :waktu_keluar,
                    tarif_parkiran = :tarif_parkiran
                WHERE id_penjaga = :id_penjaga";
        
        $this->db->query($query);
        $this->db->bind('id_penjaga', $data['id_penjaga']);
        $this->db->bind('kd_tiket', $data['kd_tiket']);
        $this->db->bind('nama_penjaga', $data['nama_penjaga']);
        $this->db->bind('tempat_parkiran', $data['tempat_parkiran']);
        $this->db->bind('waktu_masuk', $data['waktu_masuk']);
        $this->db->bind('jenis_kendaraan', $data['jenis_kendaraan']);
        $this->db->bind('waktu_keluar', $data['waktu_keluar']);
        $this->db->bind('tarif_parkiran', $data['tarif_parkiran']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}